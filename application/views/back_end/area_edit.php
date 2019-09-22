
<style type="text/css">
    label{
        font-weight: bold !important;
    }
</style>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">แก้ไขทำเล</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">โครงการ</li>
            <li class="breadcrumb-item">ทำเล</li>
            <li class="breadcrumb-item active">แก้ไขทำเล</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($area_detail as $val){?>
<form id="events_form" name="events_form" method="post" action="<?php echo base_url();?>manage_projects/area_update" onsubmit="return chk_form();" enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
                    <div class="card-block">
                        <div class="form-group">
                        <label class="col-md-12">เขตทำเล</label>
                        <div class="col-md-12">
                            <select name="area_category_area_id" id="area_category_area_id" class="form-control" required="">
                              <option value="0"> - โปรดระบุ - </option>
                              <?php
                              $category_area_list = $this->Area_service->get_list();
                              foreach($category_area_list as $category_area_list){
                              $selected = ($val['area_category_area_id'] == $category_area_list['status_code'])?'selected':'';
                                echo '<option value="'.$category_area_list['status_code'].'" '.$selected.'>'.$category_area_list['status_name'].'</option>';
                              }
                              ?>
                            </select>
                             <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณาเลือกเขตทำเล *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ชื่อทำเล</label>
                            <div class="col-md-12">
                            <input id="area_name" name="area_name" type="text" placeholder="กรุณากรอกชื่อทำเล" class="form-control form-control-line" value="<?php echo $val['area_name']; ?>" >
                            <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อทำเล *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="area_status" name="area_status">
                                <option value="ACTIVE" <?php if($val['area_status'] == 'ACTIVE' ){ echo 'selected'; } ?> >แสดงผล</option>
                                <option value="INACTIVE" <?php if($val['area_status'] == 'INACTIVE' ){ echo 'selected'; } ?> >ไม่แสดงผล</option>
                            </select>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">  
    <div class="col-lg-6 col-xlg-6 col-md-6 text-center">
        <input type="hidden" id="area_id" name="area_id" value="<?php echo $val['area_id']; ?>" />
        <button style="position:absolute;right:15px" class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_projects/manage_area" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<?php }?>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script> 
$(function() { 
    $( "input" ).keypress(function() {
        $(".help-block").hide();
    }); 
}); 

function chk_form(){
    chk = true;
    if($("#area_name").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
    }
    if($("#area_category_area_id").val().trim() == 0){
        $("#msg-2").show();
        chk = false;
    }
    
    return chk;
}

</script>