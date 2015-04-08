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
	
}