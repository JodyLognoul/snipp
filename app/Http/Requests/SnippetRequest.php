<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Snippet;

class SnippetRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $snippet = Snippet::find($this->snippet);

        switch ($this->method()) {

            case 'POST':
                {
                    return [
                        'description' => 'required|unique:snippets,description',
                        'content' => 'required',
                        'namespace' => 'required',
                        'tags' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'description' => 'required|unique:snippets,description,' . $snippet->id,
                        'content' => 'required',
                        'namespace' => 'required',
                        'tags' => 'required',
                    ];
                }
            default:break;
        }
    }
}
