<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;

class SanctionsController extends Controller
{
    public function sanctions(){
    	return View('layouts.sanciones');
    }
    public function config(){
    	return View('layouts.config');
    }
    public function report(){
    	return View('layouts.reports');
    }
}
