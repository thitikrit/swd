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
    "dataProvider": [
        <?php foreach($y as $yx){ ?>
            {

                "year": <?php echo $yx['log_year'];?>,
                <?php foreach($gf as $gfx){ 
                    if($gfx['log_year'] == $yx['log_year']){ 
                        if($gfx['log_menu'] == 1){
                            echo '"a": '.$gfx["no"].',';
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

});

</script><!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">แดชบอร์ด</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">แดชบอร์ด</li>
        </ol>
    </div>
   
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">จำนวนผู้เข้าชมเว็บไซต์</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i><?php echo $ip; ?></h2>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">จำนวนกระดานซื้อขาย</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i><?php echo $wb; ?></h2>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">จำนวนสมาชิก</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-warning"></i><?php echo $usr; ?></h2>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">จำนวนการติดต่อสอบถาม</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-danger"></i><?php echo $cont; ?></h2>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="background:white;padding-top: 25px;">
    <div style="text-align: center;font-size: 20px">
        กราฟแสดงจำนวนการเข้าชมเว็บไซต์แต่ละเมนู<hr/>
        <div style="float:right">
        ปี : <select id="y" onchange="reload();">
            <option value="-">ทั้งหมด</option>
            <?php foreach($y as $y){ ?>
            <option value="<?php echo $y['log_year']; ?>"><?php echo $y['log_year']; ?></option>
            <?php }?>
        </select>
        เดือน : <select id="m" onchange="reload();">
            <option value="-">ทั้งหมด</option>
            <option value="1">มกราคม</option>
            <option value="2">กุมภาพันธ์</option>
            <option value="3">มีนาคม</option>
            <option value="4">เมษายน</option>
            <option value="5">พฤษภาคม</option>
            <option value="6">มิถุนายน</option>
            <option value="7">กรกฎาคม</option>
            <option value="8">สิงหาคม</option>
            <option value="9">กันยายน</option>
            <option value="10">ตุลาคม</option>
            <option value="11">พฤศจิกายน</option>
            <option value="12">ธันวาคม</option>
        </select>
        </div>
    </div><br/><br/>
    

        <div id="div_chart">
            <div id="chartdiv"></div> 
        </div>
    </div>  
    <!-- Column -->
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script type="text/javascript">
    function reload(){
        $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>manage_general/reload",
                  data: {y:$('#y').val(),m:$('#m').val()}, // serializes the form's elements.
                  cache : false,
                  success: function(response)
                  {
                      $('#div_chart').html(response);
                  }
          });
    }

</script>