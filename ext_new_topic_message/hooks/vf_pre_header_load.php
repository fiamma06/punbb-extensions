<?php

/**
 * @var $forum_user
 * @var $cur_forum
 * @var $forum_loader Loader
 */

if ($forum_user['may_post'] && $cur_forum['message_enabled']) {

    define('NT_PUT_HTML', 1);

    if( file_exists($ext_info['path'] . '/css/' . $forum_user['style'] . '/style.css') ) {
        $forum_loader->add_css($ext_info['url']  . '/css/' . $forum_user['style'] . '/style.css');
    } else {
        $forum_loader->add_css($ext_info['url']  . '/css/Oxygen/style.css');
    }

    $forum_loader->add_js($ext_info['url'] . '/js/main.js', ['type' => 'url']);

    $forum_page['page_post']['posting'] = '<p class="posting">' . '<a class="newpost" onclick="event.preventDefault(); show_confirm(this);" href="'.forum_link($forum_url['new_topic'], $id).'">' . '<span>'.$lang_forum['Post topic'].'</span>' . ' </a>' . '</p>';
}
