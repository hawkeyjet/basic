<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Form</h1>
<?php $form = ActiveForm::begin(['options' => ['id' => 'StudyForm']]) ?>
<?= $form->field($model, 'name')->label('Login'); ?>
<?= $form->field($model, 'email')->input('email'); ?>
<?= $form->field($model, 'message')->textarea(['rows' => '5']); ?>
<?= Html::submitButton("Submit", ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end(); ?>