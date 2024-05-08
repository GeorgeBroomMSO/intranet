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

              <table class="table border mb-0">
                <thead class="table-light fw-semibold">
                  <tr>
                    <td>Title</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Job Title</td>
                    <td>Contact Type</td>
                    <td>Company</td>
                  </tr>
                </thead>

                @foreach($contact as $con) 

                <tr>
                  <td>{{$con['title']}}</td>
                  <td>{{$con['first_name']}}</td>
                  <td>{{$con['last_name']}}</td>
                  <td>{{$con['email_address']}}</td>
                  <td>{{$con['job_title']}}</td>
                  <td>{{$con['contact_types']}}</td>
                  <td>{{$con['company']}}</td>
                </tr>

                @endforeach
              </table>
        
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
