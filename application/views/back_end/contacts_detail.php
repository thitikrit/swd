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
        <h3 class="text-themecolor m-b-0 m-t-0">รายละเอียดข้อมูลการติดต่อ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">ติดต่อเรา</li>
            <li class="breadcrumb-item active">รายละเอียดข้อมูลการติดต่อ</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($contacts_detail as $val){ ?> 
<form id="contacts_form" name="contacts_form" method="post" action="<?php echo base_url();?>index.php/manage_contacts/update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผู้ติดต่อ</label>
                        <div class="col-md-12">
                            <?php echo $val['contacts_name']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">อีเมล</label>
                        <div class="col-md-12">
                            <?php echo $val['contacts_email']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผู้ติดต่อ</label>
                        <div class="col-md-12">
                            <?php echo $val['contacts_tel']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะ</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="contacts_status" name="contacts_status">
                                <option value="UNREAD" <?php if($val['contacts_status'] == 'UNREAD' ){ echo 'selected'; } ?>>ยังไม่ได้อ่าน</option>
                                <option value="READ" <?php if($val['contacts_status'] == 'READ' ){ echo 'selected'; } ?>>อ่านแล้ว</option>
                             
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <div class="form-group">
                    <label class="col-md-12">รายละเอียด &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-12">
                        <p><?php echo $val['contacts_detail']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="contacts_id" name="contacts_id" value="<?php echo $val['contacts_id']; ?>" />
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>index.php/manage_menu" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
