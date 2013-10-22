<?php

class FinTaxSchemeInfoController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}
/**
public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'roles'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'roles'=>array('UserCreator'),
				),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}*/
public function accessRules() {
	return array(
			array('allow',
					//'actions'=>array('index', 'view', 'login'),
					'actions'=>array('login'),
					'users'=>array('*'),
			),
			array('allow',
					'actions'=>array('profile', 'logout', 'changepassword', 'passwordexpired', 'delete', 'browse'),
					'users'=>array('@'),
			),
			array('allow',
					'actions'=>array('index', 'view', 'admin','delete','create','update', 'list', 'assign', 'generateData', 'csv'),
					'expression' => 'Yii::app()->user->isAdmin()'
			),
			array('allow',
					'actions'=>array('create'),
					'expression' => 'Yii::app()->user->can("user_create")'
			),
			array('allow',
					'actions'=>array('admin'),
					'expression' => 'Yii::app()->user->can("user_admin")'
			),
			array('deny',  // deny all other users
					'users'=>array('*'),
			),
	);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'FinTaxSchemeInfo'),
		));
	}

	public function actionCreate() {
		$model = new FinTaxSchemeInfo;

		$this->performAjaxValidation($model, 'fin-tax-scheme-info-form');

		if (isset($_POST['FinTaxSchemeInfo'])) {
			$model->setAttributes($_POST['FinTaxSchemeInfo']);
			$relatedData = array(
				'finTaxInfos' => $_POST['FinTaxSchemeInfo']['finTaxInfos'] === '' ? null : $_POST['FinTaxSchemeInfo']['finTaxInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->tax_scheme_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'FinTaxSchemeInfo');

		$this->performAjaxValidation($model, 'fin-tax-scheme-info-form');

		if (isset($_POST['FinTaxSchemeInfo'])) {
			$model->setAttributes($_POST['FinTaxSchemeInfo']);
			$relatedData = array(
				'finTaxInfos' => $_POST['FinTaxSchemeInfo']['finTaxInfos'] === '' ? null : $_POST['FinTaxSchemeInfo']['finTaxInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->tax_scheme_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'FinTaxSchemeInfo')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('FinTaxSchemeInfo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new FinTaxSchemeInfo('search');
		$model->unsetAttributes();

		if (isset($_GET['FinTaxSchemeInfo']))
			$model->setAttributes($_GET['FinTaxSchemeInfo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}