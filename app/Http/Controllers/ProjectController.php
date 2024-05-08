<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Staff;
use App\Models\Project;

class ProjectController extends Controller
{

  function show() {
    $data=Project::all();

    //get all projects with company and assignee

    //$data=Project::all();

    $data = DB::table('projects')
    ->leftJoin('companies', 'projects.company', '=', 'companies.id')
    ->leftJoin('staff', 'projects.assignee', '=', 'staff.id')
    ->select('projects.name', 'projects.type', 'projects.status', 'companies.name as company_name', 'staff.first_name', 'staff.last_name')
    ->get();

    //dump($data);

    return view('backend.project.list',['project'=>$data]);
  }

  function add() {

    $companies=Company::all();
    $staff=Staff::all();

    //check if the post has been submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      //checks if the project already exists and if it does it won't be created
      $project = Project::firstOrCreate([
          'name' => request()->get('name')
        ], [
          'type' => request()->get('type', ''),
          'company' => request()->get('company', ''),
          'assignee' => request()->get('assignee', ''),
          'status' => request()->get('status', ''),
        ]
      );

    }

    return view('backend.project.add',['company'=>$companies, 'assignee'=>$staff]);
  }

}
