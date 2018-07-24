
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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
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
<form id="webboards_form" name="webboards_form" method="post" action="<?php echo base_url();?>manage_webboards/add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อหัวข้อซื้อขาย</label>
                            <div class="col-md-12">
                            <input id="webboards_name" name="webboards_name" type="text" placeholder="กรุณากรอกชื่อหัวข้อ" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทกระดาน</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_type" name="webboards_type">
                                <option value="SELL" >ซื้อ-ขาย</option>
                                <option value="HIRE" >เช่า</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ทำเล</label>
                            <div class="col-md-12">
                            <input id="webboards_area" name="webboards_area" type="text" placeholder="ทำเล เช่น เมืองชลบุรี" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ประเภทอสังหาริมทรัพย์</label>
                            <div class="col-md-12">
                            <input id="webboards_property" name="webboards_property" type="text" placeholder="เช่น บ้านเดี่ยว บ้าแฝด คอนโด " class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ราคาซื้อ ขาย / เช่า</label>
                            <div class="col-md-12">
                               <input id="webboards_price" name="webboards_price" type="number" placeholder="กรอกราคาซื้อขาย - เช่า" class="form-control form-control-line" value="">
                            </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-6">หน่วย</label>
                        <div class="col-md-6">
                            <input id="webboards_unit" name="webboards_unit" type="text" placeholder="เช่น บาท หรือ ต่อปี" class="form-control form-control-line" value="">
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
                        <label class="col-md-12">รูปภาพ</label>
                        <div class="col-md-12">
                            <input type="file" name="webboards_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">แนะนำหรือไม่?</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_recommend" name="webboards_recommend">
                                <option value="0" >ไม่แนะนำ</option>
                                <option value="1" >แนะนำ</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword </label>
                            <div class="col-md-12">
                            <input id="webboards_tag" name="webboards_tag" type="text" class="form-control form-control-line" data-role="tagsinput" value="">
                            <br/>
                            <span style="font-size:16px;color:red">
                            * กด Enter หนึ่งครั้งเพื่อเว้นคำ
                            </span>
                        </div>
                    </div> 
                     <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_status" name="webboards_status">
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
                            <textarea id="webboards_sub_detail" style="height:100px" name="webboards_sub_detail" type="text" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด</label>
                        <div class="col-md-12">
                            <textarea id="webboards_detail" name="webboards_detail"></textarea>
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
                        <label class="col-md-12">แกลลอรี่ &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_gallery()">เพิ่มรูปภาพ</a></label>
                        <div id="row_div_gal" class="row" style='padding: 15px 15px;'>
                            <div id="div-gal-1" class="col-md-3" style="margin-bottom: 15px;">
                                <input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" type="button" onclick="submit();">บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_webboards" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
$(function() { 
    $('#webboards_detail').froalaEditor({ 
        height: 300 ,
        placeholderText: 'กรุณากรอกรายละเียด'
    });
    count_div_gal = $("#row_div_gal div").length + 1;
}); 
function add_gallery(){
    if( $("#row_div_gal div").length != 9){
        new_gallery = ' <div id="div-gal-'+count_div_gal+'" class="col-md-3" style="margin-bottom: 15px;">';
        new_gallery +=  '<input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">';
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
</script>