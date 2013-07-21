<?php
// リスト用
// デフォルト指定開始---------------------------------------------------------------
/* 編集指示 */
$sprintfText = array();
$editFunction = array();
$sprintfReplace = array();
$googleMap = array(); // 内容もarray指定。ここで指定した項目の次にgooglemapを表示する。指定するのは元となる住所の項目
$googleMapLL = array(); // ここで指定した項目の次にgooglemapを表示する。指定するのは元となる緯度経度の項目
$googleMapMarkName = array(); // ここで指定した項目のマーカーの名前を指定の項目から表示する
$nameReplace = array(); // ここで指定した項目のnameを置き換える
$optionEdit = array(); // 内容による置き換え指定。内容もarray指定。array(値が○○の時だけ編集する, 値は利用しないフラグ)
$changeType = array(); // ここで指定されたtypeに変更する
$eqIgnoreString = array(); // ここで指定された項目内容が指定された文字列とイコールだったら空に置き換える
$multipleSeparator = array(); // multipleタイプの時のセパレータを指定する。ここで指定しない場合は<br />となる

$nameFlag = array(); // 指定した１もしくは0でmetadata.name_flagを置き換える
$editFunctionOption = array(); // editFunctionで指定した編集で利用する項目名をarrayで指定する

// ↓キーのみを指定するので個別指定で行う
//$displaySkipItem = array();

// デフォルト指定終了---------------------------------------------------------------

// ↓ここから個別の指定-------------------------------------------------------------

// 表示をスキップする指定-----------------------------------------------------------
$displaySkipItem = array(62, 72, 4, 64, 63, 65, 66, 7, 75, 87, 74);


// 編集する指定-----------------------------------------------------------
// 以下mode=list時指示
$sprintfText[95] = '%s';
$nameFlag[95] = 0;
$editFunction[95] = 'list_header';
$changeType[95] = 99;

// ドロップイン他　list_buttons
$sprintfText[74] = '%s';
$nameFlag[74] = 0;
$editFunction[74] = 'list_buttons';
$changeType[74] = 99;
