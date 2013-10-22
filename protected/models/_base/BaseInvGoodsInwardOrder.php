<?php

/**
 * This is the model base class for the table "inv_goods_inward_order".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "InvGoodsInwardOrder".
 *
 * Columns in table "inv_goods_inward_order" available as properties of the model,
 * followed by relations of table "inv_goods_inward_order" available as properties of the model.
 *
 * @property integer $in_order_id
 * @property string $inward_date
 * @property integer $po_id
 * @property string $item_name
 * @property string $vendor_name
 * @property string $quantity
 * @property string $rate
 * @property string $amount_value
 *
 * @property InvPoInfo $po
 * @property InvInwardGoodsPayable[] $invInwardGoodsPayables
 */
abstract class BaseInvGoodsInwardOrder extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'inv_goods_inward_order';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'InvGoodsInwardOrder|InvGoodsInwardOrders', $n);
	}

	public static function representingColumn() {
		return 'inward_date';
	}

	public function rules() {
		return array(
			array('inward_date, po_id, item_name, vendor_name, quantity, rate, amount_value', 'required'),
			array('po_id', 'numerical', 'integerOnly'=>true),
			array('item_name, quantity, rate, amount_value', 'length', 'max'=>50),
			array('vendor_name', 'length', 'max'=>30),
			array('in_order_id, inward_date, po_id, item_name, vendor_name, quantity, rate, amount_value', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'po' => array(self::BELONGS_TO, 'InvPoInfo', 'po_id'),
			'invInwardGoodsPayables' => array(self::MANY_MANY, 'InvInwardGoodsPayable', 'inward_goods_order_payable(in_order_id, in_payable_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'invInwardGoodsPayables' => 'InwardGoodsOrderPayable',
		);
	}

	public function attributeLabels() {
		return array(
			'in_order_id' => Yii::t('app', 'In Order'),
			'inward_date' => Yii::t('app', 'Inward Date'),
			'po_id' => null,
			'item_name' => Yii::t('app', 'Item Name'),
			'vendor_name' => Yii::t('app', 'Vendor Name'),
			'quantity' => Yii::t('app', 'Quantity'),
			'rate' => Yii::t('app', 'Rate'),
			'amount_value' => Yii::t('app', 'Amount Value'),
			'po' => null,
			'invInwardGoodsPayables' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('in_order_id', $this->in_order_id);
		$criteria->compare('inward_date', $this->inward_date, true);
		$criteria->compare('po_id', $this->po_id);
		$criteria->compare('item_name', $this->item_name, true);
		$criteria->compare('vendor_name', $this->vendor_name, true);
		$criteria->compare('quantity', $this->quantity, true);
		$criteria->compare('rate', $this->rate, true);
		$criteria->compare('amount_value', $this->amount_value, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}