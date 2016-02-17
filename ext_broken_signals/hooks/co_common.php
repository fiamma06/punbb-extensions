<?php

// Load LANG
if (!isset($lang_fancy_stop_spam)) {
    if ($forum_user['language'] != 'English' && file_exists($ext_info['path'].'/lang/'.$forum_user['language'].'/'.$ext_info['id'].'.php')) {
        require $ext_info['path'].'/lang/'.$forum_user['language'].'/'.$ext_info['id'].'.php';
    } else {
        require $ext_info['path'].'/lang/English/'.$ext_info['id'].'.php';
    }
}