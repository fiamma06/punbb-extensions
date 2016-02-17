<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
    <div class="sf-box select">
        <label for="fld<?php echo $forum_page['fld_count'] ?>"><span><?php echo $ext_new_topic_message_lang['Show message'] ?></span></label>
        <span class="fld-input">
            <input type="checkbox" id="fld<?php echo ++$forum_page['fld_count'] ?>" name="message_enabled" value="1"<?php if ($cur_forum['message_enabled'] == 1) echo ' checked="checked"' ?> />
        </span>
    </div>
</div>

<div class="txt-set set<?php echo ++$forum_page['item_count'] ?>">
    <div class="txt-box textarea">
        <label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span><?php echo $ext_new_topic_message_lang['Text message'] ?></span> <small><?php echo $lang_admin_forums['Forum description help'] ?></small></label><br />
        <div class="txt-input"><span class="fld-input"><textarea id="fld<?php echo $forum_page['fld_count'] ?>" name="message_text" rows="3" cols="50"><?php echo forum_htmlencode($cur_forum['message_text']) ?></textarea></span></div>
    </div>
</div>