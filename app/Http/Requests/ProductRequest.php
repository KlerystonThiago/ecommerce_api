<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|min:5|max:50',
            'description' => 'required|min:20|max:500',
            'price' => 'required|numeric',
            'highlights' => 'required|integer',
            'voltage' => 'required',
            'brand_id' => 'required|integer',
            'image' => 'required|max:1024'
        ];

        if($this->method() == 'PUT'){
            $rules['image'] = 'nullable|max:1024';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'Insira pelo menos :min caracteres!',
            'name.max' => 'Insira no máximo :max caracteres!',
            'description.required' => 'O campo descrição é obrigatório!',
            'description.min' => 'Insira pelo menos :min caracteres na descrição!',
            'description.max' => 'Insira no máximo :max caracteres na descrição!',
            'price.required' => 'Insira o valor do item!',
            'price.numeric' => 'O campo price precisa ser numérico!',
            'highlights.required' => 'O campo highlights é obrigatório!',
            'highlights.integer' => 'O campo highlights precisa ser inteiro!',
            'voltage.required' => 'O campo voltagem é obrigatório!',
            'brand_id.required' => 'O campo marca é obrigatório!',
            'brand_id.integer' => 'O campo marca precisa ser um número inteiro!',
            'image.required' => 'É necessário selecionar uma imagem para o produto!',
            'image.max' => 'Selecione uma imagem com no máximo 1mb de tamanho!',
        ];
    }
}
