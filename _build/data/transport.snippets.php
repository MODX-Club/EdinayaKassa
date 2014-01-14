<?php

$snippets = array();


// edinayakassa.getButton
$snippet= $modx->newObject('modSnippet');

$str = 'a:6:{s:15:"WMI_CURRENCY_ID";a:7:{s:4:"name";s:15:"WMI_CURRENCY_ID";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"[[++edinayakassa.currency_id]]";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"WMI_FAIL_URL";a:7:{s:4:"name";s:12:"WMI_FAIL_URL";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"[[++edinayakassa.failure_url]]";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"WMI_MERCHANT_ID";a:7:{s:4:"name";s:15:"WMI_MERCHANT_ID";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"[[++edinayakassa.merchant_id]]";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"WMI_SUCCESS_URL";a:7:{s:4:"name";s:15:"WMI_SUCCESS_URL";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"[[++edinayakassa.success_url]]";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"description";a:7:{s:4:"name";s:11:"description";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:8:"order_id";a:7:{s:4:"name";s:8:"order_id";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}';

$params = unserialize($str);

$snippet->fromArray(array(
    'name' => 'edinayakassa.getButton',
    'description' => 'Получаем кнопку для оплаты',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/edinayakassa.getButton.php'),
    'properties'    => $params,
),'',true,true);
$snippets[] = $snippet;


// edinayakassa.payResult
$snippet= $modx->newObject('modSnippet');
$snippet->fromArray(array(
    'name' => 'edinayakassa.payResult',
    'description' => 'Проверка результата оплаты',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/edinayakassa.payResult.php'),
),'',true,true);
$snippets[] = $snippet;


return $snippets;