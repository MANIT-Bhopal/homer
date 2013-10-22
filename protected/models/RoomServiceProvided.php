<?php

Yii::import('application.models._base.BaseRoomServiceProvided');

class RoomServiceProvided extends BaseRoomServiceProvided
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}