<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $receipe = new Recipe();
        $receipe->user_id = auth()->user()->id;
        $receipe->title = 'veggie soup';
        $receipe->blurb = 'blah blah soup!!';
        $receipe->instructions = 'mmmmmm';        
        $receipe->ingredients = 'soup, vegies';
        $receipe->save();
        
        $recipes = Recipe::where('user_id', auth()->user()->id)->get();
        dd($recipes);
        
        return view('recipes-list');
    }
}
