<?php
	$getContent = $parmName->getContent();
	$content = str_replace('{{url}}', $domain, $getContent);
	
	if($parmName->page_name == '' || $parmName->slider == 'yesy'):;
		
		echo $this->renderPartial('_slider', array('parmName'=>$parmName));
		
		echo $content;
	
	elseif($parmName !== null && $parmName->slider == 'yes'):
		
		echo $this->renderPartial('_slider', array('parmName'=>$parmName));
		
		echo $content;
	
	else:
	
		echo $content;
	
    endif;