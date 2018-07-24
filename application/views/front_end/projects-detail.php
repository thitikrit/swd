<?php if(!empty($projects)){

foreach($projects as $val){ 

$slide = json_decode($val['projects_slide']);
usort($slide, function($a, $b) {
    return $a->order - $b->order ;
});
?>

<style type="text/css">
    .filter li a:hover, .filter li a:focus, .filter li a.active{
        color:dodgerblue;
    }
    .col-centered {
       display:inline-block;
       float:none;
       /* reset the text-align */
       text-align:center;
       /* inline-block space fix */
       vertical-align: text-top;
    }
    .editContent{
        font-size:16px;
    }
    h4{
        margin-bottom:10px;
    }
    .gallery-item .gallery-details{
        padding-top:10px;
      
    }
    .row-eq-height {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
    }
</style>

<section id="banner">
 <!-- Slider -->
    <div id="main-slider" class="flexslider" >
        <ul class="slides">
            <?php for($i = 0 ; $i < count($slide);$i++){ ?>
            <li>
                <img src="<?php echo base_url();?>/images/projects/<?php echo $val['projects_id'];?>/<?php echo $slide[$i]->name; ?>" alt="" width="100%" style="max-height:100%"/>
                <div class="flex-caption">

                </div>
            </li>
            <?php }?>
        </ul>
    </div>
<!-- end slider -->

</section>

<section id="content" style="padding: 40px 15px;">

                <div class="row" > 
                    <div class="col-md-12">
                            <div class="about-logo " align="center" >
                                 <img src="<?php echo base_url();?>/images/projects/<?php echo $val['projects_id'];?>/<?php echo $val['projects_logo']; ?>"  width="200px" height="auto" />
                            </div>  
                    </div>
                </div>

                    <section class="section-padding" style="padding: 40px;background-color:lightgrey;">
                        <div class="container">

                            <div class="row showcase-section\">
                                <div class="col-md-1"></div>
                                <div class="col-md-2" align="left" style="background-color:#428bca;color:white;font-size:18px;padding:20px;border-top-left-radius: 20px;border-bottom-left-radius: 20px">
                                    <b>ข้อมูลโครงการ</b>
                                </div>
                                <div class="col-md-8" style="background-color:#f5f5f5;font-size:18px;padding:20px;font-weight:none;border-top-right-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                    <?php echo $val['projects_detail'];?>
                                       
                                </div>
                            </div>
                            <div class="row showcase-section">
                                <div class="col-md-1"></div>

                                <div class="col-md-2" align="left" style="background-color:#428bca;color:white;font-size:18px;padding:20px;border-top-left-radius: 20px;border-bottom-left-radius: 20px">
                                    <b>ติดต่อเรา</b>
                                </div>
                                <div class="col-md-8" style="background-color:#f5f5f5;font-size:18px;padding:20px;font-weight:none;border-top-right-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                    <?php $contacts = json_decode($val['projects_contact']); ?>
                                    <p> 
                                        <?php if($contacts->projects_tel != ''){ ?>
                                            สำนักงานขาย :  <?php echo $contacts->projects_tel; ?> <br/>
                                        <?php } ?>
                                        <?php if($contacts->projects_line != ''){ ?>
                                            ID Line :  <?php echo $contacts->projects_line; ?> <br/>
                                        <?php }?>
                                        <?php if($contacts->projects_fb != '' && $contacts->projects_fb_link != ''){ ?>
                                            Facebook :  <a target="blank" href="<?php echo $contacts->projects_fb_link; ?>"><?php echo $contacts->projects_fb; ?></a> <br/>
                                        <?php }?>
                                         <?php if($contacts->projects_website != ''){ ?>
                                            Website :  <a target="blank" href="<?php echo $contacts->projects_website; ?>">
                                                <?php echo $contacts->projects_website; ?>
                                                </a>
                                        <?php }?>
                                    </p>
                                </div>
                            </div>
                            <div class="row showcase-section">
                                <div class="col-md-1"></div>
                                <div class="col-md-2" align="left" style="background-color:#428bca;color:white;font-size:18px;padding:20px;border-top-left-radius: 20px;border-bottom-left-radius: 20px">
                                    <b>ที่ตั้งโครงการ</b>
                                </div>
                                <div class="col-md-8" style="background-color:#f5f5f5;font-size:18px;padding:20px;font-weight:none;border-top-right-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                    <p><?php echo $val['projects_location']; ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br/><br/>
                        <!-- Info Blcoks -->

    <div class="container content">     
    <!-- Service Blcoks -->
        
    
    <?php 
        $facility = json_decode($val['projects_facility']); 
        $condition =  count($facility) / 2;
    ?> 

    <h3 style="color:dodgerblue;"  align="center">สิ่งอำนวยความสะดวก</h3><hr/><br/>
    
      
            <?php if($condition < 3) {?>
            <div class="row" align="center">
                <?php for($i = 0 ; $i < count($facility);$i++){?>
                    <div class="col-sm-2 info-blocks col-centered" align="center">
                        <img src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $facility[$i]->picture;?>" height="100px" width="auto" />
                        <div class="info-blocks-in" style="padding: 20px 0px;">
                            <b style="font-size: 18px"><?php echo $facility[$i]->name;?></b>
                        </div>
                    </div>
                <?php }?>
            </div>
            <?php }else if($condition == 3 || $condition == 6 ) {?>
            <div class="row row-eq-height" align="center">
                 <?php for($i = 0 ; $i < count($facility);$i++){?>
                    <div class="col-sm-2 info-blocks" align="center">
                        <img src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $facility[$i]->picture;?>" height="100px" width="auto" />
                        <div class="info-blocks-in" style="padding: 20px 0px;">
                            <b style="font-size: 18px"><?php echo $facility[$i]->name;?></b>
                        </div>
                    </div>
                <?php }?>
            </div>  
            <?php }else{ ?>
            <?php $num_item_facility = 0; ?>
            <div class="row" align="center">
                <?php for($i = 0 ; $i < $condition+1 ;$i++){?>
                    <div class="col-sm-2 info-blocks col-centered" align="center">
                        <img src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $facility[$i]->picture;?>" height="100px" width="auto" />
                        <div class="info-blocks-in" style="padding: 20px 0px;">
                            <b style="font-size: 18px"><?php echo $facility[$i]->name;?></b>
                        </div>
                    </div>
                <?php $num_item_facility++; } ?>
                <?php for($i = $num_item_facility; $i < count($facility);$i++){?>
                    <div class="col-sm-2 info-blocks col-centered" align="center">
                        <img src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $facility[$i]->picture;?>" height="100px" width="auto" />
                        <div class="info-blocks-in" style="padding: 20px 0px;">
                            <b style="font-size: 18px"><?php echo $facility[$i]->name;?></b>
                        </div>
                    </div>
                <?php }?>
            </div>
            <?php }?>

     <h3 style="color:dodgerblue;" align="center">แบบห้อง</h3><hr/><br/>
      

    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
        <div class="container">
        <div class="row">
                <?php foreach($plans as $val2){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper">
                    <div class="gallery-item">
                        <div <?php if(!empty($val2['plans_gallery'])){ echo 'class="gallery-thumb"'; } ?> onmousemove="$('#floor_plan<?php echo $val2['plans_id']; ?>').css('bottom','55px'); " onmouseout="$('#floor_plan<?php echo $val2['plans_id']; ?>').css('bottom','-100px'); ">
                            <img src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/plans/<?php echo $val2['plans_picture']; ?>" style="height:200px;width: 100%" class="img-responsive">
                            <div class="image-overlay"></div>
                            <?php $floor_plan = json_decode($val2['plans_gallery']);  ?> 
                            <div id="floor_plan<?php echo $val2['plans_id']; ?>" style="display:none;position:absolute;bottom:-100px;
                            <?php if(count($floor_plan) == 1){
                                echo "left:40%;";
                            }  else{
                                echo "left:30%;";
                            }?>

                            ">
                                <?php for($i = 0 ; $i < count($floor_plan);$i++){ ?>
                                <a href="#">
                                <img alt="<?php echo $i+1; ?>"
                                     src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/plans/<?php echo $floor_plan[$i]; ?>"
                                     data-image="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/plans/<?php echo $floor_plan[$i]; ?>"
                                     data-description="<?php echo $i+1; ?>"
                                     style="display:none">
                                </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="gallery-details" >
                            <div class="editContent">
                                <h4><a href="javascript:void(0);" style="text-decoration: none;" ><?php echo $val2['plans_name']; ?></a></h4>
                            </div>
                            <div class="editContent">
                                <p><?php echo $val2['plans_detail']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                               <?php } ?>
        </div>
        <!-- /.row --> 
    <!-- /.container -->
    </div>
</section>


      
<h3 style="color:dodgerblue;" align="center">บรรยากาศโครงการ</h3><hr/><br/>
  <!-- Start Gallery 1-2 -->
<?php $gallery = json_decode($val['projects_gallery']); ?>
<section id="gallery-1" class="content-block section-wrapper gallery-1">
    <div class="container">
        <div id="gallery" style="display:none;">
            <?php for($i = 0 ; $i < count($gallery);$i++){ ?>
            <a href="#">
            <img alt="<?php echo $i+1; ?>"
                 src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/gallery/<?php echo $gallery[$i]; ?>"
                 data-image="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/gallery/<?php echo $gallery[$i]; ?>"
                 data-description="<?php echo $i+1; ?>"
                 style="display:none">
            </a>
            <?php }?>
        </div>
    <!-- /.container -->
    </div>
</section>
<!--// End Gallery 1-2 -->  
<br/><br/>
<h3 style="color:dodgerblue;" align="center">ที่ตั้งโครงการ</h3><hr/><br/>
<div class="row">
    <div class="col-md-12">
        <img  src="<?php echo base_url();?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $val['projects_map'];?>" width="100%">
         </img>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCwiI39TyG_aaKXbnyulKrff7Eu7DDo03A&language=th&region=TH"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(13.2888603,100.931528),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.2888603,100.931528)});infowindow = new google.maps.InfoWindow({content:"  <img src='<?php echo base_url();?>/images/projects/<?php echo $val['projects_id'];?>/<?php echo $val['projects_logo']; ?>' height='70px'/>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

    </div>
</div>

</div>
</section>
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/js/jquery-11.0.min.js'></script>   
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>  
<link rel='stylesheet' href='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/css/unite-gallery.css' type='text/css' />
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();
        <?php foreach($plans as $val2){ ?>
        jQuery("#floor_plan<?php echo $val2['plans_id'];?>").unitegallery();
        <?php }?>

    });   
</script>

<?php 
}
}
?>

