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
            <li class="breadcrumb-item active">จัดการข้อมูลบริษัท</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>index.php/manage_company/edit" class="btn pull-right hidden-sm-down btn-success">แก้ไขข้อมูล</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="form-group">
                    <label class="col-md-12">ชื่อบริษัท</label>
                    <div class="col-md-12">
                        <?php  if(!empty($company[0]['com_name'])){
                            echo $company[0]['com_name'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริษัท</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_detail'])){
                            echo $company[0]['com_detail'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">หัวเรื่องการบริการ</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_name'])){
                            echo $company[0]['com_service_name'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายหัวเรื่องการบริการ</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail'])){
                            echo $company[0]['com_service_detail'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 1</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_title_1'])){
                            echo $company[0]['com_service_title_1'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 1</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail_1'])){
                            echo $company[0]['com_service_detail_1'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 2</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_title_2'])){
                            echo $company[0]['com_service_title_2'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 2</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail_2'])){
                            echo $company[0]['com_service_detail_2'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 3</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_title_3'])){
                            echo $company[0]['com_service_title_3'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 3</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail_3'])){
                            echo $company[0]['com_service_detail_3'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 4</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_title_4'])){
                            echo $company[0]['com_service_title_4'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 4</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail_4'])){
                            echo $company[0]['com_service_detail_4'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                 <hr/>
                <div class="form-group">
                    <label class="col-md-12">บริการหัวข้อที่ 5</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_title_5'])){
                            echo $company[0]['com_service_title_5'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">คำอธิบายบริการหัวข้อที่ 5</label>
                    <div class="col-md-12">
                        <?php if(!empty($company[0]['com_service_detail_5'])){
                            echo $company[0]['com_service_detail_5'];
                        }else{
                            echo '-';
                        } ?>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <a href="<?php echo base_url(); ?>index.php/manage_company/edit" class="btn btn-success" >แก้ไขข้อมูล</a>
    </div>
    <br/>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
