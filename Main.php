<!doctype html>
<html>
<meta charset="UTF-8">
<title>OLX</title>
<head>
</head>
<body>



<?php

include_once "RenderFull.php";
class Main
{
    public $render_full=[];

    public function __construct($render_full)
    {

        for ($i=0;$i<count($render_full)/(count($render_full)/3);$i++)
        {
            $tmp=[];
            for ($j=0;$j<3;$j++)
            {
                array_push($tmp,$render_full[($i*3)+$j]);
            }
            array_push($this->render_full,(new RenderFull($tmp)));
        }
    }

    public function generatePage($page_num)
    {
        return $this->render_full[$page_num]->Render().'<div style="margin-top: 30px; display:flex;justify-content: center;">'.$this->addPagin().'</div>';
    }

    public function addPagin()
    {
        $tmp='';

        for ($i=0;$i<count($this->render_full);$i++)
        {
            $tmp=$tmp. '<button style="width:50px;background:aqua;margin:0 5" name="btn" value="'.($i+(1)).'">'.($i+(1)).'</button>';
        }
        return $tmp;
    }


}
?>

</body>
</html>

