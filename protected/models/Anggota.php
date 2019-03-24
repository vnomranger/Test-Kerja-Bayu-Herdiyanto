<?php

/**
 * This is the model class for table "anggota".
 *
 * The followings are the available columns in table 'anggota':
 * @property integer $id_anggota
 * @property string $nama_member
 * @property integer $no_hp
 * @property string $tanggal_lahir_member
 * @property string $email_member
 * @property string $jenis_kelamin
 * @property integer $no_ktp
 */
class Anggota extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_member, no_hp, tanggal_lahir_member, email_member, jenis_kelamin, no_ktp', 'required'),
			array('no_hp, no_ktp', 'numerical', 'integerOnly'=>true),
			array('nama_member, email_member', 'length', 'max'=>128),
			array('jenis_kelamin', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anggota, nama_member, no_hp, tanggal_lahir_member, email_member, jenis_kelamin, no_ktp', 'safe', 'on'=>'search'),
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
			'id_anggota' => 'Id Anggota',
			'nama_member' => 'Nama Member',
			'no_hp' => 'No Hp',
			'tanggal_lahir_member' => 'Tanggal Lahir Member',
			'email_member' => 'Email Member',
			'jenis_kelamin' => 'Jenis Kelamin',
			'no_ktp' => 'No Ktp',
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

		$criteria->compare('id_anggota',$this->id_anggota);
		$criteria->compare('nama_member',$this->nama_member,true);
		$criteria->compare('no_hp',$this->no_hp);
		$criteria->compare('tanggal_lahir_member',$this->tanggal_lahir_member,true);
		$criteria->compare('email_member',$this->email_member,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('no_ktp',$this->no_ktp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anggota the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
