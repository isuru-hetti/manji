<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    public function index()
    {
//   $doctors = User::where('role', 'doctor')->get();
//   return view('hospital.page.adminPortal', compact('doctors'));
        // return view('hospital.page.doctors');
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


}
