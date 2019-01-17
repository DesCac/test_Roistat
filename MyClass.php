<?php


Class MyClass {
    public $val = '';

    function __construct($a = '') {
        $this->val = $a;
    }

    /**
     * @return bool|string
     */
    public function RevertPunctuationMarks () {
        $string = $this->val;
        $vhozdenia_po_poryadku = array();
        $str2 = preg_replace_callback(
            '/[^\w\pL-]/u',
            function ($matches) use (&$vhozdenia_po_poryadku) {
                $vhozdenia_po_poryadku[] = $matches[0];
                return '.';
            },
            $string,
            -1,
            $count
        );
        $string = '';
        foreach (explode('.', $str2) as $key => $item) {
            $string .= $item.$vhozdenia_po_poryadku[abs($key - $count+1)];
        }
        return substr($string,0, strlen($string)-1); //
    }
}