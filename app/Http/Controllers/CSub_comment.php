<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Validator, Input, Redirect, Hash, DB; 
use App\Sub_comment;
use File;
use Response;
use Auth;


class CSub_comment extends Controller
{
    public function postComment(){

        $var = array(
            'subCom'  => 'required',
        );

        $valid1 =Validator::make(Input::all(),$var);
        // dd($valid1);
        if($valid1->fails())
        {

            return redirect()->route('thread.view')
                ->withErrors($valid1);

        }
        else
        {
            $com= new Sub_comment;
            $com->sub_comment=Input::get('subCom');
            $com->user_id=Auth::user()->id;
            $com->comment_id=Input::get('comId');

            // dd($com);
//            Auth::loginUsingUsername($username);
            if($com->save()){
                return redirect()->route('thread.view' , ['id' => Input::get('idThread')]);
            }
            else{
                return redirect()->route('root.view')
                ->withErrors($valid1)
                ->withInput(Input::all());
            }

        }
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
