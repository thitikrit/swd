<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">กระดานซื้อขายของสมาชิก</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">กระดานซื้อขายของสมาชิก</li>
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
                <h4 class="card-title" style="color:red;">กระดานซื้อขายที่รอการตรวจสอบ</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อ</b></th>
                                <th><b>ประเภทกระดาน</b></th>
                                <th><b>ทำเล</b></th>
                                <th><b>ประเภทอสังหาริมทรัพย์</b></th>
                                <th><b>ราคา</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>สิทธิ์ในการเผยแพร่</b></th>
                                <th><b>ผู้สร้างกระดาน</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($webboards_member_wait)){ 
                                $no = 1;
                                foreach($webboards_member_wait as $val){ ?>
                                   
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td width="auto"><?php echo $val['webboards_name']; ?></td>
                                        <td><?php if($val['webboards_type'] == 'SELL'){ 
                                                echo 'ซื้อ-ขาย';
                                            }else if($val['webboards_type'] == 'HIRE'){
                                                echo 'เช่า';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo $val['webboards_area']; ?></td>
                                        <td><?php echo $val['webboards_property']; ?></td>
                                        <td><?php echo number_format($val['webboards_price']).' '.$val['webboards_unit']; ?></td>
                                        
                                        <td><?php if($val['webboards_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'WAIT'){
                                                echo '<span class="label label-primary">ขอสิทธิ์ในการเผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo date("d/m/Y H:i",$val['webboards_date_modified']);?></td>
                                        <td><?php if($val['webboards_permission'] == '0'){ 
                                                echo '<span class="label label-warning">รอการตรวจสอบ</span>';
                                            }else if($val['webboards_permission'] == '1'){
                                                echo '<span class="label label-success">อนุญาตให้เผยแพร่</span>';
                                            }else{
                                                echo '<span class="label label-success">ไม่อนุญาตให้เผยแพร่</span>';
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo $val['user_fullname']; ?></td>
                                        <td><a href="<?php echo base_url(); ?>index.php/manage_webboards/check/<?php echo $val['webboards_id']; ?>" class="btn btn-info">ตรวจสอบ</a></td>
                                        </tr>
                            <?php   $no++;
                                    
                                }
                            }else{ ?>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
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
                <h4 class="card-title" style="color:green;">กระดานซื้อขายที่ได้รับการตรวจสอบ</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อ</b></th>
                                <th><b>ประเภทกระดาน</b></th>
                                <th><b>ทำเล</b></th>
                                <th><b>ประเภทอสังหาริมทรัพย์</b></th>
                                <th><b>ราคา</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>สิทธิ์ในการเผยแพร่</b></th>
                                <th><b>ผู้สร้างกระดาน</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($webboards_member)){ 
                                $no = 1;
                                foreach($webboards_member as $val){ 
                                   ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td width="auto"><?php echo $val['webboards_name']; ?></td>
                                        <td><?php if($val['webboards_type'] == 'SELL'){ 
                                                echo 'ซื้อ-ขาย';
                                            }else if($val['webboards_type'] == 'HIRE'){
                                                echo 'เช่า';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo $val['webboards_area']; ?></td>
                                        <td><?php echo $val['webboards_property']; ?></td>
                                        <td><?php echo number_format($val['webboards_price']).' '.$val['webboards_unit']; ?></td>
                                        
                                        <td><?php if($val['webboards_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'WAIT'){
                                                echo '<span class="label label-primary">ขอสิทธิ์ในการเผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'APPROVE'){
                                                echo '<span class="label label-info">ได้รับสิทธื์ในการเผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'DISMISS'){
                                                echo '<span class="label label-danger">ไม่ได้สิทธื์ในการเผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'BLANK'){
                                                echo '<span class="label label-warning">รอการตรวจสอบอีกครั้ง</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        
                                        <td><?php echo date("d/m/Y H:i",$val['webboards_date_modified']);?></td>
                                        <td><?php if($val['webboards_permission'] == '0'){ 
                                                echo '<span class="label label-warning">รอการตรวจสอบ</span>';
                                            }else if($val['webboards_permission'] == '1'){
                                                echo '<span class="label label-success">อนุญาตให้เผยแพร่</span>';
                                            }else{
                                                echo '<span class="label label-danger">ไม่อนุญาตให้เผยแพร่</span>';
                                            } 
                                            ?>
                                        </td>
                                        <td><?php echo $val['user_fullname']; ?></td>
                                        <td><a href="<?php echo base_url(); ?>index.php/manage_webboards/check/<?php echo $val['webboards_id']; ?>" class="btn btn-info">แก้ไข</a></td>
                                        </tr>
                            <?php   $no++;
                                    
                                }
                            }else{ ?>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
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