<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1><?php echo $this->title ?></h1>
<?php $this->beginBlock('block2')?>
<h1>Этот текст будет виден только на странице индекс</h1>
<?php $this->endBlock();?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo Yii::$app->session->getFlash('success');?>
</div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error');?>
    </div>
<?php endif; ?>


<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]) ?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'email')->input('email')?>
<?= $form->field($model,'text')->textarea()?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success'])?>
<?php $form = ActiveForm::end() ?>


