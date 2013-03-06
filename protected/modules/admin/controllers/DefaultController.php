<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function links(){
            $filenames =CFileHelper::findFiles(Yii::getPathOfAlias("application.modules.admin.models"), array ( 
                'fileTypes'=> array('php'),
              )
            );
 
            return $filenames;
        }
}