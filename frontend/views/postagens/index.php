<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notícias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postagens-index">

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

</div>

<div id="painel">
<h1 id="oportunidadesTitle">Quadro de notícias</h1>

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

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => [],
                'header'=>'Opções',
                'template' => '{view}',
                'visibleButtons'=>[
                    
                ]
            ],
        ],
    ]); ?>
</div>
