<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Message;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;
use PhpParser\Comment\Doc;
use Illuminate\Support\Facades\DB;


class AdminPortalController extends Controller
{
    //
     public function index()
    {
        // Get all doctors
         $doctorsAvailablility = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->join('doctor_schedules', 'doctors.user_id', '=', 'doctor_schedules.doctor_id')
        ->select(
            'users.id as doctor_id',
            'users.first_name',
            'users.last_name',
            'doctors.specialization',
            'doctor_schedules.date',
            'doctor_schedules.location',
            'doctor_schedules.start_time',
            'doctor_schedules.end_time'
        )
        ->get();
        $doctors = User::where('role', 'doctor')->get();

        $messages =  Message::all();


        return view('hospital.page.adminPortal', compact('doctors','doctorsAvailablility','messages'));
    }

    public function updateDoctor(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required',
                'specialization' => 'required|string|max:255',
                'description' => 'nullable|string|max:1000',
            ]);

            $doctor = Doctor::where('user_id', $request->input('name'))->firstOrFail();

            if ($doctor) {

                $doctor->user_id = $doctor->id;
                $doctor->specialization = $request->input('specialization');
                $doctor->description = $request->input('description');
                $doctor->save();


            } else {
                return redirect()->back()->with('error', 'This user does not exist.');
            }

            return redirect()->back()->with('success', 'Profile updated successfully.');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the profile.');
        }
    }


     public function doctorSchedule(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required',
                'location' => 'required|string|max:255',
                'date' => 'required|date',
                'start_time' => 'required|date_format:H:i',
                'end_time' => 'required|date_format:H:i',
            ]);

            $user = User::where('id', $request->input('name'))->firstOrFail();

            if ($user) {
               $doctor = new DoctorSchedule();
                $doctor->doctor_id = $user->id;
                $doctor->location = $request->input('location');
                $doctor->date = $request->input('date');
                $doctor->start_time = $request->input('start_time');
                $doctor->end_time = $request->input('end_time');
                $doctor->save();


            } else {
                return redirect()->back()->with('error', 'This user does not exist.');
            }

            return redirect()->back()->with('success', 'Profile updated successfully.');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the profile.');
        }
    }


}
