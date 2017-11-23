<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DataTables;
use App\User;

class DataTableController extends Controller
{    
    public function datatable()
    {
        return view('datatable');
    }

    public function getPosts()
    {
		//$test = \DataTables::of(User::query())->make(true);
		//echo '<pre>'; print_r($test); exit;
        return \DataTables::of(User::query())->make(true);
    }
}
