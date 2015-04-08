<?php

/**
 * This is the model class for table "user_details".
 *
 * The followings are the available columns in table 'user_details':
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property integer $number
 * @property integer $area
 * @property integer $city
 * @property integer $state
 * @property string $gender
 * @property string $address
 * @property string $dob
 * @property string $password
 * @property string $confirmation_code
 * @property string $donation_status
 * @property integer $lookup_details_lookup_id
 * @property integer $lookup_details_2_lookup_id
 * @property integer $lookup_details_3_lookup_id
 * @property integer $blood_group
 * @property integer $lookup_details_4_lookup_id
 *
 * The followings are the available model relations:
 * @property LookupDetails $area0
 * @property LookupDetails $city0
 * @property LookupDetails $state0
 * @property LookupDetails $bloodGroup
 */
class UserDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserDetails the static model class
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
		return 'user_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, number, area, city, state, password, confirmation_code, donation_status, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id, blood_group, lookup_details_4_lookup_id', 'required'),
			array('number, area, city, state, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id, blood_group, lookup_details_4_lookup_id', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>100),
			array('gender, donation_status', 'length', 'max'=>1),
			array('address', 'length', 'max'=>255),
			array('password', 'length', 'max'=>10),
			array('confirmation_code', 'length', 'max'=>20),
			array('dob', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, name, email, number, area, city, state, gender, address, dob, password, confirmation_code, donation_status, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id, blood_group, lookup_details_4_lookup_id', 'safe', 'on'=>'search'),
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
			'area0' => array(self::BELONGS_TO, 'LookupDetails', 'area'),
			'city0' => array(self::BELONGS_TO, 'LookupDetails', 'city'),
			'state0' => array(self::BELONGS_TO, 'LookupDetails', 'state'),
			'bloodGroup' => array(self::BELONGS_TO, 'LookupDetails', 'blood_group'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'name' => 'Name',
			'email' => 'Email',
			'number' => 'Number',
			'area' => 'Area',
			'city' => 'City',
			'state' => 'State',
			'gender' => 'Gender',
			'address' => 'Address',
			'dob' => 'Dob',
			'password' => 'Password',
			'confirmation_code' => 'Confirmation Code',
			'donation_status' => 'Donation Status',
			'lookup_details_lookup_id' => 'Lookup Details Lookup',
			'lookup_details_2_lookup_id' => 'Lookup Details 2 Lookup',
			'lookup_details_3_lookup_id' => 'Lookup Details 3 Lookup',
			'blood_group' => 'Blood Group',
			'lookup_details_4_lookup_id' => 'Lookup Details 4 Lookup',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('area',$this->area);
		$criteria->compare('city',$this->city);
		$criteria->compare('state',$this->state);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('confirmation_code',$this->confirmation_code,true);
		$criteria->compare('donation_status',$this->donation_status,true);
		$criteria->compare('lookup_details_lookup_id',$this->lookup_details_lookup_id);
		$criteria->compare('lookup_details_2_lookup_id',$this->lookup_details_2_lookup_id);
		$criteria->compare('lookup_details_3_lookup_id',$this->lookup_details_3_lookup_id);
		$criteria->compare('blood_group',$this->blood_group);
		$criteria->compare('lookup_details_4_lookup_id',$this->lookup_details_4_lookup_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}