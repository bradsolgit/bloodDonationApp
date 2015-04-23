<?php
class ApiController extends Controller {
	// Members
	/**
	 * Key which has to be in HTTP USERNAME and PASSWORD headers
	 */
	Const APPLICATION_ID = 'ASCCPE';
	
	/**
	 * Default response format
	 * either 'json' or 'xml'
	 */
	private $format = 'json';
	/**
	 *
	 * @return array action filters
	 */
	public function filters() {
		return array ();
	}
	
	// Actions
	public function actionmodelList() {
		// Get the respective model instance
		switch ($_GET ['model']) {
			case 'userDetails' :
				$models = UserDetails::model ()->findAll ();
				break;
			case 'donationRequest' :
				$models = DonationRequest::model ()->findAll ();
				break;
			case 'lookupDetails' :
				$models = LookupDetails::model ()->findAll ();
				break;
			default :
				// Model not implemented error
				$this->_sendResponse ( 501, sprintf ( 'Error: Mode <b>list</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		// Did we get some results?
		if (empty ( $models )) {
			// No
			$this->_sendResponse ( 200, sprintf ( 'No items where found for model <b>%s</b>', $_GET ['model'] ) );
		} else {
			// Prepare response
			$rows = array ();
			foreach ( $models as $model )
				$rows [] = $model->attributes;
				// Send the response
			$this->_sendResponse ( 200, CJSON::encode ( $rows ) );
		}
	}
	public function actionmodelId() {
		// Check if id was submitted via GET
		if (! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		
		switch ($_GET ['model']) {
			// Find respective model
			case 'userDetails' :
				$model = UserDetails::model ()->findByPk ( $_GET ['id'] );
				break;
			case 'donationRequest' :
				$model = DonationRequest::model ()->findByPk ( $_GET ['id'] );
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		// Did we find the requested model? If not, raise an error
		if (is_null ( $model ))
			$this->_sendResponse ( 404, 'No Item found with id ' . $_GET ['id'] );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
	}
	
	public function actionuserDetails(){
		if (! isset ( $_GET ['property'] ) && ! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		switch ($_GET ['property']) {
			// Find respective model
			case 'number' :
				$model = Utilities::getMobileNo($_GET ['id']);
				break;
			case 'user_id' :
				$model = new UserDetails;
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is  not  implemented for model <b>%s</b>', $_GET ['name'] ) );
				Yii::app ()->end ();
		}
		// Did we find the requested model? If not, raise an error
		if (is_null ( $model ))
			$this->_sendResponse ( 404, 'No Item found with id ' . $_GET ['id'] );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
	}
	
	public function actionmodelNameId() {
		// Check if id was submitted via GET
		if (! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		switch ($_GET ['model']) {
			// Find respective model
			case 'userDetails' :
				switch ($_GET ['name']) {
					// Find respective model
					
					case 'mobileno' :
						$model = Utilities::getMobileNo ( $_GET ['id'] );
						break;
					case 'state' :
						$model = Utilities::getState ( $_GET ['id'] );
						break;
					case 'district' :
						$model = Utilities::getDistrict ( $_GET ['id'] );
						break;
					case 'city' :
						$model = Utilities::getCity ( $_GET ['id'] );
						break;
					case 'area' :
						$model = Utilities::getArea ( $_GET ['id'] );
						break;
					case 'bloodgroup' :
						$model = Utilities::getBloodGroup ( $_GET ['id'] );
						break;
					case 'password' :
						$message = "Invalid";
						$number = $_POST ['number'];
						$password = $_POST ['password'];
						$user = Utilities::getMobileNo ( $number );
						if ($user->password == $password) {
							$message = "Valid";
						}
						$this->_sendResponse ( 200, CJSON::encode ( $message ) );
					case 'otp' :
						$model = new UserDetails ();
						break;
					
					default :
						$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is not implemented for model <b>%s</b>', $_GET ['name'] ) );
						Yii::app ()->end ();
				}
				break;
			case 'lookupDetails' :
				switch ($_GET ['name']) {
					// Find respective model
					case 'city' :
						$model = Utilities::getLookupListByCity ( $_GET ['id'] );
						break;
					case 'district' :
						$model = Utilities::getLookupListByDistrict ( $_GET ['id'] );
						break;
					case 'area' :
						$model = Utilities::getLookupListByArea ( $_GET ['id'] );
						break;
					
					case 'lookupParent' :
						$model = Utilities::getLookupParent ( $_GET ['id'] );
						break;
					case 'lookupType' :
						$model = Utilities::getLookupType ( $_GET ['id'] );
						break;
					default :
						$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is not implemented for model <b>%s</b>', $_GET ['name'] ) );
						Yii::app ()->end ();
				}
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		
		// Did we find the requested model? If not, raise an error
		if (is_null ( $model ))
			$this->_sendResponse ( 404, 'No Item found with id ' . $_GET ['id'] );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
	}
	
	public function actionlookupTypeList() {
		if (! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		
		$model = Utilities::getLookupType ( $_GET ['id'] );
		// Did we find the requested model? If not, raise an error
		if (is_null ( $model ))
			$this->_sendResponse ( 404, 'No Item found with id ' . $_GET ['id'] );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
	}
	
	public function actionlookupIdList() {
		if (! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		
		switch ($_GET ['name']) {
			// Find respective model
			case 'city' :
				$model = Utilities::getLookupListByCity ( $_GET ['id'] );
				break;
			case 'district' :
				$model = Utilities::getLookupListByDistrict ( $_GET ['id'] );
				break;
			case 'area' :
				$model = Utilities::getLookupListByArea ( $_GET ['id'] );
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>view</b> is not implemented for model <b>%s</b>', $_GET ['name'] ) );
				Yii::app ()->end ();
		}
			
		//$model = Utilities::getLookupType ( $_GET ['id'] );
		// Did we find the requested model? If not, raise an error
		if (is_null ( $model ))
			$this->_sendResponse ( 404, 'No Item found with id ' . $_GET ['id'] );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
	}
	
	public function actionsearchApi(){
		
		switch ($_GET ['type']) {
			
			case 'donationRequest' :
				$state = $_POST ['state'];
				$city = $_POST ['city'];
				$area =$_POST ['area'];
				$district = $_POST ['district'];
				$blood_group = $_POST ['blood_group'];
				$criteria = new CDbCriteria ();
				$criteria->compare ( 'area', $area );
				$criteria->compare ( 'city', $city );
				$criteria->compare ( 'state', $state );
				$criteria->compare ( 'district', $district );
				$criteria->compare ( 'blood_group', $blood_group );
			$models = array();
			$srchResults = DonationRequest::model ()->findAll ( $criteria );
			foreach ($srchResults as $i=>$model){
				$tempModel = $model;
				$tempModel->district = $model->district0->lookup_value;
				$tempModel->city = $model->city0->lookup_value;
				$tempModel->state = $model->state0->lookup_value;
				$tempModel->area = $model->area0->lookup_value;
				$tempModel->blood_group = $model->bloodGroup->lookup_value;
				$models[$i] = $tempModel;
			}
			break;
			case 'donors' :
				$state = $_POST ['state'];
				$city = $_POST ['city'];
				$area =$_POST ['area'];
				$district = $_POST ['district'];
				$blood_group = $_POST ['blood_group'];
				$criteria = new CDbCriteria ();
				$criteria->compare ( 'area', $area );
				$criteria->compare ( 'city', $city );
				$criteria->compare ( 'state', $state );
				$criteria->compare ( 'district', $district );
				$criteria->compare ( 'blood_group', $blood_group );
				$models = array();
				$srchResults = UserDetails::model ()->findAll ( $criteria );
				foreach ($srchResults as $i=>$model){
					$tempModel = $model;
					$tempModel->district = $model->district0->lookup_value;
					$tempModel->city = $model->city0->lookup_value;
					$tempModel->state = $model->state0->lookup_value;
					$tempModel->area = $model->area0->lookup_value;
					$tempModel->blood_group = $model->bloodGroup->lookup_value;
					$models[$i] = $tempModel;
				}
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>create</b> is not implemented for model <b>%s</b>', $_GET ['type'] ) );
				Yii::app ()->end ();
			
		}
		
		if (is_null ( $models ))
			$this->_sendResponse ( 404, 'No Item found ' );
		else
			$this->_sendResponse ( 200, CJSON::encode ( $models ) );
	}
	
	public function actionsendOTP(){
		if (! isset ( $_POST ['newnumber']))
			$this->_sendResponse ( 500, 'Error: Parameter is missing' );
		
		$newNumber = $_POST ['newnumber'];
		$oldNumber = $_POST ['oldnumber'];
		
		$user = UserDetails::model()->findByAttributes ( array (
				'number' => $newNumber
		) );
		
		if (empty($user)) {
	$user = UserDetails::model()->findByAttributes ( array (
				'number' => $oldNumber
) );
			$otp = Utilities::generateRandomString ();
			$user->confirmation_code = $otp;
			$user->save ();
			
			$payload = file_get_contents (Utilities::getSMSURL($otp, $newNumber));
				
			$message = "Valid";
		} else {
			$message = "Invalid";
		}
		$this->_sendResponse ( 200, CJSON::encode ( $message ) );
	}
	
	public function actionvalidateApi() {
		$message = "Invalid";
		
		switch ($_GET ['validate']) {
			// Get an instance of the respective model
			case 'password' :
				if (! isset ( $_POST ['number'] ) && ! isset ( $_POST ['lgpassword'] ))
					$this->_sendResponse ( 500, 'Error: Parameter is missing' );
				
				$number = $_POST ['number'];
				$password = $_POST ['lgpassword'];
				
				$user = UserDetails::model ()->findByAttributes ( array (
						'number' => $number,
						'password' => $password 
				) );
				if (! empty ( $user )) {
					$message = "Valid";
				}
				break;
			
			
			case 'validatestatus' :
				if (! isset ( $_POST ['user_id'] ))
					$this->_sendResponse ( 500, 'Error: Parameter is missing' );
					
				$user_id = $_POST ['user_id'];
				
				// $user_id =5;
				$user = UserDetails::model ()->findByAttributes ( array (
						'user_id' => $user_id 
				) );
				
				if (! empty ( $user )) {
					
					$user->validate_Status = "Y";
					if($user->save())
					$message = "Valid";
				}
				break;
			case 'captcha' :
				if (! isset ( $_POST ['captcha'] ))
					$this->_sendResponse ( 500, 'Error: Parameter is missing' );
				
					if (Utilities::rpHash($_POST ['captcha']) == $_POST['hash']) {
						$message = "Valid";
					}
				$this->_sendResponse ( 200, CJSON::encode ( $message ) );
				break;
			case 'validationcode' :
				$user_id = $_POST ['user_id'];
				
				// $user_id =5;
				$user1 = UserDetails::model ()->findByAttributes ( array (
						'user_id' => $user_id 
				) );
				if ($user1) {
					$message = $user1->confirmation_code;
				}
				break;
			case 'validateotp' :
				$otp = $_POST ['otp'];
				$number = $_POST ['number'];
				$user = UserDetails::model ()->findByAttributes ( array (
				'number' =>$number,
				'confirmation_code' =>$otp
		) );
			
				if (!empty($user)) {
					$message = "Valid";
$this->_sendResponse ( 200, CJSON::encode ( $message ) );
				}
				
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>create</b> is not implemented for model <b>%s</b>', $_GET ['validate'] ) );
				Yii::app ()->end ();
		}
		$this->_sendResponse ( 200, CJSON::encode ( $message ) );
	}
	
	public function actionCreate() {
		switch ($_GET ['model']) {
			// Get an instance of the respective model
			case 'userDetails' :
				$model = new UserDetails ();
				break;
				case 'donationRequest' :
					$model = new DonationRequest ();
					break;
					case 'donationRequest1' :
						$model = new DonationRequest ();
						break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>create</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		// Try to assign POST values to attributes
		foreach ( $_POST as $var => $value ) {
			// Does the model have this attribute? If not raise an error
			if ($model->hasAttribute ( $var ))
				$model->$var = $value;
			// else
			// $this->_sendResponse(500,
			// sprintf('Parameter <b>%s</b> is not allowed for model <b>%s</b>', $var,
			// $_GET['model']) );
		}
		// Try to save the model
		if ($_GET ['model'] == "userDetails") {
			
			
			$number = $model->number;
			$otp = Utilities::generateRandomString ();
			$model->confirmation_code = $otp;
			if ($model->save ()) {
				$model->password="";
				$payload = file_get_contents ( Utilities::getSMSURL($otp, $number));
				
				
				$this->_sendResponse ( 200, CJSON::encode ( $model ) );
				} else {
					// Errors occurred
					$msg = "";
					$msg .= "<ul>";
					foreach ( $model->errors as $attribute => $attr_errors ) {
						foreach ( $attr_errors as $attr_error )
							$msg .= "<li>$attr_error</li>";
					}
					$msg .= "</ul>";
					$this->_sendResponse ( 500, $msg );
				}
			
		}
		elseif ($_GET ['model'] == "donationRequest1") {
				
				
			
			if ($model->save ()) {
				
		
		
				$this->_sendResponse ( 200, CJSON::encode ( $model ) );
			} else {
				// Errors occurred
				$msg = "";
				$msg .= "<ul>";
				foreach ( $model->errors as $attribute => $attr_errors ) {
					foreach ( $attr_errors as $attr_error )
						$msg .= "<li>$attr_error</li>";
				}
				$msg .= "</ul>";
				$this->_sendResponse ( 500, $msg );
			}
				
		}
		elseif ($_GET ['model'] == "donationRequest") {
			
				
			$number = $model->number;
			$otp = Utilities::generateRandomString ();
			
			$model->confirmatiocode=$otp;
			
			if($payload = file_get_contents ( Utilities::getSMSURL($otp, $number)))
			{
			
		
				
				$this->_sendResponse ( 200, CJSON::encode ( $model ) );
			}else {
					// Errors occurred
					$msg = "";
					$msg .= "<ul>";
					foreach ( $model->errors as $attribute => $attr_errors ) {
						foreach ( $attr_errors as $attr_error )
							$msg .= "<li>$attr_error</li>";
					}
					$msg .= "</ul>";
					$this->_sendResponse ( 500, $msg );
				}
			
			
		}
	}
	
	
	
	public function actionrequestCreate() {
		switch ($_GET ['model']) {
			// Get an instance of the respective model
			case 'donationRequest' :
				$model = new DonationRequest ();
				break;
			
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>create</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		// Try to assign POST values to attributes
		foreach ( $_POST as $var => $value ) {
			// Does the model have this attribute? If not raise an error
			if ($model->hasAttribute ( $var ))
				$model->$var = $value;
			// else
			// $this->_sendResponse(500,
			// sprintf('Parameter <b>%s</b> is not allowed for model <b>%s</b>', $var,
			// $_GET['model']) );
		}
		// Try to save the model
		$model->confirmation_code = '0000';
		
		$number = $model->number;
		$message = Utilities::generateRandomString ();
		$model->confirmation_code = $message;
		// Try to save the model
		if ($model->save ()) {
			$model->password = "";
			$payload = file_get_contents (Utilities::getSMSURL($otp, $number));
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
		} else {
			// Errors occurred
			$msg = "<h1>Error</h1>";
			$msg .= sprintf ( "Couldn't create model <b>%s</b>", $_GET ['model'] );
			$msg .= "<ul>";
			foreach ( $model->errors as $attribute => $attr_errors ) {
				$msg .= "<li>Attribute: $attribute</li>";
				$msg .= "<ul>";
				foreach ( $attr_errors as $attr_error )
					$msg .= "<li>$attr_error</li>";
				$msg .= "</ul>";
			}
			$msg .= "</ul>";
			$this->_sendResponse ( 500, $msg );
		}
	}
	
	public function actionupdateUser() {
		// Parse the PUT parameters. This didn't work: parse_str(file_get_contents('php://input'), $put_vars);
		//$json = file_get_contents ( 'php://input' ); // $GLOBALS['HTTP_RAW_POST_DATA'] is not preferred: http://www.php.net/manual/en/ini.core.php#ini.always-populate-raw-post-data
		//$put_vars = CJSON::decode ( $json, true ); // true means use associative array
		if (! isset ( $_GET ['id'] ))
			$this->_sendResponse ( 500, 'Error: Parameter <b>id</b> is missing' );
		switch ($_GET ['property']) {
			// Get an instance of the respective model
			case 'update' :
				$model = UserDetails::model ()->findByPk ( $_GET ['id'] );
				foreach ( $_POST as $var => $value ) {
					// Does the model have this attribute? If not raise an error
					if ($model->hasAttribute ( $var ))
						$model->$var = $value;
					// else
					// $this->_sendResponse(500,
					// sprintf('Parameter <b>%s</b> is not allowed for model <b>%s</b>', $var,
					// $_GET['model']) );
				}
				break;
			case 'number' :
				$model = Utilities::getMobileNo ( $_GET ['id'] );
				$model->number = $_POST['number'];
				break;
				case 'resetPassword' :
					$model = Utilities::getMobileNo ( $_GET ['id'] );
					$model->password = $_POST['password'];
					break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Mode <b>create</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		
		
		// Did we find the requested model? If not, raise an error
		if ($model === null)
			$this->_sendResponse ( 400, sprintf ( "Error: Didn't find any model <b>%s</b> with ID <b>%s</b>.", $_GET ['model'], $_GET ['id'] ) );
			
		// Try to save the model
		if ($model->save ())
			$this->_sendResponse ( 200, CJSON::encode ( $model ) );
		else {
			// Errors occurred
			$msg = "";
			$msg .= "<ul>";
			foreach ( $model->errors as $attribute => $attr_errors ) {
				foreach ( $attr_errors as $attr_error )
					$msg .= "<li>$attr_error</li>";
			}
			$msg .= "</ul>";
			$this->_sendResponse ( 500, $msg );
		}
	}
	public function actionDelete() {
		switch ($_GET ['model']) {
			// Load the respective model
			case 'userDetails' :
				$model = UserDetails::model ()->findByPk ( $_GET ['id'] );
				break;
			case 'lookupDetails' :
				$model = LookupDetails::model ()->findByPk ( $_GET ['id'] );
				break;
			case 'donationRequest' :
				$model = DonationRequest::model ()->findByPk ( $_GET ['id'] );
				break;
			default :
				$this->_sendResponse ( 501, sprintf ( 'Error: Mode <b>delete</b> is not implemented for model <b>%s</b>', $_GET ['model'] ) );
				Yii::app ()->end ();
		}
		// Was a model found? If not, raise an error
		if ($model === null)
			$this->_sendResponse ( 400, sprintf ( "Error: Didn't find any model <b>%s</b> with ID <b>%s</b>.", $_GET ['model'], $_GET ['id'] ) );
			
			// Delete the model
		$num = $model->delete ();
		if ($num > 0)
			$this->_sendResponse ( 200, $num ); // this is the only way to work with backbone
		else
			$this->_sendResponse ( 500, sprintf ( "Error: Couldn't delete model <b>%s</b> with ID <b>%s</b>.", $_GET ['model'], $_GET ['id'] ) );
	}
	private function _sendResponse($status = 200, $body = '', $content_type = 'text/html') {
		// set the status
		$status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage ( $status );
		header ( $status_header );
		// and the content type
		header ( 'Content-type: ' . $content_type );
		
		// pages with body are easy
		if ($body != '') {
			// send the body
			echo $body;
		} 		// we need to create the body if none is passed
		else {
			// create some body messages
			$message = '';
			
			// this is purely optional, but makes the pages a little nicer to read
			// for your users. Since you won't likely send a lot of different status codes,
			// this also shouldn't be too ponderous to maintain
			switch ($status) {
				case 401 :
					$message = 'You must be authorized to view this page.';
					break;
				case 404 :
					$message = 'The requested URL ' . $_SERVER ['REQUEST_URI'] . ' was not found.';
					break;
				case 500 :
					$message = 'The server encountered an error processing your request.';
					break;
				case 501 :
					$message = 'The requested method is not implemented.';
					break;
			}
			
			// servers don't always have a signature turned on
			// (this is an apache directive "ServerSignature On")
			$signature = ($_SERVER ['SERVER_SIGNATURE'] == '') ? $_SERVER ['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER ['SERVER_NAME'] . ' Port ' . $_SERVER ['SERVER_PORT'] : $_SERVER ['SERVER_SIGNATURE'];
			
			// this should be templated in a real-world solution
			$body = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>' . $status . ' ' . $this->_getStatusCodeMessage ( $status ) . '</title>
</head>
<body>
    <h1>' . $this->_getStatusCodeMessage ( $status ) . '</h1>
    <p>' . $message . '</p>
    <hr />
    <address>' . $signature . '</address>
</body>
</html>';
			
			echo $body;
		}
		Yii::app ()->end ();
	}
	private function _getStatusCodeMessage($status) {
		// these could be stored in a .ini file and loaded
		// via parse_ini_file()... however, this will suffice
		// for an example
		$codes = Array (
				200 => 'OK',
				400 => 'Bad Request',
				401 => 'Unauthorized',
				402 => 'Payment Required',
				403 => 'Forbidden',
				404 => 'Not Found',
				500 => 'Internal Server Error',
				501 => 'Not Implemented' 
		);
		return (isset ( $codes [$status] )) ? $codes [$status] : '';
	}
	private function _checkAuth() {
		// Check if we have the USERNAME and PASSWORD HTTP headers set?
		if (! (isset ( $_SERVER ['HTTP_X_USERNAME'] ) and isset ( $_SERVER ['HTTP_X_PASSWORD'] ))) {
			// Error: Unauthorized
			$this->_sendResponse ( 401 );
		}
		$username = $_SERVER ['HTTP_X_USERNAME'];
		$password = $_SERVER ['HTTP_X_PASSWORD'];
		// Find the user
		$user = UserDetails::model ()->find ( 'number=?', array (
				$username 
		) );
		if ($user === null) {
			// Error: Unauthorized
			$this->_sendResponse ( 401, 'Error: User Name is invalid' );
		} else if (! $user->validatePassword ( $password )) {
			// Error: Unauthorized
			$this->_sendResponse ( 401, 'Error: User Password is invalid' );
		}
	}
}