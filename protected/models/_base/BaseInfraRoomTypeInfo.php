<?php

/**
 * This is the model base class for the table "infra_room_type_info".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "InfraRoomTypeInfo".
 *
 * Columns in table "infra_room_type_info" available as properties of the model,
 * followed by relations of table "infra_room_type_info" available as properties of the model.
 *
 * @property integer $room_type_id
 * @property string $room_type
 * @property string $bed_size
 * @property string $charge_amount
 * @property string $handicap_support
 * @property string $remarks
 * @property string $currency_code
 *
 * @property InfraRoomInfo[] $infraRoomInfos
 * @property Currency $currencyCode
 * @property BaseFacilityInfo[] $baseFacilityInfos
 */
abstract class BaseInfraRoomTypeInfo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'infra_room_type_info';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'InfraRoomTypeInfo|InfraRoomTypeInfos', $n);
	}

	public static function representingColumn() {
		return 'room_type';
	}

	public function rules() {
		return array(
			array('room_type, bed_size, charge_amount, currency_code', 'required'),
			array('room_type, bed_size, charge_amount', 'length', 'max'=>50),
			array('handicap_support', 'length', 'max'=>1),
			array('currency_code', 'length', 'max'=>3),
			array('remarks', 'safe'),
			array('handicap_support, remarks', 'default', 'setOnEmpty' => true, 'value' => null),
			array('room_type_id, room_type, bed_size, charge_amount, handicap_support, remarks, currency_code', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'infraRoomInfos' => array(self::HAS_MANY, 'InfraRoomInfo', 'room_type_id'),
			'currencyCode' => array(self::BELONGS_TO, 'Currency', 'currency_code'),
			'baseFacilityInfos' => array(self::MANY_MANY, 'BaseFacilityInfo', 'room_type_facility(room_type_id, facility_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'baseFacilityInfos' => 'RoomTypeFacility',
		);
	}

	public function attributeLabels() {
		return array(
			'room_type_id' => Yii::t('app', 'Room Type'),
			'room_type' => Yii::t('app', 'Room Type'),
			'bed_size' => Yii::t('app', 'Bed Size'),
			'charge_amount' => Yii::t('app', 'Charge Amount'),
			'handicap_support' => Yii::t('app', 'Handicap Support'),
			'remarks' => Yii::t('app', 'Remarks'),
			'currency_code' => null,
			'infraRoomInfos' => null,
			'currencyCode' => null,
			'baseFacilityInfos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('room_type_id', $this->room_type_id);
		$criteria->compare('room_type', $this->room_type, true);
		$criteria->compare('bed_size', $this->bed_size, true);
		$criteria->compare('charge_amount', $this->charge_amount, true);
		$criteria->compare('handicap_support', $this->handicap_support, true);
		$criteria->compare('remarks', $this->remarks, true);
		$criteria->compare('currency_code', $this->currency_code);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}