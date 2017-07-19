<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1><?php echo $this->title ?></h1>
<?php $this->beginBlock('block2')?>
<h1>Этот текст будет виден только на странице индекс</h1>
<?php $this->endBlock();?>

<?php $form = ActiveForm::begin(['id'=>'testForm']) ?>
<?= $form->field($model,'name')->label('Имя')?>
<?= $form->field($model,'email')->input('email')?>
<?= $form->field($model,'text')->label('Текст')->textarea()?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success'])?>
<?php $form = ActiveForm::end() ?>


