<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Contact;

class ContactController extends Controller
{

  function show() {
    $data=Contact::all();
    return view('backend.contact.list',['contact'=>$data]);
  }

  function add() {

    $data=Company::all();

    //check if the post has been submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //dump($_SERVER['REQUEST_METHOD']);
      //dump(request());

      //checks if the email already exists and if it does it won't be created
      $contact = Contact::firstOrCreate([
          'email_address' => request()->get('email_address')
        ], [
          'title' => request()->get('title', ''),
          'first_name' => request()->get('first_name', ''),
          'last_name' => request()->get('last_name', ''),
          'job_title' => request()->get('job_title', ''),
          'contact_types' => request()->get('ct', ''),
          'company' => request()->get('company', ''),
        ]
      );

    }

    return view('backend.contact.add',['company'=>$data]);
  }

}
