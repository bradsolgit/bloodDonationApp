<?php
class Constants{
	static $state_lookup_code = 1;
	static $city_lookup_code = 2;
	static $area_lookup_code = 3;
	static $bloodgrp_lookup_code = 4;
	static $status_list = array('Y'=>'Yes','N'=>'No');
	static $lookup_type_list = array('1'=>'State','2'=>'City', '3'=>'Area','4'=>'Blood Group');
	static $criteria_list_sales = array('1'=>'Groups','2'=>'Shops','3'=>'Vendors');
	static $role_list = array('1'=>'admin','2'=>'general');
	static $purchase_rows = 3;
	static $sales_rows = 3;
	
}