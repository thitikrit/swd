<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">รายการลงทะเบียน</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">รายการลงทะเบียน</li>
        </ol>
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
                                <th><b>#</b></th>
                                <th><b>ชื่อผู้ลงทะเบียน</b></th>
                                <th><b>อีเมล</b></th>
                                <th><b>เบอร์โทรศัพท์</b></th>
                                <th><b>ไอดีไลน์</b></th>
                                <th><b>โครงการที่สนใจ</b></th>
                                <th><b>รู้จักผ่านช่องทาง</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>ลงทะเบียนเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($registrations_list)){ 
                                $no = 1;
                                foreach($registrations_list as $val){ 
                                    if($val['reg_status'] == 'WAIT'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['reg_title_name'].' '.$val['reg_fname'].' '.$val['reg_lname']; ?></td>
                                        <td><?php echo $val['reg_email']; ?></td>
                                        <td><?php echo $val['reg_mobile']; ?></td>
                                        <td><?php echo $val['reg_line']; ?></td>
                                        <td><?php echo $val['reg_projects']; ?></td>
                                        <td><?php echo $val['reg_channel']; ?></td>
                                        <td><span class="label label-warning">ใหม่</span>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['reg_create_date']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_registrations/detail/<?php echo $val['reg_id']; ?>" class="btn btn-info">ดูรายละเอียด</a></td>
                                        </tr>
                            <?php   $no++;
                                    }
                                }
                                foreach($registrations_list as $val){ 
                                    if($val['reg_status'] == 'CONFIRM'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['reg_fname'].' '.$val['reg_lname']; ?></td>
                                        <td><?php echo $val['reg_email']; ?></td>
                                        <td><?php echo $val['reg_mobile']; ?></td>
                                        <td><?php echo $val['reg_line']; ?></td>
                                        <td><?php echo $val['reg_projects']; ?></td>
                                        <td><?php echo $val['reg_channel']; ?></td>
                                        <td><span class="label label-success">ยืนยันแล้ว</span>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['reg_create_date']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_registrations/detail/<?php echo $val['reg_id']; ?>" class="btn btn-info">ดูรายละเอียด</a></td>
                                        </tr>
                            <?php   $no++;
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