<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $lastname
 * @property string $email
 * @property integer $telephone
 * @property string $password
 * @property string $created
 * @property string $password2
 */

class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, lastname, email, telephone, password,  password2', 'required'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'message'=> 'Don\'t match'),
			array('email', 'email',  'message'=> 'Email address is required'),
			array('telephone', 'length', 'min'=>6,'max'=>12, 'message'=> 'Phone number is required'),
			array('username', 'length', 'min'=>2,'message'=> 'First name is required'),
			array('lastname', 'length', 'min'=>2,'message'=> 'Last name is required' ),
			array( 'password', 'length', 'min'=>6, 'message'=> 'Password is required'),
			array( 'password', 'length', 'min'=>6, 'message'=> 'Confirm password is required'),
			array('id, username, lastname, email, telephone, password, password2 ,created', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'username' => 'Username',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'telephone' => 'Telephone',
			'password' => 'Password',
			'created' => 'Created',
			'password2' => 'Password2',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telephone',$this->telephone);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('password2',$this->password2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave() {
		$this->password = md5('step777', $this->password);
		return parent::beforeSave();
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
