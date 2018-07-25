<?php include 'bar.php';?>
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
    border:1px solid lightgrey;
    border-radius: 5px;
    min-height:250px;
    max-height: auto;
    padding-left:5px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    padding-right:10px;
    margin-bottom:20px;
}
.webboard-detail{
    position:relative;
    padding: 10px 10px;
    font-size: 16px;
    z-index: 10 !important;
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
.btn-regis-webboard{
    font-weight:bold;height:40px;font-size:20px;color:white;background-color:#ff0000d1;border:none;padding-left: 15px;padding-right:15px;
}
.btn-member-backend{
    font-weight:bold;height:40px;font-size:20px;color:white;background-color:limegreen;border:none;padding-left: 15px;padding-right:15px;
}
</style>


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
                        <?php if(empty($this->session->userdata("user_username"))){ ?>
                                <div style="padding-top: 10px;">
                                    <a href="<?php echo base_url();?>register"><button class="btn-regis-webboard" >สร้างกระดานซื้อขาย ฟรี!!!
                                    </button></a>
                                </div>
                        <?php }else{ ?>
                            <?php if($this->session->userdata("user_status") == 'MEMBER'){ ?>
                                <div style="padding-top: 10px;">
                                    <a href="<?php echo base_url();?>member/webboard"><button class="btn-member-backend" >สร้างกระดานซื้อขาย
                                    </button></a>

                                </div>
                            <?php }?>
                        <?php }?>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>
     <section>
        <div class="container">          
            <div class="row" style="margin-bottom:5px;">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center ">
                     <div style="margin-top:25px;" align="center">
                        <span style="font-size:18px;margin-top:2px;font-weight: bold;color:#777777;padding-left:4%;float:left">ทั้งหมด  <?php echo count($webboards_list);?> รายการ</span>
                        <span style="font-size:18px;font-weight: bold;color:#777777;padding-right:3%;float:right">
                            เรียงลำดับตาม : 
                            <select id="typeby" onchange="orderBy()">
                                <option value="all">ซื้อขาย และเช่า</option>
                                <option value="sell">ซื้อขาย</option>
                                <option value="hire">เช่า</option>
                            </select>
                            <select id="orderby" onchange="orderBy()">
                                <option value="new-old">ใหม่-เก่า</option>
                                <option value="old-new">เก่า-ใหม่</option>
                                <option value="high-low">ราคาสูง-ต่ำ</option>
                                <option value="low-high">ราคาต่ำ-สูง</option>
                            </select>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr/>
    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1" style="padding-top: 20px;padding-bottom: 100px">
        <div class="container" id="web-all">
                <?php if(!empty($webboards_list)){ ?> 
                    <?php $num_cols = 2;?>
                    <?php foreach($webboards_list as $val){ ?>

                        <?php if($num_cols == 2){ ?>
                        <div class="row" style="margin-bottom: 0px; ">
                        <?php } 
                        $num_cols--; ?>

                            <div class="col-sm-6 col-md-6 col-lg-6 webboard" >
                                <?php if($val['webboards_status'] == 'SOLDOUT'){ ?>
                                <img src="<?php echo base_url(); ?>images/soldout.png" style="position:absolute;z-index:11;right:0px;top:0px;height:150px;width: 150px;border-radius: 5px;" >
                                <?php }?>
                                <div class="col-sm-12" style="padding-top: 10px">
                                    <a href="<?php echo base_url();?>webboard/detail/<?php echo $val['webboards_id'];?>"><h4 style="color:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>"><?php echo $val['webboards_name'];?></h4></a>
                                </div>
                                <div class="col-sm-5 detail" style="height:100%;padding:10px 10px;">
                                     <img src="<?php echo base_url(); ?>images/webboards/<?php echo $val['webboards_picture'];?>" style="height:auto;width: 100%;border-radius: 5px;" >
                                </div>
                                <div class="col-sm-7 webboard-detail">
                                    <p><?php echo mb_substr($val['webboards_sub_detail'],0,180,'UTF-8'); ?>...</p>
                                    <a href="<?php echo base_url();?>webboard/detail/<?php echo $val['webboards_id'];?>"><button style="background-color:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                                </div>  
                                <div class="col-sm-12 webboard-detail-bar text-center"  style="background-color: lightgrey;margin-bottom: 10px;">
         
                                    <div class="col-sm-4" style="padding-left: 10px;">
                                        ทำเล : <?php echo $val['webboards_area'];?>
                                    </div> 
                                     <div class="col-sm-4 " style="padding-left: 0px;" >
                                        ประเภท : <?php echo $val['webboards_property'];?>
                                    </div> 
                                     <div class="col-sm-4" style="padding-left: 0px;">
                                        ราคา : <?php echo number_format($val['webboards_price']); ?>
                                    </div> 
                                </div>
                            </div>

                        <?php if($num_cols == 0){ ?>
                        </div>
                        <?php $num_cols = 2; }?> 

                    <?php }?>
                 <?php }else{ ?>
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height:300px;padding-top:120px;font-size:25px;">
                    - ไม่พบกระดานซื้อขาย -
                </div>
                <?php } ?>
        </div>
    </section>
    <!--// End Gallery 1-2 -->  
<script type="text/javascript">
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