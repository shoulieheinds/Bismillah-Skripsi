<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'user_id'                    => 'required|integer',
            'title_research'             => 'required|string',
            'purpose'                    => 'required|string',
            'sector-id'                  => 'required|integer',
            'case_study'                 => 'required|string',
            'abstraction'                => 'required|string',
            'guarantor'                  => 'required|string',
            'regency_id'                 => 'required|integer',
            'reqstat_id'                 => 'required|integer',
            //'rescstat_id'                => 'required|integer',
            'proposal_file'              => 'required|string',
            'description_data_requested' => 'required|string',
            //'research_file'              => 'nullable|string'

        ];
    }
}
