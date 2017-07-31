<?php

namespace App\Modules\Acl\Http\Controllers\Api;

use App\Modules\Acl\Models\Permission;
use App\Modules\Acl\Models\User;
use App\Modules\Acl\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PermissionsController extends \App\Modules\Acl\Http\Controllers\ApiController
{

    // TODO change check permission from read-user CRUD to read-permissions CRUD
    // TODO testing
    /**
     * Show all Permissions
     *
     * @return mixed
     */
    public function index(){
        if( ! $this->current_user->can('read-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $perms = Permission::all();
        if(empty($perms)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        $this->response['result'] = 'success';
        $this->response['message'] = '';
        $this->response['data'] = $perms;

        return response()->json($this->response);
    }
    /**
     * Update Permission
     *
     * @param Request $request
     * @param $pid
     * @return mixed
     */
    public function update(Request $request, $pid){
        if( ! $this->current_user->can('update-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $perm = Permission::find($pid);
        if(empty($perm)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if(empty($request)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__empty_request', 'Пустой запрос');
            return response()->json($this->response);
        }

        $perm->name = $request->input('name') ? $request->input('name') : $perm->name;
        $perm->description = $request->input('description') ? $request->input('description') : $perm->description;
        $perm->display_name = $request->input('display_name') ? $request->input('display_name') : $perm->display_name;
        $perm->save();

        $this->response['result'] = 'success';

        return response()->json($this->response);
    }
    /**
     * Add new Permission
     *
     * @param Request $request
     * @return mixed
     */
    public function add(Request $request){
        if( ! $this->current_user->can('create-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        if(empty($request)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__empty_request', 'Пустой запрос');
            return response()->json($this->response);
        }

        $perm = new Permission();
        $perm->name = $request->input('name');
        $perm->description = $request->input('description');
        $perm->display_name = $request->input('display_name');
        $perm->save();

        $this->response['result'] = 'success';
        $this->response['perm'] = Permission::find($perm->id);

        return response()->json($this->response);
    }

    // TODO change check permission from read-user CRUD to read-permissions CRUD
    // TODO testing
    /**
     * Show Permission
     *
     * @param $pid
     * @return mixed
     */
    public function show($pid){
        if( ! $this->current_user->can('update-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $this->response['data'] = Permission::find($pid);
        if(empty($this->response['data'])){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        $this->response['result'] = 'success';
        $this->response['message'] = '';

        return response()->json($this->response);
    }

    // TODO change check permission from read-user CRUD to read-permissions CRUD
    // TODO testing
    /**
     * Delete Permission
     *
     * @param $pid
     * @return mixed
     */
    public function delete($pid){
        if( ! $this->current_user->can('delete-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $perm = Permission::find($pid);
        if(empty($perm)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__perm_delete', 'Право удалено');

        return response()->json($this->response);
    }

}
