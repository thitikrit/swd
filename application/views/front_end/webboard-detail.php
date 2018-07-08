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
.webboard{
    background-color: white;
    border:1px solid lightgrey;
    border-radius: 5px;
    min-height:250px;
    max-height: auto;
    padding-left:10px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    padding-right:10px;
    margin-bottom:20px;
}
.webboard-detail{
    padding: 10px 10px;
    font-size: 16px;
}
.webboard-detail-bar{
    padding: 10px 10px;
    font-size: 18px;
    font-weight: bold;
}
a:hover{
    text-decoration:none;
}


#search-webboard,#search-area,#search-type,#search-price{
     background-color:rgba(255,255,255,0.7);
    background-repeat: no-repeat;
    background-position: center right 10px;
    background-position-y: 15px;
    background-position-x: 98%;
    width: 40%;
    margin: 5px;
    border:none;
    border: 1px solid lightgrey;
    border-radius: : 50px;
    font-size: 20px;
    padding: 10px 15px;
    height:48px;
}
#search-webboard::placeholder{
    color:gray;
}
</style>
<?php if($menu[0]['menu_type'] == 'SLIDE'){?>
    <section id="banner">
     
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <?php $slider = json_decode($menu[0]['menu_picture']); ?>
                <?php for($i = 0 ; $i < count($slider);$i++){ ?>
                  <li>
                        <img src="<?php echo base_url(); ?>images/slides/<?php echo $slider[$i]->name; ?>" alt="" />
                  </li>
                <?php }?>
            </ul>
        </div>
    <!-- end slider -->
    </section>
<?php }?>
<?php if($menu[0]['menu_type'] == 'TEXT'){?>
    <div style="background-color: white;height:72px"><br/><br/><br/>
    </div>
    <section id="call-to-action-2" style="padding-top: 50px;padding-bottom:  20px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div align="center">
                            <span style="margin-top:0px;font-size:26px;font-weight: bold;color:white;"><?php echo $menu[0]['menu_name'];?></span>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>   
<?php } ?>
    <section id="call-to-action-2" style="padding:10px;padding-bottom:0px;background: aliceblue;box-shadow: 0 2px 2px -2px gray;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div style="margin-top: 10px" align="center">
                        <form id="search" name="search" method="post" action="<?php echo base_url();?>webboard/search" onsubmit="return chk_search();">
                            <span style="font-size:22px;font-weight: bold;color:deepskyblue;">ค้นหากระดานซื้อขาย</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="search-webboard" name="search-webboard" placeholder="ค้นหาหัวข้อ, แท็ก" ></input>
                            
                           <button onclick="search_setting();" style="height:48px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;">ค้นหาเพิ่มเติม <i class="icon-info-blocks fa fa-sort-down"></i>
                            </button>
                              <a href="##" title="คลิกเพื่อค้นหา" style="">
                                <button style="height:48px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;"><i class="icon-info-blocks fa fa-search"></i>
                            </button></a> 
                            <div id="search-setting" style="display:none;width:80%">
                                <div class="col-md-4 col-sm-3" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:deepskyblue;">ทำเล</span>&nbsp;&nbsp;
                                    <input type="text" id="search-area" name="search-area" placeholder="ค้นหาจากทำเล" style="width:65%"></input>
                                </div>
                                <div class="col-md-4 col-sm-3" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:deepskyblue;">ประเภท</span>&nbsp;&nbsp;
                                    <input type="text" id="search-type" name="search-type" placeholder="ค้นหาจากประเภท" style="width:65%"></input>
                                </div>

                                <div class="col-md-4 col-sm-6" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:deepskyblue;">ช่วงราคา</span>&nbsp;&nbsp;
                                    <select id="search-price" name="search-price"  style="width:65%">
                                        <option value="default">กำหนดช่วงราคา</option>
                                        <option value="5000">- ต่ำกว่า 5000 บาท</option>
                                        <option value="10000">- 5000 ถึง 10,000 บาท</option>
                                        <option value="25000">- 10,000 ถึง 25,000 บาท</option>
                                        <option value="50000">- 25,000 ถึง 50,000 บาท</option>
                                        <option value="100000">- 50,000 ถึง 100,000 บาท</option>
                                        <option value="250000">- 100,000 ถึง 250,000 บาท</option>
                                        <option value="500000">- 250,000 ถึง 500,000 บาท</option>
                                        <option value="500001">- มากกว่า 500,000 บาท ขึ้นไป</option>
                                        <option value="1000000">- มากกว่า 1,000,000 บาท ขึ้นไป</option>
                                    </select>
                                </div>
                            </div> 
                          
                        </form>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>
    <?php if(!empty($webboards)){ ?>
    <?php foreach($webboards as $val){ ?>
     <section id="gallery-1" class="content-block section-wrapper gallery-1" style="padding-top: 40px;background-color: #eee">
        <div class="container"> 
            <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-12 webboard">
                        <div class="col-sm-12 text-center" style="padding-top: 10px">
                            <h2  style="color:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>"><?php echo $val['webboards_name'];?></h2>  <hr/>
                        </div>
                        <div class="col-sm-4" style="padding-bottom: 25px;padding-top: 10px;">      
                            <div id="gallery" style="display:none;">
                                <?php $gallery = json_decode($val['webboards_gallery']); 
                                for($i = 0 ; $i < count($gallery);$i++){ ?>
                                <a href="#">
                                <img alt="<?php echo $i ; ?>"
                                     src="<?php echo base_url();?>images/webboards/gallery/<?php echo $gallery[$i]; ?>"
                                     data-image="<?php echo base_url();?>images/webboards/gallery/<?php echo $gallery[$i]; ?>"
                                     data-description="<?php echo $i ; ?>"
                                     style="display:none">
                                </a>
                                <?php } ?>
                               
                            </div>
                        </div>                 
                        <div class="col-sm-8" style="font-size: 19px;line-height:30px;padding-bottom: 25px;padding-top: 10px;">
                            <?php echo $val['webboards_detail']; ?>
                            <hr/>

                            <?php if($val['webboards_tag'] != NULL){ ?>
                            <?php $tag = explode(",",$val['webboards_tag']); 
                                foreach($tag as $t){ ?>
                                <span style="font-size:16px;color:white;background:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>;padding: 3px 10px;border-radius: 20px;display: inline-block;margin-bottom: 5px;"><?php echo $t; ?></span>
                            <?php } ?>
                            <?php }?>
                        </div>            
                    </div>           
            </div>
            <div class="col-sm-12 text-center" style="padding-bottom: 50px">
                <a href="webboard.php?menu=4"><button style="background-color:dodgerblue;border:1px solid white;padding:10px 10px;color:white;font-size:20px;        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;
">ย้อนกลับ</button></a>
            </div>
        </div>
    </section>
    <!--// End Gallery 1-2 -->  
<?php }?>
<?php }else{?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="background:white;height:300px;padding-top:120px;font-size:25px;margin-top: 5px">
                            - ไม่มีข้อมูลดังกล่าว -
                </div>
            </div>
        </div>
    </section>  
<?php  } ?>
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/js/jquery-11.0.min.js'></script>   
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>  
<link rel='stylesheet' href='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/css/unite-gallery.css' type='text/css' />
<script type='text/javascript' src='<?php echo base_url();?>assets/unitegallery-master/package/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();

    });  
    var check_form = 1;
    function orderBy(order){
        type = $("#typeby").val();
        order = $("#orderby").val();
        $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>webboard/order",
                  data: {typeby:type,orderby:order},
                  cache : false,
                  success: function(response)
                  {
                      $("#web-all").html(response);
                  }
          });
    }
    function chk_search(){
        if(check_form == 1){
            if( $("#search-webboard").val() != ''){
                return true;
            }else{
                $("#search-webboard").focus();
                return false;
            }
        }else{
            if( $("#search-area").val() == '' && $("#search-type").val() == '' && $("#search-price").val() == 'default'){
                if( $("#search-webboard").val() != ''){
                    return true;
                }else{
                    $("#search-webboard").focus();
                    return false;
                }
            }
        }
    }
    function search_setting(){
        event.preventDefault();
        $("#search-setting").slideToggle();
        if(check_form == 1){
            check_form = 0;
        }else{
            check_form = 1;
        }
    }
</script>