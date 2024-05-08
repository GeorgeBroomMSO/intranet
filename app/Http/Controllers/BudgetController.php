<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Project;
use App\Models\Budget;

class BudgetController extends Controller
{

  function show() {
    $data=Budget::all();

    $data = DB::table('budgets')
    ->leftJoin('companies', 'budgets.company', '=', 'companies.id')
    ->leftJoin('projects', 'budgets.project', '=', 'projects.id')
    ->select( 'budgets.id',  
              'budgets.company',
              'companies.name as company_name', 
              'budgets.service',  
              'budgets.project', 
              'projects.name as project_name',
              'budgets.name',
              'budgets.amount',
              'budgets.time',
              'budgets.recurring',
              'budgets.recurring_frequency',
              'budgets.start_date',
              'budgets.active')
    ->get();

    return view('backend.budget.list',['budget'=>$data]);
  }

  function add() {

    $companies=Company::all();
    $projects=Project::all();

    //check if the post has been submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      
      $budget = Budget::create([
        'company' => request()->get('company', ''),
        'service' => request()->get('service', ''),
        'project' => request()->get('project', ''),
        'name' => request()->get('name', ''),
        'amount' => request()->get('amount', ''),
        'recurring' => request()->get('recurring', ''),
        'recurring_frequency' => request()->get('recurring_frequency', ''),
        'start_date' => request()->get('start_date', ''),
      ]);

    }

    return view('backend.budget.add',['company'=>$companies, 'project'=>$projects]);
  }

  function single($id) {
    //$data=Company::all();
    $data = DB::table('budgets')->where('id', '=', $id)->get();
    return view('backend.budget.single',['budget'=>$data]);
  }
}
