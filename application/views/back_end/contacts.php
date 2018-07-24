<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">ติดต่อเรา</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">ติดต่อเรา</li>
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
                                <th><b>ชื่อผู้ติดต่อ</b></th>
                                <th><b>อีเมล</b></th>
                                <th><b>เบอร์โทรศัพท์</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>ติดต่อเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($contacts_list)){ 
                                $no = 1;
                                foreach($contacts_list as $val){ 
                                    if($val['contacts_status'] == 'UNREAD'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['contacts_name']; ?></td>
                                        <td><?php echo $val['contacts_email']; ?></td>
                                        <td><?php echo $val['contacts_tel']; ?></td>
                                        <td><span class="label label-warning">ยังไม่ได้อ่าน</span>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['contacts_date']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_contacts/detail/<?php echo $val['contacts_id']; ?>" class="btn btn-info">ดูรายละเอียด</a></td>
                                        </tr>
                            <?php   $no++;
                                    }
                                }
                                foreach($contacts_list as $val){ 
                                    if($val['contacts_status'] == 'READ'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['contacts_name']; ?></td>
                                        <td><?php echo $val['contacts_email']; ?></td>
                                        <td><?php echo $val['contacts_tel']; ?></td>
                                        <td><span class="label label-success">อ่านแล้ว</span>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['contacts_date']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_contacts/detail/<?php echo $val['contacts_id']; ?>" class="btn btn-info">ดูรายละเอียด</a></td>
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