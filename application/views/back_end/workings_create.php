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
        <h3 class="text-themecolor m-b-0 m-t-0">สร้างผลงาน</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">ผลงาน</li>
            <li class="breadcrumb-item active">สร้างผลงาน</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="workings_form" name="workings_form" method="post" action="<?php echo base_url();?>manage_workings/add"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผลงาน</label>
                        <div class="col-md-12">
                            <input id="workings_name" name="workings_name" type="text" placeholder="กรุณากรอกชื่อผลงาน" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ตำแหน่งที่ตั้ง</label>
                        <div class="col-md-12">
                            <input id="workings_area" name="workings_area" type="text" placeholder="อำเภอ.... จังหวัด.... เช่น อำเภอเมือง จังหวัดชลบุรี" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">คำอธิบาย</label>
                        <div class="col-md-12">
                            <input id="workings_text" name="workings_text" type="text" placeholder="คำอธิบาย หรือ ประเภทผลงาน" class="form-control form-control-line" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทผลงาน</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_type" name="workings_type" onchange="if(this.value == 'NEW'){ $('#form_old').hide(); $('#form_new').show(); }else{ $('#form_old').show(); $('#form_new').hide(); } ">
                                <option value="NEW" >โครงการที่รับบริหารงานขายในปัจจุบัน</option>
                                <option value="OLD" >โครงการที่รับบริหารงานขายที่ผ่านมา</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_status" name="workings_status">
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
                            <input type="file" name="workings_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                        </div>
                    </div>
                    
                    <div class="form-group" id="form_old" style="display:none;">
                        <label class="col-md-12">รูปภาพขยาย</label>
                        <div class="col-md-12">
                            <input type="file" name="workings_picture_slider" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                        </div>
                    </div>
                    
                    <div class="form-group" id="form_new">
                        <label class="col-md-12">เชื่อมโยงกับโครงการ</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="workings_project_id" name="workings_project_id">
                                <option value="0" >ไม่เชื่อมโยง</option>
                                <?php foreach($projects_list as $val){?>
                                <option value="<?php echo $val['projects_id']; ?>" ><?php echo $val['projects_name']; ?></option>
                                <?php }?>
                                
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_workings" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/js/jquery-11.0.min.js"></script>