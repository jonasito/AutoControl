<?php

class ServiciosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','tarifa','fijar_tarifas','estacionamiento'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
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
	public function actionCreate()
	{
		$model=new Servicios;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Servicios']))
		{
			$model->attributes=$_POST['Servicios'];
			$letras=$this->solo_letras($model->ser_nombre);
			$letras2=$this->solo_letras($model->ser_descripcion);
			if($letras==1 && $letras2 ==1) {
				if($model->ser_valor>0){
					if($model->ser_fecha_inicio<=$model->ser_fecha_termino){
						if($model->save()){
							$this->redirect(array('view','id'=>$model->ser_id));
						}
					}
					else{
						Yii::app()->user->setFlash('error', '<strong>UPS!</strong> La fecha de inicio debe ser menor o igual a la fecha de término');
					}
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> El valor ingresado debe ser mayor que 0');
				}
					
			}
			else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> Debe ingresar solo letras');
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Servicios']))
		{
			$model->attributes=$_POST['Servicios'];
			$letras=$this->solo_letras($model->ser_nombre);
			$letras2=$this->solo_letras($model->ser_descripcion);
			if($letras==1 && $letras2 ==1) {
				if($model->ser_valor>0){
					if($model->ser_fecha_inicio<=$model->ser_fecha_termino){
						if($model->save()){
							$this->redirect(array('view','id'=>$model->ser_id));
						}
					}
					else{
						Yii::app()->user->setFlash('error', '<strong>UPS!</strong> La fecha de inicio debe ser menor o igual a la fecha de término');
					}
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> El valor ingresado debe ser mayor que 0');
				}
					
			}
			else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> Debe ingresar solo letras');
			}
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

	public function actionIndex()
	{
		//$dataProvider=new CActiveDataProvider('Servicios');
		$dataProvider=new CActiveDataProvider('Servicios',array(
					      'criteria'=>array(
					        'condition' => "ser_nombre!='HORA' and ser_nombre!='MEDIA HORA' ",
					      ),
					    ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionEstacionamiento(){
		if(isset($_POST['cant'])){
			$cantidad=$_POST['cant'];
			if($cantidad>0){
				 Servicios::model()->update_all($cantidad);
				 Yii::app()->user->setFlash('error', '<strong>OK!</strong> actualizado');
			}
			else Yii::app()->user->setFlash('error', '<strong>UPS!</strong> error en cantidad de estacionamientos');
		}
		$this->render('estacionamiento');

	}

	public function actionFijar_tarifas(){
		$this->render('fijar_tarifas');
	}

	public function actionTarifa(){
		//$model=Servicios::model()->tarifa();
		$model=new Servicios;
		if(isset($_POST['Servicios']))
		{
			$tipo=$_POST['tipo'];
			$model->attributes=$_POST['Servicios'];
			$model->ser_nombre=$tipo;
			$model->ser_descripcion='TARIFA BASICA';
			if($model->ser_valor>0){
					if($model->ser_fecha_inicio<=$model->ser_fecha_termino){
						if($model->save()){
							$this->redirect(array('view','id'=>$model->ser_id));
						}
					}
					else{
						Yii::app()->user->setFlash('error', '<strong>UPS!</strong> La fecha de inicio debe ser menor o igual a la fecha de término');
					}
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> El valor ingresado debe ser mayor que 0');
				}
		}
		$this->render('tarifa',array(
			'model'=>$model,
		));
	}

	
	public function actionAdmin()
	{
		$model=new Servicios('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Servicios']))
			$model->attributes=$_GET['Servicios'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Servicios the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Servicios::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Servicios $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='servicios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function solo_letras($cadena){ 
		$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ "; 
		for ($i=0; $i<strlen($cadena); $i++){ 
		if (strpos($permitidos, substr($cadena,$i,1))===false){ 
		//no es válido; 
		return 0; 
		} 
		}  
		//si estoy aqui es que todos los caracteres son validos 
		return 1; 
	} 
}
