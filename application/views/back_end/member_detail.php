<style type="text/css">
    label{
        font-weight: bold !important;
    }
</style>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">สมาชิก</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">สมาชิก</li>
            <li class="breadcrumb-item active">รายละเอียดสมาชิก</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($user as $val){ ?> 
<form id="contacts_form" name="contacts_form" method="post" action="<?php echo base_url();?>manage_contacts/update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-xlg-3 col-md-3">
        <div class="card">
            <div class="card-block">
                     <div class="form-group">
                        <label class="col-md-12">รหัสผู้ใช้งาน</label>
                        <div class="col-md-12">
                            <?php echo $val['user_username']; ?>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xlg-3 col-md-3">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อสมาชิก</label>
                        <div class="col-md-12">
                            <?php echo $val['user_fullname']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">เบอร์โทรศัพท์</label>
                        <div class="col-md-12">
                            <?php echo $val['user_tel']; ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
     <!-- Column -->
    <div class="col-lg-3 col-xlg-3 col-md-3">
        <div class="card">
            <div class="card-block">
                
                    <div class="form-group">
                        <label class="col-md-12">สมัครสมาชิกเมื่อวันที่</label>
                        <div class="col-md-12">
                            <?php echo date("d/m/Y H:i",$val['user_register_date']);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">เข้าใช้งานล่าสุดเมื่อ</label>
                        <div class="col-md-12">
                            <?php echo date("d/m/Y H:i",$val['user_login_date']);?>
                        </div>
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
                <h4 class="card-title" style="color:green;">กระดานซื้อขายของสมาชิก</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>ชื่อหัวข้อ</b></th>
                                <th><b>ประเภทกระดาน</b></th>
                                <th><b>ทำเล</b></th>
                                <th><b>ประเภทอสังหาริมทรัพย์</b></th>
                                <th><b>ราคา</b></th>
                                <th><b>สถานะ</b></th>
                                <th><b>อัพเดตล่าสุดเมื่อ</b></th>
                                <th><b>สิทธิ์ในการเผยแพร่</b></th>
                                <th><b>ผู้สร้างกระดาน</b></th>
                                <th><b>ผู้ตรวจสอบกระดาน</b></th>
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
                                            }else if($val['webboards_status'] == 'SOLDOUT'){
                                                echo '<span class="label label-danger">ขายแล้ว</span>';
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
                                        <td>
                                            <?php foreach($admin as $ad){
                                                    if($ad['user_id'] == $val['webboards_approve_by_user_id']){
                                                        echo $ad['user_fullname']; 
                                                    }

                                            }?>
                                        </td>
                                        <td><a href="<?php echo base_url(); ?>manage_member/check/<?php echo $val['webboards_id']; ?>" class="btn btn-info">แก้ไข</a></td>
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
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <a href="<?php echo base_url(); ?>manage_member" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<?php } ?>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/js/jquery-11.0.min.js"></script>
