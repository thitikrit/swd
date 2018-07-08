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
        <h3 class="text-themecolor m-b-0 m-t-0">จัดการรายละเอียดเมนู</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item">จัดการเมนู</li>
            <li class="breadcrumb-item active">จัดการรายละเอียดเมนู</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($result as $val){ ?> 
<form id="menu_form" name="menu_form" method="post" action="<?php echo base_url();?>index.php/manage_menu/menu_update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อเมนู</label>
                        <div class="col-md-12">
                            <input id="menu_name" name="menu_name" type="text" placeholder="กรุณากรอกชื่อเมนู" class="form-control form-control-line" value="<?php echo $val['menu_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="menu_status" name="menu_status">
                                <option value="ACTIVE" <?php if($val['menu_status'] == 'ACTIVE' ){ echo 'selected'; } ?>>แสดงผล</option>
                                <option value="INACTIVE" <?php if($val['menu_status'] == 'INACTIVE' ){ echo 'selected'; } ?>>ไม่แสดงผล</option>
                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทการแสดงผล</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="menu_type" name="menu_type">
                                <option value="TEXT" <?php if($val['menu_type'] == 'TEXT' ){ echo 'selected'; } ?>>ชื่อเมนู</option>
                                <option value="SLIDE" <?php if($val['menu_type'] == 'SLIDE' ){ echo 'selected'; } ?>>สไลด์รูปภาพ</option>
                                <option value="VIDEO" <?php if($val['menu_type'] == 'VIDEO' ){ echo 'selected'; } ?>>วิดีโอ</option>
                                <option value="SLIDEVIDEO" <?php if($val['menu_type'] == 'SLIDEVIDEO' ){ echo 'selected'; } ?>>สไลด์รูปภาพและวิดีโอ</option>
                             
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <label class="col-md-12">รูปภาพที่แสดง &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_picture()">เพิ่มรูปภาพ</a></label>
                <div class="table-responsive col-md-12">
                    <table id="picture" class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center; ">รูปภาพที่แสดง</th>
                                <th style="text-align: center; ">ลำดับที่แสดง</th>
                                <th style="text-align: center; ">-</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; ">
                            <?php 
                            if($val['menu_picture'] != NULL ){?>
                                <tr id="tr-pic-blank" style="display:none;">
                                    <td width="50%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr> 
                                <?php $picture = json_decode($val['menu_picture']); 
                                for($i = 0 ; $i < count($picture);$i++){ ?>
                                <tr id="tr-pic-<?php echo $i;?>">
                                    <td width="50%" style="padding:5px 10px;">
                                        <img src="<?php echo base_url(); ?>images/slides/<?php echo $picture[$i]->name; ?>" width="100%"/>
                                        <input type="hidden" name="menu_pic_old[]" value="<?php echo $picture[$i]->name; ?>" />
                                    </td>
                                    <td width="25%"><input type="text" name="menu_pic_order_old[]" style="width:35px" maxlength="1" class="form-control" value="<?php echo $picture[$i]->order; ?>" /></td>
                                    <td><a href="javascript:void(0)" class="btn btn-info" onclick="del_picture(<?php echo $i; ?>);">ลบ</a></td>
                                </tr> 
                                <?php }?>
                            <?php }else{ ?>
                                <tr id="tr-pic-blank">
                                    <td width="50%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr> 
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
                <br/>
                <label class="col-md-12">วีดีโอ &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_video()">เพิ่มวิดีโอ</a></label>
                <div class="table-responsive col-md-12">
                    <table id="video" class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center; ">วิดีโอที่แสดง</th>
                                <th style="text-align: center; ">ลำดับที่แสดง</th>
                                <th style="text-align: center; ">-</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; ">
                            <?php 
                            if($val['menu_video'] != NULL ){?>
                                <tr id="tr-vdo-blank" style="display:none;">
                                    <td width="50%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr> 
                                <?php $video = json_decode($val['menu_video']); 
                                for($i = 0 ; $i < count($video);$i++){ ?>
                                <tr id="tr-vdo-<?php echo $i; ?>">
                                    <td width="50%" style="padding:5px 10px;">
                                        <video width="100%" controls>
                                          <source src="<?php echo base_url(); ?>videos/<?php echo $video[$i]->name; ?>" type="video/mp4">
                                        </video>
                                        <input type="hidden" name="menu_vdo_old[]" value="<?php echo $video[$i]->name; ?>" />
                                    </td>
                                    <td width="25%"><input type="text" name="menu_vdo_order_old[]" style="width:35px" maxlength="1" class="form-control" value="<?php echo $video[$i]->order; ?>" /></td>
                                    <td><a href="javascript:void(0)" class="btn btn-info" onclick="del_video(<?php echo $i; ?>);">ลบ</a></td>
                                </tr>
                                <?php } ?>
                            <?php }else{ ?>
                                 <tr id="tr-vdo-blank">
                                    <td width="50%">-</td>
                                    <td width="25%">-</td>
                                    <td>-</td>
                                </tr> 
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="menu_id" name="menu_id" value="<?php echo $val['menu_id']; ?>" />
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>index.php/manage_menu" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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

<script type="text/javascript">
var count_tr_pic;
var count_tr_vdo;
$(document).ready(function(){
    count_tr_pic = $("#picture tbody tr").length + 1;
    count_tr_vdo = $("#video tbody tr").length + 1;
});
function add_picture(){
    $("#tr-pic-blank").hide();
    new_picture ='<tr id="tr-pic-'+count_tr_pic+'">';
    new_picture +='<td width="50%"><input type="file" name="menu_pic[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif"></td>';
    new_picture +='<td width="25%"><input type="text" name="menu_pic_order[]" style="width:35px" maxlength="1" class="form-control"/></td>';
    new_picture +='<td><a href="javascript:void(0)" class="btn btn-info" onclick="del_picture('+count_tr_pic+');">ลบ</a></td>';
    new_picture +='</tr> ';
    $("#picture").append(new_picture);
    count_tr_pic++;
}
function del_picture(row){
    $("#tr-pic-"+row).fadeOut(300, function() { 
        $(this).remove(); 
        if( $("#picture tbody tr").length < 2){
            $("#tr-pic-blank").show();
        }
    }); 
}
function add_video(){
    $("#tr-vdo-blank").hide();
    new_video ='<tr id="tr-vdo-'+count_tr_vdo+'">';
    new_video +='<td width="50%"><input type="file" name="menu_vdo[]" style="width:100%" class="form-control" accept=".mp4"></td>';
    new_video +='<td width="25%"><input type="text" name="menu_vdo_order[]" style="width:35px" maxlength="1" class="form-control"/></td>';
    new_video +='<td><a href="javascript:void(0)" class="btn btn-info" onclick="del_video('+count_tr_vdo+');">ลบ</a></td>';
    new_video +='</tr> ';
    $("#video").append(new_video);
    count_tr_vdo++;
}
function del_video(row){
    $("#tr-vdo-"+row).fadeOut(300, function() { 
        $(this).remove(); 
        if( $("#video tbody tr").length < 2){
            $("#tr-vdo-blank").show();
        }
    }); 
}
</script>