<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = Recipe::whereNotNull('id')->orderBy('id')->paginate('2');
        
        $user_id = (auth()->check()) ? auth()->user()->id : null;
        
        return view('recipe-list', ['recipes' => $recipes, 'owner' => $user_id]);
    }
}
