<?php

/**
 * This is the model base class for the table "room_type_facility".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "RoomTypeFacility".
 *
 * Columns in table "room_type_facility" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $room_type_id
 * @property integer $facility_id
 *
 */
abstract class BaseRoomTypeFacility extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'room_type_facility';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'RoomTypeFacility|RoomTypeFacilities', $n);
	}

	public static function representingColumn() {
		return array(
			'room_type_id',
			'facility_id',
		);
	}

	public function rules() {
		return array(
			array('room_type_id, facility_id', 'numerical', 'integerOnly'=>true),
			array('room_type_id, facility_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('room_type_id, facility_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'room_type_id' => null,
			'facility_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('room_type_id', $this->room_type_id);
		$criteria->compare('facility_id', $this->facility_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}