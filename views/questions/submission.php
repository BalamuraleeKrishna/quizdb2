<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


//$this->title = $queryresults[0]->correct_answer;
$this->params['breadcrumbs'][] = ['label' => 'Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-view">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
 foreach($queryresults as $queryresult){
?>
    <?= DetailView::widget([
        'model' => $queryresult,
        'attributes' => [
            'questionid',
            'your_answer',
            'correct_answer',

        ],
    ]) ?>
<?php
}
?>
</div>
