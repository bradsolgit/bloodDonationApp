<?php
class Utilities{
	
	/**
	 *
	 * @return Ambigous <mixed, multitype:unknown mixed , multitype:unknown , string, unknown>
	 */
	static function getLookupTypeList() {
		$lookupList = array();
		$lookup = Constants::$lookup_type_list;
		for($i = 1; $i <= count ( $lookup ); $i ++) {
			$lookupList [$i] ['lookup_id'] = $i;
			$lookupList [$i] ['lookup_name'] = $lookup [$i];
		}
		return CHtml::listData ( $lookupList, 'lookup_id', 'lookup_name' );
	}
	
	/**
	 *
	 * @param unknown $id
	 * @return Ambigous <mixed, multitype:unknown mixed , multitype:unknown , string, unknown>
	 */
	static function getLookupListById($id) {
		return CHtml::listData(EbrLookup::model()->findAllByAttributes(
				array(
						'lookup_number'=>$id
				)), 'lookup_id','lookup_name');
	}
	static function getLookupListByState() {
		return CHtml::listData(LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>1
				)), 'lookup_id','lookup_value');
	}
	static function getLookupListByDistrict($id) {
		return  LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>2,
						'lookup_parent_id'=>(int)$id
				));
	
	}
	static function getLookupListByCity($id) {
		return  LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>5,
						'lookup_parent_id'=>(int)$id
				));
	
	}
static function getLookupListByArea($id) {
		return LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>3,
						'lookup_parent_id'=>(int)$id
				));
	}
static function getLookupListBybloodGroup() {
	return CHtml::listData(LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>4
				)), 'lookup_id','lookup_value');
	}
	static function getMobileNo($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'number'=>$id
				));
	}
	static function getLookupParent($id) {
		return LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_parent_id'=>(int)$id
				));
	}
	static function getLookupType($id) {
		return LookupDetails::model()->findAllByAttributes(
				array(
						'lookup_type_id'=>(int)$id
				));
	}
	static function getState($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'state'=>(int)$id
				));
	}
	static function getDistrict($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'district'=>(int)$id
				));
	}
	static function getCity($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'city'=>(int)$id
				));
	}
	static function getArea($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'area'=>(int)$id
				));
	}
	static function getBloodGroup($id) {
		return UserDetails::model()->findAllByAttributes(
				array(
						'blood_group'=>(int)$id
				));
	}
	static function getSearch($id) {
		$criteria = new CDbCriteria();
			$criteria->compare('area',$this->area);
		$criteria->compare('city',$this->city);
		$criteria->compare('state',$this->state);
		$criteria->compare('district',$this->district);
		$criteria->compare('blood_group',$this->blood_group);
		
		return UserDetails::model()->findAll($criteria);
	}
	
	static function generateRandomString($length = 4){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characters = str_shuffle($characters);
		return substr($characters, 0, $length);
	}
}