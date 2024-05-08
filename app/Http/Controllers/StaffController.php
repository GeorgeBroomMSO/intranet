<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
  function show() {
    $data=Staff::all();
    return view('backend.staff.list',['staff'=>$data]);
  }

  function add() {

    //check if the post has been submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //dump($_SERVER['REQUEST_METHOD']);
      //dump(request());

      //checks if the email already exists and if it does it won't be created
      $staff = Staff::firstOrCreate([
          'email_address' => request()->get('email_address')
        ], [
          'first_name' => request()->get('first_name', ''),
          'last_name' => request()->get('last_name', ''),
          'role' => request()->get('role', '-'),
          'days_per_week' => request()->get('days_per_week', '7'),
        ]
      );

    }

    return view('backend.staff.add');
  }
}
