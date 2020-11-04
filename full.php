<?php
include_once "Info.php";
include_once "RenderMini.php";

class FullrenDesc
{
    public $info;


    public function __construct(){}


    function RenderFullDesc($arr)
    {

        //$back=new FullrenDesc();
        echo '<div style="display:flex;justify-content: center;">
            <div style="width: 70%;">
                <div style="width: 500px;height: 400px;">
                    <img src="'.$arr->GetArr().'" style="width: 500px;height: 400px;" />
                </div> 
                <div><h2>'.$arr->GetDesc().'</h3></div>
                <div><h2>'.$arr->GetCost().'</h2></div>  
                    <div>
                        <a href="index.php?btn='.$_COOKIE['cookie'].'" style="text-decoration: none"><h3><=Вернуться</h3></a>
                    </div>
            </div>
            
                    </div>';

    }
}

function ShowAd()
{
    $arr_image_url=[new  Info("https://ireland.apollo.olxcdn.com/v1/files/3vlomj86ln98-UA/image;s=644x461",
        "Клей эпоксидный 150г двухкомпонентный, эпоксидная смола, эпоксидка,ЭДП",
        "65 грн", "08.10.2020", "Днепр, Днепропетровская область, Амур", true),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/1zc9u7gzjmtw-UA/image;s=1000x700",
            "Спортивная сумка,сумка для фитнеса! Nike •Reebok •Puma",
            "219 грн",
            "24.09.2020",
            "Днепр, Днепропетровская область, Индустриальный",
            true),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/7reyda2ukmjc-UA/image;s=1000x700",
            "Профлист, металлочерепица некондиция, упаковка",
            "180 грн",
            "15.10.2020",
            "Днепр, Днепропетровская область, Новокодакский",
            true),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/3jjlumx2s7h12-UA/image;s=644x461",
            "Ботинки.Осень-Весна.Натур.кожа.Размер 35,стелька 23 см.",
            "100 грн",
            "Сегодня 17:46",
            "Днепр, Индустриальный",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/uhxelef95z1w1-UA/image;s=644x461",
            "Фонарь заднего бампера Mazda CX-5 2017",
            "40$",
            "Сегодня 17:46",
            "Днепр, Амур-Нижнеднепровский ",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/o1yruieoltku1-UA/image;s=644x461",
            "Продам 3 к.кв (94 м²) в ЖК RiverPark (RV)",
            "75 000 $",
            "Сегодня 17:45",
            "Днепр, Соборный ",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/124zvzqt3yct-UA/image;s=644x461",
            "Продажа отдельно стоящего здания. ул. Исполкомовская 12",
            "1 140 $",
            "Сегодня 17:45",
            "Днепр, Шевченковский ",
            true),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/hrxjo4z9rn253-UA/image;s=644x461",
            "Куртка-парка демисезонная,р.46(м)",
            "280 грн",
            "Сегодня 17:45",
            "Днепр, Чечеловский ",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/6470vufc5fy92-UA/image;s=644x461",
            "Пуховик. женский",
            "700 грн",
            "Сегодня 20:01",
            "Днепр, Соборный ",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/9bt5tcfnzxvz2-UA/image;s=644x461",
            "Кроссовки Nike SB Stefan Janovski Blazer Dunk 42 размер",
            "500 грн",
            "Сегодня 20:01",
            "Днепр, Индустриальный ",
            true),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/gxwcrtejmsln3-UA/image;s=644x461",
            "Видеокарта MSI GeForce GTX 760 2048MB (256bit)",
            "1 200 грн",
            "Сегодня 20:01",
            "Днепр, Новокодакский ",
            false),
        new Info("https://ireland.apollo.olxcdn.com/v1/files/f6zy9k9qq62q2-UA/image;s=644x461",
            "Стабилизатор напряжения Phantom УНИВЕРСАЛ 7-21кВт(110-290В)",
            "10 300 грн",
            "Сегодня 20:00",
            "Днепр, Центральный ",
            true)
    ];
    $info='';
    $ad=new FullrenDesc();
   if(isset($_GET['id']))
   {
       foreach ($arr_image_url as $key=>$value)
       {
           if($value->GetDesc()== $_GET['id'])
           {
               $info=new  Info($value->GetArr(),$value->GetDesc(),$value->GetCost(),$value->GetAdr(),$value->GetDate(),$value->GetIsTop());
           }
       }
      $ad->RenderFullDesc($info);
   }

}
ShowAd();
?>
