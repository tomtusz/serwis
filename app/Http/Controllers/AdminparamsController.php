<?php

namespace App\Http\Controllers;

use App\Type;
use App\Brand;
use App\Status;
use Illuminate\Http\Request;

class AdminparamsController extends Controller
{
    public function admin()
    {
      $statuses = Status::orderBy('order', 'asc')->get();
      $types = Type::orderBy('name', 'asc')->get();
      $brands = Brand::orderBy('name', 'asc')->get();
      return view('adminparams.adminparams')->with(compact('statuses','types','brands'));
    }
    public function getParam($param)
    {
      if ($param=='status');
    }
}
