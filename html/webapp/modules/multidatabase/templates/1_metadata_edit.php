<?php
// デフォルト指定開始---------------------------------------------------------------
/* 編集指示 */
$displaySkipItem = array();
$sprintfText = array();
$editFunction = array();
$sprintfReplace = array();
$googleMap = array(); // 内容もarray指定。ここで指定した項目の次にgooglemapを表示する。指定するのは元となる住所の項目番
$nameReplace = array(); // ここで指定した項目のnameを置き換える
$optionEdit = array(); // 内容による置き換え指定。内容もarray指定。array(値が○○の時だけ編集する, 値は利用しないフラグ)
$changeType = array(); // ここで指定されたtypeに変更する
// 

// デフォルト指定終了---------------------------------------------------------------

// ↓ここから個別の指定-------------------------------------------------------------

// 表示をスキップする指定-----------------------------------------------------------
$displaySkipItem = array(64, 65, 66, 76, 77, 88);


// 編集する指定-----------------------------------------------------------
$sprintfText[63] = '〒%s %s%s %s';
$editFunction[63] = 'zip';
$sprintfReplace[63] = array(64, 65, 66);
$googleMap[67] = array(64, 65);
$googleMapLL[67] = 94;
$nameReplace[63] = '住所';
$optionEdit[74] = array('あり', 1, MULTIDATABASE_META_TYPE_TEXTAREA); // 内容もarray指定。array(値が○○の時だけ編集する, 値は利用しないフラグ, 置き換え時にタイプを変更したいときはtype指定。変更しないときは-1を指定する)
$sprintfText[74] = '%s';
$sprintfReplace[74] = array(76);

$optionEdit[75] = array('あり', 1, MULTIDATABASE_META_TYPE_TEXTAREA); // 内容もarray指定。array(値が○○の時だけ編集する, 値は利用しないフラグ, 置き換え時にタイプを変更したいときはtype指定。変更しないときは-1を指定する)
$sprintfText[75] = '%s';
$sprintfReplace[75] = array(77);

$optionEdit[87] = array('加入', 0, MULTIDATABASE_META_TYPE_TEXTAREA); // 内容もarray指定。array(値が○○の時だけ編集する, 値は利用しないフラグ, 置き換え時にタイプを変更したいときはtype指定。変更しないときは-1を指定する)
$sprintfText[87] = '%s 特典：%s';
$sprintfReplace[87] = array(88);


