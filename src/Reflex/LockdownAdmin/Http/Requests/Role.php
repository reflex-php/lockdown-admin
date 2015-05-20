<?php namespace Reflex\LockdownAdmin\Http\Requests;

class Role extends Request
{
    public function rules() {
        return [
            'name'          =>  'required',
            'description'   =>  'required',
        ];
    }

}
