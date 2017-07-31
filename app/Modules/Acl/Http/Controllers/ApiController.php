<?php

namespace App\Modules\Acl\Http\Controllers;

use App\Modules\Acl\Models\User;
use App\Modules\Acl\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{

    public $version = '1.0';
    public $current_user = null;
    public $response = [
        'result' => '',
        'message' => '',
        'version' => '',
    ];

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->current_user = Auth::user();

            return $next($request);
        });

        $this->response = [
            'result' => 'unsuccessful',
            'message' => t('cp__permission__cant', 'У вас нет прав на это действие'),
            'version' => $this->version,
        ];
    }

}
