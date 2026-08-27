<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category) //Novo formato de injeção de dependência, o Laravel vai buscar o $category pelo id passado na rota
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, Request $request) //Novo formato de injeção de dependência, o Laravel vai buscar o $category pelo id passado na rota
    {

        $category->name = $request->name ?? $category->name;
        $category->description = $request->description ?? $category->description;

        $category->save();

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $hasProduct = \App\Models\Product::where('category_id', $category->id)->exists();

        if ($hasProduct){
            //422 Unprocessable Entity
            return response()->json([
                'message' => 'Categoria com produtos relacionados',
            ], 404);
        }

        $category->delete();

        //204 No content
        return response()->json([
            'message' => 'Categoria excluida',
        ], 204);
    }
}
