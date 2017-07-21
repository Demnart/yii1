<h1>Test</h1>
<button class="btn btn-success" id="btn">Click me!</button>
<br>
<?php //$this->registerJsFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset']);?>
<?php //$this->registerJs("alert('hello')")?>
<?php //  $this->registerCssFile('@web/css/style.css',['depends'=>'yii\bootstrap\BootstrapAsset'])?>
<?php //\app\controllers\debug(Yii::$app); ?>
<?php //$this->registerCss('body{background : #ccc;}') ?>


<?php $this->beginBlock('block1'); ?>
<h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<?php
\app\controllers\debug($item);
//    foreach ($items as $item)
//    {
//        echo $item['title'] . '<br>';
//    }

?>

<?php

$js = <<< JS
$('#btn').on('click',function() {
  $.ajax({
  url:'index.php?r=post/index',
  data:{test:'123'},
  type:'POST',
  success:function(res) {
    console.log(res);
  },
  error:function() {
    alert('Error');
  }
  });
});
JS;
$this->registerJs($js);
?>
