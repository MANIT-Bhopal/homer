<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="_mainmenu">
		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Base Language', 'url'=>array('/baseLanguage')),
				array('label'=>'Country', 'url'=>array('/country')),
				array('label'=>'Currency', 'url'=>array('/currency')),
				array('label'=>'Hotel Info', 'url'=>array('/hotelInfo')),
				array('label'=>'House Keeping', 'url'=>array('/houseKeeping')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
        */

$this->widget('application.extensions.mbmenu.MbMenu',array(
		'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Administration', 
						'items'=>array(
								array('label'=>'Country', 'url'=>array('/country')),							
								array('label'=>'Currency', 'url'=>array('/currency')),
								array('label'=>'Hotel Info', 'url'=>array('/hotelInfo')),
								array('label'=>'Base', 'url'=>array('#'), 
										'items'=>array(
												array('label'=>'Language', 'url'=>array('/baseLanguage')),
												array('label'=>'Facility', 'url'=>array('/baseFacilityInfo')),
												array('label'=>'Occasion', 'url'=>array('/baseOccasionInfo')),
												array('label'=>'Service Info', 'url'=>array('/baseServiceInfo')),
								       )),
						),
				),
				array('label'=>'Infrastructure', 
						'items'=>array(
								array('label'=>'Department', 'url'=>array('/infraDeptInfo')),
								array('label'=>'Floor', 'url'=>array('/infraFloorInfo')),
								array('label'=>'Resto Table', 'url'=>array('/infraRestoTableInfo')),
								array('label'=>'Resto Table Type', 'url'=>array('/infraRestoTableTypeInfo')),
								array('label'=>'Room Info', 'url'=>array('/infraRoomInfo')),
								array('label'=>'Room Type', 'url'=>array('/infraRoomTypeInfo')),
						),
				),				
				array('label'=>'Reservation', 
						'items'=>array(
								array('label'=>'Check In', 'url'=>array('/resCheckIn')),
								array('label'=>'Check Out', 'url'=>array('/resCheckOut')),
								array('label'=>'Room', 'url'=>array('/resRoom')),
								array('label'=>'Adv Payment', 'url'=>array('/resAdvancePayment')),
						),
				),
				array('label'=>'F&B', 
						'items'=>array(
								array('label'=>'Resto Billing Order', 'url'=>array('/restoBillingOrder')),
								array('label'=>'Bar Billing Order', 'url'=>array('/barBillingOrder')),
								array('label'=>'Table Info', 'url'=>array('/tableCustomerInfo')),
								array('label'=>'Menu', 
										'items'=>array(
												array('label'=>'Menu Card', 'url'=>array('/menuCardInfo')),
												array('label'=>'Category', 'url'=>array('/menuCategoryInfo')),
												array('label'=>'Menu Info', 'url'=>array('/menuInfo')),
										)),
								
						),
				),
				array('label'=>'Service', 
						'items'=>array(
								array('label'=>'House Keeping', 'url'=>array('/houseKeeping')),
								array('label'=>'Room Service', 'url'=>array('/roomServiceProvided')),
				
						),
				),
				
				array('label'=>'Inventory', 'url'=>array('#'),
						'items'=>array(
								array('label'=>'Inward Goods Order', 'url'=>array('/invGoodsInwardOrder')),
								array('label'=>'Inward Goods Payable', 'url'=>array('/invInwardGoodsPayable')),
								array('label'=>'Goods Request', 'url'=>array('/invGoodsRequest')),
								array('label'=>'Goods Issue Order', 'url'=>array('/invGoodsIssueOrder')),
								array('label'=>'Goods Receive', 'url'=>array('/invGoodsReceiveInfo')),
								array('label'=>'Item Info', 'url'=>array('/invItemInfo')),
								array('label'=>'Item Type', 'url'=>array('/invItemTypeInfo')),
								array('label'=>'Metric Unit', 'url'=>array('/invMetricUnitInfo')),
								array('label'=>'Vendor', 'url'=>array('/invVendorInfo')),
								array('label'=>'PO', 'url'=>array('/invPoInfo')),
								array('label'=>'PO Payable', 'url'=>array('/invPoPayable')),
						),
				),
				
				array('label'=>'Finance', 'url'=>array('#'),
						'items'=>array(
								array('label'=>'Payment Mode', 'url'=>array('/finPaymentModeInfo')),
								array('label'=>'Tax', 'url'=>array('/finTaxInfo')),
								array('label'=>'Tax Scheme', 'url'=>array('/finTaxSchemeInfo')),
							
						),
				),
				
				array('label'=>'User Admin', 'url'=>array('//user'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('//user/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
				
		),
));
//if (Yii::app()->user->isGuest) {$this->widget('application.modules.user.components.LoginWidget');}
?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<!-- Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/> -->
		<?//php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
