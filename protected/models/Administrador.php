<?php

/**
 * This is the model class for table "administrador".
 *
 * The followings are the available columns in table 'administrador':
 * @property string $admin_rut
 * @property string $admin_nombre
 * @property string $admin_apellido
 * @property string $admin_contraseña
 * @property integer $admin_estacionamientos
 */
class Administrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'administrador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admin_rut, admin_nombre, admin_apellido, admin_contraseña, admin_estacionamientos', 'required'),
			array('admin_estacionamientos', 'numerical', 'integerOnly'=>true),
			array('admin_rut', 'length', 'max'=>12),
			array('admin_nombre, admin_apellido', 'length', 'max'=>50),
			array('admin_contraseña', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('admin_rut, admin_nombre, admin_apellido, admin_contraseña, admin_estacionamientos', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'admin_rut' => 'Admin Rut',
			'admin_nombre' => 'Admin Nombre',
			'admin_apellido' => 'Admin Apellido',
			'admin_contraseña' => 'Admin Contraseña',
			'admin_estacionamientos' => 'Admin Estacionamientos',
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

		$criteria->compare('admin_rut',$this->admin_rut,true);
		$criteria->compare('admin_nombre',$this->admin_nombre,true);
		$criteria->compare('admin_apellido',$this->admin_apellido,true);
		$criteria->compare('admin_contraseña',$this->admin_contraseña,true);
		$criteria->compare('admin_estacionamientos',$this->admin_estacionamientos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
