<?php

/**
 * This is the model class for table "instructor".
 *
 * The followings are the available columns in table 'instructor':
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property integer $visible
 * @property integer $sort_order
 * @property string $created
 * @property string $modified
 */
class Instructor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Instructor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'instructor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname', 'required'),
			array('fname', 'length', 'max'=>255),
			array('email', 'email'),
			array('lname, email, phone', 'length', 'max'=>100),
			array('description', 'safe'),
			array('sort_order', 'numerical', 'integerOnly'=>true),
			array('photo', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'), 
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, lname, description, email, phone, created, modified', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'fname' => 'Имя',
			'mname' => 'Отчество',
			'lname' => 'Фамилия',
			'description' => 'Описание',
			'email' => 'Электронный адрес',
			'phone' => 'Телефон',
			'rang' => 'Звание (пояс)',
			'photo' => 'Фото',
			'visible' => 'Видимый',
			'sort_order' => 'Порядок Сортировки',
			'created' => 'Дата Создания',
			'modified' => 'Дата Изменения',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('rang',$this->rang,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getName() {
		$name_arr = array($this->attributes['fname'],$this->attributes['mname'],$this->attributes['lname']);
		
		return implode(' ',$name_arr);
		
	}
}