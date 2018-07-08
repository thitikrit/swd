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
    .article{
         word-wrap: break-word;
         min-height: 250px;
    }
    .article-detail-recom{
        padding: 15px 15px;
        font-size: 16px;
      
    }
    .article-detail{
        padding: 5px 10px;
        font-size: 16px;
    }
    .article-detail-bar{
        padding: 10px 10px;
        font-size: 18px;
        font-weight: bold;
    }
a:hover{
    text-decoration:none;
}

#search-article{
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
#search-article::placeholder{
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
    <section id="call-to-action-2" style="padding:10px;padding-bottom:0px;background: aliceblue;box-shadow: 0 2px 2px -2px gray;
">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div style="margin-top: 10px" align="center">
                        <form id="search" name="search" method="post" action="<?php echo base_url();?>article/search" onsubmit="return chk_search();">
                        <span style="font-size:22px;font-weight: bold;color:deepskyblue;padding-right:1%">ค้นหาบทความ</span>
                       
                        <input type="text" name="search-article" id="search-article" placeholder="ค้นหาจากชื่อ หรือแท็ก" ></input>
                        <a href="##" title="คลิกเพื่อค้นหา" style="">
                            <button style="height:48px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;"><i class="icon-info-blocks fa fa-search"></i>
                        </button></a>
                        </form>
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
                        <span style="font-size:18px;margin-top:2px;font-weight: bold;color:#777777;padding-left:4%;float:left">ทั้งหมด  <?php echo count($articles);?> บทความ</span>
                        <span style="font-size:18px;font-weight: bold;color:#777777;padding-right:3%;float:right">
                            เรียงลำดับจาก : 
                            <select id="orderby" onchange="orderBy(this.value)">
                                <option value="new-old">ใหม่-เก่า</option>
                                <option value="old-new">เก่า-ใหม่</option>
                            </select>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr/>
    
    <section id="gallery-1" class="content-block section-wrapper gallery-1" style="padding-bottom: 100px;">
        <div class="container" id="art-all">
            <?php if(!empty($articles)){ ?>                
              
                <?php foreach($articles as $val){

                    if($val['articles_recommend'] == 1){ ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 article">     
                            <div class="col-sm-12" style="padding-top: 20px">
                                <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><h4 style="color:deeppink"><?php echo 
                                $val['articles_name']; ?></h4></a>
                            </div>
                            <div class="col-sm-5 detail" style="height:100%;padding-top:10px;">
                                 <img src="<?php echo base_url(); ?>images/articles/<?php echo $val['articles_picture'];?>" style="max-height:140px;height:100%;width: 100%;border-radius: 5px;" >
                            </div>
                            <div class="col-sm-7 article-detail">
                                <p><?php echo mb_substr($val['articles_sub_detail'],0,140,'UTF-8'); ?>...</p>
                                <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><button style="background-color:deeppink;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                            </div>             
                         </div> 
                    <?php }?>

                <?php }?> 
                 <?php foreach($articles as $val){

                    if($val['articles_recommend'] != 1){ ?>
                          <div class="col-sm-6 col-md-6 col-lg-6 article">     
                            <div class="col-sm-12" style="padding-top: 20px">
                                <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><h4 style="color:deepskyblue"><?php echo 
                                $val['articles_name']; ?></h4></a>
                            </div>
                            <div class="col-sm-5 detail" style="height:100%;padding-top:10px;">
                                 <img src="<?php echo base_url(); ?>images/articles/<?php echo $val['articles_picture'];?>" style="max-height:140px;height:100%;width: 100%;border-radius: 5px;" >
                            </div>
                            <div class="col-sm-7 article-detail">
                                <p><?php echo mb_substr($val['articles_sub_detail'],0,140,'UTF-8'); ?>...</p>
                                <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><button style="background-color:deepskyblue;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                            </div>             
                         </div> 
                    <?php }?>
                           
                <?php }?> 
                      
            <?php }else{ ?>
            <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height:300px;padding-top:120px;font-size:25px;">
                - ยังไม่มีบทความ -
            </div>
            <?php } ?>

        </div>
    </section>
<script type="text/javascript">
    function orderBy(order){
        $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>article/order",
                  data: {orderby:order},
                  cache : false,
                  success: function(response)
                  {
                      $("#art-all").html(response);
                  }
          });
    }
    function chk_search(){
        if( $("#search-article").val() != ''){
            return true;
        }else{
            $("#search-article").focus();
            return false;
        }
    }
</script>