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
ex.郵便番号　1350061　→135-0061
$editFunction[*metadata_id*] = 'zip';

その項目以外の編集
＊複数のmetadataを使って編集するときは最初のmetadata_idでこの　メタデータ表示編集　を行う
$sprintfAdditionalArray[*metadata_id*] = array(*metadata_id*, *metadata_id*, … *metadata_id*);
ex.
$sprintfAdditonalArray[*metadata_id*] = array(64, 65);


利用例
63 郵便番号　1350061
64 都道府県　東京都
65 住所     江東区豊洲３３３
66 ビル名など     豊洲ビル3F


$sprintfText[63] = '〒%s %s%s %s';
$editFunction[63] = 'zip';
$sprintfReplaceArray[63] = array(64, 65, 66);

表示
〒135-0061 東京都江東区豊洲３３３ 豊洲ビル3F

googlemap対応
$googleMap = array(); // ここで指定した項目の次にgooglemapを表示する。指定するのは元となる住所の項目番号$googleMap[63] = array(64, 65);

*/



class metadataEdit
{
	public $sprintfText = array();

	public function isDisplaySkipItem($multidatabase_id, $metadata_id)
	{
		if (file_exists(dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit.php')) {
			require(dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit.php');
			if (strlen(array_search($metadata_id, $displaySkipItem)) > 0){
				return true;
			}
		} else {
			return false;
		}		
	}

	public function edit($item, $multidatabase_id, $metadata_id)
	{
		$content = $item[$metadata_id];
		if (file_exists(dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit.php')) {
			require(dirname(__FILE__).'/'.$multidatabase_id.'_metadata_edit.php');
		} else {
			return $content;
		}		
		
		if(array_key_exists(intval($metadata_id), $sprintfText)){
			// 項目編集指示あり
			// その項目自身の編集指示
			if(array_key_exists(intval($metadata_id), $editFunction)){
				$content = $this->_editFunction($content, $editFunction[$metadata_id]);
			}
			// その項目以外を使った編集指示
			if(array_key_exists(intval($metadata_id), $sprintfReplace)){
				// あり
				$otherItem = array();
				
				foreach($sprintfReplace[$metadata_id] as $key => $val){
					$otherItem[] = $item[$val];
				}
				array_unshift($otherItem, $content);
				$content = vsprintf($sprintfText[$metadata_id], $otherItem);
				if(array_key_exists(intval($metadata_id), $googleMap)){
					// googlemap挿入
					$alt = '';
					foreach($googleMap[$metadata_id] as $key => $val){
						$alt .= $item[$val];
					}
					// googleMap指定のあるときは返り値がarray　array(content, alt)
					return array('insertGoogleMap', $content, $alt);
				} else {
					return $content;
				}
				
			} else {
				return sprintf($sprintfText[$metadata_id], $content);
			}
		}
		return $content;
	}
	
	protected function _editFunction($content, $kind)
	{
		switch($kind){
			case 'zip':
				if(strlen($content) < 7){
					return $content;
				}
				return substr($content, 0, 3).'-'.substr($content, 3, 4);
				break;
		}
	//	var_dump($this->sprintfText);
	}
	
}