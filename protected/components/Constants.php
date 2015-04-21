<?php
class Constants{
	static $state_lookup_code = 1;
	static $district_lookup_code = 2;
	static $area_lookup_code = 3;
	static $bloodgrp_lookup_code = 4;
	static $city_lookup_code = 5;
	static $status_list = array('Y'=>'Yes','N'=>'No');
	static $lookup_type_list = array('1'=>'State','2'=>'District', '3'=>'Area','4'=>'Blood Group','5'=>'City');
	static $criteria_list_sales = array('1'=>'Groups','2'=>'Shops','3'=>'Vendors');
	static $role_list = array('1'=>'admin','2'=>'general');
	static $purchase_rows = 3;
	static $sales_rows = 3;
	static $otp_message = 'WelcometoMaheshFoundationYourOTPis{$OTP}';
	static $sms_url = 'http://reseller.bulksmshyderabad.co.in/api/smsapi.aspx?username=abhibhattad&password=BRAD&to={$number}&from=BHATTD&message={$message}';
}