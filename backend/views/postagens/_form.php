<?php

use common\models\Categorias;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Postagens */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="postagens-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'idCategoria')->dropDownList(ArrayHelper::map(Categorias::find()->all(), 'id', 'nome')) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
