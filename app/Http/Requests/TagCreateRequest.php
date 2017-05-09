<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagCreateRequest extends FormRequest
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
        return [
            //
            'tag' => 'required|unique:tags,tag|min:1|max:4',
            'title' => 'required|min:2|max:8',
            'subtitle' => 'required|min:4|max:12',
            'layout' => 'required',
        ];
    }
    public function messages(){
        return [
            'tag.required'=>'标签不能为空',
            'tag.unique'=>'标签不能重复',
            'tag.min'=>'标签不能少于2个字符',
            'tag.max'=>'标签不能超过4个字符',
            'title.min'=>'标题不能少于3个字符',
            'title.max'=>'标题不能超过8个字符',
            'title.required'=>'标题不能为空',
            'subtitle.required'=>'副标题不能为空',
            'subtitle.min'=>'副标题不能少于4个字符',
            'subtitle.max'=>'副标题不能超过12个字符',
            'layout'=>'模板不能为空'
        ];
    }
}
