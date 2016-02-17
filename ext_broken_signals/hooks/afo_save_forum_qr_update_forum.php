<?php

$not_translate = intval($_POST['not_translated']);
$query['SET'] .= ', not_translated = ' . $not_translate;