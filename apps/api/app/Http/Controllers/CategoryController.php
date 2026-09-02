<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

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
    public function store(CategoryStoreRequest $request)
    {

        $data = $request -> validated(); // Coleta os dados validados do request, que já passaram pelas regras de validação definidas no CategoryStoreRequest

        $category = Category::create($data); // Cria uma nova instância do modelo Category com os dados validados e salva no banco de dados

        return $category; // Retorna a instância da categoria recém-criada como resposta da requisição
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
    public function update(CategoryUpdateRequest $request, Category $category) //Novo formato de injeção de dependência, o Laravel vai buscar o $category pelo id passado na rota
    {
        $data = $request -> validated(); // Coleta os dados validados do request, que já passaram pelas regras de validação definidas no CategoryUpdateRequest

        $category -> update($data); // Atualiza a instância do modelo Category com os dados validados e salva as alterações no banco de dados

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
