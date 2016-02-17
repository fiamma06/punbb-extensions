<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
    <div class="sf-box select">
        <label for="fld<?php echo $forum_page['fld_count'] ?>"><span><?php echo $ext_broken_signals_lang['No translation to new'] ?></span></label>
        <span class="fld-input">
            <input type="checkbox" id="fld<?php echo ++$forum_page['fld_count'] ?>" name="not_translated" value="1"<?php if ($cur_forum['not_translated'] == 1) echo ' checked="checked"' ?> />
        </span>
    </div>
</div>