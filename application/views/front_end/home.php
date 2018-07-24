<?php include 'bar.php';?>


    <?php foreach($company as $val){ ?>   
    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-9">
                    <h1 style="color:white;"><?php echo $val['com_name'];?></h1>
                    <p style="font-size:22px;font-weight:bold;line-height:35px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val['com_detail'];?></p>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="content" style="background-color: #eee">
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background: #7bfff35c;">
                <div class="aligncenter"><h2 class="aligncenter" style="color:deepskyblue;padding-top: 10px;"><?php echo $val['com_service_name'];?></h2><h4><?php echo $val['com_service_detail'];?></h4></div>
                <br/>
            </div>
        </div>

     <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-sitemap"></i>
                <div class="info-blocks-in">
                    <h3 style="font-size:20px"><?php echo $val['com_service_title_1'];?></h3>
                    <p style="font-size:18px"><?php echo $val['com_service_detail_1'];?></p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-money"></i>
                <div class="info-blocks-in">
                    <h3 style="font-size:20px"><?php echo $val['com_service_title_2'];?></h3>
                    <p style="font-size:18px"><?php echo $val['com_service_detail_2'];?></p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-calendar"></i>
                <div class="info-blocks-in">
                    <h3 style="font-size:20px"><?php echo $val['com_service_title_3'];?></h3>
                    <p style="font-size:18px">จ<?php echo $val['com_service_detail_3'];?></p>
                </div>
            </div>
       
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-group"></i>
                <div class="info-blocks-in">
                    <h3 style="font-size:20px"><?php echo $val['com_service_title_4'];?></h3>
                    <p style="font-size:18px"><?php echo $val['com_service_detail_4'];?></p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-key"></i>
                <div class="info-blocks-in">
                    <h3 style="font-size:20px"><?php echo $val['com_service_title_5'];?></h3>
                    <p style="font-size:18px"><?php echo $val['com_service_detail_5'];?></p>
                </div>
            </div>
            
        
    </div>
    </section>
    <?php }?>
    <style>
    .editContent{
        font-size:16px;
    }
    h4{
        margin-bottom:10px;
    }
    .gallery-item .gallery-details{
        padding-top:10px;
      
    }
    </style>
    <section class="section-padding" style="padding: 40px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 style="color:#428bca">โครงการที่น่าสนใจ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="isotope-gallery-container">
                    <?php foreach($projects as $val){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper " >
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="<?php echo base_url(); ?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $val['projects_picture'];?>" style="height:180px;width: 100%" class="img-responsive">
                                    <div class="image-overlay"></div>
                                    <a href="<?php echo site_url();?>project/detail/<?php echo $val['projects_id'];?>" class="gallery-link"><i class="fa fa-eye"></i></a>
                                </div>
                                <div class="gallery-details" >
                                    <div class="editContent">
                                        <h4><a href="<?php echo site_url();?>project/detail/<?php echo $val['projects_id'];?>" style="text-decoration: none;"><?php echo $val['projects_name'];?></a></h4>
                                    </div>
                                    <div class="editContent">
                                        <p><?php echo $val['projects_sub_detail'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        </div>
    </section>    
    
    <!-- 
    <section id="content" style="background-color: #eee">
    
    
        <div class="container" >
        <div class="row">
            <div class="col-md-12" style="background: #7bfff35c;">
                <div class="aligncenter"><h2 class="aligncenter" style="color:deepskyblue;padding-top: 10px;">ผลงาน</h2><h4>โครงการที่รับบริหารงานขายในปัจจุบัน</h4></div>
                <br/>
            </div>
        </div>

        <div class="row text-center row-centered " style="padding-top:30px;margin-bottom: 0px;" >
            <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logogoldentown.png" width="100%" height="100px"/>
                </div>
            </div>
             <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logo gcondo.png" width="100%" height="100px"/>
                </div>
            </div>
             <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logobaansirin.png" width="100%" height="100px"/>
                </div>
            </div>
             <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logopark2.png" width="100%" height="100px"/>
                </div>
            </div>
        </div>
        <div class="row text-center row-centered " style="margin-bottom: 0px">
            <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logopark2-2.png" width="100%" height="100px"/>
                </div>
            </div>
             <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logotadacurve.png" width="100%" height="100px"/>
                </div>
            </div>
             <div class="col-sm-2 info-blocks col-centered" align="center" style="background-image: linear-gradient(225deg, white 0%,silver 50%);border-radius: 1000px;height:100%;padding:10px;margin: 10px 20px">
                <div class="info-blocks-in" style="background-color: white;border-radius:1000px;">
                         <img src="img/logo png/logopp.png" width="100%" height="100px"/>
                </div>
            </div>
        </div>
        </div>
    </section>
    -->
