<?php
// キュー構造を表現したもの
class Queue {
    private $list = array();
    // データ末尾に追加
    public function enqueue($v) {
        $this->list[] = $v;
    }

    // データを先頭から取り出す
    public function dequeue() {
        return array_shift($this->list);
    }
    
    // データの個数を返す
    public function length() {
        return count($this->list);
    }
}