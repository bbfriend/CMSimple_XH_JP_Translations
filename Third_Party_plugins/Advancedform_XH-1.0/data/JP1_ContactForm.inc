<?php
/**
 サンプル 郵便番号の自動入力　0.1
 https://github.com/yubinbango/yubinbango

 作成者　http://cmsimple-jp.org Utaka
**/
function advfrm_custom_field_default($form_name, $field_name, $opt, $is_resent){
	global $hjs;
 if($field_name == "PostNo"){
	$hjs .= '<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>'."\n";
 }
}

?>
