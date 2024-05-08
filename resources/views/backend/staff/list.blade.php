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

              <table class="table border mb-0">
                <thead class="table-light fw-semibold">
                  <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Role</td>
                    <td>Days Per Week</td>
                  </tr>
                </thead>

                @foreach($staff as $item) 

                <tr>
                  <td>{{$item['first_name']}}</td>
                  <td>{{$item['last_name']}}</td>
                  <td>{{$item['email_address']}}</td>
                  <td>{{$item['role']}}</td>
                  <td>{{$item['days_per_week']}}</td>
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
