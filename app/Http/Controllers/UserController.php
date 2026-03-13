<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

class UserController extends Controller
{
    public function Dashboard()
    {
        if (Auth::check() && Auth::user()->user_type == 'user') {
            return view('dashboard');
        } elseif (Auth::check() && Auth::user()->user_type == 'admin') {
            return view('admin.dashboard');
        } else {
            return redirect('/');
        }
    }

    public function Index()
    {
        $doctors = Doctor::all();
        return view('index', compact('doctors'));
    }
    public function allDoctors()
    {
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));
    }
    public function makeAnAppointment(Request $request)
    {
        $appointments = new Appointment();
        $appointments->full_name = $request->full_name;
        $appointments->email = $request->email;
        $appointments->submission_date = $request->submission_date;
        $appointments->doctor_specialist = $request->doctor_specialist;
        $appointments->phone = $request->phone;
        $appointments->message = $request->message;

        $appointments->save();

        return redirect()->back()->with('appointment_message', 'Your Request Submitted Successfully');
    }
}
