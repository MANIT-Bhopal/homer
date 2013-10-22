<?php

Yii::import('application.models._base.BaseHouseKeeping');

class HouseKeeping extends BaseHouseKeeping
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	public static function getStatusList() {
		return array(
				'CO' => 'Complete',
				'IP' => 'In Progress',
				'PN' => 'Pending',
				
		);
	}
}