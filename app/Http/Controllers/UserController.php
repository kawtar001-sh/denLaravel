<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        return $this->middleware('auth');
    }
    public function index()
    {
        $users=User::all();

        return view('users.index',[
            'User' => $users
        ]);
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
        $user= new User();
        $user->name=$request->input('name');
        $user->Phone=$request->input('Phone');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
       
        $user->save();
       

        //take 2 arg the first is variable name nd the second the msg
        session()->flash('succes','Patient Was Created Successfully');

        return redirect('users');
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
        $user=User::find($id);

        return view('users.edit',[
            'User' =>$user

        ]);
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
        $user=User::find($id);
        $user->name =$request->input('name');
        $user->Phone=$request->input('Phone');
        $user->email=$request->input('email');
        $user->save();

        //take 2 arg the first is variable name nd the second the msg
        session()->flash('modify','Patient Was Modifyd Successfully');

        return redirect('users');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('users');
    }
}
