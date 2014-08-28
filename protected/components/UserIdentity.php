<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public $userType = 'Back';
	public function authenticate()
	{    
	    if($this->userType	==	'Back')// This is admin login
	    { 
         	// check if login details exists in database
	    	$user = Tblusers::model()->findByAttributes(array('username'=>$this->username));
	    	//echo $this->password;echo $this->username;die;
			//echo "<pre>";print_r($user);die;
	    	if($user===null)
	    		$this->errorCode	=	self::ERROR_USERNAME_INVALID;
        	//else if(!$user->validatePassword($this->password))
	    	else if($user->password!== $this->password)
	    		$this->errorCode=self::ERROR_PASSWORD_INVALID;
	    	else
	    	{
	    		$this->_id		=	$user->my_index;
	    		$this->username	=	$user->username;

	    		$this->errorCode	=	self::ERROR_NONE;
	    	}

        //return $this->errorCode == self::ERROR_NONE;
	    	return !$this->errorCode;
	    }
	}
	/**
     * @return integer the ID of the user record
     */
    public function getId()
    {
        return $this->_id;
    }
}