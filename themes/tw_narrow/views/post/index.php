<h1>Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView'=>'_view',
)); ?>
