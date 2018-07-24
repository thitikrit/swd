<?php include 'bar.php';?>

    <style>
    a:hover{
        text-decoration:none;
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
     input:focus, textarea:focus, select:focus{
        outline: none !important;
    }
    </style>
    <script>
        $(function() {  
            var section = <?php echo $section; ?>;
            if(section==1){
                section = 'now';
            }else if(section ==2){
                 section = 'old';
            }
            var isotopeFilter = function(f){
                console.log(f);
                $("#isotope-gallery-container").isotope({filter: f});
            }
            if(section == "*" || section == null || section == "" || section == 0){
                isotopeFilter('*');
                 $("#a0").addClass("active");
            }else{
                isotopeFilter('.'+section);
                if(section == 'old'){
                    $("#a2").addClass("active");
                }else if(section == 'now'){
                    $("#a1").addClass("active");
                }else{
                     isotopeFilter('*');
                     $("#a0").addClass("active");
                }
            }
           
            $('ul.filter li a').click(function(){ 
                $('ul.filter li a').removeClass('active')
            }); 
        });
       
    </script>
    <!-- Start Gallery 1-2 -->
    <br/>
    <section id="gallery-1" class="content-block section-wrapper gallery-1" style="padding-top: 10px">
            <div class="container">

            <div class="editContent">
                <ul class="filter">
                    <li><a id="a0" href="#" data-filter="*">ทั้งหมด</a></li>
                    <li><a id="a1" href="#" data-filter=".now">โครงการที่รับบริหารงานขายในปัจจุบัน</a></li>
                    <li><a id="a2" href="#" data-filter=".old">โครงการที่รับบริหารงานขายที่ผ่านมา</a></li>
                </ul>
            </div>
            <!-- /.gallery-filter -->
          
            <div class="row">
                <div id="isotope-gallery-container">
                    <?php foreach($workings_list as $val){ ?>
                    <?php if( $val['workings_type'] == 'NEW'){?>
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper now " >
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a title="คลิ๊กเพื่อดูรายละเอียดโครงการ" href="<?php echo site_url();?>project/detail/<?php echo $val['workings_project_id'];?>"><img src="<?php echo base_url(); ?>images/workings/<?php echo $val['workings_picture']; ?>" style="height:170px;width: 100%" class="img-responsive" alt="1st gallery Thumb"></a>
                            </div>
                            <div class="gallery-details" >
                                <div class="editContent">
                                 <a title="คลิ๊กเพื่อดูรายละเอียดโครงการ" href="<?php echo site_url();?>project/detail/<?php echo $val['workings_project_id'];?>"><h4 style="color:deepskyblue"><?php echo $val['workings_name']; ?></h4></a>
                                </div>
                                <div class="editContent">
                                    <p><?php echo $val['workings_area']; ?><br/><?php echo $val['workings_text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>

                    <?php $no=9; foreach($workings_list as $val){ ?>
                    <?php if( $val['workings_type'] == 'OLD'){?>
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper old " 
                    onmouseover="$('#w<?php echo $no;?>').hide(); $('#w<?php echo $no;?><?php echo $no;?>').show(); " 
                    onmouseout="$('#w<?php echo $no;?>').show(); $('#w<?php echo $no;?><?php echo $no;?>').hide(); ">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img id="w<?php echo $no;?>" src="<?php echo base_url(); ?>images/workings/<?php echo $val['workings_picture']; ?>" style="height:170px;width: 100%" class="img-responsive" alt="1st gallery Thumb">
                                <img id="w<?php echo $no;?><?php echo $no;?>" src="<?php echo base_url(); ?>images/workings/old/<?php echo $val['workings_picture_slider']; ?>" style="height:170px;width: 100%;display:none;" class="img-responsive" alt="1st gallery Thumb">
                            </div>
                            <div class="gallery-details" >
                                  <div class="editContent">
                                    <h4 style="color:deepskyblue"><?php echo $val['workings_name']; ?></h4>
                                </div>
                                <div class="editContent">
                                    <p><?php echo $val['workings_area']; ?><br/><?php echo $val['workings_text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $no++; }?>
                    <?php }?>

                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
        </div>
    </section>
    <!--// End Gallery 1-2 -->  