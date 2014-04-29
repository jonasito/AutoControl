<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode; */

		$user = Administrador::model()->findByAttributes(array('admin_nombre' => $this->username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($user->admin_contraseña==$this->password){
        	$this->errorCode=self::ERROR_NONE;
        	$this->inicializaAdmin($user);
        }

        /*else if ($user->check($this->password))
        {
            $this->errorCode=self::ERROR_NONE;
        }*/
        else
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        return !$this->errorCode;
	}

	public function inicializaAdmin($user) {
      /*$admin = array();
      $admin['rut'] = $user->admin_rut;
      $admin['nombre'] = $user->admin_nombre;
      $admin['est'] = $user->admin_estacionamientos;*/
      Yii::app()->getSession()->add('est', $user->admin_estacionamientos);
      
      Yii::app()->user->setState('nombre',$user->admin_nombre);
      Yii::app()->user->setState('est',$user->admin_estacionamientos);
      Yii::app()->user->setState('rut',$user->admin_rut);
      //$this->addToSession('admin', $admin);
     // return $admin;
  }

}