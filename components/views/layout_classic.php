<?php
/**
 * @var $this LayoutClassic
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/theme-dora
 *
 */

	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/classic/style.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/classic.js', CClientScript::POS_END);
?>

<section class="bg-page section">
	<div class="overlay"></div>
	<div class="logo">
		<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo.png" alt="Dora"></a>
	</div>
	<div class="bg-page-content">
		<div class="inner">
			<h2>Coming Soon</h2>
			<!-- Type here opening date -->
			<input type="hidden" id="countDownDate" name="countDownDate" value="<?php echo $this->construction_date;?>" expireword="Welcome">
			<div class="timer">
				<h1 id="timer"></h1></div>
			<p><?php echo $this->construction_text;?></p>
			<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
				'id'=>'notify-area',
				'action' => Yii::app()->createUrl('dorasite/newsletter', array('layout'=>'classic')),
				'enableAjaxValidation'=>true,
				'htmlOptions' => array(
					'class' => 'notify-area',
				),
			)); ?>
				<?php echo $form->textField($model,'email_i', array('maxlength'=>32, 'id'=>'email', 'placeholder'=>'E-mail')); ?>
				<?php echo CHtml::tag('button', array('data-title'=>'Notify Me', 'class'=>'notify ripplelink', 'onclick' => 'setEnableSave()'), Yii::t('phrase', 'Notify Me')); ?>
			<?php $this->endWidget(); ?>
		</div>
	</div>
	<div class="arrow">
		<a href="#What We Do"><i class="ion-ios-arrow-down"></i></a>
	</div>
</section>