
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
        <h3 class="text-themecolor m-b-0 m-t-0">เพิ่มทำเล</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">โครงการ</li>
            <li class="breadcrumb-item">ทำเล</li>
            <li class="breadcrumb-item active">เพิ่มทำเล</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="events_form" name="events_form" method="post" action="<?php echo base_url();?>manage_projects/area_add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อทำเล</label>
                            <div class="col-md-12">
                            <input id="area_name" name="area_name" type="text" placeholder="กรุณากรอกชื่อทำเล" class="form-control form-control-line" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="area_status" name="area_status">
                                <option value="ACTIVE" >แสดงผล</option>
                                <option value="INACTIVE" >ไม่แสดงผล</option>
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
        <button style="position:absolute;right:15px" class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_projects/manage_area" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->