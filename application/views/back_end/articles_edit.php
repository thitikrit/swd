
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
        <h3 class="text-themecolor m-b-0 m-t-0">แก้ไขบทความ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">บทความ</li>
            <li class="breadcrumb-item active">แก้ไขบทความ</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($articles_detail as $val){ ?>
<form id="articles_form" name="articles_form" method="post" action="<?php echo base_url();?>manage_articles/update" enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อหัวข้อ *</label>
                        <div class="col-md-12">
                            <input id="articles_name" name="articles_name" type="text" placeholder="กรุณากรอกชื่อหัวข้อ" class="form-control form-control-line" value="<?php echo $val['articles_name'];?>">
                             <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภท</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="articles_type" name="articles_type">
                                <option value="GENERAL"  <?php if($val['articles_type'] == 'GENERAL'){ echo 'selected'; } ?>>ทั่วไป</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="articles_status" name="articles_status">
                                <option value="ACTIVE" <?php if($val['articles_status'] == 'ACTIVE'){ echo 'selected'; } ?>>เผยแพร่</option>
                                <option value="INACTIVE" <?php if($val['articles_status'] == 'INACTIVE'){ echo 'selected'; } ?>>ไม่เผยแพร่</option>
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
                             <img src="<?php echo base_url();?>images/articles/<?php echo $val['articles_picture'];?>" width="50%">
                            <input type="hidden" id="articles_picture_old" name="articles_picture_old" value="<?php echo $val['articles_picture'];?>" />
                            <br/><br/>
                            <input type="file" id="articles_picture" name="articles_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png " onchange="chk_file(this)">
                            <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณาเลือกรูปภาพ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">แนะนำหรือไม่?</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="articles_recommend" name="articles_recommend">
                                <option value="0" <?php if($val['articles_recommend'] == 0){ echo 'selected'; } ?>>ไม่แนะนำ</option>
                                <option value="1" <?php if($val['articles_recommend'] == 1){ echo 'selected'; } ?>>แนะนำ</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword </label>
                            <div class="col-md-12">
                            <input id="articles_tag" name="articles_tag" type="text" class="form-control form-control-line" data-role="tagsinput" value="<?php echo $val['articles_tag'];?>">
                            <br/>
                            <span style="font-size:16px;color:red">
                            * กด Enter หนึ่งครั้งเพื่อเว้นคำ
                            </span>
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
                            <textarea id="articles_sub_detail" style="height:100px" name="articles_sub_detail" type="text" class="form-control form-control-line"><?php echo $val['articles_sub_detail'];?></textarea>
                             <p id="msg-3" class="help-block" style="color:red;display:none;">กรุณากรอกละเอียดแบบย่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด *</label>
                        <div class="col-md-12">
                            <textarea id="articles_detail" name="articles_detail"><?php echo $val['articles_detail'];?></textarea>
                             <p id="msg-4" class="help-block" style="color:red;display:none;">กรุณากรอกละเอียด *</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="articles_id" name="articles_id" value="<?php echo $val['articles_id'];?>" />        
        <button class="btn btn-primary" type="button" onclick="chk_form();">บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_articles" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<?php }?>
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
  $(function() { 
    CKFinder.setupCKEditor();
    CKEDITOR.replace( 'articles_detail' );
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
    event.preventDefault();
    chk = true;
    if($("#articles_name").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
    }
    if($("#articles_sub_detail").val().trim() == ''){
          $("#msg-3").show();
          chk = false;
    }
    if($("#articles_detail").val().trim() == ''){
          $("#msg-4").show();
          chk = false;
    }
    if(chk){
        $("#articles_form").submit();
    }
}
</script>