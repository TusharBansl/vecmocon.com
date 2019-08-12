<?php

namespace vecmocon\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function home() {
      return view('site.home',[
        
      ]);
    }

    public function eco_bms() {
      return view('site.eco_bms',[
        
      ]);
    }

    public function eco_mc() {
      return view('site.eco_mc',[
        
      ]);
    }
    
    public function eco_ivec() {
      return view('site.eco_ivec',[
        
      ]);
    }
    
    public function eco_services() {
      return view('site.eco_services',[
        
      ]);
    }

    
    public function associates() {
      return view('site.associates',[
        
      ]);
    }
    
    public function team() {
      return view('site.team',[
        
      ]);
    }

    public function contact() {
      return view('site.contact',[
        
      ]);
    }
    
    public function legal() {
      return view('site.legal',[
        
      ]);
    }
}
