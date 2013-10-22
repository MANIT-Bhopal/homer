<?php

Yii::import('application.models._base.BaseInvPoPayable');

class InvPoPayable extends BaseInvPoPayable
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}