<?php

Yii::import('application.models._base.BasePoOrderPayable');

class PoOrderPayable extends BasePoOrderPayable
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}