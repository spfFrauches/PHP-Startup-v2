<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class MainController {
    
    public static function index() {
        
        require 'app/Views/View_Home.php';
        
    }
    
}

