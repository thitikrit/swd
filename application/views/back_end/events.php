<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">กิจกรรม ข่าวสาร และโปรโมชั่น</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">กิจกรรม ข่าวสาร และโปรโมชั่น</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>index.php/manage_events/create" class="btn pull-right hidden-sm-down btn-success">เพิ่มกิจกรรม ข่าวสาร และโปรโมชั่น</a>
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
                <h4 class="card-title">กิจกรรม ข่าวสาร และโปรโมชั่น</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อ</b></th>
                                <th><b>ประเภท</b></th>
                                <th><b>แนะนำ</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($events_list)){ 
                                $no = 1;
                                foreach($events_list as $val){ 
                                    if($val['events_type'] != 'OLD'){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val['events_name']; ?></td>
                                        <td><?php if($val['events_type'] == 'ACTIVITY'){ 
                                                echo 'กิจกรรม';
                                            }else if($val['events_type'] == 'NEWS'){
                                                echo 'ข่าวสาร';
                                            }else if($val['events_type'] == 'PROMOTION'){
                                                echo 'โปรโมชั่น';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php if($val['events_recommend'] == '1'){ 
                                                echo '<span class="label label-success">แนะนำ</span>';
                                            }else if($val['events_recommend'] == '0'){
                                                echo '<span class="label label-warning">ไม่แนะนำ</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php if($val['events_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['events_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['events_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        
                                        <td><?php echo date("d/m/Y H:i",$val['events_date_modified']);?></td>
                                        <td><a href="<?php echo base_url(); ?>index.php/manage_events/edit/<?php echo $val['events_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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