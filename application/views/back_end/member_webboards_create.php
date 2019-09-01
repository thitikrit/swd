
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
        <h3 class="text-themecolor m-b-0 m-t-0">สร้างกระดานซื้อขาย</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">สมาชิก</a></li>
            <li class="breadcrumb-item">กระดานซื้อขาย</li>
            <li class="breadcrumb-item active">สร้างกระดานซื้อขาย</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="webboards_form" name="webboards_form" method="post" action="<?php echo base_url();?>member/webboard_add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อหัวข้อซื้อขาย *</label>
                            <div class="col-md-12">
                            <input id="webboards_name" name="webboards_name" type="text" placeholder="กรุณากรอกชื่อหัวข้อ" maxlength="100" class="form-control form-control-line" value="">
                            <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อหัวข้อซ์้อขาย *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทกระดานซื้อขาย</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_type" name="webboards_type">
                                <option value="SELL" >ซื้อ-ขาย</option>
                                <option value="HIRE" >เช่า</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ทำเล *</label>
                            <div class="col-md-12">
                            <input id="webboards_area" name="webboards_area" type="text" placeholder="ทำเล เช่น เมืองชลบุรี ศรีราชา พัทยา เป็นต้น" class="form-control form-control-line" value="">
                            <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อทำเล *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ประเภทอสังหาริมทรัพย์ *</label>
                            <div class="col-md-12">
                            <input id="webboards_property" name="webboards_property" type="text" placeholder="เช่น บ้านเดี่ยว บ้านแฝด คอนโด อาคารพาณิชย์ เป็นต้น" class="form-control form-control-line" value="">
                            <p id="msg-3" class="help-block" style="color:red;display:none;">กรุณากรอกประเภทอสังหาริมทรัพย์ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ราคาซื้อ ขาย / เช่า *</label>
                            <div class="col-md-12">
                               <input id="webboards_price" name="webboards_price" type="number" placeholder="กรอกราคาซื้อขาย - เช่า" class="form-control form-control-line" value="">
                               <p id="msg-4" class="help-block" style="color:red;display:none;">กรุณากรอกราคาซื้อ ขาย / เช่า*</p>
                            </div>
                            
                    </div>
                     <div class="form-group">
                        <label class="col-md-6">หน่วย *</label>
                        <div class="col-md-6">
                            <input id="webboards_unit" name="webboards_unit" type="text" placeholder="เช่น บาท หรือ ต่อปี" class="form-control form-control-line" value="">
                            <p id="msg-5" class="help-block" style="color:red;display:none;">กรุณากรอกหน่วยของราคา *</p>
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
                        <label class="col-md-12">รูปภาพปกของกระดานซื้อขาย</label>
                        <div class="col-md-12">
                            <input type="file" id="webboards_picture" name="webboards_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">
                            <p id="msg-6" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปภาพ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword ที่ใช้ค้นหากระดานของคุณ</label>
                            <div class="col-md-12">
                            <input id="webboards_tag" name="webboards_tag" type="text" class="form-control form-control-line" data-role="tagsinput" value="">
                            <br/>
                            <span style="font-size:16px;color:red">
                            * กด Enter หนึ่งครั้งเพื่อเว้นคำ
                            </span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผลกระดานซื้อขาย</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_status" name="webboards_status">
                                <option value="INACTIVE" >ไม่เผยแพร่</option>
                                <option value="ACTIVE" >เผยแพร่</option>
                            </select>
                            <div style="color:red;padding-top: 10px">* การเผยแพร่กระดานซื้อขายของคุณ กระดานซื้อขายต้องได้รับการตรวจสอบ หรืออนุญาตจากผู้ดูแลระบบก่อน</div>
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
                        <label class="col-md-12">รายละเอียดแบบย่อ *</label>
                        <div class="col-md-12">
                            <textarea maxlength="1000" id="webboards_sub_detail" style="height:100px" name="webboards_sub_detail" type="text" class="form-control form-control-line"></textarea>
                            <p id="msg-7" class="help-block" style="color:red;display:none;">กรุณากรอกรายละเอียดแบบย่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด *</label>
                        <div class="col-md-12">
                            <textarea id="webboards_detail" name="webboards_detail"></textarea>
                            <p id="msg-8" class="help-block" style="color:red;display:none;">กรุณากรอกรายละเอียด *</p>
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
                        <label class="col-md-12">แกลลอรี่ หรือ รูปภาพเพิ่มเติม &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_gallery()">เพิ่มรูปภาพ</a></label>
                        <div id="row_div_gal" class="row" style='padding: 15px 15px;'>
                            <div id="div-gal-1" class="col-md-3" style="margin-bottom: 15px;">
                                <input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)" >
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" type="button" onclick="chk_form();">บันทึก</button>
        <a href="<?php echo base_url(); ?>member/webboard" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/ckfinder/ckfinder.js"></script>
<script>
var count_div_gal; 
$(function() { 
    CKFinder.setupCKEditor();
    CKEDITOR.replace( 'webboards_detail' );
    count_div_gal = $("#row_div_gal div").length + 1;
    $( "input" ).keypress(function() {
        $(".help-block").hide();
    }); 
    $( "textarea" ).keypress(function() {
        $(".help-block").hide();
    }); 
}); 
function add_gallery(){
    if( $("#row_div_gal div").length != 9){
        new_gallery = ' <div id="div-gal-'+count_div_gal+'" class="col-md-3" style="margin-bottom: 15px;">';
        new_gallery +=  '<input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png" onchange="chk_file(this)">';
        new_gallery +=  '<a href="javascript:void(0)" class="btn btn-danger btn-sm" style="position:absolute;right:15px;top:0;" onclick="del_gal('+count_div_gal+');">x</a>';
        new_gallery +=  '</div>';
        $("#row_div_gal").append(new_gallery);
        count_div_gal++;
    }
}
function del_gal(row){
    $("#div-gal-"+row).fadeOut(300, function() { 
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
    chk = true;
    if($("#webboards_name").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
    }
    if($("#webboards_area").val().trim() == ''){
          $("#msg-2").show();
          chk = false;
    }
    if($("#webboards_property").val().trim() == ''){
          $("#msg-3").show();
          chk = false;
    }
    if($("#webboards_price").val().trim() == ''){
          $("#msg-4").show();
          chk = false;
    }
    if($("#webboards_unit").val().trim() == ''){
          $("#msg-5").show();
          chk = false;
    }
     if($("#webboards_picture").get(0).files.length == 0){
          $("#msg-6").show();
          chk = false;
    }
    if($("#webboards_sub_detail").val().trim() == ''){
          $("#msg-7").show();
          chk = false;
    }
    if($("#webboards_detail").val().trim() == ''){
          $("#msg-8").show();
          chk = false;
    }
   
    if(chk){
        $("#webboards_form").submit();
    }
}

</script>