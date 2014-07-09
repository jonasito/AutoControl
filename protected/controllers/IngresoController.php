<?php

class IngresoController extends Controller
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
				'actions'=>array('index','view','disponibilidad','cliente'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','delete','prueba','servicios','create','update','boleta'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','prueba','servicios'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionDisponibilidad()
	{
		$fecha=date('d-m-Y');
		$model=Ingreso::model()->disponibilidad($fecha);
		$this->render('disponibilidad',array(
			'model'=>$model,
		));
	}

	public function actionBoleta()
	{
		if(!isset($_POST['numero']))
		{
			$this->render('boleta');
		}
		else{
			$numero=$_POST["numero"];
			$id=$numero;
			
			$salida=date("H:i:s",time()-21600);
			$registro=Ingreso::model()->findByPk($id);
			$registro->ing_hora_sal=$salida;
			$registro->save();

			$servicios=Ingreso::model()->boleta($id);

			$this->render('viewboleta',array(
			'servicios'=>$servicios,
			'registro'=>$registro,
			));
			//$this->render('boleta',array('id'=>$id));
		}
		

	}
	public function actionCliente()
	{
		$hora = 700;
		$media = 400;
		if(!isset($_POST['numero']))
		{
			$this->render('cliente');
		}
		else{
			$patente=$_POST["numero"];
			$opcion=$_POST["opciones"];
			if($this->patente($patente)==1){
				/*$this->render('view',array(
				'model'=>$this->loadModel($opcion),));*/
				if($opcion == 1){
					$datos = Ingreso::model()->consultaCN($patente);
					$this->render('viewCCN',array(
						'datos'=>$datos,));

					//return $datos;
				}
				if($opcion == 2){
					$datos = Ingreso::model()->consultaCP($patente);
					$this->render('viewCCP',array(
						'datos'=>$datos,));
					//return $datos;
				}

			} else{
				Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingresa una patente solo con numeros y letras.');				
				$this->render('cliente');
			}
		}
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	*/
	public function actionView($id)
	{
		/*$solicita=new Solicita;
		if(isset($_POST['numero']))
		{
			$numero=$_POST["numero"];
		    $count = count($numero);
		    for ($i = 0; $i < $count; $i++) {
		        //echo $numero[$i];
		    	$parts = explode('#', $numero[$i]);
		        $solicita->ing_codigo=$parts[1];
				$solicita->ser_id=$parts[0];
				$solicita->save();
		    }
			/*foreach ($serv as $ser_id => $ser_id) {
					$solicita->ing_codigo=$id;
					$solicita->ser_id=$ser_id;
					$solicita->save();
				}*/
		//}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			//'serv'=>$serv,
		));
	}

	public function actionServicios(){
		//$id=$_GET['r'];
		$solicita=new Solicita;	
		
		$numero=$_POST["numero"];
		    $count = count($numero);
		    for ($i = 0; $i < $count; $i++) {
		        //echo $numero[$i];
		        $solicita->ing_codigo=$id;
				$solicita->ser_id=$numero[$i];
				$solicita->save();
		    }

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			//'serv'=>$serv,
		));	

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*public function actionCreate2(){
		$model=new Ingreso;
		$fecha=date('d-m-Y');
		if(isset($_POST['Ingreso']))
		{
			$fecha=date('d-m-Y');
			$hora=date("H:i:s",time()-21600);
			$model->attributes=$_POST['Ingreso'];
			$model->ing_fecha=$fecha;
			$model->ing_hora_ing=$hora;

			$model->ing_numero_est=$_POST['estacionamiento'];
			
			Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingresa est '.$model->ing_numero_est.' - ');
		}
		$this->render('create',array(
				'model'=>$model,
			));	
	}*/
	public function actionCreate(){
		$model=new Ingreso;
		$fecha=date('d-m-Y');
		if(isset($_POST['Ingreso']))
		{
			$fecha=date('d-m-Y');
			$hora=date("H:i:s",time()-21600);
			$model->attributes=$_POST['Ingreso'];
			$model->ing_fecha=$fecha;
			$model->ing_hora_ing=$hora;

			$model->ing_numero_est=$_POST['estacionamiento'];
			if($this->existe_auto($model->v_patente)==1){
				if($this->patente($model->v_patente)==1){
					if($model->save()){
						if(isset($_POST['numero'])){
							$numero=$_POST["numero"];
							$count = count($numero);
							for ($i = 0; $i < $count; $i++) {
							    $solicita=new Solicita;
							    //echo $numero[$i];
							    $solicita->ing_codigo=$model->ing_codigo;
								$solicita->ser_id=$numero[$i];
								$solicita->save();
							}
						}
							$this->redirect(array('view','id'=>$model->ing_codigo));
					}
				}
			else 
				Yii::app()->user->setFlash('error', '<strong>UPS!</strong> ingresa una patente solo con numeros y letras.');
			}
			else
				Yii::app()->user->setFlash('error', '<strong>UPS!</strong> El auto aun se encuentra en el estacionamiento.');
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

		if(isset($_POST['Ingreso']))
		{
			$model->attributes=$_POST['Ingreso'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ing_codigo));
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
		$dataProvider=new CActiveDataProvider('Ingreso');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ingreso('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ingreso']))
			$model->attributes=$_GET['Ingreso'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ingreso the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ingreso::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;

	}


	public function actionPrueba()
	{
		//echo("paso");
	$fecha=date('d-m-Y');
	$model=Servicios::model()->serviciosActivos($fecha);
	    //if($model===null)
	      //throw new CHttpException(404,'Sin servicios.');
	    
	    $this->render('prueba',array(
			'model'=>$model,
		));
	}


	/**
	 * Performs the AJAX validation.
	 * @param Ingreso $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ingreso-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function existe_auto($patente){
		$pat=$patente;
		$res=Ingreso::model()->validar_ingreso($pat);
		if($res == null)return 1;
	    return 0;
	}

	public function patente($cadena){ 
		$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 ";
		for ($i=0; $i<strlen($cadena); $i++){ 
			if (strpos($permitidos, substr($cadena,$i,1))===false ){ 
			//no es válido; 
			return 0; 
			} 
		}  
		//si estoy aqui es que todos los caracteres son validos 
		return 1; 
	} 

}
