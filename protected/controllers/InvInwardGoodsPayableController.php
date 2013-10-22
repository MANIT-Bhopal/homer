<?php

class InvInwardGoodsPayableController extends GxController {

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
			'model' => $this->loadModel($id, 'InvInwardGoodsPayable'),
		));
	}

	public function actionCreate() {
		$model = new InvInwardGoodsPayable;

		$this->performAjaxValidation($model, 'inv-inward-goods-payable-form');

		if (isset($_POST['InvInwardGoodsPayable'])) {
			$model->setAttributes($_POST['InvInwardGoodsPayable']);
			$relatedData = array(
				'invGoodsInwardOrders' => $_POST['InvInwardGoodsPayable']['invGoodsInwardOrders'] === '' ? null : $_POST['InvInwardGoodsPayable']['invGoodsInwardOrders'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->in_payable_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'InvInwardGoodsPayable');

		$this->performAjaxValidation($model, 'inv-inward-goods-payable-form');

		if (isset($_POST['InvInwardGoodsPayable'])) {
			$model->setAttributes($_POST['InvInwardGoodsPayable']);
			$relatedData = array(
				'invGoodsInwardOrders' => $_POST['InvInwardGoodsPayable']['invGoodsInwardOrders'] === '' ? null : $_POST['InvInwardGoodsPayable']['invGoodsInwardOrders'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->in_payable_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'InvInwardGoodsPayable')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('InvInwardGoodsPayable');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new InvInwardGoodsPayable('search');
		$model->unsetAttributes();

		if (isset($_GET['InvInwardGoodsPayable']))
			$model->setAttributes($_GET['InvInwardGoodsPayable']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}