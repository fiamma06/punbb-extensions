<?php

$forum_db->add_field('forums', 'message_enabled', 'INTEGER(1)', false, 0);
$forum_db->add_field('forums', 'message_text', 'TEXT', false, '');