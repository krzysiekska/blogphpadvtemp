<?php
/** @var $model \common\models\Article */
?>
<div class="article-index">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">
                <a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>">
                    <h3 style="text-align: center"><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
                </a>
                <div class="col-lg-8 col-xl-7">
                    <div>
                        <?php echo \yii\helpers\StringHelper::truncateWords(($model->getEncodeBody()), 40) ?>
                    </div>
                    <p class="text-muted text-right">
                        <small>
                            Created At:
                            <b><?php echo Yii::$app->formatter->asDatetime($model->created_at); //asRelativeTime ile czasu temu ?></b>
                            By: <b><?php echo $model->createdBy->username; //asRelativeTime ile czasu temu ?></b>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
