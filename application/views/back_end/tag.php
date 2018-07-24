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
        <h3 class="text-themecolor m-b-0 m-t-0">แท็กบนหน้าเว็บไซต์</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">แท็กบนหน้าเว็บไซต์</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form method="post" action="<?php echo base_url();?>/manage_tag/update">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                
                <div class="form-group">
                    <label class="col-md-12">Tag หรือ Keyword บนหน้าเว็บไซต์</label>
                    <div class="col-md-12">
                        <input style="height:50px !important;" data-role="tagsinput" id="tag" name="tag" type="text" class="form-control form-control-line" value="<?php echo $tag[0]['tags_name'];?>"/>
                        <br/>
                        <span style="font-size:16px;color:red">
                        * กด Enter หนึ่งครึ่งเพื่อเว้นวรรคแท็ก
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" type="button" onclick="submit();">บันทึก</button>
    </div>
    <br/>
</div>
</form>
  
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css">