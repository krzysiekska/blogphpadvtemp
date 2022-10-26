<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">
    <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-8 col-xl-7">
    <p class="text-muted">
        <small>
            Created At: <b><?php echo Yii::$app->formatter->asDatetime($model->created_at); //asRelativeTime ile czasu temu ?></b>
            By: <b><?php echo $model->createdBy->username; //asRelativeTime ile czasu temu ?></b>
        </small>
    </p>
    <?php if(!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif; ?>
    <div>
        <?php echo $model->getEncodeBody(); ?>
    </div>
                </div>
            </div>
        </div>
    </section>

</div>
