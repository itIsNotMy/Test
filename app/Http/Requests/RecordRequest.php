<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    protected function prepareForValidation()
    {
        if (\Auth::check()){
            $this->merge(['owner_id' => auth()->id()]);
        } else {
            $this->merge(['owner_id' => 2]);
        }
    }

    public function rules()
    {
        return [
            'text' => 'required|max:255',
            'owner_id' => 'required',
        ];
    }
}
