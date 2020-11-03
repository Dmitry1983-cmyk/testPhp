<?php

include_once "Info.php";
include_once "full.php";

class RenderMini
{
    public $info;


    public function __construct($info)
    {
        $this->info=$info;
    }
    public function Render()
    {
        return '
<a href="full.php?id='.$this->info->GetDesc().'" style="text-decoration:none;"> 
        <div style="margin-left: 20%;margin-top: 1%;">
        <div class="cart" style="display:flex;">
        <div style="width: 300px;height: 200px;">
        <img src="'.$this->info->GetArr().'" style="width: 300px;height: 200px;" />
'.($this->info->GetIsTop()=="true"?' <div style="position: absolute; margin-top: -25px; width: 30px;height: 20px;background-color: aqua">TOP</div>':'<div></div>').'
		</div>
		<div><p style="font-size: 20px">'.$this->info->GetDesc().'</p></div>
		<div style="position: absolute; right: 15%;"><p style="font-size: 20px">'.$this->info->GetCost().'</p></div>
			<div style="position: absolute;margin-top: 9%;margin-left: 16%;display:flex;">
				<div>'.$this->info->GetAdr().'</div>
				<div style="margin-left: 20px;">'.$this->info->GetDate().'</div>
			</div>
</div>
</div>
</div></a>
 ';
    }

}

?>