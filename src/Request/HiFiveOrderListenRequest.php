<?php

class HiFiveOrderListenRequest extends HiFiveRequest {

    public $musicId;
    public $audioFormat;
    public $audioRate;

    function __construct() {
        $this->actionName('OrderListen')
            ->param(array('musicId', 'audioFormat', 'audioRate'));
    }

    public function musicId($musicId) {
        $this->musicId = $musicId;
        return $this;
    }

    public function audioFormat($audioFormat) {
        $this->audioFormat = $audioFormat;
        return $this;
    }

    public function audioRate($audioRate) {
        $this->audioRate = $audioRate;
        return $this;
    }
}