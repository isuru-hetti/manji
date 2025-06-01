<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;

class DoctorController extends Controller
{
    //
    public function index()
    {

        return view('hospital.page.doctors');
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
