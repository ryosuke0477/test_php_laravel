<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index(){
        echo '建物です';
    }
    
    public function room($room){
        echo '部屋番号は'.$room.'です';
    }
}
