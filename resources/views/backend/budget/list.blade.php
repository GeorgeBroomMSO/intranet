@extends('backend.layouts.app')

@section('breadcrum')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>All Budgets</span></li>

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
                    <td>Company</td>
                    <td>Service</td>
                    <td>Project</td>
                    <td>Amount</td>
                    <td>Time</td>
                    <td>Active?</td>
                    <td></td>
                  </tr>
                </thead>

                @foreach($budget as $item) 

                  <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="/backend/budget/{{$item->id}}" alt="View" title="View">{{$item->name}}</a></td>
                    <td><a href="/backend/company/{{$item->company}}" alt="View" title="View">{{$item->company_name}}</a></td>
                    <td>{{$item->service}}</td>
                    <td>
                      @if(strlen($item->project_name) <= 0)
                        N/A
                      @else
                        <a href="/backend/project/{{$item->project}}" alt="View" title="View">{{$item->project_name}}</a>
                      @endif
                    </td>
                    <td>£{{$item->amount}}</td>
                    <td>{{$item->time}}</td>
                    <td>{{$item->active}}</td>
                    <td><a href="/backend/budget/{{$item->id}}" alt="View" title="View"><x-coreui-icon class="list-icon" style="color: #F38D00; height: 22px; width: 22px;" icon="cil-folder-open" /></a></td>
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
