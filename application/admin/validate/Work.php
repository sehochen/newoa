<?php

namespace app\admin\validate;

use think\Validate;

class Work extends Validate
{
    protected $rule = [
        'name'  =>  'unique:work',
    ];

    protected $message = [
        'name.unique'  =>  '用户名存在',
    ];

}