<?php

trait Imageable{
    protected string $image_src;

    public function setSource($image_src){
        $this->image_src = $image_src;
    }

    public function getSource(){
        return $this->image_src;
    }

}

?>
