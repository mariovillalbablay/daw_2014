<?php

namespace app\models;
use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
	public $username;
	public $nombre;
	public $apellidos;
	public $password;
	private $_user=false;
	
	public function rules()
	{
		return [
		[['nombre','apellidos','username','password'], 'required'],
		['password','validatePassword'],
		];
	}
	
	public function validatePassword($attribute, $params)
	{
		if (!$this->hasErrors()) {
			$user=$this->getUser();
			
			if (!$user || !$user->validatePassword($this->password)) {
				$this->addError($attribute, 'Nombre o password son incorrectos.');
			}
		}
	}
	
	 public function register()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        } else {
            return false;
        }
    }
	
	public function getUser()
	{
		if ($this->_user === false) {
			$this->_user = User::findByUsername($this->username);
		}
		return $this->_user;
	}
}