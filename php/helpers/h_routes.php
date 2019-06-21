<?php
/* Copyright 2019 Ralph Neeleman */

class h_routes {
    private $_uri = array();
    private $_method = array();

    public function add($uri, $method = null) {
        $this->_uri[] = '/' . trim($uri, '/');

        if ($method != null) {
            $this->_method[] = $method;
        }
    }

    public function submit() {
        echo $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

        foreach ($this->_uri as $key => $value) {
            if (preg_match("#^$value$#", $uriGetParam)) {
                // $useMethod = $this->_method[$key];

                // new $useMethod();
                if (!isset($this->_method[$key])) {
                    // do nothing, is empty
                } else if (is_string($this->_method[$key])) {
                    $useMethod = $this->_method[$key];
                    new $useMethod();
                } else {
                    call_user_func($this->_method[$key]);
                }
            }
        }
    }
}
?>