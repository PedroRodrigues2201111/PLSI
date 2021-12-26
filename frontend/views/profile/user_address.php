<?php

use yii\bootstrap4\ActiveForm;

/** @var \yii\web\View $this */
/** @var \common\models\UserAddress $userAddress */
?>

<?php if (isset($success) && $success): ?>
  <div class="alert alert-success">
    A informação de morada foi alterada com sucesso!
  </div>
<?php endif ?>

<?php $addressForm = ActiveForm::begin([
  'action' => ['/profile/update-address'],
  'options' => [
    'data-pjax' => 1
  ]
]); ?>

<?= $addressForm->field($userAddress, 'address') ?>
<?= $addressForm->field($userAddress, 'city') ?>
<?= $addressForm->field($userAddress, 'state') ?>
<?= $addressForm->field($userAddress, 'country') ?>
<?= $addressForm->field($userAddress, 'zipcode') ?>

<button class="btn btn-primary">Guardar</button>
<?php ActiveForm::end(); ?>
