<?php
require_once "stack.class.php";
// キューにデータを追加
$s = new Stack();

$s->push("tiger");
$s->push("panda");
$s->push("cat");

while ($s->length() > 0) {
    $e = $s->pop();

    echo "[$e]\n";
}
