<?php

Yii::import('application.models._base.BaseBaseLanguage');

class BaseLanguage extends BaseBaseLanguage
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}