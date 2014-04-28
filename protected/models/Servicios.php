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
			array('ser_nombre, ser_descripcion, ser_valor, ser_fecha_inicio, ser_fecha_termino', 'required'),
			array('ser_valor', 'numerical', 'integerOnly'=>true),
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
			'ser_id' => 'Ser',
			'ser_nombre' => 'Ser Nombre',
			'ser_descripcion' => 'Ser Descripcion',
			'ser_valor' => 'Ser Valor',
			'ser_fecha_inicio' => 'Ser Fecha Inicio',
			'ser_fecha_termino' => 'Ser Fecha Termino',
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
		$criteria->compare('ser_fecha_inicio',$this->ser_fecha_inicio,true);
		$criteria->compare('ser_fecha_termino',$this->ser_fecha_termino,true);

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

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
