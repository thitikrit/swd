<?php if(!empty($events)){ ?> 
<?php foreach($events as $val){

        if($val['events_recommend'] == 1){ ?>
            <div class="col-sm-6 col-md-6 col-lg-6 events">     
                <div class="col-sm-12" style="padding-top: 20px">
                    <a href="<?php echo base_url();?>event/detail/<?php echo $val['events_id'];?>"><h4 style="color:deeppink"><?php echo 
                    $val['events_name']; ?></h4></a>
                </div>
                <div class="col-sm-5 detail" style="height:100%;padding-top:10px;">
                     <img src="<?php echo base_url(); ?>images/events/<?php echo $val['events_picture'];?>" style="max-height:140px;height:100%;width: 100%;border-radius: 5px;" >
                </div>
                <div class="col-sm-7 events-detail">
                    <p><?php echo mb_substr($val['events_sub_detail'],0,140,'UTF-8'); ?>...</p>
                    <a href="<?php echo base_url();?>event/detail/<?php echo $val['events_id'];?>"><button style="background-color:deeppink;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                </div>             
             </div> 
        <?php }?>

    <?php }?> 
     <?php foreach($events as $val){

        if($val['events_recommend'] != 1){ ?>
              <div class="col-sm-6 col-md-6 col-lg-6 events">     
                <div class="col-sm-12" style="padding-top: 20px">
                    <a href="<?php echo base_url();?>event/detail/<?php echo $val['events_id'];?>"><h4 style="color:deepskyblue"><?php echo 
                    $val['events_name']; ?></h4></a>
                </div>
                <div class="col-sm-5 detail" style="height:100%;padding-top:10px;">
                     <img src="<?php echo base_url(); ?>images/events/<?php echo $val['events_picture'];?>" style="max-height:140px;height:100%;width: 100%;border-radius: 5px;" >
                </div>
                <div class="col-sm-7 events-detail">
                    <p><?php echo mb_substr($val['events_sub_detail'],0,140,'UTF-8'); ?>...</p>
                    <a href="<?php echo base_url();?>event/detail/<?php echo $val['events_id'];?>"><button style="background-color:deepskyblue;border:none;padding:8px 10px;color:white">รายละเอียดเพิ่มเติม</button></a>
                </div>             
             </div> 
        <?php }?>
               
    <?php }?> 
          
<?php }else{ ?>
<div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height:300px;padding-top:120px;font-size:25px;">
- ยังไม่มีกิจกรรม ข่าวสาร โปรโมชั่น -
</div>
<?php } ?>