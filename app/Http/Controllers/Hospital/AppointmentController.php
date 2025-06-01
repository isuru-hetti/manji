<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;
use App\Models\DoctorSchedule;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        //get doctors
        $doctors = User::where('role', 'doctor')->get();

        return view('hospital.page.appointment', compact('doctors'));
    }
    public function createAppointment(Request $request)
    {

      try {
        $request->validate([
          'doctor_id' => 'required',
          'date' => 'required',
          'time' => 'required',
          'location' => 'required',
        ]);

        //doctor schedule
        $doctorSchedule = DoctorSchedule::where('doctor_id', $request->doctor_id)->get();


        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->location = $request->location;
        $appointment->save();



        return redirect()->route('appointment.index')->with('success', 'Appointment created successfully.');
      } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
      }
}

}
