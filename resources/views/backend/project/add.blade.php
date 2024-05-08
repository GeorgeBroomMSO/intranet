@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>All Projects</span></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new project</h2>

             <form action="{{ route('backend.project.add') }}" method="post">
              @csrf
              Type<br>
              <select name="type" id="type">
                <option value="-">Please Select</option>
                <option value="website_build">Website Build</option>
                <option value="hosting">Hosting</option>
                <option value="support_hours">Support Hours</option>
                <option value="job">Job</option>
                <option value="maintenance_seo">Maintenance/SEO</option>
                <option value="licensing">Licensing</option>
                <option value="email_management">Email Management</option>
                <option value="domain_registration">Domain Registration Fees</option>
                <option value="domain_holding">Domain Holding</option>
              </select>
              <br><br>
              
              Name
              <input type="text" id="name" name="name" class="form-control">

              <br><br>
              Company
              <select id="company" name="company" >
                <option value=""> Please Select</option>
                @foreach($company as $com) 
                  <option value="{{$com['id']}}">{{$com['name']}}</option>
                @endforeach
              </select>

              <br><br>
              Assignee
              <select id="assignee" name="assignee" >
                <option value="">Please Select</option>
                @foreach($assignee as $item) 
                  <option value="{{$item['id']}}">{{$item['first_name']}} {{$item['last_name']}}</option>
                @endforeach
              </select>
              <br><br>

              Status<br>
              <select name="status" id="status">
                <option value="-">Please Select</option>
                <option value="active">Active</option>
                <option value="on_hold">On Hold</option>
                <option value="done">Done</option>
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
