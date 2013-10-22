<?php

Yii::import('application.models._base.BaseRestoBillingOrder');

class RestoBillingOrder extends BaseRestoBillingOrder
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}