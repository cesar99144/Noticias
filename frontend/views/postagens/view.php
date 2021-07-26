<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Postagens */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Postagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="postagens-view">

<div id="painel">
    <p>
       
        <a class="btn btn-primary" href="/Compartilhar">Compartilhar</a>
        <a class="btn btn-danger" href="/postagens">Voltar</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo',
            'descricao',
            'idCategoria',
        ],
    ]) ?>

</div>
</div>
