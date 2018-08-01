
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
        <h3 class="text-themecolor m-b-0 m-t-0">สร้างโครงการ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">จัดการโครงการ</li>
            <li class="breadcrumb-item active">สร้างโครงการ</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="projects_form" name="projects_form" method="post" action="<?php echo base_url();?>manage_projects/add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12 ">รูปโลโก้โครงการ</label>
                        <div class="col-md-12">
                            <input type="file" id="projects_logo" name="projects_logo" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปโลโก้ *</p>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-md-12">ชื่อโครงการ</label>
                            <div class="col-md-12">
                            <input id="projects_name" name="projects_name" type="text" placeholder="กรุณากรอกชื่อโครงการ" class="form-control form-control-line" value="">
                            <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อโครงการ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ทำเล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="projects_area_id" name="projects_area_id">
                                <?php if(!empty($area)){ ?>
                                    <?php foreach($area as $val){ ?>
                                    <option value="<?php echo $val['area_id']; ?>" ><?php echo $val['area_name']; ?></option>
                                    <?php }?>
                                <?php }else{ ?>
                                    <option value="0" >* ยังไม่ได้เพิ่มทำเล *</option>
                                <?php } ?>
                            </select>
                            <p id="msg-3" class="help-block" style="color:red;display:none;">กรุณาเลือกทำเล *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ประเภทอสังหาริมทรัพย์</label>
                            <div class="col-md-12">
                            <input id="projects_property" name="projects_property" type="text" placeholder="เช่น บ้านเดี่ยว บ้านแฝด คอนโด " class="form-control form-control-line" value="">
                            <p id="msg-4" class="help-block" style="color:red;display:none;">กรุณากรอกประเภทอสังหาริมทรัพย์ *</p>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-12">ราคาเริ่มต้น (ข้อความ)</label>
                            <div class="col-md-12">
                               <input id="projects_price_text" name="projects_price_text" type="text" placeholder="กรอกราคาราคาเริ่มต้น (ข้อความ) เช่น ราคาเริ่มต้น 3.5ล้านบาท" class="form-control form-control-line" value="">
                                <p id="msg-5" class="help-block" style="color:red;display:none;">กรุณากรอกราคาเริ่มต้น (ข้อความ) *</p>
                            </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">ราคาเริ่มต้น (ตัวเลข)</label>
                            <div class="col-md-12">
                               <input id="projects_price" name="projects_price" type="number" placeholder="กรอกราคาราคาเริ่มต้น (ตัวเลข) 3500000" class="form-control form-control-line" value="">
                                <p id="msg-6" class="help-block" style="color:red;display:none;">กรุณากรอกราคาเริ่มต้น (ตัวเลข) *</p>
                            </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-md-12">ที่ตั้งโครงการ</label>
                        <div class="col-md-12">
                            <input id="projects_location" name="projects_location" type="text" placeholder="กรุณากรอกที่ตั้งของโครงการ" class="form-control form-control-line" value="">
                            <p id="msg-7" class="help-block" style="color:red;display:none;">กรุณากรอกที่ตั้งของโครงการ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รูปภาพแผนที่โครงการ</label>
                        <div class="col-md-12">
                            <input type="file" id="projects_map" name="projects_map" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-8" class="help-block" style="color:red;display:none;">กรุณาเลือกแผนที่โครงการ *</p>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Google map (ละติจูด,ลองจิจูด)</label>
                        <div class="col-md-12">
                            <input id="projects_googlemap" name="projects_googlemap" type="text" placeholder="ละติจูด,ลองจิจูด เช่น 13.247625,100.933495" class="form-control form-control-line" value="">

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
                        <label class="col-md-12">เบอร์โทรศัพท์สำนักงานขาย</label>
                        <div class="col-md-12">
                           <input id="projects_tel" name="projects_tel" type="text" placeholder="เช่น 038-123-456,081-234-5678" class="form-control form-control-line" value="">
                           <p id="msg-10" class="help-block" style="color:red;display:none;">กรุณกรอกเบอร์โทรศัพท์สำนักงานขาย*</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">เว็บไซต์ (WEBSITE)</label>
                        <div class="col-md-12">
                           <input id="projects_website" name="projects_website" type="text" placeholder="เช่น http://www.sawasdeechonburi.com" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ไอดีไลน์ (ID LINE)</label>
                        <div class="col-md-12">
                           <input id="projects_line" name="projects_line" type="text" placeholder="เช่น sawasdee,@sawasdee" class="form-control form-control-line" value="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">เฟซบุ๊ก (FACEBOK)</label>
                        <div class="col-md-12">
                            <input id="projects_fb" name="projects_fb" type="text" placeholder="ชื่อเพจ" class="form-control form-control-line" value="">
                            <input id="projects_fb_link" name="projects_fb_link" type="text" placeholder="ลิ๊งก์ของเพจ เช่น https://www.facebook.com/swdchonburi/" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รูปภาพปก</label>
                        <div class="col-md-12">
                            <input type="file" id="projects_picture" name="projects_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-14" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปภาพปก *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">แนะนำหรือไม่?</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="projects_recommend" name="projects_recommend">
                                <option value="0" >ไม่แนะนำ</option>
                                <option value="1" >แนะนำ</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword</label>
                            <div class="col-md-12">
                            <input id="projects_tag" name="projects_tag" type="text" class="form-control form-control-line" data-role="tagsinput" value="">
                            <br/>
	                        <span style="font-size:16px;color:red">
	                        * กด Enter หนึ่งครั้งเพื่อเว้นคำ
	                        </span>
                        </div>
                    </div> 
                     <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="projects_status" name="projects_status">
                                <option value="ACTIVE" >เผยแพร่</option>
                                <option value="INACTIVE" >ไม่เผยแพร่</option>
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียดแบบย่อ</label>
                        <div class="col-md-12">
                            <input id="projects_sub_detail" name="projects_sub_detail" type="text" class="form-control form-control-line" value="" maxlength="100">
                            <p id="msg-15" class="help-block" style="color:red;display:none;">กรุณากรอกรายละเอียดแบบย่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด</label>
                        <div class="col-md-12">
                            <textarea id="projects_detail" name="projects_detail" placeholder="กรุณากรอกรายละเอียด"></textarea>
                            <p id="msg-16" class="help-block" style="color:red;display:none;">กรุณากรอกรายละเอียด *</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">สิ่งอำนวยความสะดวก &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_facility()">เพิ่ม</a></label>
                        <div id="row_div_fac" class="row" style='padding: 15px 15px;'>
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                 <label class="col-md-12">แบบห้อง &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_plans()">เพิ่มห้อง</a></label>
                <div class="table-responsive col-md-12">
                    <table id="plans" class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center; ">ชื่อห้อง</th>
                                <th style="text-align: center; ">คำอธิบาย</th>
                                <th style="text-align: center; ">รูปห้อง</th>
                                <th style="text-align: center; ">รูปแปลนห้อง</th>
                                <th style="text-align: center; ">-</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; ">
                                <tr id="tr-plans-blank">
                                    <td width="25%">-</td>
                                    <td width="25%">-</td>
                                    <td width="25%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr>
                        </tbody>
                    </table>
                    <p id="msg-18" class="help-block" style="color:red;display:none;">กรุณาตรวจสอบรายละเอียด *</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                 <label class="col-md-12">รูปภาพปกสไลด์ &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_picture_slide()">เพิ่มรูปภาพ</a></label>
                <div class="table-responsive col-md-12">
                    <table id="picture_slide" class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center; ">รูปภาพที่แสดง</th>
                                <th style="text-align: center; ">ลำดับที่แสดง</th>
                                <th style="text-align: center; ">-</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; ">
                                <tr id="tr-pic-slide-blank">
                                    <td width="50%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">แกลลอรี่ &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_gallery()">เพิ่มรูปภาพ</a></label>
                        <div id="row_div_gal" class="row" style='padding: 15px 15px;'>
            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" type="button" onclick="chk_form();">บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_projects/projects_list" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!-- Include Editor style. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css"> 
