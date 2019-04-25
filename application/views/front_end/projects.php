<?php include 'bar.php';?>

<style>
#search-input,#search-area,#search-type,#search-price{
    background-color:rgba(255,255,255,0.7);
    background-repeat: no-repeat;
    background-position: center right 10px;
    background-position-y: 15px;
    background-position-x: 98%;
    width: 40%;
    margin: 5px;
    border:none;
    border-radius: : 50px;
    font-size: 21px;
    padding: 10px 15px;
    height:52px;
}
#search-input::placeholder{
    color:gray;
}
#search-input:focus{
    outline-color: 
}
.img-responsive{
    height: 200px;
    width: 100%;
    object-fit: cover;
    object-position: center;
}
</style>
    <section id="call-to-action-2" style="padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div style="margin-top: 20px" align="center">
                        <form id="search" name="search" method="post" action="<?php echo base_url();?>project/search" onsubmit="return chk_search();">
                            <span style="font-size:26px;font-weight: bold;color:white;">ค้นหาโครงการพร้อมอยู่</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="search-input" name="search-input"  placeholder="ค้นหาโครงการ, ทำเล" ></input>
                            <button onclick="search_setting();" style="height:50px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;">ค้นหาเพิ่มเติม <i class="icon-info-blocks fa fa-sort-down"></i>
                            </button>
                            <a href="##" title="คลิกเพื่อค้นหา" style="">
                            <button style="height:50px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;"><i class="icon-info-blocks fa fa-search"></i>
                            </button></a>
                            <div id="search-setting" style="display:none;width:80%">
                                 <div class="col-md-4 col-sm-3" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:white;">ประเภท</span>&nbsp;&nbsp;
                                    <select id="search-type" name="search-type"  style="width:65%">
                                        <option value="default">เลือกประเภท</option>                                        
                                        <option value="บ้านเดี่ยว / บ้านแฝด">บ้านเดี่ยว / บ้านแฝด</option>                                        
                                        <option value="ทาวน์โฮม">ทาวน์โฮม</option>                                        
                                        <option value="คอนโด">คอนโด</option>                                        
                                        <option value="อาคารพาณิชย์">อาคารพาณิชย์</option>                                        
                                        <option value="อื่นๆ">อื่นๆ</option>                                        
                                    </select>
                                </div>

                                <div class="col-md-4 col-sm-3" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:white;">ทำเล</span>&nbsp;&nbsp;
                                    <select id="search-area" name="search-area"  style="width:65%">
                                        <option value="default">เลือกทำเล</option>
                                        <?php foreach ($area as $val) { ?>
                                            <option value="<?php echo $val['area_id'];?>"><?php echo $val['area_name'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                               
                                <div class="col-md-4 col-sm-6" style="padding-left: 0px">
                                    <span style="font-size:22px;font-weight: bold;color:white;">ช่วงราคา</span>&nbsp;&nbsp;
                                    <select id="search-price" name="search-price"  style="width:65%">
                                        <option value="default">กำหนดช่วงราคา</option>
                                        <option value="1000000">- ต่ำกว่า 1,000,000 บาท</option>
                                        <option value="1000001">- 1,000,000 - 2,500,000 บาท</option>
                                        <option value="2000000">- 2,500,000 - 5,000,000 บาท</option>
                                        <option value="5000000">- มากกว่า 5,000,000 บาท ขึ้นไป</option>
                                    </select>
                                </div>
                            </div> 
                        </form>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>
    <br/>

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
    <script>
        $(function() {  
            <?php if(!empty($area_active)){?>
                 var area = <?php echo $area_active; ?>;
            <?php }else{ ?>
                var area = '';
            <?php }?> 
           
            var isotopeFilter = function(f){
                console.log(f);
                $("#isotope-gallery-container").isotope({filter: f});
            }
            if(area == "*" || area == null || area == "" || area == 0){
                isotopeFilter('*');
                 $("#a0").addClass("active");
            }else{
                isotopeFilter('.area'+area);
                 $("#a"+area).addClass("active");
            }
           
            $('ul.filter li a').click(function(){ 
                $('ul.filter li a').removeClass('active')
            }); 
        });
       
    </script>

    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
            <div class="container">

            <div class="editContent">
                <ul class="filter">
                    <li><a id="a0" href="#" data-filter="*">ทั้งหมด</a></li>
                    <?php foreach($area as $val){?>
                    <li><a id="a<?php echo $val['area_id']; ?>" href="#" data-filter=".area<?php echo $val['area_id']; ?>"><?php echo $val['area_name']; ?></a></li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.gallery-filter -->
          
            <div class="row">
                <?php if(!empty($projects)){ ?>
                    <div id="isotope-gallery-container">
                        <?php foreach($projects as $val){ ?>
                         <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper area<?php echo $val['area_id']; ?>" >
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="<?php echo base_url(); ?>images/projects/<?php echo $val['projects_id'];?>/<?php echo $val['projects_picture'];?>"class="img-responsive">
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
        <!-- /.container -->
        </div>
    </section>
    <!--// End Gallery 1-2 -->  
<script type="text/javascript">
    var check_form = 1;
    function chk_search(){
        if(check_form == 1){
            if( $("#search-input").val() != ''){
                return true;
            }else{
                $("#search-input").focus();
                return false;
            }
        }else{
            if( $("#search-area").val() == 'default' && $("#search-type").val() == 'default' && $("#search-price").val() == 'default'){
                if( $("#search-input").val() != ''){
                    return true;
                }else{
                    $("#search-input").focus();
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