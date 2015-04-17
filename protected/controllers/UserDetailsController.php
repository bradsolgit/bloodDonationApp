<?php

class UserDetailsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','getCity','getArea','admin','getDistrict','create','Forget','reset','validateOtp'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actiongetDistrict()
	{
		$id=$_POST['state'];
		  $data=Utilities::getLookupListByDistrict($id);

	
		$data=CHtml::listData($data,'lookup_id','lookup_value');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}
	public function actiongetCity()
	{
		$id=$_POST['district'];
		$data=Utilities::getLookupListByCity($id);
	
	
		$data=CHtml::listData($data,'lookup_id','lookup_value');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}
	public function actiongetArea()
	{
	$id=$_POST['city'];
		  $data=Utilities::getLookupListByArea($id);

	
		$data=CHtml::listData($data,'lookup_id','lookup_value');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}
	public function actionCreate()
	{
		$model=new UserDetails;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDetails']))
		{
			$model->attributes=$_POST['UserDetails'];
			$model->city=$_POST['city'];
			$model->district=$_POST['district'];
			$model->state=$_POST['state'];
			$model->area=$_POST['area'];
	$time = strtotime($model->dob);

$newformat = date('Y-m-d',$time);
$model->dob=$newformat;
$number=$model->number;
$message=Utilities::generateRandomString();
$model->confirmation_code=$message;

			if($model->save())

				$payload = file_get_contents('http://reseller.bulksmshyderabad.co.in/api/smsapi.aspx?username=abhibhattad&password=BRAD&to='.$number.'&from=BHATTD&message='.$message);
				$this->redirect(array("validateOtp"));
				
			}
		

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionreset()
	{
	
		 
		$model=new UserDetails();
	
		if (isset($_POST['old_password']))
		{
	
			$oldid = $_POST['old_password'];
			$record=UserDetails::model()->findByAttributes(array('password' =>$oldid));
			if(empty($record))
			{
					
				Yii::app()->user->setFlash('error', "INVALID PASSWORD");
	
					
					
			}
			else if(strlen($_POST['new_password'])>10)
			{
				Yii::app()->user->setFlash('error', "new password is too long min 10 char ");
			}
			
			else if($_POST['new_password']==$_POST['old_password'])
			{
				Yii::app()->user->setFlash('error', "old password and new password same");
			}
			else if($_POST['new_password']!=$_POST['confirm_password'])
			{
				Yii::app()->user->setFlash('error', "new password and confirm password does not matched");
			}
			else{
				$newPassword = $_POST['new_password'];
				$userid= Yii::app()->user->getState("user_id");
	
				$mod=UserDetails::model()->findByAttributes(array('password' =>$oldid));
	
				$mod->password =$_POST['new_password'];
				$mod->save();
				if($mod->save())
					$this->redirect(array('view','id'=>$model->user_id));
	
			}
		}
	
	
		$this->render('reset',array(
				'model'=>$model,
		));
	
	}
	public function actionForget() {
	
		$record=UserDetails::model()->findByAttributes(array('number' => Yii::app()->request->getPost('number')));
		
		if ($record != NULL) {
			if(isset($_POST['number'])) {
				$number=$record->number;
				$password=$record->password;
				$payload = file_get_contents('http://reseller.bulksmshyderabad.co.in/api/smsapi.aspx?username=abhibhattad&password=BRAD&to='.$number.'&from=BHATTD&message='.$password);
				Yii::app()->user->setFlash('success', "your password is send to your mobile no successfully");
			
	
			}
		}
	
		$this->render('password'); //show the view with the password field}}
		
	
	}
	public function actionvalidateOtp()
	{
		if(isset($_POST['otp']))
		{
			$record=UserDetails::model()->findByAttributes(array('confirmation_code' =>$_POST['otp']));
			
			$id=$record->user_id;
			
			if ($record != NULL) {
			$model=$this->loadModel($id);
			if($model->confirmation_code==$_POST['otp'])
			{
				$model->validate_Status="Y";
				$model->save();
				$this->redirect(Yii::app()->user->returnUrl);
			}
			else {
				Yii::app()->user->setFlash('error', "otp password is wrong");
			}
		}
		}
		$this->render('validateOtp');
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDetails']))
		{
			$model->attributes=$_POST['UserDetails'];
			$model->city=$_POST['city'];
			$model->district=$_POST['district'];
			$model->state=$_POST['state'];
			$model->area=$_POST['area'];
$time = strtotime($model->dob);

$newformat = date('Y-m-d',$time);
$model->dob=$newformat;
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UserDetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserDetails('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetails']))
			$model->attributes=$_GET['UserDetails'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserDetails the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserDetails $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
