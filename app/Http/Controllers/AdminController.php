<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addDoctors()
    {
        return view('admin.add_doctors');
    }

    public function postAddDoctors(Request $request)
    {
        $doctor = new Doctor();
        $doctor->doctors_name = $request->doctor_name;
        $doctor->doctors_phone = $request->doctor_phone;
        $doctor->speciality = $request->speciality;
        $doctor->room_number = $request->room_number;
        $image = $doctor->doctor_image = $request->doctor_image;

        if ($image) {
            $image_name = $request->doctor_name . "." . $image->getClientOriginalExtension();
            $doctor->doctor_image = $image_name;
        }
        if ($image && $doctor->save()) {
            $request->doctor_image->move('project_img', $image_name);
        }
        $doctor->save();
        return redirect()->back()->with('doctor_addmessage', 'Doctor Added Successfully');
    }

    public function viewDoctors()
    {
        $doctors = Doctor::all();
        return view('admin.view_doctors', compact('doctors'));
    }

    public function deleteDoctors($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back()->with('delete_message', 'Doctor Removed Successully');
    }
}
