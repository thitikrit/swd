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
        <h3 class="text-themecolor m-b-0 m-t-0">แก้ไขผลงาน</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">ผลงาน</li>
            <li class="breadcrumb-item active">แก้ไขผลงาน</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach ($workings_detail as $val) { ?>
<form id="workings_edit_form" name="workings_edit_form" method="post" action="<?php echo base_url();?>manage_workings/update" onsubmit="return chk_form();" enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผลงาน *</label>
                        <div class="col-md-12">
                            <input id="workings_name" name="workings_name" type="text" placeholder="กรุณากรอกชื่อผลงาน" class="form-control form-control-line" value="<?php echo $val['workings_name']; ?>" >
                            <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ตำแหน่งที่ตั้ง *</label>
                        <div class="col-md-12">
                            <input id="workings_area" name="workings_area" type="text" placeholder="อำเภอ.... จังหวัด.... เช่น อำเภอเมือง จังหวัดชลบุรี" class="form-control form-control-line" value="<?php echo $val['workings_area']; ?>">
                            <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณากรอกตำแหน่งที่ตั้ง *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">คำอธิบาย *</label>
                        <div class="col-md-12">
                            <input id="workings_text" name="workings_text" type="text" placeholder="คำอธิบาย หรือ ประเภทผลงาน" class="form-control form-control-line" value="<?php echo $val['workings_text']; ?>" >
                            <p id="msg-3" class="help-block" style="color:red;display:none;">กรุณากรอกคำอธิบาย *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทผลงาน</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_type" name="workings_type" onchange="if(this.value == 'NEW'){ $('#form_old').hide(); $('#form_new').show(); }else{ $('#form_old').show(); $('#form_new').hide(); } ">
                                <option value="NEW" <?php if($val['workings_type'] == 'NEW'){ echo 'selected'; } ?>>โครงการที่รับบริหารงานขายในปัจจุบัน</option>
                                <option value="OLD" <?php if($val['workings_type'] == 'OLD'){ echo 'selected'; } ?>>โครงการที่รับบริหารงานขายที่ผ่านมา</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_status" name="workings_status">
                                <option value="ACTIVE" <?php if($val['workings_status'] == 'ACTIVE'){ echo 'selected'; } ?>>เผยแพร่</option>
                                <option value="INACTIVE" <?php if($val['workings_status'] == 'INACTIVE'){ echo 'selected'; } ?>>ไม่เผยแพร่</option>
                            </select>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    <!-- Column -->
    
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">รูปภาพ *</label>
                        <div class="col-md-12">
                            <img src="<?php echo base_url();?>images/workings/<?php echo $val['workings_picture'];?>" width="50%">
                            <input type="hidden" id="workings_picture_old" name="workings_picture_old" value="<?php echo $val['workings_picture'];?>" />
                            <br/><br/>
                            <input type="file" name="workings_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-4" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปภาพ *</p>
                        </div>
                    </div>
                    
                    <div class="form-group" id="form_old" <?php if($val['workings_type'] != 'OLD'){ echo 'style="display:none;"' ;} ?>>
                        <label class="col-md-12">รูปภาพขยาย *</label>
                        <div class="col-md-12">
                            <?php if($val['workings_picture_slider'] != NULL){ ?>
                            <img src="<?php echo base_url();?>images/workings/old/<?php echo $val['workings_picture_slider'];?>" width="50%">
                            <input type="hidden" id="workings_picture_slider_old" name="workings_picture_slider_old" value="<?php echo $val['workings_picture_slider'];?>" />
                            <br/><br/>
                            <?php }?>
                            <input type="file" id="workings_picture_slider" name="workings_picture_slider" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-5" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปภาพ *</p>
                        </div>
                    </div>
                    
                    <div class="form-group" id="form_new" <?php if($val['workings_type'] != 'NEW'){ echo 'style="display:none;"' ;} ?>>
                        <label class="col-md-12">เชื่อมโยงกับโครงการ</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_project_id" name="workings_project_id">
                                <option value="0" <?php if($val['workings_project_id'] == '0' || NULL){ echo 'selected'; } ?>>ไม่เชื่อมโยง</option>
                                <?php foreach($projects_list as $val2){?>
                                    <option value="<?php echo $val2['projects_id']; ?>" <?php if($val['workings_project_id'] ==  $val2['projects_id']){ echo 'selected'; } ?>><?php echo $val2['projects_name']; ?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="workings_id" name="workings_id" value="<?php echo $val['workings_id'];?>" />
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_workings" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<?php } ?>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/js/jquery-11.0.min.js"></script>
<script type="text/javascript">
$(function() { 
    $( "input" ).keypress(function() {
        $(".help-block").hide();
    }); 
    $( "textarea" ).keypress(function() {
        $(".help-block").hide();
    }); 
}); 
function chk_file(obj){
     var FileSize = obj.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
            alert('ไม่สามารถอัพไฟล์ขนาดเกิน 2 MB');
            obj.value = null;
        }else{
            var FileName = obj.files[0].name;
            var FileType = FileName.substring(FileName.lastIndexOf('.') + 1).toLowerCase();
            if(FileType != 'jpg' && FileType != 'jpeg' && FileType != 'png'){
                alert('อัพโหลดได้เฉพาะ .jpg .jpeg .png');
                obj.value = null;
            }
        } 
}
function chk_form(){
    chk = true;
    if($("#workings_name").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
    }
    if($("#workings_area").val().trim() == ''){
          $("#msg-2").show();
          chk = false;
    }
    if($("#workings_text").val().trim() == ''){
          $("#msg-3").show();
          chk = false;
    }
    if($("#workings_type").val() == 'OLD'){
        if($("#workings_picture_slider_old").val() == null){
            if($("#workings_picture_slider").get(0).files.length == 0){
              $("#msg-5").show();
              chk = false;
            }
        }
    }
    return chk;
}
</script>
