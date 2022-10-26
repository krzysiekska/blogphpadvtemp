<?php

use common\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">
                <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-8 col-xl-7">

                    <?php if (!Yii::$app->user->isGuest): ?>
                        <p>
                            <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>
                    <?php endif; ?>

                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        //    'filterModel' => $searchModel,
                        'itemView' => '_article_item'
                    ]); ?>
                </div>
            </div>
        </div>
    </section>

</div>
