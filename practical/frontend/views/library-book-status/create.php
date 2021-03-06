<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\LibraryBookStatus */

$this->title = 'Create Library Book Status';
$this->params['breadcrumbs'][] = ['label' => 'Library Book Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-book-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
