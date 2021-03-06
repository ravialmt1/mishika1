<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Test;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test', ['create'], ['class' => 'btn btn-success']); 
		
		?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
	
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'test_id',
            'faculty_id',
            'class_id',
            'section_id',
			
            ['label' =>'name','format'=>'raw','value'=>function($data){return Html::a($data->name,'../test-questions/view?id='.$data->test_id);},],
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
