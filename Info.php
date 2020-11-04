<?php

class Info
{
    public $arr_image_url;
    private $desc;
    private $cost;
    private $date;
    private $adr;
    private $isTop;
    private $id;

   public function __construct($arr_image_url,$desc,$cost,$adr,$date,$isTop)
    {
        $this->arr_image_url=$arr_image_url;
        $this->adr=$adr;
        $this->cost=$cost;
        $this->date=$date;
        $this->desc=$desc;
        $this->isTop=$isTop;
    }
    public function GetArr()
    {
        return $this->arr_image_url;
    }
    public function GetAdr()
    {
        return $this->adr;
    }
    public  function GetCost()
    {
        return $this->cost;
    }
    public  function GetDate()
    {
        return $this->date;
    }
    public function GetDesc()
    {
        return $this->desc;
    }
    public function GetIsTop()
    {
        return $this->isTop;
    }

}
?>