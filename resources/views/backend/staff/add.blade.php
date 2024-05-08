@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>All Staff</span></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new staff member</h2>

             <form action="{{ route('backend.staff.add') }}" method="post">
              @csrf
              
              First Name
              <input type="text" id="first_name" name="first_name" class="form-control">

              Last Name
              <input type="text" id="last_name" name="last_name" class="form-control">

              Role
              <input type="text" id="role" name="role" class="form-control">

              Email Address
              <input type="text" id="email_address" name="email_address" class="form-control">

              Days Per Week
              <input type="text" id="days_per_week" name="days_per_week" class="form-control">

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
