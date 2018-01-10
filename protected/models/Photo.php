<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property integer $id
 * @property integer $user_id
 * @property integer $photo_album_id
 * @property string $title
 * @property string $src
 * @property string $tags
 * @property integer $sort_order
 * @property integer $visible
 * @property string $created
 * @property string $modified
 */
class Photo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Photo the static model class
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
		return 'photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, src', 'required'),
			array('user_id, photo_album_id, sort_order, ', 'numerical', 'integerOnly'=>true),
			array('title, src, tags', 'length', 'max'=>255),
			array('sort_order', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, photo_album_id, title, tags, created, modified', 'safe', 'on'=>'search'),
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
			 'album_preview' => array(self::HAS_ONE,   'PhotoAlbum',    'preview_photo_id'),
			 'album'		=> array(self::BELONGS_TO, 'PhotoAlbum',    'photo_album_id	'),
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
			'photo_album_id' => 'Альбом',
			'title' => 'Заголовок',
			'src' => 'Путь к файлу',
			'tags' => 'Тэги',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('photo_album_id',$this->photo_album_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('src',$this->src,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}	
}