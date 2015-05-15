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
/**	private $id;
	public function authenticate()
	{
		$record =UserDetails::model()->find('number = :x_username',array(':x_username'=>$this->username));
		if($record===null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if(($record->password)!==($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		
		else
		{
			$this->id=$record->user_id;
			$this->setState('user_id',$record->user_id);
			$this->setState('myname',$record->name);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
		}
		
		public function getId(){
			return $this->id;
		}
		 */
	public function authenticate()
	{
		$users=array(
				// username => password
				'bradsol'=>'BRAD@1234',
				'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
		$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}