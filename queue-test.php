<?php
require_once "que.class.php";
// キューにデータを追加
$q = new Queue();

$q->enqueue("tiger");
$q->enqueue("panda");
$q->enqueue("cat");

while ($q->length() > 0) {
    $e = $q->dequeue();

    echo "[$e]\n";
}
