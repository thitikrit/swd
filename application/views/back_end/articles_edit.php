
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
<form id="articles_form" name="articles_form" method="post" action="<?php echo base_url();?>index.php/manage_articles/update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อ</label>
                        <div class="col-md-12">
                            <input id="articles_name" name="articles_name" type="text" placeholder="กรุณากรอกชื่อ" class="form-control form-control-line" value="<?php echo $val['articles_name'];?>">
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
                                <option value="CANCEL" <?php if($val['articles_status'] == 'CANCEL'){ echo 'selected'; } ?>>ยกเลิกการเผยแพร่</option>
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
                             <img src="<?php echo base_url();?>images/articles/<?php echo $val['articles_picture'];?>" width="50%">
                            <input type="hidden" id="articles_picture_old" name="articles_picture_old" value="<?php echo $val['articles_picture'];?>" />
                            <br/><br/>
                            <input type="file" name="articles_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
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
                        <label class="col-md-12">แท็ก</label>
                            <div class="col-md-12">
                            <input id="articles_tag" name="articles_tag" type="text" class="form-control form-control-line" value="<?php echo $val['articles_tag'];?>">
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
                            <textarea id="articles_sub_detail" style="height:100px" name="articles_sub_detail" type="text" class="form-control form-control-line"><?php echo $val['articles_sub_detail'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด</label>
                        <div class="col-md-12">
                            <textarea id="articles_detail" name="articles_detail"><?php echo $val['articles_detail'];?></textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="articles_id" name="articles_id" value="<?php echo $val['articles_id'];?>" />        
        <button class="btn btn-primary" >บันทึก</button>
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
<script> 
  $(function() { 
    $('#articles_detail').froalaEditor({ 
        height: 300 ,
        placeholderText: 'กรุณากรอกรายละเียด'
    });

 }); </script>