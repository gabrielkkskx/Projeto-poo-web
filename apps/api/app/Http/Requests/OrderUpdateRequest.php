<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Retorna true para permitir que qualquer usuário faça a requisição de atualização do pedido. Em um cenário real, você pode implementar lógica de autorização mais complexa aqui, como verificar se o usuário tem permissão para atualizar pedidos.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_id' => 'required|exists:customers,id',
            'total'       => 'required|numeric|min:0',
            'status'      => 'required|string',
            'paid_at'     => 'nullable|date',
        ];
    }
}
