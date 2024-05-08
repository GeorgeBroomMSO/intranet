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

              <table class="table border mb-0">
                <thead class="table-dark fw-semibold">
                  <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Full Company Name</td>
                    <td>Payment Terms</td>
                    <td>Charge VAT?</td>
                    <td>Active?</td>
                    <td></td>
                  </tr>
                </thead>

                @foreach($company as $com) 

                  <tr>
                    <td>{{$com['id']}}</td>
                    <td>{{$com['name']}}</td>
                    <td>{{$com['company_full_name']}}</td>
                    <td>{{$com['payment_terms']}} days</td>
                    <td>{{$com['charge_vat']}}</td>
                    <td>{{$com['active']}}</td>
                    <td><a href="/backend/company/{{$com['id']}}" alt="View" title="View"><x-coreui-icon class="list-icon" style="color: #F38D00; height: 22px; width: 22px;" icon="cil-folder-open" /></a></td>
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
