<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\DB;
use App\Menu;

class PageController extends Controller
{
    public function show($slug) {
        $page = Page::where('slug', $slug)->firstOrFail();
        if($page == null) {
            \abort(404, 'Page not found');
        }
        return view('home', compact('page'));
    }

    public function menu() {
//        $menus = DB::table('menus')
//            ->$menus = Menu::where('menus', $menus)->firstOrFail()
//            ->orderBy('sort', 'asc')
//            ->limit(7)
//            ->get();
//        \View::share('menus', $menus);
//        \View::share('settings', \App\Setting::firstOrFail());
//        \View::share('menus', \App\Menu::firstOrFail());
    }
}
