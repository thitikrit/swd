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
        <h3 class="text-themecolor m-b-0 m-t-0">จัดการข้อมูลบริษัท</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">จัดการข้อมูลบริษัท</li>
            <li class="breadcrumb-item active">แก้ไขข้อมูลบริษัท</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form id="company_form" name="company_form" method="post" action="<?php echo base_url();?>manage_company/update"  enctype="multipart/form-data">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="form-group">
                    <label class="col-md-12">ชื่อบริษัท</label>
                    <div class="col-md-12">
                        <input id="com_name" name="com_name" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_name']; ?>"  maxlength="100">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริษัท</label>
                    <div class="col-md-12">
                        <textarea style="height:100px" id="com_detail" name="com_detail" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line"><?php   echo $company[0]['com_detail']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">หัวเรื่องการบริการ</label>
                    <div class="col-md-12">
                         <input id="com_service_name" name="com_service_name" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_name']; ?>" maxlength="100">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายหัวเรื่องการบริการ</label>
                    <div class="col-md-12">
                        <textarea style="height:100px" id="com_service_detail" name="com_service_detail" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line"><?php   echo $company[0]['com_service_detail']; ?></textarea>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 1</label>
                    <div class="col-md-12">
                         <input id="com_service_title_1" name="com_service_title_1" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_title_1']; ?>" maxlength="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 1</label>
                    <div class="col-md-12">
                        <input id="com_service_detail_1" name="com_service_detail_1" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_detail_1']; ?>" maxlength="150">
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 2</label>
                    <div class="col-md-12">
                         <input id="com_service_title_2" name="com_service_title_2" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_title_2']; ?>" maxlength="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 2</label>
                    <div class="col-md-12">
                        <input id="com_service_detail_2" name="com_service_detail_2" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_detail_2']; ?>" maxlength="150">
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 3</label>
                    <div class="col-md-12">
                        <input id="com_service_title_3" name="com_service_title_3" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_title_3']; ?>" maxlength="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 3</label>
                    <div class="col-md-12">
                        <input id="com_service_detail_3" name="com_service_detail_3" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_detail_3']; ?>" maxlength="150">
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 4</label>
                    <div class="col-md-12">
                         <input id="com_service_title_4" name="com_service_title_4" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_title_4']; ?>" maxlength="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 4</label>
                    <div class="col-md-12">
                        <input id="com_service_detail_4" name="com_service_detail_4" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_detail_4']; ?>" maxlength="150">
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 5</label>
                    <div class="col-md-12">
                        <input id="com_service_title_5" name="com_service_title_5" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_title_5']; ?>" maxlength="25">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 5</label>
                    <div class="col-md-12">
                        <input id="com_service_detail_5" name="com_service_detail_5" type="text" placeholder="กรุณากรอกรายละเอียด" class="form-control form-control-line" value="<?php   echo $company[0]['com_service_detail_5']; ?>" maxlength="150">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_company" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
