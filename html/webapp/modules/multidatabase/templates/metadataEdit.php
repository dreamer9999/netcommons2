<?php
/* metaデータ表示編集 */
/*
ある項目の表示形式を指定できる
指定形式はその項目自身のsubstr編集
他の項目を付け足すなどsprintfでの編集
が行える

環境
*multidatabase_id*_metadata_edit.txt
*multidatabase_id*＜実際のID番号

ex.
$sprintfText[*metadata_id*] = "%s is open";

metadata_id表示時にこの該当multidatabase_idファイルが存在し、
該当metadata_idのsprintfTextがあればここで編集した結果を表示する

その項目自身の編集
ex.郵便番号　2220011　→222-0011
$editFunction[*metadata_id*] = 'zip';

その項目以外の編集
＊複数のmetadataを使って編集するときは最初のmetadata_idでこの　メタデータ表示編集　を行う
$sprintfAdditionalArray[*metadata_id*] = array(*metadata_id*, *metadata_id*, … *metadata_id*);
ex.
$sprintfAdditonalArray[*metadata_id*] = array(64, 65);


利用例
63 郵便番号　1350064
64 都道府県　東京都
65 住所     東京都江東区青海３３３
66 ビル名など     青海ビル3F


$sprintfText[63] = '〒%s %s%s %s';
$editFunction[63] = 'zip';
$sprintfReplaceArray[63] = array(64, 65, 66);

表示
〒135-0064 東京都江東区青海３３３ 青海ビル3F

googlemap対応
$googleMap = array(); // ここで指定した項目の次にgooglemapを表示する。指定するのは元となる住所の項目番号$googleMap[63] = array(64, 65);

タイトル置き換え
$nameReplace[] = "xxx"; // ここで指定した項目のタイトルを置き換える

*/



class metadataEdit
{
	public $sprintfText = array();
	public $replaceName;
	public $googleMapAlt;
	public $googleMapLL;
	public $googleMapMarkName;
	public $type;
	public $multipleSeparator;
	public $nameFlag;
	
	protected $item = array();
		
	public function isDisplaySkipItem($mode, $multidatabase_id, $metadata_id)
	{
		$extend = '';
		if($mode == 'list'){
			$extend = '_list';
		}
		$fileName = dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit'.$extend.'.php';
		if (file_exists($fileName)) {
			require($fileName);
			if (array_search($metadata_id, $displaySkipItem) !== false){
				return true;
			}
			return false;
		} else {
			// 設定ファイルがなければ終了
			return false;
		}
	}

	public function edit($mode, $item, $multidatabase_id, $metadata_id)
	{
		$this->replaceName = '';
		$this->googleMapAlt = '';
		$this->type = '';
		$this->googleMapLL = '';
		$this->googleMapMarkName = '';
		$this->multipleSeparator = '';
		$content = $item[$metadata_id];
		
		$this->nameFlag = '';

		$extend = '';
		if($mode == 'list'){
			$extend = '_list';
		}
		$fileName = dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit'.$extend.'.php';
		if (file_exists($fileName)) {
			require($fileName);
		} else {
			// 設定ファイルがなければ終了
			return $content;
		}
		
		
		// 項目名置き換え
		if(array_key_exists($metadata_id, $nameReplace)){
			$this->replaceName = $nameReplace[$metadata_id];
		}
		
		$doFlag = 1;
		$unShiftFlag = 1;
		
		if(array_key_exists($metadata_id, $optionEdit)){
			list($value, $flag, $type) = $optionEdit[$metadata_id];
			if($content == $value){
				// この値だったら編集する　true
				if($flag == 1){
					// 編集するとき自身を使わない　true
					$unShiftFlag = 0;
				}
				if($type > -1){
					$this->type = $type;
				}
			} else {
				$doFlag = 0;
			}
		}
		
		if((array_key_exists($metadata_id, $sprintfText)) and ($doFlag == 1)) {
			// 項目編集指示あり
			// その項目自身の編集指示
			if(array_key_exists($metadata_id, $editFunction)){
				$option = array();
				if(array_key_exists($metadata_id, $editFunctionOption)){
					$option = $editFunctionOption[$metadata_id];
				}
				$this->item = $item;
				$content = $this->_editFunction($content, $editFunction[$metadata_id], $option);
			}
			
			// その項目以外を使った編集指示
			if(array_key_exists($metadata_id, $sprintfReplace)){
				// あり
				$otherItem = array();
				
				foreach($sprintfReplace[$metadata_id] as $key => $val){
					$otherItem[] = $item[$val];
				}
				if($unShiftFlag == 1){
					// 自身を使わない指示がないとき
					array_unshift($otherItem, $content);
				}
				$content = vsprintf($sprintfText[$metadata_id], $otherItem);
				
			} else {
				$content = sprintf($sprintfText[$metadata_id], $content);
			}
		}
		
		
		// googlemap 住所から
		if(array_key_exists($metadata_id, $googleMap)){
			// googlemap挿入
			foreach($googleMap[$metadata_id] as $key => $val){
				$this->googleMapAlt .= $item[$val];
			}
		}
		// googlemap 緯度経度から
		if(array_key_exists($metadata_id, $googleMapLL)){
			// googlemap挿入
			$this->googleMapLL = $item[$googleMapLL[$metadata_id]];
		}
		// googlemap markname指定
		if(array_key_exists($metadata_id, $googleMapMarkName)){
			$this->googleMapMarkName = $item[$googleMapMarkName[$metadata_id]];
		}
		// イコール無視 指定した項目の値が指定した内容とイコールだったとき内容を空白とする
		if(array_key_exists($metadata_id, $eqIgnoreString)){
			if($item[$metadata_id] == $eqIgnoreString[$metadata_id]){
				$content = '';
			}
		}
		
		// multipleタイプの時のセパレータを指定する。ここで指定しない場合は<br />となる
		if(array_key_exists($metadata_id, $multipleSeparator)){
			$this->multipleSeparator = $multipleSeparator[$metadata_id];
		}
		
		if(array_key_exists($metadata_id, $nameFlag)){
			$this->nameFlag = $nameFlag[$metadata_id];
		}
		
		if(array_key_exists($metadata_id, $changeType)){
			$this->type = $changeType[$metadata_id];
		}
		
		return $content;
	}


