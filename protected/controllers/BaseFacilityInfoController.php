<?php

class BaseFacilityInfoController extends GxController {

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
}
*/
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
			'model' => $this->loadModel($id, 'BaseFacilityInfo'),
		));
	}

	public function actionCreate() {
		$model = new BaseFacilityInfo;

		$this->performAjaxValidation($model, 'base-facility-info-form');

		if (isset($_POST['BaseFacilityInfo'])) {
			$model->setAttributes($_POST['BaseFacilityInfo']);
			$relatedData = array(
				'infraRoomTypeInfos' => $_POST['BaseFacilityInfo']['infraRoomTypeInfos'] === '' ? null : $_POST['BaseFacilityInfo']['infraRoomTypeInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->facility_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'BaseFacilityInfo');

		$this->performAjaxValidation($model, 'base-facility-info-form');

		if (isset($_POST['BaseFacilityInfo'])) {
			$model->setAttributes($_POST['BaseFacilityInfo']);
			$relatedData = array(
				'infraRoomTypeInfos' => $_POST['BaseFacilityInfo']['infraRoomTypeInfos'] === '' ? null : $_POST['BaseFacilityInfo']['infraRoomTypeInfos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->facility_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'BaseFacilityInfo')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('BaseFacilityInfo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new BaseFacilityInfo('search');
		$model->unsetAttributes();

		if (isset($_GET['BaseFacilityInfo']))
			$model->setAttributes($_GET['BaseFacilityInfo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}