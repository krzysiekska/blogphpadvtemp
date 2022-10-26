<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">
                <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-8 col-xl-7">

                    <p>
                        This is the About page. You may modify the following file to customize its content:
                    </p>

                    <code><?= __FILE__ ?></code>
                </div>
            </div>
        </div>
    </section>
</div>
