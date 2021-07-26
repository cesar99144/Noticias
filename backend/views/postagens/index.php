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

    
    <p>
        <?= Html::a('Adicionar postagem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'titulo',
            'descricao',
            //'idCategoria',
            [
                'attribute' => 'idCategoria',
                'value' => 'categoria.nome',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
