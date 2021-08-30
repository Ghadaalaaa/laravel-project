<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        [
            'title'=> 'required |min=3' ,
            'description' =>['required','exists:users_id' ],
            //change error message
            [
            'title.required' => 'ovverride this message' ,
            'title.min' => 'title is a min minimum mesage' ,
            ]
            ];

    }
      
            //
       

public function messages()
{
    return [
        'title' =>  $requestObj->title,
            'description' => $requestObj->description,
            'user_id' =>$requestObj-> post_creator,
    ];
}
}