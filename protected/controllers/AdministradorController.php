<?php

class AdministradorController extends Controller
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
				'actions'=>array('create','update','admin','delete','ventas','updateme'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			 array(
            'class'=>'CButtonColumn',
                    'template' => '{view} {update} {delete} {pdf}',
                'buttons'=>array(
                        'pdf' => array(
                                'label'=>'Generar PDF', 
                                'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->id))",
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                                'options' => array('class'=>'pdf'),
                        ),
                ),
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
		$model=new Administrador;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Administrador']))
		{
			$model->attributes=$_POST['Administrador'];
			$model->admin_estacionamientos=0;
			$letras=$this->solo_letras($model->admin_nombre);
			$letras2=$this->solo_letras($model->admin_apellido);
			
			if(!$this->validaRut($model->admin_rut)){
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingrese un RUT valido');
				//if($model->admin_estacionamientos <= 0)
				//	Yii::app()->user->setFlash('warning', '<strong>UPS!</strong> ingrese un numero de estacionamiento positivo');
			}
			else{
				if($letras==1 && $letras2 ==1) {
					if($model->save())
					$this->redirect(array('view','id'=>$model->admin_rut));
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> Ingresa un nombre y apellido solo con letras');
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionVentas(){
		if(isset($_POST['venta'])){


		}
		
		$this->render('ventas');
	}


	public function actionPdf($id)
    {
        $this->render('pdf',array(
            'model'=>$this->loadModel($id),
        ));
    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdateme(){
		$id=Yii::app()->session['id'];
		$model=$this->loadModel($id);
		if(isset($_POST['Administrador']))
		{
			$model->attributes=$_POST['Administrador'];
			$letras=$this->solo_letras($model->admin_nombre);
			$letras2=$this->solo_letras($model->admin_apellido);
			if(!($this->validaRut($model->admin_rut)) || ($model->admin_estacionamientos <= 0)) { 
				if(!$this->validaRut($model->admin_rut))
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingrese un RUT valido');
				if($model->admin_estacionamientos <= 0)
					Yii::app()->user->setFlash('warning', '<strong>UPS!</strong> ingrese un numero de estacionamiento positivo');
			}
			else{
				if($letras == 1 && $letras2 == 1){
					if($model->save())
					$this->redirect(array('view','id'=>$model->admin_rut));
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingresa un nombre y apellido solo con letras');
				}	
			}
			
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		//$id=Yii::app()->user->rut;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Administrador']))
		{
			$model->attributes=$_POST['Administrador'];
			$letras=$this->solo_letras($model->admin_nombre);
			$letras2=$this->solo_letras($model->admin_apellido);
			if(!($this->validaRut($model->admin_rut)) || ($model->admin_estacionamientos <= 0)) { 
				if(!$this->validaRut($model->admin_rut))
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingrese un RUT valido');
				if($model->admin_estacionamientos <= 0)
					Yii::app()->user->setFlash('warning', '<strong>UPS!</strong> ingrese un numero de estacionamiento positivo');
			}
			else{
				if($letras == 1 && $letras2 == 1){
					if($model->save())
					$this->redirect(array('view','id'=>$model->admin_rut));
				}
				else{
					Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingresa un nombre y apellido solo con letras');
				}	
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Administrador');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Administrador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Administrador']))
			$model->attributes=$_GET['Administrador'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Administrador the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Administrador::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Administrador $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='administrador-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function solo_letras($cadena){ 
		$permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ "; 
		for ($i=0; $i<strlen($cadena); $i++){ 
		if (strpos($permitidos, substr($cadena,$i,1))===false){ 
		//no es válido; 
		return 0; 
		} 
		}  
		//si estoy aqui es que todos los caracteres son validos 
		return 1; 
	}  

	function validaRut($rut){
	    if(strpos($rut,"-")==false){
	        $RUT[0] = substr($rut, 0, -1);
	        $RUT[1] = substr($rut, -1);
	    }else{
	        $RUT = explode("-", trim($rut));
	    }
	    $elRut = str_replace(".", "", trim($RUT[0]));
	    $factor = 2;
	    $suma=0;
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	    	$suma += $elRut{$i}*$factor++;
	    endfor;

	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	   if($dv == trim(strtolower($RUT[1]))){
	       return true;
	   }else{
	       return false;
	   }
	}

	#public function soloPositivos($num){
	#	if($num <= 0)
	#		return -1;
	#	else return 0;
	#}
}  

