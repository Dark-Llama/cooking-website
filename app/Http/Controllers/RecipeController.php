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
        $this->middleware('auth', ['except' => ['view_get', 'browse_get']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list_get()
    {
        $recipes = Recipe::where('user_id', auth()->user()->id)->paginate(10);
        // dd($recipes);
        
        return view('recipe-list', ['recipes' => $recipes, 'owner' => auth()->user()->id, 'page_title' => 'My Recipes']);
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
        $recipe->healthy = request()->healthy == 'on';
        $recipe->save();
        
        return redirect(route('recipe-list'));
        // dd(request()->all());
    }
    
    // ------------------------------------------------------------------------
    
    public function view_get($id)
    {
        $recipe = Recipe::findOrFail($id);
        
        return view('recipe-view', ['recipe' => $recipe, 'owner' => auth()->check() ? auth()->user()->id : null]);
    }
    
    // ------------------------------------------------------------------------
    
    public function browse_get()
    {
        $healthy_only = request()->has('healthy-only');
        
        if ($healthy_only)
            $filter_link = link_to(route('browser'), 'Clear Filter');
        else
            $filter_link = link_to(route('browser').'?healthy-only=1', 'Healthy Recipes Only');
        
        $recipes_query = Recipe::whereNotNull('id');
        if ($healthy_only) $recipes_query->where('healthy', true);
        $recipes = $recipes_query->orderBy('id')->paginate(10);
        
        $user_id = (auth()->check()) ? auth()->user()->id : null;
        
        return view('recipe-list', ['recipes' => $recipes, 'owner' => $user_id, 'filter_link' => $filter_link, 'page_title' => 'All Recipes']);
    }
}
