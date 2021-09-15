<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class package extends Controller
{
    public function viewPackage(Request $request) {
        return view('auth.packages');
      }
}
