<?php
	if($parmName->page_name === '' || $parmName->slider == 'yes'):
	
	$this->widget('bootstrap.widgets.TbCarousel', array(
	    'displayPrevAndNext'=>false,
	    'items'=>array(
	        array('image'=>Yii::app()->theme->baseUrl.'/images/gamesite.png', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	        array('image'=>Yii::app()->theme->baseUrl.'/images/gamesitephp.png', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	        array('image'=>Yii::app()->theme->baseUrl.'/images/gearbox.png', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	        array('image'=>Yii::app()->theme->baseUrl.'/images/gearboxcode.png', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	        array('image'=>Yii::app()->theme->baseUrl.'/images/sandiegowhalers.png', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	    ),
	));
	
	elseif($parmName->parm !== null):
	
		$this->widget('bootstrap.widgets.TbCarousel', array(
	    'displayPrevAndNext'=>false,
	    'items'=>array(
	        array('image'=>Yii::app()->theme->baseUrl.'/images/'.$parmName->parm.'.png', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	        array('image'=>Yii::app()->theme->baseUrl.'/images/'.$parmName->parm.'php.png', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	    ),
	));

	
	endif;