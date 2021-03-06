<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$session = Yii::$app->session;
/* @var $this yii\web\View */
/* @var $model frontend\models\StudentsDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-details-form">

    <?php $form = ActiveForm::begin(
	['action' =>['students-details/create','method' => 'post',],
    'layout' => 'inline',
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
]); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_clas')->textInput() ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
