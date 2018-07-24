<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">กระดานซื้อขาย</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">กระดานซื้อขาย</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="<?php echo base_url();?>manage_webboards/create" class="btn pull-right hidden-sm-down btn-success">เพิ่มกระดานซื้อ-ขาย</a>
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
                <h4 class="card-title">กระดานซื้อ-ขาย</h4>
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
                                <th><b>แนะนำ</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if(!empty($webboards_list)){ 
                                $no = 1;
                                foreach($webboards_list as $val){ 
                                    if($val['webboards_type'] != 'OLD'){ ?>
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
                                        <td><?php if($val['webboards_recommend'] == '1'){ 
                                                echo '<span class="label label-success">แนะนำ</span>';
                                            }else if($val['webboards_recommend'] == '0'){
                                                echo '<span class="label label-warning">ไม่แนะนำ</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        <td><?php if($val['webboards_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success">เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning">ไม่เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'SOLDOUT'){
                                                echo '<span class="label label-danger">ขายแล้ว</span>';
                                            }   else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td>
                                        
                                        <td><?php echo date("d/m/Y H:i",$val['webboards_date_modified']);?></td>
                                        <td><a href="<?php echo base_url(); ?>index.php/manage_webboards/edit/<?php echo $val['webboards_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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