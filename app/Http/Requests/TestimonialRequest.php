<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        $rules = [
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.job_title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];

        }
        return  $rules;
    }
    public function messages()
    {
        $messages = [
        ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.title.required' => trans('requests.title_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('requests.description_required_' . $locale)];
            $messages += [$locale . '.job_title.required' => trans('requests.job_title_required_' . $locale)];
        }
        return $messages;
    }
}
