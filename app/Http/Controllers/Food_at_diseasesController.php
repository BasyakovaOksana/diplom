<?php

namespace App\Http\Controllers;

use App\Food_at_diseases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Food_at_diseasesController extends Controller
{
         
    public function index()
    {
        return view('pages.food_at_diseases', compact('food_at_diseases'));
    }

   public function food_at_diseases($slug)
   {
       $food_at_diseases = Food_at_diseases::where('is_active', 1)->get();
       
       if ($food_at_diseases == null) {
           \abort(404, 'Page not found');
       }
       return view('pages.food_at_diseases', compact('food_at_diseases'));
   }
}
