<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $fullname
 * @property string $password
 * @property string $create_at
 * @property string $last_login
 * @property string $email
 * @property string $address
 * @property integer $approved
 * @property integer $privilege
 *
 * The followings are the available model relations:
 * @property Article[] $articles
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, create_at, last_login, approved, privilege', 'required'),
			array('approved, privilege', 'numerical', 'integerOnly'=>true),
			array('username, email', 'length', 'max'=>100),
			array('fullname, address', 'length', 'max'=>200),
			array('password', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, fullname, password, create_at, last_login, email, address, approved, privilege', 'safe', 'on'=>'search'),
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
			'articles' => array(self::HAS_MANY, 'Article', 'user_id'),
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
			'fullname' => 'Fullname',
			'password' => 'Password',
			'create_at' => 'Create At',
			'last_login' => 'Last Login',
			'email' => 'Email',
			'address' => 'Address',
			'approved' => 'Approved',
			'privilege' => 'Privilege',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('privilege',$this->privilege);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}