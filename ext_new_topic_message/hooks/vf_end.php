<?php
/**
 * Created by PhpStorm.
 * User: fiamma
 * Date: 15.02.16
 * Time: 20:20
 */

if( defined('NT_PUT_HTML') ) {
    echo <<<HTML
    <div id="popup-confirm-window" style="display:none;">
        <div class='popup-confirm-text'>{$cur_forum['message_text']}</div>
        <div class='popup-confirm-buttons'>
            <a href='#' class='popup-button popup-accept'>{$ext_new_topic_message_lang['Confirm']}</a>
            <a href='#' class='popup-button popup-drop' onclick='event.preventDefault(); drop_confirm();'>{$ext_new_topic_message_lang['Cancel']}</a>
        </div>
    </div>
HTML;

}