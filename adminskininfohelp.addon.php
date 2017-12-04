<?php
if(!defined('__XE__'))
	exit();

/**
 * @file adminskininfohelp.addon.php
 * @author Wincomi (admin@wincomi.com)
 * @brief 게시판 스킨 관리 페이지에서 항상 설명을 보여줍니다.
*/	
if($called_position == 'after_module_proc' && Context::get('act') == 'dispBoardAdminSkinInfo')
{
	Context::addHtmlFooter("<style>#content a[href].x_icon-question-sign{display:none}#content p.x_help-block[hidden]{display:block}</style>");
}

/* End of file adminskininfohelp.php */
/* Location: ./addons/adminskininfohelp */
