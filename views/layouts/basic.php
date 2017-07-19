<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная','/web/')?></li>
            <li role="presentation"><?= Html::a('Индекс',['post/index'])?></li>
            <li role="presentation"><?= Html::a('Тест',['post/test'])?></li>
        </ul>
        <?php if (isset($this->blocks['block2'])):?>
            <?php echo $this->blocks['block2']?>
        <?php endif;?>
        <?php if (isset($this->blocks['block1'])):?>
            <?php echo $this->blocks['block1']?>
        <?php endif;?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage();