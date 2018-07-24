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
        <h3 class="text-themecolor m-b-0 m-t-0">สร้างกิจกรรม ข่าวสาร โปรโมชั่น</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">กิจกรรม ข่าวสาร โปรโมชั่น</li>
            <li class="breadcrumb-item active">สร้างกิจกรรม ข่าวสาร โปรโมชั่น</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="events_form" name="events_form" method="post" action="<?php echo base_url();?>manage_events/add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อ</label>
                            <div class="col-md-12">
                            <input id="events_name" name="events_name" type="text" placeholder="กรุณากรอกชื่อ" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภท</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="events_type" name="events_type">
                                <option value="ACTIVITY" >กิจกรรม</option>
                                <option value="NEWS" >ข่าวสาร</option>
                                <option value="PROMOTION" >โปรโมชั่น</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="events_status" name="events_status">
                                <option value="ACTIVE" >เผยแพร่</option>
                                <option value="INACTIVE" >ไม่เผยแพร่</option>
                                <option value="CANCEL" >ยกเลิกการเผยแพร่</option>
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
                        <label class="col-md-12">รูปภาพ</label>
                        <div class="col-md-12">
                            <input type="file" name="events_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">แนะนำหรือไม่?</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="events_recommend" name="events_recommend">
                                <option value="0" >ไม่แนะนำ</option>
                                <option value="1" >แนะนำ</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword </label>
                            <div class="col-md-12">
                            <input id="events_tag" name="events_tag" type="text" class="form-control form-control-line" data-role="tagsinput"  value="">
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
                        <label class="col-md-12">รายละเอียดแบบย่อ</label>
                        <div class="col-md-12">
                            <textarea id="events_sub_detail" style="height:100px" name="events_sub_detail" type="text" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด</label>
                        <div class="col-md-12">
                            <textarea id="events_detail" name="events_detail"></textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" type="button" onclick="submit();">บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_events" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
  $(function() { 
    $('#events_detail').froalaEditor({ 
        height: 300 ,
        placeholderText: 'กรุณากรอกรายละเียด'
    });

 }); </script>