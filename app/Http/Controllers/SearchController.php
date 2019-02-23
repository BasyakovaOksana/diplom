<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food_at_diseases;

class SearchController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $food_at_diseases = Food_at_diseases::where('is_active', 1)
              ->where('title', 'LIKE', '%' . $request->get('search') . '%')
              ->orWhere('content', 'LIKE', '%' . $request->get('search') . '%')
                ->get();
        }

        return view('pages.search-page', compact('food_at_diseases'));
    }

    public function email() {

        return view('pages.contacts');
    }

}
