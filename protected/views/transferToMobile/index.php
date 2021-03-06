<link rel="stylesheet" type="text/css" href="../../resources/css/signup.css" />

<?php

$form = $this->beginWidget('CActiveForm', array(
    'id'                   => 'contactform',
    'htmlOptions'          => array('class' => 'rounded'),
    'enableAjaxValidation' => false,
    'clientOptions'        => array('validateOnSubmit' => true),
    'errorMessageCssClass' => 'error',
));
?>

<br/>


<?php

$buttonName = 'Next';

$fieldOption = array('class' => 'input');

?>


<div class="field">
    <?php echo $form->labelEx($modelTransferToMobile, Yii::t('yii', 'Method')) ?>
        <div class="styled-select">
            <?php echo $form->dropDownList($modelTransferToMobile, 'method', $methods,
    array(
        'empty'    => Yii::t('yii', 'Select the method'),
        'disabled' => strlen($modelTransferToMobile->country) > 3,
    )); ?>
            <?php echo $form->error($modelTransferToMobile, 'method') ?>
        </div>
</div>

<br>




<div class="controls" id="sendButton">
<?php echo CHtml::submitButton(Yii::t('yii', $buttonName), array(
    'class'   => 'button',
    'onclick' => "return button2(event)",
    'id'      => 'secondButton'));
?>
<input class="button" style="width: 80px;" onclick="window.location='../../index.php/transferToMobile/read';" value="Cancel">
</div>
<div class="controls" id="buttondivWait"></div>


<?php

$this->endWidget();?>



