<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first-name'=>['required'],
            'last-name'=>['required'],
            'gender'=>['required'],
            'email'=>['required', 'email'],
            'tel1'=>['required','numeric','digits_between:0,5'],
            'tel2' => ['required', 'numeric', 'digits_between:0,5'],
            'tel3' => ['required', 'numeric', 'digits_between:0,5'],
            'address'=>['required'],
            'category_id'=>['required'],
            'detail'=>['required','string','max:120']
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $tel1 = $this->input('tel1');
            $tel2 = $this->input('tel2');
            $tel3 = $this->input('tel3');


            if (!$this->filled('tel1') || !$this->filled('tel2') || !$this->filled('tel3')) {
                $validator->errors()->add('tel', '電話番号を入力してください');
                return;
            }

            if (!is_numeric($tel1) || !is_numeric($tel2) || !is_numeric($tel3)) {
                $validator->errors()->add('tel', '電話番号は5桁までの数字で入力してください');
            } elseif (strlen($tel1) > 5 || strlen($tel2) > 5 || strlen($tel3) > 5) {
                $validator->errors()->add('tel', '電話番号は5桁までの数字で入力してください');
            }
        });
    }

    public function messages(){
        return [
            'first-name.required'=>'姓を入力してください',
            'last-name.required' => '名を入力してください',
            'gender.required'=>'性別を選択してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスはメール形式で入力してください',
            'address.required'=>'住所を入力してください',
            'category_id.required'=>'お問い合わせの種類を選択してください',
            'detail.required'=>'お問い合わせ内容を入力してください',
            'detail.max'=>'お問い合わせ内容は120字以内で入力してください',
        ];
    }
}