<script>
var count_div_gal; 
var count_div_fac; 
var count_tr_pic;
var count_tr_plans;
$(function() { 
    $('#projects_detail').froalaEditor({ 
        height: 300 ,
        placeholderText: 'กรุณากรอกรายละเอียด'
    });
    count_div_gal = $("#row_div_gal div").length + 1;
    count_div_fac = $("#row_div_fac div").length + 1;
    count_tr_pic = $("#picture_slide tbody tr").length + 1;
    count_tr_plans = 0;
    num_add_plans_gal = 1;
}); 
function add_gallery(){
     new_gallery = ' <div id="div-gal-'+count_div_gal+'" class="col-md-3" style="margin-bottom: 15px;">';
        new_gallery +=  '<input type="file" name="projects_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">';
        new_gallery +=  '<a href="javascript:void(0)" class="btn btn-danger btn-sm" style="position:absolute;right:15px;top:0;" onclick="del_gal('+count_div_gal+');">x</a>';
        new_gallery +=  '</div>';
        $("#row_div_gal").append(new_gallery);
        count_div_gal++;
}
function del_gal(row){
    $("#div-gal-"+row).fadeOut(300, function() { 
        $(this).remove(); 
    }); 
} 
function add_facility(){
    if( $("#row_div_fac div").length != 10){
        new_facility = ' <div id="div-fac-'+count_div_fac+'" class="col-md-3" style="margin-bottom: 15px;">';
        new_facility +=  '<input type="file" name="projects_facility_pic[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">';
        new_facility +=  '<a href="javascript:void(0)" class="btn btn-danger btn-sm" style="position:absolute;right:15px;top:0;" onclick="del_fac('+count_div_fac+');">x</a>';
        new_facility +=  '<input  name="projects_facility_name[]" type="text" class="form-control form-control-line" value="" maxlength="30">';
        new_facility +=  '</div>';
        $("#row_div_fac").append(new_facility);
        count_div_fac++;
    }
}
function del_fac(row){
    $("#div-fac-"+row).fadeOut(300, function() { 
        $(this).remove(); 
    }); 
} 
function add_picture_slide(){
    $("#tr-pic-slide-blank").hide();
    new_picture_slide ='<tr id="tr-pic-slide-'+count_tr_pic+'">';
    new_picture_slide +='<td width="50%"><input type="file" name="menu_pic_slide[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)"></td>';
    new_picture_slide +='<td width="25%"><input type="text" name="menu_pic_slide_order[]" style="width:35px" maxlength="1" class="form-control"/></td>';
    new_picture_slide +='<td><a href="javascript:void(0)" class="btn btn-info" onclick="del_picture_slide('+count_tr_pic+');">ลบ</a></td>';
    new_picture_slide +='</tr> ';
    $("#picture_slide").append(new_picture_slide);
    count_tr_pic++;
}
function del_picture_slide(row){
    $("#tr-pic-slide-"+row).fadeOut(300, function() { 
        $(this).remove(); 
        if( $("#picture_slide tbody tr").length < 2){
            $("#tr-pic-slide-blank").show();
        }
    }); 
}
function add_plans(){
    $("#tr-plans-blank").hide();
    new_plans ='<tr id="tr-plans-'+count_tr_plans+'">';
    new_plans +='<td width="25%"><input type="text" name="plans_name[]" style="width:100%" class="form-control"></td>';
    new_plans +='<td width="25%"><input type="text" name="plans_detail[]" style="width:100%" class="form-control"></td>';
    new_plans +='<td width="25%"><input type="file" name="plans_picture[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)"></td>';
    new_plans +='<td width="25%" id="td-plans-gal-'+count_tr_plans+'">';
    new_plans +='<div class="col-12" style="padding:0px"></div>';
    new_plans +='<span></span><a href="javascript:void(0)" class="btn btn-success btn-xs" onclick="add_plans_gallery('+count_tr_plans+');">+</a>';
    new_plans +='</td>';
    new_plans +='<td><a href="javascript:void(0)" class="btn btn-info" onclick="del_plans('+count_tr_plans+');">ลบ</a></td>';
    new_plans +='</tr> ';
    $("#plans").append(new_plans);
    count_tr_plans++;
}
function del_plans(row){
    $("#tr-plans-"+row).fadeOut(300, function() { 
        $(this).remove(); 
        if( $("#plans tbody tr").length < 2){
            $("#tr-plans-blank").show();
        }
    }); 
}
function add_plans_gallery(row){
    if( $("#td-plans-gal-"+row+" span div").length < 2){
        new_plans_gal = '<div class="col-12" id="div-add-plans-gal-'+num_add_plans_gal+'" style="padding:0px"><input type="file" name="plans_gallery['+row+'][]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)"><a href="javascript:void(0)" class="btn btn-danger btn-xs" style="position:absolute;right:0px;" onclick="del_plans_gallery('+num_add_plans_gal+');">x</a></div>';
        $("#td-plans-gal-"+row+" span").append(new_plans_gal);
        num_add_plans_gal++;
    }
}
function del_plans_gallery(num){
    $("#div-add-plans-gal-"+num).fadeOut(300, function() { 
        $(this).remove(); 
    }); 
}
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
    event.preventDefault();
    $(".help-block").hide();
    chk = true;

    if($("#projects_logo").get(0).files.length == 0){
        $("#msg-1").show();
        chk = false;
    }
    if($("#projects_name").val().trim() == ''){
        $("#msg-2").show();
        chk = false;
    }
    if($("#projects_area").val() == '0'){
        $("#msg-3").show();
        chk = false;
    }
    if($("#projects_area").val() == '0'){
        $("#msg-3").show();
        chk = false;
    }
    if($("#projects_property").val().trim() == ''){
        $("#msg-4").show();
        chk = false;
    }
    if($("#projects_price_text").val().trim() == ''){
        $("#msg-5").show();
        chk = false;
    }
    if($("#projects_price").val().trim() == ''){
        $("#msg-6").show();
        chk = false;
    }
    if($("#projects_location").val().trim() == ''){
        $("#msg-7").show();
        chk = false;
    }
    if($("#projects_map").get(0).files.length == 0){
        $("#msg-8").show();
        chk = false;
    }
    if($("#projects_tel").val().trim() == ''){
        $("#msg-10").show();
        chk = false;
    }
    if($("#projects_picture").get(0).files.length == 0){
        $("#msg-14").show();
        chk = false;
    }
    if($("#projects_sub_detail").val().trim() == ''){
        $("#msg-15").show();
        chk = false;
    }
    if($("#projects_detail").val().trim() == ''){
        $("#msg-16").show();
        chk = false;
    }

    num_plans = document.getElementsByName("plans_name[]").length;
    for(var i=0; i<num_plans;i++){
        if(document.getElementsByName("plans_name[]")[i].value.trim() == ''){
            $("#msg-18").show();
            chk=false;
        }
        if(document.getElementsByName("plans_detail[]")[i].value.trim() == ''){
            $("#msg-18").show();
            chk=false;
        }
        if(document.getElementsByName("plans_picture[]")[i].value == ''){
            $("#msg-18").show();
            chk=false;
        }
    }

    if(chk){
        $("#projects_form").submit();
    }
}
</script>