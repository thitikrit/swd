
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">กระดานซื้อ-ขาย</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">กระดานซื้อ-ขาย</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30">
                   
                    <h4 class="card-title m-t-10"><a href="<?php echo base_url(); ?>manage_webboards/webboards_member" class="link">กระดานซื้อขายของสมาชิก</a></h4>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-12"><font class="font-medium"><?php echo $webboards_member; ?></font></div>
                        <div class="col-12" style="color:red;font-size:16px">รอการตรวจสอบ <?php echo $webboards_member_wait; ?> รายการ</div>
                    </div>
                    
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
     <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30">
                    <h4 class="card-title m-t-10"><a href="<?php echo base_url(); ?>manage_webboards/webboards_admin" class="link">กระดานซื้อขายของแอดมิน</a></h4>

                    <div class="row text-center justify-content-md-center">
                        <div class="col-12"><font class="font-medium"><?php echo $webboards_admin; ?></font></div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
