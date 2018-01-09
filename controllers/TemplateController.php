<?php
/**
 * TemplateController
 * @var $this TemplateController
 * 
 * Reference start
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/dora
 *
 *----------------------------------------------------------------------------------------------------------
 */

class TemplateController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		Yii::app()->theme = 'dora';
		$this->layout = 'front_default';
		Utility::applyViewPath(__dir__, false);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() 
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','galaxy','island','pattern','classic','image','colorfulimage','particle','stars'),
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionGalaxy()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_galaxy');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIsland()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_island');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionPattern()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_pattern');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionClassic()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_classic');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionImage()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_image');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionColorfulimage()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_colorfulimage');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionParticle()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_particle');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionStars()
	{
		$this->pageTitle = Yii::t('phrase', 'Dora. - Coming Soon Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_stars');
	}
}