<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">ทำเล</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">โครงการ</a></li>
            <li class="breadcrumb-item active">ทำเล</li>
        </ol>
    </div>
     <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>index.php/manage_projects/area_create" class="btn pull-right hidden-sm-down btn-success">เพิ่มทำเล</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><b>ทำเล</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($area as $val){ ?>
                                <tr>
                                    <td><?php echo $val['area_id'];?></td>
                                    <td><?php echo $val['area_name'];?></td>
                                    <td><?php 
                                            if($val['area_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">แสดงผล</span>';
                                            }else if($val['area_status'] == 'INACTIVE'){
                                                echo '<span class="label label-danger">ไม่แสดงผล</span>';
                                            }else{
                                                echo "-";
                                            }
                                        ?></td>
                                    
                                    <td><a href="<?php echo base_url();?>index.php/manage_projects/area_edit/<?php echo $val['area_id'];?>" class="btn btn-info">แก้ไข</a></td>
                                </tr>
                            <?php 
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <a href="<?php echo base_url(); ?>index.php/manage_projects" class="btn btn-warning" style="position:absolute;left:5px;">ย้อนกลับ</a>
    </div>
    <br/>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->