<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Validator, Input, Redirect, Hash, DB;
use App\User;

class CUser extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function getlogout()
    {
        Auth::logout();
        return redirect()->route('home.view');
    }

    public function loginvalidation()
    {
        $var = array(
            'username'  =>  'required',
            'password'  => 'required',
        );
        $validator = Validator::make(Input::all(), $var);
        if($validator->fails())
        {

            return redirect()->route('home.view')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else
        {
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password'),
                'remember' => Input::get('remember'),
            );
            // dd($userdata);
            if (Auth::attempt(array('username'=>$userdata['username'],'password'=>$userdata['password']))){
                // Auth::login($userdata);
                return redirect()->route('home.view');
            }
            else{
                return Redirect::to('/')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
            }
        }
    }

    public function signupvalidate()
    {
        $var = array(
            'name'      => 'required',
            'username'  =>  'required|max:15|unique:users',
            'email'     =>  'required|email|unique:users',
            'password'  => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).+$/',
            'password_confirm'  =>  'required|same:password'
        );

        $valid1 =Validator::make(Input::all(),$var);

        if($valid1->fails())
        {
//          var_dump("gagal");
//          exit();

            // $messages1 = $valid1->messages();

            return Redirect::to('signup')
                ->withErrors($valid1)
                ->withInput(Input::except('password'));

        }
        else
        {
            $user= new User;
            $user->name=Input::get('name');
            $user->username=Input::get('username');
            $user->email=Input::get('email');
            $user->phone=Input::get('phone');
            $user->password=Hash::make(Input::get('password'));
            $user->role_id='2';
//            Auth::loginUsingUsername($username);
            if($user->save()){
                $userdata = array(
                    'username'     => Input::get('username'),
                    'password'  => Input::get('password'),
                    // 'remember' => Input::get('remember'),
                );
                // var_dump($userdata);
                Auth::attempt(array('username'=>$userdata['username'],'password'=>$userdata['password']));
                    // Auth::login($userdata);
                return Redirect::to('home');
                
            }
            else{
                return Redirect::to('signup')
                ->withErrors($valid1)
                ->withInput(Input::except('password'));
            }

        }
    }

    // public function profile()
    // {
    //     return view('profile');
    // }

    public function profileUser($username)
    {
        $user = User::where('username', $username)->first();
        // dd($user->name);
        return view('profile', ['user' => $user]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
