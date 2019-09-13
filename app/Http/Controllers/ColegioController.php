<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colegio;

class ColegioController extends Controller
{
    public function index()
    {
        $colegio = Colegio::find(3);
        return $colegio;
    }
    
}
