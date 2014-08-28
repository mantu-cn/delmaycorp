<?php

/**
 * This is the model class for table "tblusers".
 *
 * The followings are the available columns in table 'tblusers':
 * @property integer $my_index
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $password
 * @property integer $user_type
 * @property string $last_login
 * @property integer $bad_logins
 * @property string $bad_login_date
 * @property string $password_changed
 * @property string $activated
 * @property string $password_show
 */
class Tblusers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblusers';
	}

	/**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name, username, email_address, user_type, password', 'required'),
            array('bad_logins', 'numerical', 'integerOnly'=>true),
            array('user_id, username', 'length', 'max'=>100),
            array('password, password_show', 'length', 'max'=>255),
            array('user_type', 'length', 'max'=>20),
            array('password_changed', 'length', 'max'=>3),
            array('activated', 'length', 'max'=>10),
            array('last_login, bad_login_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('my_index, user_id, first_name, last_name, email_address, username, password, user_type, last_login, bad_logins, bad_login_date, password_changed, activated, password_show', 'safe', 'on'=>'search'),
        );
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'my_index' => 'My Index',
			'user_id' => 'User',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email_address' => 'Email Address',
			'username' => 'Username',
			'password' => 'Password',
			'user_type' => 'User Type',
			'last_login' => 'Last Login',
			'bad_logins' => 'Bad Logins',
			'bad_login_date' => 'Bad Login Date',
			'password_changed' => 'Password Changed',
			'activated' => 'Activated',
			'password_show' => 'Password Show',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('my_index',$this->my_index);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_type',$this->user_type);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('bad_logins',$this->bad_logins);
		$criteria->compare('bad_login_date',$this->bad_login_date,true);
		$criteria->compare('password_changed',$this->password_changed,true);
		$criteria->compare('activated',$this->activated,true);
		$criteria->compare('password_show',$this->password_show,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tblusers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
