<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Validator, Input, Redirect, Hash, DB; 
use App\Thread;
use App\Comment;
use File;
use Response;
use Auth;

class CThread extends Controller
{

    public function thread($id)
    {
        $thread = Thread::find($id);
        $com = Comment::where('thread_id', $id) -> get();         
        // dd($thread->user);
        return view('thread', ['thread' => $thread , 'comm' => $com]);
    }
    
    public function formthread()
    {
        return view('formthread');
    }

    public function addThread()
    {
        $var = array(
            'judul'  => 'required',
            'nama'  =>  'required',
            'alamat' =>  'required',
            'phone'  => 'required',
            'keterangan'  =>  'required'
        );

        $valid1 =Validator::make(Input::all(),$var);

        if($valid1->fails())
        {
//          var_dump("gagal");
//          exit();

            // $messages1 = $valid1->messages();

            return Redirect::to('threadAdd')
                ->withErrors($valid1);

        }
        else
        {
            $thread= new Thread;
            $thread->title=Input::get('judul');
            $thread->school_name=Input::get('nama');
            $thread->address=Input::get('alamat');
            $thread->phone=Input::get('phone');
            $thread->description=Input::get('keterangan');
            $thread->user_id=Auth::user()->id;
//            Auth::loginUsingUsername($username);
            if($thread->save()){
                return Redirect::to('home');
            }
            else{
                return Redirect::to('threadAdd')
                ->withErrors($valid1)
                ->withInput(Input::all());
            }

        }
    }

    public function getImages($filename)
    {
        $path = storage_path() .'/img'. '/' . $filename;
        // dd($path);
        if(!File::exists($path)) abort(404);
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
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
