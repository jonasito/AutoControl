<?php

/**
 * This is the model class for table "servicios".
 *
 * The followings are the available columns in table 'servicios':
 * @property integer $ser_id
 * @property string $ser_nombre
 * @property string $ser_descripcion
 * @property integer $ser_valor
 * @property string $ser_fecha_inicio
 * @property string $ser_fecha_termino
 *
 * The followings are the available model relations:
 * @property Ingreso[] $ingresos
 */
class Servicios extends CActiveRecord
{
	var $VH="HORA"; // VALOR HORA
	var $VMH="MEDIA HORA"; //VALOR MEDIA HORA
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ser_nombre, ser_valor, ser_fecha_inicio, ser_fecha_termino', 'required', 'message'=>'No puede haber un campo en blanco' ),
			array('ser_valor', 'numerical', 'integerOnly'=>true,'message'=>'El valor ingresado debe ser entero'),
			array('ser_nombre', 'length', 'max'=>50),
			array('ser_descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ser_id, ser_nombre, ser_descripcion, ser_valor, ser_fecha_inicio, ser_fecha_termino', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ingresos' => array(self::MANY_MANY, 'Ingreso', 'solicita(ser_id, ing_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'ser_id' => 'Id',
			'ser_nombre' => 'Nombre',
			'ser_descripcion' => 'Descripción',
			'ser_valor' => 'Valor ($)',
			'ser_fecha_inicio' => 'Fecha Inicio',
			'ser_fecha_termino' => 'Fecha Término',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ser_id',$this->ser_id);
		$criteria->compare('ser_nombre',$this->ser_nombre,true);
		$criteria->compare('ser_descripcion',$this->ser_descripcion,true);
		$criteria->compare('ser_valor',$this->ser_valor);

		//$criteria->condition = 'ser_nombre<>"HORA" and ser_nombre <>"MEDIA HORA"';
		//$criteria->params = array(':HORA'=>$this->VH, ':MEDIA'=>$this->VMH);
		//$criteria->order='ser_id DESC';		

		//$criteria->compare('ser_fecha_inicio',$this->ser_fecha_inicio,true);
		//$criteria->compare('ser_fecha_termino',$this->ser_fecha_termino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function serviciosActivos($fecha){
	    $criteria=new CDbCriteria;
	    $criteria->select = "ser_id,ser_nombre,ser_valor";
	    $criteria->condition = 'ser_fecha_inicio<=:fservicio AND ser_fecha_termino>=:fservicio';
		$criteria->params = array(':fservicio'=>$fecha);
	    $servi=Servicios::model()->findAll($criteria);
	    return $servi;
  	}

  	public function tarifa(){
  		$criteria=new CDbCriteria;
	    $criteria->select = "ser_id,ser_nombre,ser_valor, ser_fecha_inicio,ser_fecha_termino";
	    $criteria->condition = 'ser_nombre=:HORA OR ser_nombre =:MEDIA';
		$criteria->params = array(':HORA'=>$this->VH, ':MEDIA'=>$this->VMH);
		$criteria->order='ser_id DESC';

		return new CActiveDataProvider(get_class($this), array(
        'criteria' => $criteria,
    	));

	    //$tarifa=Servicios::model()->findAll($criteria);
	    //return $tarifa;
  	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicios the static model class
	 */

	public function update_all($cantidad){
		$sql = "update administrador set admin_estacionamientos= $cantidad";		           
		$connection = Yii::app()->db;
		$command = $connection->createCommand($sql);
		$result = $command->queryAll();
	}

	public function tarifa_hora(){
  		$sql = "select ser_id,ser_valor from servicios where ser_id=(select max(ser_id) from servicios where ser_nombre='HORA')";		           
		$connection = Yii::app()->db;
		$command = $connection->createCommand($sql);
		$result = $command->queryAll();

		//while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        //	$hora=$line['ser_valor'];
    	//}
		$hora=$result[0]['ser_valor'];
		return $hora;
  	}

  	public function tarifa_mediahora(){
  		$sql = "select ser_id,ser_valor from servicios where ser_id=(select max(ser_id) from servicios where ser_nombre='MEDIA HORA')";		           
		$connection = Yii::app()->db;
		$command = $connection->createCommand($sql);
		$result = $command->queryAll();

		//while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        //	$media=$line['ser_valor'];
    	//}
		$media=$result[0]['ser_valor'];
		return $media;	
  	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
