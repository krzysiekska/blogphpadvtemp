<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \common\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <section class="page-section" id="contact">
        <div class="container">
            <div class="site-login">
                <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-8 col-xl-7">

                    <p>Please choose your new password:</p>

                    <div class="row">
                        <div class="col-lg-5">
                            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                            <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
