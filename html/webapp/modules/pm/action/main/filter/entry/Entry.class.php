<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * フイルタ登録アクションクラス
 *
 * @package     NetCommons
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Pm_Action_Main_Filter_Entry extends Action
{
	// 使用コンポーネントを受け取るため
    var $pmAction = null;
	   
    /**
     * フイルタ登録アクション
     *
     * @access  public
     */
    function execute()
    {
    	if (!$this->pmAction->setFilter()) {
        	return "error";
        }

		return "success";
    }
}
?>
