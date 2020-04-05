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
    public function list_get()
    {
        $recipes = Recipe::where('user_id', auth()->user()->id)->get();
        // dd($recipes);
        
        return view('recipe-list', ['recipes' => $recipes]);
    }
    
    // ------------------------------------------------------------------------
    
    public function edit_get($id=null)
    {
        $recipe = Recipe::find($id);
        if (!is_null($recipe))
        {
            // Checks who owns recipe
            if ($recipe->user_id != auth()->user()->id) abort(403);
        }
        else
        {
            $recipe = new Recipe();
        }
        
        return view('recipe-edit', ['recipe' => $recipe]);
    }
    
    // ------------------------------------------------------------------------
    
    public function edit_post($id=null)
    {
        $recipe = Recipe::find($id);
        if (!is_null($recipe))
        {
            // Checks who owns recipe
            if ($recipe->user_id != auth()->user()->id) abort(403);
        }
        else
        {
            $recipe = new Recipe();
            $recipe->user_id = auth()->user()->id;
        }

        $recipe->title = request()->title;
        $recipe->blurb = request()->blurb;
        $recipe->instructions = request()->instructions;        
        $recipe->ingredients = request()->ingredients;
        $recipe->save();
        
        return redirect(route('recipe-list'));
        // dd(request()->all());
    }
}