	protected function _editFunction($content, $kind, $option)
	{
		switch($kind){
			case 'zip':
				if(strlen($content) < 7){
					return $content;
				}
				return substr($content, 0, 3).'-'.substr($content, 3, 4);
				break;
			case 'list_header':
				// アイコンと概要を編集
				$sprintfTemp = '<table><tr><td style="width:190px;"><div style="width:190px;text-align:center" name="list_icon">&nbsp;<img src="%s">&nbsp;</div></td><td valign="top"><div style="margin-left:10px;height:110px;width:538px;" name="list_gaiyo">%s</div><div style="margin-left:10px;width:450px;float:left;line-height:40px;vertical-align:bottom;font-size:0.9em;" name="list_address_linkicon">%s</div><div style="width:80px;float:left;height:30px;padding-top:10px;">%s</div><div style="clear:both;"></div><div style="margin-left:10px;" name="list_kind">%s</div></td></tr></table>';
				$len = 120;
				// 概要
				if(mb_strlen($this->item[4]) > $len){
					$gaiyo = nl2br(mb_substr($this->item[4], 0, $len)).' …';
				} else {
					$gaiyo = nl2br($this->item[4]);
				}
				// 住所
				$address = substr($this->item[63], 0, 3).'-'.substr($this->item[63], 3, 4);
				$address .= ' '.$this->item[64].$this->item[65].$this->item[66];

				// リンクボタン
				$link = '<a href="%s" target="_blank"><img src="images/multidatabase/%s" style="width:20px;"></a>&nbsp;';
				// home
				if(($this->item[7] != '') and ($this->item[7] != 'http://')){
					$list_link_buttons = sprintf($link, $this->item[7], 'web.jpg');
				}
				// facebook
				if(($this->item[62] != '') and ($this->item[62] != 'http://')){
					$list_link_buttons .= sprintf($link, $this->item[62], 'facebook.png');
				}
				// twitter
				if(($this->item[72] != '') and ($this->item[72] != 'http://')){
					$list_link_buttons .= sprintf($link, $this->item[72], 'twitter-bird-white-on-blue.png');
				}
				$list_link_buttons = '<div style="margin-left:10px;">'.$list_link_buttons.'</div>';
				// list_buttons
				// ドロップイン　月利用　コワーキングVISAボタン表示 74 75 87
				$list_buttons = '';
				$listSprintfTemp = '<img src="images/multidatabase/%s">&nbsp;';
				
				if($this->item[74] == 'あり'){
					$list_buttons .= sprintf($listSprintfTemp, 'dropin_30_100.gif');
				}
				if($this->item[75] == 'あり'){
					$list_buttons .= sprintf($listSprintfTemp, 'monthly_30_100.gif');
				}
				if($this->item[87] == '加入'){
					$list_buttons .= sprintf($listSprintfTemp, 'visa_30_150.gif');
				}
				
				return sprintf($sprintfTemp, $content, $gaiyo, $address, $list_link_buttons, $list_buttons);
				break;
			case 'detail_title':
				// 詳細表示のタイトル　アイコン＋タイトル
				$detail_title = '<div class="float-left"><img src="%s" style="width:100px"></div><div class="float-left valign-middle" style="line-height:100px;padding-left:10px;font-weight:bold;font-size:1.3em;">%s<div class="float-clear"></div>';
				return sprintf($detail_title, $this->item[95], $content);
				break;
			case 'detail_gaiyo':
				// 詳細表示の概要　
				$detail_gaiyo = '<div style="width:716px;background-color:#ffffff;padding:10px;font-size:1.1em;border:1px solid #ffbb40;">%s</div>';
				return sprintf($detail_gaiyo,  nl2br($content));
				break;

		}
	}
}