<?php

Yii::import('application.models._base.BaseBaseServiceInfo');

class BaseServiceInfo extends BaseBaseServiceInfo
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}