<?php if(!empty($articles)){ ?>                
<?php foreach($articles as $val){

        if($val['articles_recommend'] == 1){ ?>
            <div class="col-sm-6 col-md-6 col-lg-6 article ">     
                <div class="col-sm-12" style="padding-top: 20px">
                    <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><h4 style="color:deeppink"><?php echo 
                    $val['articles_name']; ?></h4></a>
                </div>
                <div class="col-sm-5 detail" style="height:100%;padding-top:10px;">
                     <img src="<?php echo base_url(); ?>images/articles/<?php echo $val['articles_picture'];?>" class="img-article">
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
                     <img src="<?php echo base_url(); ?>images/articles/<?php echo $val['articles_picture'];?>" class="img-article">
                </div>
                <div class="col-sm-7 article-detail">
                    <p><?php echo mb_substr($val['articles_sub_detail'],0,140,'UTF-8'); ?>...</p>
                    <a href="<?php echo base_url();?>article/detail/<?php echo $val['articles_id'];?>"><button style="background-color:deepskyblue;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                </div>             
             </div> 
        <?php }?>
               
    <?php }?> 
</div>                             
<?php }else{ ?>
<div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height:300px;padding-top:120px;font-size:25px;">
    - ยังไม่มีบทความ -
</div>
<?php } ?>
