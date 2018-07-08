<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">จัดการโครงการ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">จัดการโครงการ</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>manage_projects/create" class="btn pull-right hidden-sm-down btn-success">เพิ่มโครงการ</a>
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
                <h4 class="card-title">โครงการ</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อโครงการ</b></th>
                                <th><b>ทำเล</b></th>
                                <th><b>ประเภทอสังหาริมทรัพย์</b></th>
                                <th><b>ราคาเริ่มต้น</b></th>
                                <th><b>แนะนำ</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($projects_list)){ 
                                $no = 1;
                                foreach($projects_list as $val){ ?>
                                        <tr> 
                                        <td><?php echo $no; ?></td>
                                        <td width="auto"><?php echo $val['projects_name']; ?></td>
                                        <td><?php echo $val['area_name']; ?></td>
                                        <td><?php echo $val['projects_property']; ?></td>
                                        <td><?php echo $val['projects_price_text']; ?></td>
                                        <td><?php if($val['projects_recommend'] == '1'){ 
                                                echo '<span class="label label-success">แนะนำ</span>';
                                            }else if($val['projects_recommend'] == '0'){
                                                echo '<span class="label label-warning">ไม่แนะนำ</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php if($val['projects_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['projects_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['projects_status'] == 'CANCEL'){
                                                echo '<span class="label label-danger">ยกเลิกการเผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        
                                        <td><?php echo date("d/m/Y H:i",$val['projects_date_modified']);?></td>
                                        <td><a href="<?php echo base_url(); ?>manage_projects/edit/<?php echo $val['projects_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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