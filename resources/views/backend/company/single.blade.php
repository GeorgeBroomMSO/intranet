@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <a href="/backend/dashboard"><span>Home</span></a>
            </li>
            <li class="breadcrumb-item">
              <a href="/backend/companies/list"><span>All Companies</span></a>
            </li>
            <li class="breadcrumb-item active"><span>{{$company[0]->name}}</span></li>
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
                    <td>ID</td>
                    <td>Name</td>
                    <td>Full Company Name</td>
                    <td>Payment Terms</td>
                    <td>Charge VAT?</td>
                    <td>Active?</td>
                  </tr>
                </thead>

                @foreach($company as $item) 

                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->company_full_name}}</td>
                    <td>{{$item->payment_terms}} days</td>
                    <td>{{$item->charge_vat}}</td>
                    <td>{{$item->active}}</td>
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
