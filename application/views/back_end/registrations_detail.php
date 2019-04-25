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
        <h3 class="text-themecolor m-b-0 m-t-0">รายละเอียดข้อมูลการลงทะเบียน</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">รายการลงทะเบียน</li>
            <li class="breadcrumb-item active">รายละเอียดข้อมูลการลงทะเบียน</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($registrations_detail as $val){ ?> 
<form id="registrations_form" name="registrations_form" method="post" action="<?php echo base_url();?>manage_registrations/update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผู้ลงทะเบียน</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_title_name'].' '.$val['reg_fname'].' '.$val['reg_lname']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">อีเมล</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_email']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">เบอร์โทรศัพท์</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_mobile']; ?>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">ไอดีไลน์</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_line']; ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                     <div class="form-group">
                        <label class="col-md-12">โครงการที่สนใจ</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_projects']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รู้จักผ่านช่องทาง</label>
                        <div class="col-md-12">
                            <?php echo $val['reg_channel']; ?>
                        </div>
                    </div> <div class="form-group">
                        <label class="col-md-12">ลงทะเบียนเมื่อ</label>
                        <div class="col-md-12">
                            <?php echo date("d/m/Y H:i",$val['reg_create_date']);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะ</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="reg_status" name="reg_status">
                                <option value="WAIT" <?php if($val['reg_status'] == 'WAIT' ){ echo 'selected'; } ?>>ใหม่</option>
                                <option value="CONFIRM" <?php if($val['reg_status'] == 'CONFIRM' ){ echo 'selected'; } ?>>ยืนยันแล้ว</option>
                             
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="reg_id" name="reg_id" value="<?php echo $val['reg_id']; ?>" />
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_registrations" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
