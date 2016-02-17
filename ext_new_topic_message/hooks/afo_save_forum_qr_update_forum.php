<?php

$message_enabled = intval($_POST['message_enabled']);
$message_text    = $_POST['message_text'];

$query['SET'] .= ', message_enabled = ' . $message_enabled;
$query['SET'] .= ', message_text = "' . $forum_db->escape($message_text) . '"';