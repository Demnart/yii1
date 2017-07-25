<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\Accordion;
use yii\jui\Dialog;
use yii\jui\Draggable;
use yii\jui\Droppable;
use yii\jui\ProgressBar;
use yii\jui\Resizable;
use yii\jui\Selectable;
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
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success'])?>

<?php $form = ActiveForm::end() ?>

<?php
//echo Accordion::widget([
//    'items' => [
//        [
//            'header' => 'Section 1',
//            'content' => 'Mauris mauris ante, blandit et, ultrices a, suscipit eget...',
//        ],
//        [
//            'header' => 'Section 2',
//            'headerOptions' => ['tag' => 'h3'],
//            'content' => 'Sed non urna. Phasellus eu ligula. Vestibulum sit amet purus...',
//            'options' => ['tag' => 'div'],
//        ],
//    ],
//    'options' => ['tag' => 'div'],
//    'itemOptions' => ['tag' => 'div'],
//    'headerOptions' => ['tag' => 'h3'],
//    'clientOptions' => ['collapsible' => false],
//]);

//Dialog::begin([
//    'clientOptions' => [
//        'modal' => true,
//    ],
//]);
//
//echo 'Dialog contents here...';
//
//Dialog::end();

//Draggable::begin([
//    'clientOptions' => ['grid' => [50, 20]],
//]);
//
//echo 'Draggable contents here...';
//
//Draggable::end();
//Droppable::begin([
//    'clientOptions' => ['accept' => '.special'],
//]);
//
//echo 'Droppable body here...';
//
//Droppable::end();

//echo ProgressBar::widget([
//    'clientOptions' => [
//        'value' => 5,
//    ],
//]);

//Resizable::begin([
//    'clientOptions' => [
//        'grid' => [20, 10],
//    ],
//]);
//
//echo 'Resizable contents here...';
//
//Resizable::end();

//echo Selectable::widget([
//    'items' => [
//        'Item 1',
//        [
//            'content' => 'Item2',
//        ],
//        [
//            'content' => 'Item3',
//            'options' => [
//                'tag' => 'li',
//            ],
//        ],
//    ],
//    'options' => [
//        'tag' => 'ul',
//    ],
//    'itemOptions' => [
//        'tag' => 'li',
//    ],
//    'clientOptions' => [
//        'tolerance' => 'fit',
//    ],
//]);

?>


