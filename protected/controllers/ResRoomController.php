<?php

class ResRoomController extends GxController {

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
			'model' => $this->loadModel($id, 'ResRoom'),
		));
	}

	public function actionCreate() {
		$model = new ResRoom;

		$this->performAjaxValidation($model, 'res-room-form');

		if (isset($_POST['ResRoom'])) {
			$model->setAttributes($_POST['ResRoom']);
			$relatedData = array(
				'infraRoomInfos' => $_POST['ResRoom']['infraRoomInfos'] === '' ? null : $_POST['ResRoom']['infraRoomInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->res_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'ResRoom');

		$this->performAjaxValidation($model, 'res-room-form');

		if (isset($_POST['ResRoom'])) {
			$model->setAttributes($_POST['ResRoom']);
			$relatedData = array(
				'infraRoomInfos' => $_POST['ResRoom']['infraRoomInfos'] === '' ? null : $_POST['ResRoom']['infraRoomInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->res_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'ResRoom')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ResRoom');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ResRoom('search');
		$model->unsetAttributes();

		if (isset($_GET['ResRoom']))
			$model->setAttributes($_GET['ResRoom']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}