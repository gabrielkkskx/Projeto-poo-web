<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Retorna true para permitir que qualquer usuário faça a requisição de atualização da categoria. Em um cenário real, você pode implementar lógica de autorização mais complexa aqui, como verificar se o usuário tem permissão para atualizar categorias.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string',
            'description' => 'string|nullable'
        ];
    }
}
