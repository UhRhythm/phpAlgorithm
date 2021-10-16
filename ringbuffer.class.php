<?php
class RingBuffer {
    // 内部データ(配列で表現)
    private $buf = array();
    private $top;
    private $buttom;
    private $size;

    // コンストラクタ
    public function __construct($size) {
        $this->size = $size;
        $this->buf = array_fill(0, $size, null);
        print_r($this->buf);
        $this->top = 0;
        $this->buttom = -1;
    }
    // 値を取得する
    public function get($index) {
        $i = ($this->top + $index) % $this->size;
        return $this->buf[$i];
    }
    // 値を設定する
    public function set($index, $v) {
        $i = ($this->top + $index) % $this->size;
        $this->buf[$i] = $v;
    }
    // 値を末尾に追加する
    public function append($v) {
        $this->buttom = ($this->buttom + 1) % $this->size;
        $this->buf[$this->buttom] = $v;
        if ($this->top >= $this->buttom) {
            $this->top = $this->buttom + 1;
        }
    }
}