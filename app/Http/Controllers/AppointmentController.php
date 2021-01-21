<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct(){
        return $this->middleware('auth');
    }

      public function index(){

       $list_appointments = Appointment:: all();
       return view('appoint.list_appointments' , [
        'appointments' =>$list_appointments]);
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
        
      $appointment = new Appointment();
      $appointment->user_id = Auth::user()->id;
      $appointment->Name = $request->input('name');
      $appointment->EMail = $request->input('email');
      $appointment->Date = $request->input('date');
      $appointment->phone = $request->input('phone');
      $appointment->doctor = $request->input('doctor');
      $appointment->time = $request->input('time');

       $appointment->save();
       return redirect('appointments');
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
        $appointment = Appointment::find($id);  // pour recuperer l'app de la bd
        return view('edit', ['appointment' => $appointment ]);

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
