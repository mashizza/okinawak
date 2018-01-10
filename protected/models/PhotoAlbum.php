<?php

/**
 * This is the model class for table "photo_album".
 *
 * The followings are the available columns in table 'photo_album':
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $tags
 * @property integer $parent_photo_album_id
 * @property integer $preview_photo_id
 * @property integer $sort_order
 * @property integer $visible
 * @property string $created
 * @property string $modified
 */
class PhotoAlbum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhotoAlbum the static model class
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
		return 'photo_album';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, created, modified', 'required'),
			array('user_id, sort_order', 'numerical', 'integerOnly'=>true),
			array('title, tags', 'length', 'max'=>255),		
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, title, tags, created, modified', 'safe', 'on'=>'search'),
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
			'preview_photo'  => array(self::BELONGS_TO, 'Photo', 'preview_photo_id'),
			'photo'			=> array(self::HAS_MANY, 'Photo', 'photo_album_id'),
			//'user'    => array(self::BELONGS_TO, 'User', 'user_id'),
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
			'title' => 'Заголовок',
			'tags' => 'Тэги',
			'parent_photo_album_id' => 'Родительский альбом',
			'preview_photo_id' => 'Превью',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function getAllVisible( $parent_album_id = null) {
		$command = Yii::app()->db->createCommand()
			->select('photo_album.*, photo.title as photo_title,photo.src')
			->from('photo_album')
			->leftJoin('photo', 'photo.id=photo_album.preview_photo_id');
		if(!is_null( $parent_album_id )) {
			$command->where('photo_album.visible=:vs AND photo_album.parent_photo_album_id = :pra', 
					array(':vs'=>1, ':pra' => $parent_album_id));
		} else {
			$command->where('photo_album.visible=:vs AND photo_album.parent_photo_album_id IS NULL', 
					array(':vs'=>1));
		}
		return $command->order('photo_album.sort_order asc')->queryAll();
	}
	
	public function getFirstPhoto( $album_id = null ){
		$command = Yii::app()->db->createCommand()
			->select('photo.title as title,photo.src')
			->from('photo');
		
		$command->where('photo.photo_album_id=:pra AND photo.visible=1', 
					array(':pra' => $album_id));

		return $command->order('photo.sort_order asc')->queryRow();
	}
}