<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Iluminate\Validation\Rule;

class UpdateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    
    {
        $method= $this->method();
        if($method == 'PUT'){
            return [
                'player_id' => [
                    'required',
                    'integer',
                ],	
                'scrap_amount' => [
                    'required',
                    'integer',
                ],
                'water_amount' => [
                    'required',
                    'integer',
                ],
                'water_container_amount' => [
                    'required',
                    'integer',
                ],
    
                
            ];
        }
        else{
            return [
                'player_id' => ['sometimes',
                    'required',
                    'integer',
                ],	
                'scrap_amount' => [
                    'sometimes',
                    'required',
                    'integer',
                ],
                'water_amount' => [
                    'sometimes',
                    'required',
                    'integer',
                ],
                'water_container_amount' => [
                    'sometimes',
                    'required',
                    'integer',
                ],
    
                
            ];
        }
    }
}
