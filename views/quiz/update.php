<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quiz */

$this->title = 'Update Quiz: ' . ' ' . $model->quizid;
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->quizid, 'url' => ['view', 'id' => $model->quizid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quiz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
