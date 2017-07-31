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

class RoleController extends \App\Modules\Acl\Http\Controllers\ApiController
{

    // TODO change check permission from read-user CRUD to read-roles CRUD
    // TODO testing
    /**
     * Show all roles
     *
     * @return mixed
     */
    public function index(){
        if( ! $this->current_user->can('read-acl') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $roles = Role::with('permissions')->get();
        if(empty($roles)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = '';
        $this->response['data'] = $roles;
        $this->response['available_perms'] = Permission::all();

        return response()->json($this->response);
    }
    /**
     * Add new role
     *
     * @param Request $request
     * @return mixed
     */
    public function add(Request $request){
        if( ! $this->current_user->can('update-acl') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        if(empty($request)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__empty_request', 'Пустой запрос');
            return response()->json($this->response);
        }

        $new_role = new Role();
        $new_role->name = $request->input('name');
        $new_role->description = $request->input('description');
        $new_role->display_name = $request->input('display_name');
        $new_role->save();
        $perms = $request->input('perms');
        if(isset($perms) AND count($perms)>0){
            $new_role->permissions()->attach($perms);
        }

        $this->response['result'] = 'success';
        $this->response['role'] = Role::with('permissions')->find($new_role->id);

        return response()->json($this->response);
    }
    /**
     * Update role
     *
     * @param Request $request
     * @param $rid
     * @return mixed
     */
    public function update(Request $request, $rid){
        if( ! $this->current_user->can('update-acl') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        if(empty($request)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__empty_request', 'Пустой запрос');
            return response()->json($this->response);
        }

        $role = Role::find($rid);
        if(empty($role)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $role->name = $request->input('name') ? $request->input('name') : $role->name;
        $role->description = $request->input('description') ? $request->input('description') : $role->description;
        $role->display_name = $request->input('display_name') ? $request->input('display_name') : $role->display_name;
        $role->save();

        $this->response['result'] = 'success';

        return response()->json($this->response);
    }

    // TODO change check permission from read-user CRUD to read-roles CRUD
    // TODO testing
    /**
     * Show role
     *
     * @param $rid
     * @return mixed
     */
    public function show($rid){
        if( ! $this->current_user->can('update-acl') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $this->response['data'] = Role::with('permissions')->find($rid);
        if(empty($this->response['data'])){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = '';

        return response()->json($this->response);
    }

    // TODO change check permission from read-user CRUD to read-roles CRUD
    // TODO testing
    /**
     * Delete user
     *
     * @param $rid
     * @return mixed
     */
    public function delete($rid){
        if( ! $this->current_user->can('delete-acl') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $role = Role::find($rid);
        if(empty($role)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $role->delete();
        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__role_delete', 'Роль удалена');

        return response()->json($this->response);
    }

    /**
     * Detach role permissions
     *
     * @param $rid
     * @param $pid
     * @return mixed
     */
    public function detachPremission($rid, $pid){

        if( ! $this->current_user->can('update-acl')){
            return response()->json($this->response);
        }
        $role = Role::find($rid);
        if( ! $role){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        if( ! Role::find($pid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        if( ! in_array($pid, $role->permissions->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__role_has_no_permissions', 'У роли нет таких прав');
            return response()->json($this->response);
        }

        $role->permissions()->detach([$pid]);

        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__role_detach_permission', 'У роли удалено разрешение');

        return response()->json($this->response);
    }

    /**
     * Attach role permissions
     *
     * @param $rid
     * @param $pid
     * @return mixed
     */
    public function attachPremission($rid, $pid){

        if( ! $this->current_user->can('update-acl')){
            return response()->json($this->response);
        }

        $role = Role::find($rid);
        if( ! $role){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( ! Role::find($pid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( in_array($pid, $role->permissions->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__role_has_permissions', 'У роли уже есть эти права');
            return response()->json($this->response);
        }

        $role->permissions()->attach([$pid]);
        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__role_attach_permission', 'Роли добавлено разрешение');
        return response()->json($this->response);
    }


}
