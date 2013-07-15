<?php
// デフォルト指定開始---------------------------------------------------------------
/* 編集指示 */
$displaySkipItem = array();
$sprintfText = array();
$editFunction = array();
$sprintfReplace = array();
// デフォルト指定終了---------------------------------------------------------------
// 表示をスキップする指定-----------------------------------------------------------
$displaySkipItem = array(64, 65, 66);


// 編集する指定-----------------------------------------------------------
$sprintfText[63] = '〒%s %s%s %s this is endxxxxxxxxxxxxxxxxxxxxxxxxxxxx ';
//$sprintfText[63] = '〒%s';
$editFunction[63] = 'zip';
$sprintfReplace[63] = array(64, 65, 66);
