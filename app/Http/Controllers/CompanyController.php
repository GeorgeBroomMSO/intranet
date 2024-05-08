<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class CompanyController extends Controller
{

    function show() {
      $data=Company::all();
      return view('backend.company.list',['company'=>$data]);
    }

    function add() {

      //check if the post has been submitted
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        dump($_SERVER['REQUEST_METHOD']);
        dump(request()->get('name',null));

        $company = new Company([
          'name' => request()->get('name', ''),
          'company_full_name' => request()->get('company_full_name', ''),
          'payment_terms' => request()->get('payment_terms', '30'),
          'charge_vat' => request()->get('charge_vat', '1'),
        ]);
        $company->save();
      }

      return view('backend.company.add');
    }

    function single($id) {
      //$data=Company::all();
      $data = DB::table('companies')->where('id', '=', $id)->get();
      return view('backend.company.single',['company'=>$data]);
    }

}
