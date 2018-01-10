<?php

class CMImage extends CHtml{
		
	private static $image_placeholder = 'http://placehold.it/350x250';
	/**
	 * Generates an image tag.
	 * @param string $src the image URL
	 * @param string $alt the alternative text display
	 * @param array $htmlOptions additional HTML attributes (see {@link tag}).
	 * @return string the generated image tag
	 */
	public static function image($src, $alt='', $htmlOptions=array())
	{
		$htmlOptions['src'] = $src;
		$htmlOptions['alt'] = $alt;
		
		if(isset($htmlOptions['service'])) {
			if($htmlOptions['service'] == 'youtube') {
				
				return self::youtube_image($src, $alt, $htmlOptions);
				
			} elseif ($htmlOptions['service'] == 'vimeo') {
				
				return self::vimeo_image($src, $alt, $htmlOptions);
				
			} else {
				$htmlOptions['src'] = self::$image_placeholder;
				unset($htmlOptions['service']);
			}			
		}
		
		if(isset($htmlOptions['timthumb']) && is_array($htmlOptions['timthumb'])) {
			
			$htmlOptions['src'] = Yii::app()->baseUrl . '/timthumb.php?src='.urlencode($htmlOptions['src']);
			if(isset($htmlOptions['timthumb']['w'])){
				$htmlOptions['src']	.= '&w='.(int)$htmlOptions['timthumb']['w'];				
			}
			
			if(isset($htmlOptions['timthumb']['h'])){
				$htmlOptions['src']	.= '&h='.(int)$htmlOptions['timthumb']['h'];				
			}
			
			if(isset($htmlOptions['timthumb']['mw'])){
				$htmlOptions['src']	.= '&mw='.(int)$htmlOptions['timthumb']['mw'];				
			}
			
			if(isset($htmlOptions['timthumb']['mh'])){
				$htmlOptions['src']	.= '&mh='.(int)$htmlOptions['timthumb']['mh'];				
			}
			unset($htmlOptions['timthumb']);
		}
			
		return parent::tag('img',$htmlOptions);
	}
	
	public static function youtube_image($code, $alt='', $htmlOptions=array())
	{
		$htmlOptions['src'] = "http://img.youtube.com/vi/{$code}/0.jpg";
		$htmlOptions['alt'] = $alt;
		
		unset($htmlOptions['service']);
		
		if(isset($htmlOptions['timthumb']) && is_array($htmlOptions['timthumb'])) {
			
			$htmlOptions['src'] = Yii::app()->baseUrl . '/timthumb.php?src='.urlencode($htmlOptions['src']);
			if(isset($htmlOptions['timthumb']['w'])){
				$htmlOptions['src']	.= '&w='.(int)$htmlOptions['timthumb']['w'];				
			}
			
			if(isset($htmlOptions['timthumb']['h'])){
				$htmlOptions['src']	.= '&h='.(int)$htmlOptions['timthumb']['h'];				
			}
			
			if(isset($htmlOptions['timthumb']['mw'])){
				$htmlOptions['src']	.= '&mw='.(int)$htmlOptions['timthumb']['mw'];				
			}
			
			if(isset($htmlOptions['timthumb']['mh'])){
				$htmlOptions['src']	.= '&mh='.(int)$htmlOptions['timthumb']['mh'];				
			}
			unset($htmlOptions['timthumb']);
		}
		
		
		return parent::tag('img',$htmlOptions);
	}
	
	public static function vimeo_image($code, $alt='', $htmlOptions=array())
	{		
		$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/{$code}.php"));
		if(is_array($hash)) {
			$htmlOptions['src'] = $hash[0]['thumbnail_medium'];
		} else {
			$htmlOptions['src'] = self::$image_placeholder;
		}		
		
		$htmlOptions['alt'] = $alt;
		unset($htmlOptions['service']);
		
		if(isset($htmlOptions['timthumb']) && is_array($htmlOptions['timthumb'])) {
			
			$htmlOptions['src'] = Yii::app()->baseUrl . '/timthumb.php?src='.$htmlOptions['src'];
			if(isset($htmlOptions['timthumb']['w'])){
				$htmlOptions['src']	.= '&w='.(int)$htmlOptions['timthumb']['w'];				
			}
			
			if(isset($htmlOptions['timthumb']['h'])){
				$htmlOptions['src']	.= '&h='.(int)$htmlOptions['timthumb']['h'];				
			}
			
			if(isset($htmlOptions['timthumb']['mw'])){
				$htmlOptions['src']	.= '&mw='.(int)$htmlOptions['timthumb']['mw'];				
			}
			
			if(isset($htmlOptions['timthumb']['mh'])){
				$htmlOptions['src']	.= '&mh='.(int)$htmlOptions['timthumb']['mh'];				
			}
			unset($htmlOptions['timthumb']);
		}
			
		return parent::tag('img',$htmlOptions);
	}
}
?>
