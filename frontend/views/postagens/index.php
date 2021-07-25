<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostagensSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Postagens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postagens-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Postagens', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'descricao',
            'idCategoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
