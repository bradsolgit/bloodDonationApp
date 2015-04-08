<?php

/**
 * This is the model class for table "donation_request".
 *
 * The followings are the available columns in table 'donation_request':
 * @property integer $request_id
 * @property string $name
 * @property integer $area
 * @property integer $city
 * @property integer $state
 * @property integer $number
 * @property string $hospital
 * @property string $date
 * @property integer $lookup_details_lookup_id
 * @property integer $lookup_details_2_lookup_id
 * @property integer $lookup_details_3_lookup_id
 *
 * The followings are the available model relations:
 * @property LookupDetails $area0
 * @property LookupDetails $city0
 * @property LookupDetails $state0
 */
class DonationRequest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DonationRequest the static model class
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
		return 'donation_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, area, city, state, number, hospital, date, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id', 'required'),
			array('area, city, state, number, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id', 'numerical', 'integerOnly'=>true),
			array('name, hospital', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('request_id, name, area, city, state, number, hospital, date, lookup_details_lookup_id, lookup_details_2_lookup_id, lookup_details_3_lookup_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'request_id' => 'Request',
			'name' => 'Name',
			'area' => 'Area',
			'city' => 'City',
			'state' => 'State',
			'number' => 'Number',
			'hospital' => 'Hospital',
			'date' => 'Date',
			'lookup_details_lookup_id' => 'Lookup Details Lookup',
			'lookup_details_2_lookup_id' => 'Lookup Details 2 Lookup',
			'lookup_details_3_lookup_id' => 'Lookup Details 3 Lookup',
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

		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('area',$this->area);
		$criteria->compare('city',$this->city);
		$criteria->compare('state',$this->state);
		$criteria->compare('number',$this->number);
		$criteria->compare('hospital',$this->hospital,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('lookup_details_lookup_id',$this->lookup_details_lookup_id);
		$criteria->compare('lookup_details_2_lookup_id',$this->lookup_details_2_lookup_id);
		$criteria->compare('lookup_details_3_lookup_id',$this->lookup_details_3_lookup_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}