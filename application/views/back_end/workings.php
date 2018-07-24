<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">ผลงาน</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">ผลงาน</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>manage_workings/create" class="btn pull-right hidden-sm-down btn-success">เพิ่มผลงาน</a>
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
                <h4 class="card-title">โครงการที่รับบริหารงานขายที่ผ่านมา</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อผลงาน</b></th>
                                <th><b>ตำแหน่งที่ตั้ง</b></th>
                                <th><b>คำอธิบาย</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($workings_list)){ 
                                $no = 1;
                                foreach($workings_list as $val){ 
                                    if($val['workings_type'] == 'OLD'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['workings_name']; ?></td>
                                        <td><?php echo $val['workings_area']; ?></td>
                                        <td><?php echo $val['workings_text']; ?></td>
                                        <td><?php if($val['workings_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['workings_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['workings_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['workings_date_modified']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_workings/edit/<?php echo $val['workings_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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
                                <td>-</td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">โครงการที่รับบริหารงานขายในปัจจุบัน</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>                            
                                <th><b>#</b></th>
                                <th><b>ชื่อผลงาน</b></th>
                                <th><b>ตำแหน่งที่ตั้ง</b></th>
                                <th><b>คำอธิบาย</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($workings_list)){ 
                                $no = 1;
                                foreach($workings_list as $val){ 
                                    if($val['workings_type'] == 'NEW'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['workings_name']; ?></td>
                                        <td><?php echo $val['workings_area']; ?></td>
                                        <td><?php echo $val['workings_text']; ?></td>
                                        <td><?php if($val['workings_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['workings_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['workings_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['workings_date_modified']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_workings/edit/<?php echo $val['workings_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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