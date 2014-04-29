<?php

/**
 * This is the model class for table "vehiculo_autorizado".
 *
 * The followings are the available columns in table 'vehiculo_autorizado':
 * @property string $v_patente
 * @property string $cli_rut
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property ClientePremium $cliRut
 */
class VehiculoAutorizado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehiculo_autorizado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('v_patente, cli_rut, tipo', 'required'),
			array('v_patente', 'length', 'max'=>10),
			array('cli_rut', 'length', 'max'=>12),
			array('tipo', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('v_patente, cli_rut, tipo', 'safe', 'on'=>'search'),
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
			'cliRut' => array(self::BELONGS_TO, 'ClientePremium', 'cli_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'v_patente' => 'V Patente',
			'cli_rut' => 'Cli Rut',
			'tipo' => 'Tipo',
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

		$criteria->compare('v_patente',$this->v_patente,true);
		$criteria->compare('cli_rut',$this->cli_rut,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VehiculoAutorizado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
