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
		return CHtml::listData(UserDetails::model()->findAllByAttributes(
				array(
						'user_id'=>(int)$id
				)), 'user_id','number');
	}
}