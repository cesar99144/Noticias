<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Postagens */

$this->title = 'Create Postagens';
$this->params['breadcrumbs'][] = ['label' => 'Postagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postagens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
