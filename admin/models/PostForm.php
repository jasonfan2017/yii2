<?php

namespace app\models;

use Yii;
use yii\base\Model;

class PostForm extends Model
{
    public $username;
    public $password;
	public $sex;

    public function rules()
    {
        return [
            [['username'], 'required','message'=>'不能为空'],
			[['password'], 'required','message'=>'email不能为空'],
			[['sex'], 'required','message'=>'不能为空'],
		];
    }
}