<?php

class AlbumController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';

	private $itemsPerPage = 24;
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		//get album info
		$album = PhotoAlbum::model()->findByPk($id);
		
		$this->pageTitle = $album->attributes['title'];
		
		//get child albums
		$albums = PhotoAlbum::model()->getAllVisible($id);		
		foreach($albums as &$alb) {
			$alb['preview'] = null;
			if(empty($alb['preview_photo_id'])) {
				$alb['preview'] = $alb['src'];
			} else {
				$preview = PhotoAlbum::model()->getFirstPhoto($alb['id']);				
				if(!empty($preview)) {
					$alb['preview'] = $preview['src'];
				}
			}
		}
		
		//get photos
		$photoCriteria = new CDbCriteria();		
		$photoCriteria->order = 'sort_order asc';	
		$photoCriteria->condition = '`visible` = :visible AND photo_album_id =:album';
		$photoCriteria->params = array (':visible' => 1, ':album' => $id);
		
		$photos_count = Photo::model()->count($photoCriteria);
		
		$photosPages = new CPagination($photos_count);
		$photosPages->setPageSize($this->itemsPerPage);
		$photosPages->applyLimit($photoCriteria); 
		
		$this->render('view',array(
			'albums'=> $albums,
			'photos'=> Photo::model()->findAll($photoCriteria), // must be the same as $item_count
			'photos_count'=> $photos_count,
			'page_size'=> $this->itemsPerPage,
			'pages'=> $photosPages,	
			'title' => $album->attributes['title'],
			'description' => $album->attributes['description']
		));
	}

	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->pageTitle = 'Gallery';
		
		$photoCriteria = new CDbCriteria();		
		$photoCriteria->order = 'sort_order asc';	
		$photoCriteria->condition = '`visible` = :visible AND photo_album_id IS NULL';
		$photoCriteria->params = array (':visible' => 1);
		
		$photos_count = Photo::model()->count($photoCriteria);
		
		$photosPages = new CPagination($photos_count);
		$photosPages->setPageSize($this->itemsPerPage);
		$photosPages->applyLimit($photoCriteria); 
				
		$albums = PhotoAlbum::model()->getAllVisible();				
		foreach($albums as &$alb) {
			$alb['preview'] = null;
			if(empty($alb['preview_photo_id'])) {
				$alb['preview'] = $alb['src'];
			} else {
				$preview = PhotoAlbum::model()->getFirstPhoto($alb['id']);								
				if(!empty($preview)) {
					$alb['preview'] = $preview['src'];
				}
			}						
		}
		
		$this->render('index',array(
				'albums'=> $albums,
				'photos'=> Photo::model()->findAll($photoCriteria), // must be the same as $item_count
				'photos_count'=> $photos_count,
				'page_size'=> $this->itemsPerPage,
				'pages'=> $photosPages,			
				'title' => 'Галерея',
		));
	}
}
