<?php

trait Position {
    protected $lat;
    protected $lng;

    public function getAddress() {
        return $this->lat . ' | ' . $this->lng;
    }


    public function getLat(){
        return $this->lat;
    }

    public function getLng(){
        return $this->lng;
    }

    public function setLat(float $lat){
        $this->lat = $lat;
    }

    public function setLng(float $lng){
        $this->lng = $lng;
    }

}

?>
