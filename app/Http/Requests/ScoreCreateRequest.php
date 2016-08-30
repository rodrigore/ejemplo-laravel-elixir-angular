<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Score;

class ScoreCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // logic
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'email'    => 'required|email',
        ];
    }

    public function persist()
    {
        Score::create([
            'username' => $this->username,
            'score' => 1
        ]);
    }
}
