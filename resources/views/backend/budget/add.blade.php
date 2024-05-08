@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><a href="/backend/budgets"><span>All Budgets</span></a></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new budget</h2>

             <form action="{{ route('backend.budget.add') }}" method="post">
              @csrf

              Company<br>
              <select id="company" name="company" >
                <option value=""> Please Select</option>
                @foreach($company as $com) 
                  <option value="{{$com['id']}}">{{$com['name']}}</option>
                @endforeach
              </select>
              <br><br>

              Service<br>
              <select id="service" name="service" >
                <option value="">Please Select</option>
                <option value="project_budget">Website Build Project</option>
                <option value="support_hours">Support Hours</option>
                <option value="maintenance_seo">Maintenance / SEO</option>
                <option value="job">Job</option>
                <option value="hosting">Hosting</option>
                <option value="domain_fees">Domain Fees</option>
                <option value="domain_holding_fees">Domain Holding Fees</option>
                <option value="licensing">Licensing</option>
              </select>
              <br><br>

              Associated Project<br>
              <select id="project" name="project" >
                <option value="0">N/A</option>
                @foreach($project as $pro) 
                  <option value="{{$pro['id']}}">{{$pro['name']}}</option>
                @endforeach
              </select>
              <br><br>

              Budget Name
              <input type="text" id="name" name="name" class="form-control">

              <br>

              Budget Amount (£)<br>
              <input type="number" id="amount" name="amount" class="form-control">

              <br>

              Recurring?<br>
              <select id="recurring" name="recurring" >
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
              <br><br>

              Recurring Frequency?<br>
              <select id="recurring_frequency" name="recurring_frequency" >
                <option value="one-off">One off</option>
                <option value="annually">Annually</option>
                <option value="bi-annually">Bi-anually</option>
                <option value="monthly">Monthly</option>
                <option value="quarterly">Quarterly</option>
              </select>
              <br><br>

              Start Date<br>
              <input type="date" id="start_date" name="start_date" >
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
