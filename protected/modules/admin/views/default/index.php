<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<?php $filenames = $this->links(); ?>
<ul>
    <?php foreach($filenames as $file): ?>
        <?php $info = pathinfo($file);?>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/<?php echo strtolower($info['filename']);?>">Edit <?php echo $info['filename'];?></a></li>    
    <?php endforeach; ?>
</ul>