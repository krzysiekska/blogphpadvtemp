<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = 'Create Article';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">

    <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-8 col-xl-7">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
                </div>
            </div>
        </div>
    </section>

</div>
