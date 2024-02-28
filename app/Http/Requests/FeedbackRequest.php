<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FeedbackRequest extends FormRequest
{
    public function rules() : array
    {
        return [
            'message' => [ 'required', 'min:1', 'max:499' ],
            'email' => [ 'sometimes', 'email' ],
        ];
    }
}
