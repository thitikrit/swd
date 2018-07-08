<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">จัดการเมนู</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">จัดการเมนู</li>
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
                <h4 class="card-title">การแสดงผลเมนู</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><b>ชื่อเมนู</b></th>
                                <th><b>ประเภทของหน้าปก</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($menu_list as $val){ ?>
                                <tr>
                                    <td><?php echo $val['menu_id'];?></td>
                                    <td><?php echo $val['menu_name'];?></td>
                                    <td><?php 
                                            if($val['menu_type'] == 'TEXT'){ 
                                                echo "ชื่อเมนู";
                                            }else if($val['menu_type'] == 'SLIDE'){
                                                echo "สไลด์รูปภาพ";
                                            }else if($val['menu_type'] == 'VIDEO'){
                                                echo "วิดีโอ";
                                            }else if($val['menu_type'] == 'SLIDEVIDEO'){
                                                echo "สไลด์รูปภาพ และวิดีโอ";
                                            }else{
                                                echo "-";
                                            }
                                        ?>
                                    </td>
                                    <td><?php 
                                            if($val['menu_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">แสดงผล</span>';
                                            }else if($val['menu_status'] == 'INACTIVE'){
                                                echo '<span class="label label-danger">ไม่แสดงผล</span>';
                                            }else{
                                                echo "-";
                                            }
                                        ?></td>
                                    <td><?php echo date("d/m/Y H:i",$val['menu_date_modified']);?></td>
                                    <td><a href="<?php echo base_url();?>index.php/manage_menu/menu_detail/<?php echo $val['menu_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->