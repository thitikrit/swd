<style>
#chartdiv {
    width       : 100%;
    height      : 500px;
    font-size   : 11px;
    background  : white;
    padding-top: 20px;
}                           
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "Light",
    "categoryField": "year",
    "rotate": true,
    "startDuration": 1,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left"
    },
    "colors": [
        "#009efb",
        "#009efb",
        "#009efb",
        "#009efb",
        "#009efb",
        "#009efb",
        "#009efb"
       
    ],
    "trendLines": [],
    "graphs": [
        {
            "balloonText": "หน้าแรก:[[value]]",
            "fillAlphas": 1,
            "id": "AmGraph-1",
            "lineAlpha": 0.8,
            "title": "หน้าแรก",
            "type": "column",
            "valueField": "a"
        },
        {
            "balloonText": "โครงการ:[[value]]",
            "fillAlphas": 0.9,
            "id": "AmGraph-2",
            "lineAlpha": 0.2,
            "title": "โครงการ",
            "type": "column",
            "valueField": "b"
        },
        {
            "balloonText": "ผลงาน:[[value]]",
            "fillAlphas": 0.8,
            "id": "AmGraph-3",
            "lineAlpha": 0.2,
            "title": "ผลงาน",
            "type": "column",
            "valueField": "c"
        },
        {
            "balloonText": "กระดานซื้อขาย:[[value]]",
            "fillAlphas": 0.7,
            "id": "AmGraph-4",
            "lineAlpha": 0.2,
            "title": "กระดานซื้อขาย",
            "type": "column",
            "valueField": "d"
        },
        {
            "balloonText": "กิจกรรม ข่าวสาร โปรโมชั่น:[[value]]",
            "fillAlphas": 0.6,
            "id": "AmGraph-5",
            "lineAlpha": 0.2,
            "title": "กิจกรรม ข่าวสาร โปรโมชั่น",
            "type": "column",
            "valueField": "e"
        },
        {
            "balloonText": "บทความ:[[value]]",
            "fillAlphas": 0.5,
            "id": "AmGraph-6",
            "lineAlpha": 0.2,
            "title": "บทความ",
            "type": "column",
            "valueField": "f"
        },
        {
            "balloonText": "ติดต่อเรา:[[value]]",
            "fillAlphas": 0.4,
            "id": "AmGraph-7",
            "lineAlpha": 0.2,
            "title": "ติดต่อเรา",
            "type": "column",
            "valueField": "g"
        }
    ],
    "guides": [],
    "valueAxes": [
        {
            "id": "ValueAxis-1",
            "position": "top",
            "axisAlpha": 0
        }
    ],
    "allLabels": [],
    "balloon": {},
    "titles": [],
    "export": {
        "enabled": false
     },

    <?php if($type == 1){ ?>
    "dataProvider": [
        <?php foreach($y as $yx){ ?>
            {

                "year": <?php echo $yx['log_year'];?>,
                <?php foreach($gf as $gfx){ 
                    if($gfx['log_year'] == $yx['log_year']){ 
                        if($gfx['log_menu'] == 1){
                            echo '"a": '.floor($gfx["no"]/2).',';
                        }else if($gfx['log_menu'] == 2){
                            echo '"b": '.$gfx["no"].',';      
                        }else if($gfx['log_menu'] == 3){
                            echo '"c": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 4){
                            echo '"d": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 5){
                            echo '"e": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 6){
                            echo '"f": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 7){
                            echo '"g": '.$gfx["no"].',';
                        }

                    }
                }?>
            },
         <?php }?>
        ]
    <?php }?>

     <?php if($type == 2){ ?>
    "dataProvider": [
        <?php foreach($m as $mx){ ?>
            {

                "year": 

                <?php 
                if($mx['log_month'] == 1){
                    echo "'มกราคม'";
                }else if($mx['log_month'] == 2){
                    echo "'กุมภาพันธ์'";
                }else if($mx['log_month'] == 3){
                    echo "'มีนาคม'";
                }else if($mx['log_month'] == 4){
                    echo "'เมษายน'";
                }else if($mx['log_month'] == 5){
                    echo "'พฤษภาคม'";
                }else if($mx['log_month'] == 6){
                    echo "'มิถุนายน'";
                }else if($mx['log_month'] == 7){
                    echo "'กรกฎาคม'";
                }else if($mx['log_month'] == 8){
                    echo "'สิงหาคม'";
                }else if($mx['log_month'] == 9){
                    echo "'กันยายน'";
                }else if($mx['log_month'] == 10){
                    echo "'ตุลาคม'";
                }else if($mx['log_month'] == 11){
                    echo "'พฤศจิกายน'";
                }else if($mx['log_month'] == 12){
                    echo "'ธันวาคม'";
                }



                ?>
                ,
                <?php foreach($gf as $gfx){ 
                    if($gfx['log_month'] == $mx['log_month']){ 
                        if($gfx['log_menu'] == 1){
                            echo '"a": '.floor($gfx["no"]/2).',';
                        }else if($gfx['log_menu'] == 2){
                            echo '"b": '.$gfx["no"].',';      
                        }else if($gfx['log_menu'] == 3){
                            echo '"c": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 4){
                            echo '"d": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 5){
                            echo '"e": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 6){
                            echo '"f": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 7){
                            echo '"g": '.$gfx["no"].',';
                        }

                    }
                }?>
            },
         <?php }?>
        ]
    <?php }?>

    <?php if($type == 3){ ?>
    "dataProvider": [
        <?php foreach($y as $yx){ ?>
            {

                "year": <?php echo $yx['log_year'];?>,
                <?php foreach($gf as $gfx){ 
                    if($gfx['log_year'] == $yx['log_year']){ 
                        if($gfx['log_menu'] == 1){
                            echo '"a": '.floor($gfx["no"]/2).',';
                        }else if($gfx['log_menu'] == 2){
                            echo '"b": '.$gfx["no"].',';      
                        }else if($gfx['log_menu'] == 3){
                            echo '"c": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 4){
                            echo '"d": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 5){
                            echo '"e": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 6){
                            echo '"f": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 7){
                            echo '"g": '.$gfx["no"].',';
                        }

                    }
                }?>
            },
         <?php }?>
        ]
    <?php }?>

    <?php if($type == 4){ ?>
    "dataProvider": [
            {
                "year": 
                 <?php 
                if($month == 1){
                    echo "'มกราคม-".$year."'";
                }else if($month == 2){
                    echo "'กุมภาพันธ์-".$year."'";
                }else if($month == 3){
                    echo "'มีนาคม-".$year."'";
                }else if($month == 4){
                    echo "'เมษายน-".$year."'";
                }else if($month == 5){
                    echo "'พฤษภาคม-".$year."'";
                }else if($month == 6){
                    echo "'มิถุนายน-".$year."'";
                }else if($month== 7){
                    echo "'กรกฎาคม-".$year."'";
                }else if($month == 8){
                    echo "'สิงหาคม-".$year."'";
                }else if($month == 9){
                    echo "'กันยายน-".$year."'";
                }else if($month == 10){
                    echo "'ตุลาคม-".$year."'";
                }else if($month == 11){
                    echo "'พฤศจิกายน-".$year."'";
                }else if($month == 12){
                    echo "'ธันวาคม-".$year."'";
                }

        
                ?>
           
                ,
                <?php foreach($gf as $gfx){ 
                    if($gfx['log_year'] == $year){ 
                        if($gfx['log_menu'] == 1){
                            echo '"a": '.floor($gfx["no"]/2).',';
                        }else if($gfx['log_menu'] == 2){
                            echo '"b": '.$gfx["no"].',';      
                        }else if($gfx['log_menu'] == 3){
                            echo '"c": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 4){
                            echo '"d": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 5){
                            echo '"e": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 6){
                            echo '"f": '.$gfx["no"].',';
                        }else if($gfx['log_menu'] == 7){
                            echo '"g": '.$gfx["no"].',';
                        }

                    }
                }?>
        
            }
        ]
    <?php }?>

});
</script>
<div id="chartdiv"></div>   
    