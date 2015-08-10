<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
// use Request;

class ArticleRequest extends Request
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
        $rules =  [
            'title' => 'required|min:3|max:100|unique:articles',
            'body' => 'required',
            'published_at' => 'required'
         ];

        if(\Request::is('article/*') && \Request::isMethod('PUT')){
            $rules['title'] = 'required|min:3|max:100|unique:articles,title,' . $this->article;
        }

        return $rules;
    }
}
