<section class="registration-section" style="background-image: url(/images/backgroung.jpg);">
    <div class="container">
        <div class="flex-box">
            <div class="text-box"><i class="icon-rocket">icon</i>
                <h1>Over 100 FX and Binary Options brokers choose Panda Trading System as their technology partner</h1>
                <p>One-on-one consultation meeting with Mr. John Doe, VP of Business Development at Panda Trading Systems</p>
            </div>
            <div class="form-box">
                <div class="form-title">
                    <span class="title">OPEN ACCOUNT, </span><span class="details">It's free!</span>
                </div>
                <div class="registration-form form">
                    <?php if(Yii::app()->user->hasFlash('registration')): ?>

                    <div class="flash-success">
                        <?php echo Yii::app()->user->getFlash('registration'); ?>
                    </div>

                    <?php else: ?>

                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'user-form',
                    )); ?>
                        <div class="row">
                            <div class="col">
                                <?php echo $form->labelEx($model,'First Name*'); ?>
                               <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'username'); ?>
                            </div>
                            <div class="col">
                                <?php echo $form->labelEx($model,'Last Name*'); ?>
                                <?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'lastname'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <?php echo $form->labelEx($model,'Email*'); ?>
                                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'email'); ?>
                            </div>

                            <div class="col">
                                <?php echo $form->labelEx($model,'Phone Number*'); ?>
                                <?php echo $form->textField($model,'telephone'); ?>
                                <?php echo $form->error($model,'telephone'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <?php echo $form->labelEx($model,'Password'); ?>
                                <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'password'); ?>
                            </div>
                             <div class="col">
                                <?php echo $form->labelEx($model,'Password confirmation'); ?>
                                <?php echo $form->passwordField($model,'password2',array('size'=>60,'maxlength'=>255)); ?>
                                <?php echo $form->error($model,'password2'); ?>
                            </div>
                        </div>
                        <div class="row checkbox-row">
                            <div class="col">
                                <label for="check-1">
                                    <input id="check-1" type="checkbox"><span class="fake-input"></span><span class="fake-label">We respect your privacy and do not tolerate spam and will never use it for other purposes.</span>
                                </label>
                            </div>
                        </div>
                        <div class="row buttons">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'APPLY NOW' : 'Save'); ?>
                        </div>
                    <?php $this->endWidget(); ?>
                    <?php endif; ?>
                </div>
                <?php if ($model->hasErrors()): ?>
                    <div class='error-summary'>
                        <i>Somthing Went Wrong...</i>
                        <span>You must currectly fill the fields!</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>