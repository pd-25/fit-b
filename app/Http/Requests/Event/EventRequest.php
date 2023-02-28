<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'title' => 'required|string',
           'short_desc' => 'required|string|max:300|',
           'description' => 'string|max:2000',
           'venue' => 'required|string|max:300',
           'start_date' => [
                            'date',
                            'after_or_equal:' . date('Y-m-d'), // not 'now' string
                        ],
           'end_date' => [
                            'date',
                            'after_or_equal:start_date',
                        ],

        //    'sub_event_name' => 'required|string|regex:/(^([a-zA-z]+)(\d+)?$)/u',
        //    'sub_event_short_desc' => 'required|alpha_dash|max:300|',
        //    'sub_event_description' => 'required|alpha_dash|max:2000',
        //    'participant_age_limit' => 'required|numeric',
        //    'prize' => 'required|string|max:200',
        //    'second_prize' => 'required|string|max:200',
        //    'third_prize' => 'required|string|max:200',

                        								
        ];
    }
}
