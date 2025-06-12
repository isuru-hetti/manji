<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $authId = Auth::id(); // get  logged-in user id

    $patients = DB::table('appointments')
        ->join('users', 'appointments.user_id', '=', 'users.id')
        ->where('appointments.doctor_id', $authId)
        ->select(
            'appointments.id as appointment_id',
            'appointments.user_id',
            'appointments.location as location',
            'appointments.date as date',
            'appointments.time as time',
            'appointments.status as status',
            'users.first_name as first_name',
            'users.last_name as last_name'
        )
        ->get();

  return view('hospital.page.doctorPortal', compact('patients'));

    }
    public function update(Request $request)
    {

        try {
            $request->validate([
            'email' => 'required|string|email|max:255',
            'role' => 'required|in:doctor,user',
            ]);

            $user = User::where('email', $request->input('email'))->firstOrFail();

            if($user) {
                $user->title = 'Dr.';
                $user->role = $request->input('role');
                $user->save();

                if($request->input('role') === 'doctor' && !Doctor::where('user_id', $user->id)->exists()) {
                    // Create a new doctor record if it doesn't exist
                    $doctor = new Doctor();
                    $doctor->user_id = $user->id;
                    $doctor->specialization = "";
                    $doctor->description = "";
                    $doctor->save();
                } elseif ($request->input('role') === 'user') {
                    // Delete the doctor record if it exists
                    Doctor::where('user_id', $user->id)->delete();

                }
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

    public function deleteSchedule($h){
        
    }


}
