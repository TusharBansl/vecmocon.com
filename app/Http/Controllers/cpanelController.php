<?php

namespace vecmocon\Http\Controllers;

use Illuminate\Http\Request;

class cpanelController extends Controller
{
    public function index() {
      return view('cpanel.index',[
        
      ]);
    }
}
