<?php

/**
 * This is the model class for table "ingreso".
 *
 * The followings are the available columns in table 'ingreso':
 * @property integer $ing_codigo
 * @property string $v_patente
 * @property string $ing_fecha
 * @property string $ing_hora_ing
 * @property string $ing_hora_sal
 * @property integer $ing_numero_est
 *
 * The followings are the available model relations:
 * @property Servicios[] $servicioses
 */
class Ingreso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ingreso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		//ing_fecha, ing_hora_ing, en required
		return array(
			array('v_patente,ing_numero_est', 'required'),
			array('ing_numero_est', 'numerical', 'integerOnly'=>true),
			array('v_patente', 'length', 'max'=>10),
			array('ing_hora_sal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ing_codigo, v_patente, ing_fecha, ing_hora_ing, ing_hora_sal, ing_numero_est', 'safe', 'on'=>'search'),
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
			'servicioses' => array(self::MANY_MANY, 'Servicios', 'solicita(ing_codigo, ser_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ing_codigo' => 'Codigo',
			'v_patente' => 'Patente',
			'ing_fecha' => 'Fecha',
			'ing_hora_ing' => 'Hora Ingreso',
			'ing_hora_sal' => 'Hora Salida',
			'ing_numero_est' => 'Numero Estacionamiento',
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

		$criteria->compare('ing_codigo',$this->ing_codigo);
		$criteria->compare('v_patente',$this->v_patente,true);
		$criteria->compare('ing_fecha',$this->ing_fecha,true);
		$criteria->compare('ing_hora_ing',$this->ing_hora_ing,true);
		$criteria->compare('ing_hora_sal',$this->ing_hora_sal,true);
		$criteria->compare('ing_numero_est',$this->ing_numero_est);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function disponibilidad(){
	    $criteria=new CDbCriteria;
	    //seleccionar los ocupados!!!!
	    $criteria->select = "distinct ing_numero_est";
	    $criteria->condition = 'ing_fecha = current_date AND ing_hora_sal is null';
		//$criteria->params = array(':fecha'=>$fecha);
	    $servi=Ingreso::model()->findAll($criteria);
	    $maximo=Administrador::model()->maximo();

	    $b=0;$c=0;
	    for ($i=1; $i <= $maximo; $i++) { 
	    	foreach ($servi as $value) {
	    		if($i==$value->ing_numero_est)$b=1;
	    	}
	    	if($b==0){
	    		$libre[$c]=$i;
	    		$c=$c+1;
	    	}
	    	else $b=0;
	    }
		return $libre;
  	}

  	public function ocupados(){
		$criteria=new CDbCriteria;
	    $criteria->select = "distinct ing_codigo, v_patente";
	    $criteria->condition = 'ing_hora_sal is null';
	    $ocupados=Ingreso::model()->findAll($criteria);
	    return $ocupados;
  	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ingreso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
