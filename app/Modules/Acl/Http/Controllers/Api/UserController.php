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

class UserController extends \App\Modules\Acl\Http\Controllers\ApiController
{
    /**
     * Show all users
     *
     * @return mixed
     */
    public function index(){
        if( ! $this->current_user->can('read-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $users = User::with('roles')->with('permissions')->get();
        if(empty($users)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = '';
        $this->response['data'] = $users;
        $this->response['available_roles'] = Role::all();
        $this->response['available_perms'] = Permission::all();

        return response()->json($this->response);
        //return view('welcome');
    }
    /**
     * Add new user
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

        $new_user = new User();
        // TODO check if name not empty
        $new_user->name = $request->input('name');
        // TODO check if is email
        // TODO check if email exist
        $new_user->email = $request->input('email');
        // TODO check if name not empty
        $new_user->password = Hash::make($request->input('password'));
        $new_user->save();
        $roles = $request->input('roles');
        if(isset($roles) AND count($roles)>0){
            $new_user->roles()->attach($roles);
        }
        $perms = $request->input('perms');
        if(isset($perms) AND count($perms)>0){
            $new_user->permissions()->attach($perms);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = '';
        $this->response['user'] = User::with('roles')->with('permissions')->find($new_user->id);

        return response()->json($this->response);
    }
    /**
     * Update user
     *
     * @param Request $request
     * @param $uid
     * @return mixed
     */
    public function update(Request $request, $uid){
        if( ! $this->current_user->can('create-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }
        if(empty($request)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__empty_request', 'Пустой запрос');
            return response()->json($this->response);
        }

        $user = User::find($uid);
        if(empty($user)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->email = $request->input('email') ? $request->input('email') : $user->email;
        $user->password = $request->input('password') ? Hash::make($request->input('password')) : $user->password;
        $user->save();

        $roles = $request->input('roles');
        $user_roles = $user->roles->pluck('name','id')->toArray();
        if(isset($user_roles) AND count($user_roles)>0){
            foreach ($user_roles as $k=>$v){
                if( ! in_array($k, $roles)){
                    $user->roles()->detach($k);
                }
            }
        }
        if(isset($roles) AND count($roles)>0){
            foreach ($roles as $rid){
                if( ! in_array($rid, array_keys($user_roles))){
                    $user->roles()->attach($rid);
                }
            }
        }

        $perms = $request->input('perms');
        $user_perms = $user->permissions->pluck('name', 'id')->toArray();
        if(isset($user_perms) AND count($user_perms)>0){
            foreach ($user_perms as $k=>$v){
                if( ! in_array($k, $perms) ){
                    $user->permissions()->detach($k);
                }
            }
        }
        if(isset($perms) AND count($perms)>0){
            foreach ($perms as $pid){
                if( ! in_array($pid, array_keys($user_perms)) ){
                    $user->permissions()->attach($pid);
                }
            }
        }
//        if(isset($roles) AND count($roles)>0){
//            $user->roles()->attach($roles);
//        }


        $this->response['result'] = 'success';

        return response()->json($this->response);
    }

    /**
     * Show user
     *
     * @param $uid
     * @return mixed
     */
    public function show($uid){
        if( ! $this->current_user->can('read-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $this->response['data'] = User::with('roles')->with('permissions')->find($uid);
        if(empty($this->response['data'])){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $this->response['result'] = 'success';
        $this->response['message'] = '';

        return response()->json($this->response);
    }
    /**
     * Delete user
     *
     * @param $uid
     * @return mixed
     */

    public function delete($uid){
        if( ! $this->current_user->can('delete-users') ){
            $this->response['result'] = 'error';
            return response()->json($this->response);
        }

        $user = User::find($uid);
        if(empty($user)){
            $this->response['result'] = 'error';
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        $user->delete();
        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__user_delete', 'Пользователь удален');

        return response()->json($this->response);
    }

    /**
     * Detach user roles
     *
     * @param $uid
     * @param $rid
     * @return mixed
     */
    public function detachRole($uid, $rid){
        if( ! $this->current_user->can('update-users')){
            return response()->json($this->response);
        }

        $user = User::find($uid);
        if( ! $user){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( ! Role::find($rid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( ! in_array($rid, $user->roles->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__user_has_no_role', 'У пользователя нет такой роли');
            return response()->json($this->response);
        }

        $user->roles()->detach([$rid]);

        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__user_detach_role', 'У пользователя удалена роль');


        return response()->json($this->response);
    }

    /**
     * Attach user roles
     *
     * @param $uid
     * @param $rid
     * @return mixed
     */
    public function attachRole($uid, $rid){
        if( ! $this->current_user->can('update-users')){
            return response()->json($this->response);
        }

        $user = User::find($uid);
        if( ! $user){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( ! Role::find($rid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( in_array($rid, $user->roles->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__user_has_role', 'У пользователя уже есть эта роль');
            return response()->json($this->response);
        }

        $user->roles()->attach([$rid]);
        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__user_attach_role', 'Пользователю прикреплена роль');
        return response()->json($this->response);
    }

    /**
     * Detach user permissions
     *
     * @param $uid
     * @param $pid
     * @return mixed
     */
    public function detachPremission($uid, $pid){

        if( ! $this->current_user->can('update-users')){
            return response()->json($this->response);
        }
        $user = User::find($uid);
        if( ! $user){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        if( ! Role::find($pid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }
        if( in_array($pid, $user->permissions->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__user_has_no_permissions', 'У пользователя нет таких прав');
            return response()->json($this->response);
        }

        $user = User::find($uid);
        $user->permissions()->detach([$pid]);

        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__user_detach_permission', 'У пользователя удалено разрешение');

        return response()->json($this->response);
    }

    /**
     * Attach user permissions
     *
     * @param $uid
     * @param $pid
     * @return mixed
     */
    public function attachPremission($uid, $pid){

        if( ! $this->current_user->can('update-users')){
            return response()->json($this->response);
        }

        $user = User::find($uid);
        if( ! $user){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( ! Role::find($pid)){
            $this->response['message'] = t('cp__error__not_find', 'Информация не найдена');
            return response()->json($this->response);
        }

        if( in_array($pid, $user->permissions->pluck('id', 'name')->toArray()) ){
            $this->response['message'] = t('cp__error__user_has_permissions', 'У пользователя уже есть эти права');
            return response()->json($this->response);
        }

        $user->permissions()->attach([$pid]);
        $this->response['result'] = 'success';
        $this->response['message'] = t('cp__action__user_attach_permission', 'Пользователю добавлено разрешение');
        return response()->json($this->response);
    }

    /**
     * @param Request $request
     *  'item_value' post param - value.
     * @param $uid - user id
     * @param $name - property name
     *
     * @return json responce
     *  'result' - Result status (success or unsuccessful)
     *  'message' - Response message
     *  'version' - API version
     */
    // TODO test
    public function changeProperty(Request $request, $uid, $name){
        if($this->current_user->can('edit-user')){
            $user = User::find($uid);
            if($name != 'password'){
                $value = $request->item_value;
            }else{
                $value = Hash::make($request->item_value);
            }

            $user->fill([
                $name => $value
            ])->save();


            $this->response['result'] = 'success';
            $this->response['message'] = t('cp__action__user_change', 'Пользователь отредактирован');
        }
        return response()->json($this->response);
    }


}
