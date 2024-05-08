@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>All Contacts</span></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new contact</h2>

             <form action="{{ route('backend.contact.add') }}" method="post">
              @csrf
              Title<br>
              <select name="title" id="title">
                <option value="-">Please Select</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Ms">Ms</option>
                <option value="Dr">Dr</option>
              </select>
              <br><br>
              
              First Name
              <input type="text" id="first_name" name="first_name" class="form-control">

              Last Name
              <input type="text" id="last_name" name="last_name" class="form-control">

              Email Address
              <input type="text" id="email_address" name="email_address" class="form-control">

              Job title
              <input type="text" id="job_title" name="job_title" class="form-control">

              Contact Types<br>
              <input type="checkbox" name="ct" id="ct_main" value="Main"> <label for="ct_main">Main Contact</label>
              <input type="checkbox" name="ct" id="ct_secondary" value="Secondary"> <label for="ct_secondary">Secondary Contact</label>
              <input type="checkbox" name="ct" id="ct_billing" value="Billing"> <label for="ct_billing">Billing Contact</label>
              <input type="checkbox" name="ct" id="ct_other" value="Other"> <label for="ct_other">Other Contact</label>

              <br><br>
              Company
              <select id="company" name="company" >
                <option value=""> Please Select</option>
                @foreach($company as $com) 
                  <option value="{{$com['id']}}">{{$com['name']}}</option>
                @endforeach
              </select>

              <br><br>
              <button class="button">Add</button>
             </form>
        
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
               
            </div>
        </div>
    </div>
</div>
@endsection
