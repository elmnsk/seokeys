<?php
use app\modules\user\Module;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\modules\user\forms\PasswordResetRequestForm */

$this->title = Module::t('app', 'TITLE_PASSWORD_RESET');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-default-password-reset-request">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Module::t('app', 'PLEASE_FILL_FOR_RESET_REQUEST') ?></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'password-reset-request-form']); ?>
            <?= $form->field($model, 'email') ?>
            <div class="form-group">
                <?= Html::submitButton(Module::t('app', 'BUTTON_SEND'), ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>