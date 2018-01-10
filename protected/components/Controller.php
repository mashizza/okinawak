<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	

	function get_pages () {		
		$pages = array();
		
		$currentId = Yii::app()->controller->getAction()->getId();
		$existing_urls = Yii::app()->components['urlManager']->rules;
		
		$all_pages = Page::model()->findAll(array(
			'condition' => 'parent_page_id IS null AND visible = 1', 
			'order' => 'sort_order'));		
		foreach($all_pages as $p) {
			$alias = $p->attributes['alias'];
			$pages[$alias] = array(
				'url' => isset($existing_urls[$alias])?$alias:'page/'.$alias,
				'title' => $p->attributes['title'],
				'active' => false
			);
			
			$sub_pages = Page::model()->findAll(array(
				'condition' => 'parent_page_id=' . $p->attributes['id'] . ' AND visible = 1', 
				'order' => 'sort_order'));		
			
			if(!empty($sub_pages)) {
				foreach($sub_pages as $sp) {
					$sp_alias  = $sp->attributes['alias'];
					$pages[$p->attributes['alias']]['subpages'][$sp_alias] = array(
						'url' => isset($existing_urls[$sp_alias])?$sp_alias:'page/'.$sp_alias,
						'title' => $sp->attributes['title'],
						'active' => false
					);
				}
			}			
		}
		return $pages;
	}
	
	function showPageNavLink( $page ){
		$html = '';
		
		if(isset($page['subpages']) && !empty($page['subpages'])) {
			
			$html .='<li class="dropdown">';
			$html .= CHtml::link($page['title']. ' <b class="caret"></b>', Yii::app()->baseUrl.'/'. $page['url'], array(
					'class' => 'dropdown-toggle js-activated',
					'data-hover' => 'dropdown',
					'data-delay' => '1000',
					'data-toggle' => 'dropdown',
			));
			
			$html .= '<ul class="dropdown-menu">';					
			
			foreach($page['subpages'] as $sp) {
				$html .= '<li>'. CHtml::link($sp['title'], Yii::app()->baseUrl.'/'.$sp['url']).'</li>';
			}
			$html .='</ul>';
			$html .='</li>';			
		} else {
			$html .= '<li>'. CHtml::link($page['title'], Yii::app()->baseUrl.'/'.$page['url']) .'</li>';
		}
		
		return $html;		
	}
}