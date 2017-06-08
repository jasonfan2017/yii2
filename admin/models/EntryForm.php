<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name'], 'required','message'=>'不能为空'],
			[['email'], 'required','message'=>'email不能为空'],
            ['email', 'email'],
        ];
    }
}