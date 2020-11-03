<?php
include_once "Info.php";

class FullrenDesc
{
    public $info;


    public function __construct($info)
    {
        $this->info=$info;
    }


    function RenderFullDesc($arr)
    {


        echo '<div style="display:flex;justify-content: center;">
            <div style="width: 70%;">
                <div style="width: 500px;height: 400px;">
                    <img src="'.$arr->GetArr().'" style="width: 500px;height: 400px;" />
                </div> 
                <div><h2>'.$arr->GetDesc().'</h3></div>
                <div><h4>'.$arr->GetDesc().'</h4></div>   
            </div>
                    </div>';

//        echo '<div style="display:flex;justify-content: center;">
//            <div style="width: 70%;">
//                <div style="width: 500px;height: 400px;">
//                    <img src="'.$inf->GetArr().'" style="width: 500px;height: 400px;" />
//                </div>
//                <div><h2>'.$inf->GetDesc().'</h3></div>
//                <div><h4>'.$inf->GetCost().'</h4></div>
//            </div>
//</div>';
    }
}

?>
