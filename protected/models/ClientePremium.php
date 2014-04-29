<?php

/**
 * This is the model class for table "cliente_premium".
 *
 * The followings are the available columns in table 'cliente_premium':
 * @property string $cli_rut
 * @property string $cli_nombre
 * @property string $cli_apellido
 * @property string $cli_telefono
 * @property string $cli_direccion
 * @property string $cli_email
 * @property string $cli_contraseña
 *
 * The followings are the available model relations:
 * @property VehiculoAutorizado[] $vehiculoAutorizados
 */
class ClientePremium extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente_premium';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('cli_rut, cli_nombre, cli_apellido, cli_telefono, cli_direccion, cli_email, cli_contraseña', 'required','message'=>'El dato : {attribute} debe ser ingresado'),
			array('cli_rut', 'length', 'max'=>12,'min'=>12,'tooShort'=>'El Rut debe ser ingresado con puntos y guion'),
			array('cli_nombre, cli_apellido, cli_direccion, cli_email', 'length', 'max'=>50),
			array('cli_telefono', 'numerical', 'integerOnly'=>true),
			array('cli_email','email'),
			array('cli_contraseña', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cli_rut, cli_nombre, cli_apellido, cli_telefono, cli_direccion, cli_email, cli_contraseña', 'safe', 'on'=>'search'),
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
			'vehiculoAutorizados' => array(self::HAS_MANY, 'VehiculoAutorizado', 'cli_rut'),
		);
	}



	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cli_rut' => 'Rut',
			'cli_nombre' => 'Nombre',
			'cli_apellido' => 'Apellido',
			'cli_telefono' => 'Telefono',
			'cli_direccion' => 'Direccion',
			'cli_email' => 'Email',
			'cli_contraseña' => 'Contraseña',
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

		$criteria->compare('cli_rut',$this->cli_rut,true);
		$criteria->compare('cli_nombre',$this->cli_nombre,true);
		$criteria->compare('cli_apellido',$this->cli_apellido,true);
		$criteria->compare('cli_telefono',$this->cli_telefono,true);
		$criteria->compare('cli_direccion',$this->cli_direccion,true);
		$criteria->compare('cli_email',$this->cli_email,true);
		$criteria->compare('cli_contraseña',$this->cli_contraseña,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClientePremium the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function clientes(){
	    $criteria=new CDbCriteria;
	    $criteria->select = "cli_rut";
	    $clientes=ClientePremium::model()->findAll($criteria);
	    return $clientes;
  	}
}
