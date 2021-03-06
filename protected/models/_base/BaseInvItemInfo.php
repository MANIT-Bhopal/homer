<?php

/**
 * This is the model base class for the table "inv_item_info".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "InvItemInfo".
 *
 * Columns in table "inv_item_info" available as properties of the model,
 * followed by relations of table "inv_item_info" available as properties of the model.
 *
 * @property integer $item_id
 * @property string $item_name
 * @property integer $item_type_id
 * @property string $unit_code
 * @property integer $opening_stock
 * @property integer $max_qty
 * @property integer $min_qty
 * @property integer $std_qty
 * @property integer $std_rate
 * @property integer $current_balance
 *
 * @property InvGoodsRequest[] $invGoodsRequests
 * @property InvItemTypeInfo $itemType
 * @property InvMetricUnitInfo $unitCode
 * @property InvPoInfo[] $invPoInfos
 * @property InvVendorInfo[] $invVendorInfos
 */
abstract class BaseInvItemInfo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'inv_item_info';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'InvItemInfo|InvItemInfos', $n);
	}

	public static function representingColumn() {
		return 'item_name';
	}

	public function rules() {
		return array(
			array('item_name, item_type_id, unit_code, opening_stock, max_qty, min_qty, std_qty, std_rate', 'required'),
			array('item_type_id, opening_stock, max_qty, min_qty, std_qty, std_rate, current_balance', 'numerical', 'integerOnly'=>true),
			array('item_name', 'length', 'max'=>50),
			array('unit_code', 'length', 'max'=>5),
			array('current_balance', 'default', 'setOnEmpty' => true, 'value' => null),
			array('item_id, item_name, item_type_id, unit_code, opening_stock, max_qty, min_qty, std_qty, std_rate, current_balance', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'invGoodsRequests' => array(self::HAS_MANY, 'InvGoodsRequest', 'item_id'),
			'itemType' => array(self::BELONGS_TO, 'InvItemTypeInfo', 'item_type_id'),
			'unitCode' => array(self::BELONGS_TO, 'InvMetricUnitInfo', 'unit_code'),
			'invPoInfos' => array(self::HAS_MANY, 'InvPoInfo', 'item_id'),
			'invVendorInfos' => array(self::MANY_MANY, 'InvVendorInfo', 'inv_vendor_item_info(item_id, vendor_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'invVendorInfos' => 'InvVendorItemInfo',
		);
	}

	public function attributeLabels() {
		return array(
			'item_id' => Yii::t('app', 'Item'),
			'item_name' => Yii::t('app', 'Item Name'),
			'item_type_id' => null,
			'unit_code' => null,
			'opening_stock' => Yii::t('app', 'Opening Stock'),
			'max_qty' => Yii::t('app', 'Max Qty'),
			'min_qty' => Yii::t('app', 'Min Qty'),
			'std_qty' => Yii::t('app', 'Std Qty'),
			'std_rate' => Yii::t('app', 'Std Rate'),
			'current_balance' => Yii::t('app', 'Current Balance'),
			'invGoodsRequests' => null,
			'itemType' => null,
			'unitCode' => null,
			'invPoInfos' => null,
			'invVendorInfos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('item_id', $this->item_id);
		$criteria->compare('item_name', $this->item_name, true);
		$criteria->compare('item_type_id', $this->item_type_id);
		$criteria->compare('unit_code', $this->unit_code);
		$criteria->compare('opening_stock', $this->opening_stock);
		$criteria->compare('max_qty', $this->max_qty);
		$criteria->compare('min_qty', $this->min_qty);
		$criteria->compare('std_qty', $this->std_qty);
		$criteria->compare('std_rate', $this->std_rate);
		$criteria->compare('current_balance', $this->current_balance);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}