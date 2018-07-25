<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">ผู้ดูแลระบบ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">ผู้ดูแลระบบ</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>manage_admin/create" class="btn pull-right hidden-sm-down btn-success">เพิ่มผู้ดูแลระบบ</a>
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
                <h4 class="card-title">สมาชิก</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>รหัสผู้ใช้งาน</b></th>
                                <th><b>ชื่อ - นามสกุล</b></th>
                                <th><b>เข้าใช้งานล่าสุดเมื่อ</b></th>
                                <th><b>สถานะ</b></th>
                                <th ><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($user)){ 
                                $no = 1;
                                foreach($user as $val){ ?>
                                    <?php if( $val['user_username'] != 'swdadminkero'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['user_username']; ?></td>
                                        <td><?php echo $val['user_fullname']; ?></td>
                                        <td><?php echo date("d/m/Y H:i",$val['user_login_date']);?></td>
                                        <td><?php if($val['user_active'] == 1){ 
                                                echo '<span class="label label-success">ใช้งาน</span>';
                                            }else{
                                                echo '<span class="label label-danger">ปิดใช้งาน</span>';
                                            }?>
                                            </td>
                                        <td><a href="<?php echo base_url(); ?>manage_admin/detail/<?php echo $val['user_id']; ?>" class="btn btn-info">แก้ไข</a></td>
                                        </tr>
                            <?php  
                                 $no++;
                                 }    
                                }
                            }else{ ?>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->