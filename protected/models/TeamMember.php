<?php

/**
 * This is the model class for table "team_member".
 *
 * The followings are the available columns in table 'team_member':
 * @property integer $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property string $photo
 * @property string $rang
 * @property integer $visible
 * @property integer $sort_order
 * @property string $created
 * @property string $modified
 */
class TeamMember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeamMember the static model class
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
		return 'team_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created, modified', 'required'),
			array('visible, sort_order', 'numerical', 'integerOnly'=>true),
			array('fname, photo, rang', 'length', 'max'=>255),
			array('mname, lname, email, phone', 'length', 'max'=>100),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, mname, lname, description, email, phone, photo, rang, visible, sort_order, created, modified', 'safe', 'on'=>'search'),
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
			'fname' => 'Fname',
			'mname' => 'Mname',
			'lname' => 'Lname',
			'description' => 'Description',
			'email' => 'Email',
			'phone' => 'Phone',
			'photo' => 'Photo',
			'rang' => 'Rang',
			'visible' => 'Visible',
			'sort_order' => 'Sort Order',
			'created' => 'Created',
			'modified' => 'Modified',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('rang',$this->rang,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}