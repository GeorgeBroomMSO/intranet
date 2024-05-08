<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Project;
use App\Models\Budget;
use App\Models\Staff;
use App\Models\Task;

class TaskController extends Controller
{

  function show() {
    $data=Task::all();

    $data = DB::table('tasks')
    ->leftJoin('budgets', 'tasks.budget', '=', 'budgets.id')
    ->leftJoin('projects', 'budgets.project', '=', 'projects.id')
    ->leftJoin('companies', 'projects.company', '=', 'companies.id')
    ->select( 'tasks.id', 
              'tasks.name', 
              'tasks.description', 
              'tasks.budget',
              'tasks.assignee',
              'tasks.status',
              'tasks.start_date',
              'tasks.due_date',
              'budgets.name as budget_name', 
              'projects.name as project_name',  
              'companies.name as company_name', 
              'projects.name as project_name')
    ->get();

    return view('backend.task.list',['task'=>$data]);
  }

  function add() {

    $companies=Company::all();
    $projects=Project::all();
    $budgets=Budget::all();
    $staff=Staff::all();

    //check if the post has been submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      
      $task = Task::create([
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

    return view('backend.task.add',['company'=>$companies, 'project'=>$projects, 'budget'=>$budgets, 'staff'=>$staff]);
  }

  function single($id) {
    //$data=Company::all();
    $data = DB::table('budgets')->where('id', '=', $id)->get();
    return view('backend.budget.single',['budget'=>$data]);
  }
}
