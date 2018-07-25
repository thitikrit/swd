<?php if(!empty($webboards_list)){ ?> 
    <?php $num_cols = 2;?>
    <?php foreach($webboards_list as $val){ ?>

        <?php if($num_cols == 2){ ?>
        <div class="row" style="margin-bottom: 0px; ">
        <?php } 
        $num_cols--; ?>

            <div class="col-sm-6 col-md-6 col-lg-6 webboard">
                <?php if($val['webboards_status'] == 'SOLDOUT'){ ?>
                <img src="<?php echo base_url(); ?>images/soldout.png" style="position:absolute;z-index:11;right:0px;top:0px;height:150px;width: 150px;border-radius: 5px;" >
                <?php }?>
                <div class="col-sm-12" style="padding-top: 10px">
                    <a href="<?php echo base_url();?>webboard/detail/<?php echo $val['webboards_id'];?>"><h4 style="color:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>"><?php echo $val['webboards_name'];?></h4></a>
                </div>
                <div class="col-sm-5 detail" style="height:100%;padding:10px 10px;">
                     <img src="<?php echo base_url(); ?>images/webboards/<?php echo $val['webboards_picture'];?>" style="height:140px;width: 100%;border-radius: 5px;" >
                </div>
                <div class="col-sm-7 webboard-detail">
                    <p><?php echo mb_substr($val['webboards_sub_detail'],0,180,'UTF-8'); ?>...</p>
                    <a href="<?php echo base_url();?>webboard/detail/<?php echo $val['webboards_id'];?>"><button style="background-color:<?php if($val['webboards_type'] == 'SELL'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                </div>  
                <div class="col-sm-12 webboard-detail-bar"  style="background-color: lightgrey;margin-bottom: 10px;">
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