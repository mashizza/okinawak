<?php

/**
 * This is the model class for table "page".
 *
 * The followings are the available columns in table 'page':
 * @property integer $id
 * @property integer $user_id
 * @property string $alias
 * @property string $title
 * @property string $content
 * @property integer $visible
 * @property integer $sort_order
 * @property string $created
 * @property string $modified
 */
class Page extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Page the static model class
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
		return 'page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('alias, title, created, modified', 'required'),
			array('alias, title',  'required'),
			//array('user_id', 'numerical', 'integerOnly'=>true),
			array('alias', 'length', 'max'=>100),
			array('title', 'length', 'max'=>255),
			array('sort_order', 'numerical', 'integerOnly'=>true),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, alias, title, content, created, modified', 'safe', 'on'=>'search'),
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
			'user_id' => 'Автор',
			'alias' => 'Алиас',
			'title' => 'Заголовок',
			'content' => 'Текст',
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
		//$criteria->compare('user_id',$this->user_id);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		//$criteria->compare('created',$this->created,true);
		//$criteria->compare('modified',$this->modified,true);
		
		//$criteria->order = 'sort_order ASC, id ASC';
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria			
		));
	}
}