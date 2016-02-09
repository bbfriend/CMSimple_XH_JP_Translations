<?php

//function advfrm_custom_thanks_page($form_name, $fields) {
function advfrm_custom_field_default($form_name, $field_name, $opt, $is_resent){
	global $hjs;
 if($field_name == "PostNo"){
	$hjs .= '<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>'."\n";
	return 'aaa';
 }
/**
    switch ($fields['Payment_type']) { // the field name of the radiobuttons
        case 'Cheque': // the label of radiobutton1
            return 'Thank_you1'; // the thanks page for cheque payment
            break;
        case 'Pay-Pal': // the label of radiobutton2
            return 'Thank_you2'; // the thanks page for pay-pal payment
            break;
        default:
            return ''; // redirects to the default Thanks page
    }
***/
}

?>
