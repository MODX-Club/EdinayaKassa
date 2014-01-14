<?php

$settings = array();


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.bill_serv_id',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.currency_id',     // set unique key
    'value' => 643,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.failure_url',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.success_url',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.merchant_id',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'edinayakassa.secret_key',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;



unset($setting);
return $settings;