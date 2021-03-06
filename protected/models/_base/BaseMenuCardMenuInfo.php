<?php

/**
 * This is the model base class for the table "menu_card_menu_info".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MenuCardMenuInfo".
 *
 * Columns in table "menu_card_menu_info" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $menu_info_id
 * @property integer $menu_card_id
 *
 */
abstract class BaseMenuCardMenuInfo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'menu_card_menu_info';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MenuCardMenuInfo|MenuCardMenuInfos', $n);
	}

	public static function representingColumn() {
		return array(
			'menu_info_id',
			'menu_card_id',
		);
	}

	public function rules() {
		return array(
			array('menu_info_id, menu_card_id', 'required'),
			array('menu_info_id, menu_card_id', 'numerical', 'integerOnly'=>true),
			array('menu_info_id, menu_card_id', 'safe', 'on'=>'search'),
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
			'menu_info_id' => null,
			'menu_card_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('menu_info_id', $this->menu_info_id);
		$criteria->compare('menu_card_id', $this->menu_card_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}