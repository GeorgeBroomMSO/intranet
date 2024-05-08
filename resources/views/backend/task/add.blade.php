@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><a href="/backend/tasks"><span>All Tasks</span></a></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new task</h2>

             <form action="{{ route('backend.task.add') }}" method="post">
              @csrf

              <div class="mb-3">
                <label for="name">Task Name</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>

              <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="tinyMce" name="description" id="description"></textarea>
              </div>

              <div class="mb-3">
                <label for="company">Company</label>
                <select class="form-select" id="company" name="company" >
                  <option value=""> Please Select</option>
                  @foreach($company as $com) 
                    <option value="{{$com['id']}}">{{$com['name']}}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="project">Project</label>
                <select class="form-select" id="project" name="project" >
                  <option value=""> Please Select</option>
                  @foreach($project as $pro) 
                    <option value="{{$pro['id']}}">{{$pro['name']}}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="budget">Budget</label>
                <select class="form-select" id="budget" name="budget" >
                  <option value=""> Please Select</option>
                  @foreach($budget as $bud) 
                    <option value="{{$bud['id']}}">{{$bud['name']}}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="assignee">Assignee</label>
                <select class="form-select" id="assignee" name="assignee" >
                  <option value=""> Please Select</option>
                  @foreach($staff as $stf) 
                    <option value="{{$stf['id']}}">{{$stf['first_name']}} {{$stf['last_name']}}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status" >
                  <option value="open">Open</option>
                  <option value="in_progress">In Progress</option>
                  <option value="scheduled">Scheduled</option>
                  <option value="testing">Scheduled</option>
                  <option value="with_client">With Client</option>
                  <option value="on_hold">On Hold</option>
                  <option value="completed">Completed</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="start_date">Start Date</label>
                <div data-coreui-locale="en-US" data-coreui-toggle="date-picker">not here</div>
                  
              </div>

              <div class="mb-3">
                <label for="budget">Budget</label>
                <select class="form-select" id="budget" name="budget" >
                  <option value=""> Please Select</option>
                  @foreach($budget as $bud) 
                    <option value="{{$bud['id']}}">{{$bud['budget_name']}}</option>
                  @endforeach
                </select>
              </div>

              


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
