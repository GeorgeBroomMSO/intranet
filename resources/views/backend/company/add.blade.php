@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>All Companies</span></li>

        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              
             <h2>Add a new company</h2>

             <form action="{{ route('backend.company.add') }}" method="post">
              @csrf
              Company Name
              <input type="text" id="name" name="name" class="form-control">
              Full Company Name
              <input type="text" id="company_full_name" name="company_full_name" class="form-control">
              Payment Terms
              <input type="number" id="payment_terms" name="payment_terms" class="form-control" value="30">
              Charge VAT?
              <select id="charge_vat" name="charge_vat" >
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>

              <br>
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
