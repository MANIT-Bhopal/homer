<?php

Yii::import('application.models._base.BaseInvGoodsRequest');

class InvGoodsRequest extends BaseInvGoodsRequest
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}