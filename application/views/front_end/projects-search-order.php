<div class="row">
    <?php if(!empty($projects)){ ?>
        <div id="isotope-gallery-container">
            <?php foreach($projects as $val){ ?>
             <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper" >
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
    <?php }else{?>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height:300px;padding-top:120px;font-size:25px;">
            - ไม่พบโครงการ -
        </div>
    <?php }?>
</div>
<!-- /.row --> 
