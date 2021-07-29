<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Postagens */

$this->title = 'Criar Postagem';
$this->params['breadcrumbs'][] = ['label' => 'Postagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postagens-create">

   
    <?= $this->render('_form', [
        'model' => $model,
        'listaCategorias' => $listaCategorias,
    ]) ?>

</div>
