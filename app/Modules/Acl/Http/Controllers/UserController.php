<?php

namespace App\Modules\Acl\Http\Controllers;

use App\Modules\Acl\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JavaScript;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//        $client = new \GuzzleHttp\Client([
//            'cookies' =>  new \GuzzleHttp\Cookie\CookieJar,
////            'headers' => [
////                'cookies' => [
////                    'XSRF-TOKEN' => csrf_token(),
////                    'laravel_session' => \Cookie::get('laravel_session'),
////                ]
////            ],
////            'headers' => [
////                'XSRF-TOKEN' => csrf_token(),
////                'laravel_session' => \Cookie::get('laravel_session'),
////            ],
////            'headers' => [
////                'X-CSRF-TOKEN' => csrf_token(),
////                'Accept' => 'application/json',
////                'Authorization' => 'Bearer '.csrf_token(),
////            ],
//        ]);
//        //dd(url('api/users'));
//        dd($client);
//        $r = $client->request('GET', url('api/users'))->getBody();
//
//        //$response = \Guzzle::get(url('api/users'))->getBody();
//        //dd('me');
//        dd($r->getContents());
        return view('acl::users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
