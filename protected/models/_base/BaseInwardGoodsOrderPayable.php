<?php

/**
 * This is the model base class for the table "inward_goods_order_payable".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "InwardGoodsOrderPayable".
 *
 * Columns in table "inward_goods_order_payable" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $in_order_id
 * @property integer $in_payable_id
 *
 */
abstract class BaseInwardGoodsOrderPayable extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'inward_goods_order_payable';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'InwardGoodsOrderPayable|InwardGoodsOrderPayables', $n);
	}

	public static function representingColumn() {
		return array(
			'in_order_id',
			'in_payable_id',
		);
	}

	public function rules() {
		return array(
			array('in_order_id, in_payable_id', 'required'),
			array('in_order_id, in_payable_id', 'numerical', 'integerOnly'=>true),
			array('in_order_id, in_payable_id', 'safe', 'on'=>'search'),
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
			'in_order_id' => null,
			'in_payable_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('in_order_id', $this->in_order_id);
		$criteria->compare('in_payable_id', $this->in_payable_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}