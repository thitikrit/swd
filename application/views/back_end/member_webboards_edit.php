
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
        <h3 class="text-themecolor m-b-0 m-t-0">แก้ไขกระดานซื้อขาย</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">สมาชิก</a></li>
            <li class="breadcrumb-item">กระดานซื้อ-ขาย</li>
            <li class="breadcrumb-item active">แก้ไขกระดานซื้อขาย</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($webboards_detail as $val){ ?>
<form id="webboards_form" name="webboards_form" method="post" action="<?php echo base_url();?>member/webboard_update"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อหัวข้อซื้อขาย</label>
                            <div class="col-md-12">
                            <input id="webboards_name" name="webboards_name" type="text" placeholder="กรุณากรอกชื่อหัวข้อ" maxlength="100" class="form-control form-control-line" value="<?php echo $val['webboards_name'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภทกระดานซื้อขาย</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_type" name="webboards_type">
                                <option value="SELL"  <?php if($val['webboards_type'] == 'SELL'){ echo 'selected'; } ?>>ซื้อ-ขาย</option>
                                <option value="HIRE"  <?php if($val['webboards_type'] == 'HIRE'){ echo 'selected'; } ?>>เช่า</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">ทำเล</label>
                            <div class="col-md-12">
                            <input id="webboards_area" name="webboards_area" type="text" placeholder="ทำเล เช่น เมืองชลบุรี" class="form-control form-control-line" value="<?php echo $val['webboards_area'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ประเภทอสังหาริมทรัพย์</label>
                            <div class="col-md-12">
                            <input id="webboards_property" name="webboards_property" type="text" placeholder="เช่น บ้านเดี่ยว บ้าแฝด คอนโด " class="form-control form-control-line" value="<?php echo $val['webboards_property'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-6">ราคาซื้อ ขาย / เช่า</label>
                        <div class="col-md-6">
                            <input id="webboards_price" name="webboards_price" type="number" placeholder="กรอกราคาซื้อขาย - เช่า" class="form-control form-control-line" value="<?php echo $val['webboards_price'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-6">หน่วย</label>
                        <div class="col-md-6">
                            <input id="webboards_unit" name="webboards_unit" type="text" placeholder="เช่น บาท หรือ ต่อปี" class="form-control form-control-line" value="<?php echo $val['webboards_unit'];?>">
                        </div>
                    </div>
                    
                    
            </div>
        </div>
    </div>
    <!-- Column -->
    
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">รูปภาพปกของกระดานซื้อขาย</label>
                        <div class="col-md-12">
                            <img src="<?php echo base_url();?>images/webboards/<?php echo $val['webboards_picture'];?>" width="50%">
                            <input type="hidden" id="webboards_picture_old" name="webboards_picture_old" value="<?php echo $val['webboards_picture'];?>" />
                            <br/><br/>
                            <input type="file" name="webboards_picture" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">Tag หรือ Keyword ที่ใช้ค้นหากระดานของคุณ</label>
                            <div class="col-md-12">
                            <input id="webboards_tag" name="webboards_tag" type="text" class="form-control form-control-line" data-role="tagsinput" value="<?php echo $val['webboards_tag'];?>">
                            <br/>
                            <span style="font-size:16px;color:red">
                            * กด Enter หนึ่งครั้งเพื่อเว้นคำ
                            </span>
                        </div>
                    </div>

                   
                    
                    <div class="form-group">
                        <label class="col-sm-12">สถานะในการแสดงผลกระดานซื้อขาย</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_status" name="webboards_status">
                                <option value="ACTIVE" <?php if($val['webboards_status'] == 'ACTIVE'){ echo 'selected'; } ?>>เผยแพร่</option>
                                <option value="INACTIVE" <?php if($val['webboards_status'] == 'INACTIVE'){ echo 'selected'; } ?>>ไม่เผยแพร่</option>
                                <?php if($val['webboards_permission'] != '-1'){ ?>
                                <option value="SOLDOUT" <?php if($val['webboards_status'] == 'SOLDOUT'){ echo 'selected'; } ?>>ขายแล้ว</option>
                                <?php }?>
                            </select>
                                <div style="color:red;padding-top: 10px">* หากมีการแก้ไขข้อมูล และเลือกสถานะในการแสดงผลกระดานซื้อขายเป็นสถานะ "เผยแพร่" กระดานซื้อขายที่ถูกแก้ไขข้อมูลนี้ จะต้องถูกตรวจสอบการอนุญาตสิทธิ์ในการเผยแพร่จากผู้ดูแลระบบใหม่อีกครั้ง</div>
                        </div>
                    </div>

                    


                     <div class="form-group">
                        <input type="hidden" name="webboards_permission" value="<?php echo $val['webboards_permission'];?>" />
                        <label class="col-md-12">สิทธิ์ในการเผยแพร่จากผู้ดูแลระบบ :  
                                            <?php if($val['webboards_permission'] == 0){ 
                                                echo '<span class="label label-warning tag">รอการตรวจสอบ</span>';
                                            }else if($val['webboards_permission'] == 1){
                                                echo '<span class="label label-success tag">อนุญาตให้เผยแพร่</span>';
                                            }else if($val['webboards_permission'] == 2){
                                                echo '<span class="label label-danger tag">ไม่อนุญาตให้เผยแพร่</span>';
                                            }else{
                                                echo "-";
                                            } 
                                            ?>
                                        </td></label>
                    </div> 
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียดแบบย่อ</label>
                        <div class="col-md-12">
                            <textarea id="webboards_sub_detail" style="height:100px" name="webboards_sub_detail" type="text" class="form-control form-control-line"><?php echo $val['webboards_sub_detail'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รายละเอียด</label>
                        <div class="col-md-12">
                            <textarea id="webboards_detail" name="webboards_detail"><?php echo $val['webboards_detail'];?></textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
     <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">แกลลอรี่ หรือ รูปภาพเพิ่มเติม  &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn btn-success btn-sm" onclick="add_gallery()">เพิ่มรูปภาพ</a></label>
                        <div id="row_div_gal" class="row" style='padding: 15px 15px;'>
                            <?php $gallery = json_decode($val['webboards_gallery']); 
                            for($i = 0 ; $i < count($gallery);$i++){ ?>
                                <div  id="div-gal-<?php echo $i; ?>" class="col-md-3" style="margin-bottom: 15px;">
                                    <img src="<?php echo base_url(); ?>images/webboards/gallery/<?php echo $gallery[$i]; ?>" width="100%"/>
                                    <input type="hidden" name="webboards_gallery_old[]" value="<?php echo $gallery[$i]; ?>" />
                                    <a href="javascript:void(0)" class="btn btn-danger" style="position:absolute;right:15px;top:0;" onclick="del_gal(<?php echo $i; ?>)">x</a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
        <input type="hidden" id="webboards_id" name="webboards_id" value="<?php echo $val['webboards_id'];?>" />        
        <button class="btn btn-primary" type="button" onclick="submit();">บันทึก</button>
        <a href="<?php echo base_url(); ?>member/webboard" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
    </div>
    <br/>
</div>
<!-- Row -->
</form>
<?php }?>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!-- Include Editor style. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script> 
<script src="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css"> 
<script> 
var count_div_gal; 
$(function() { 
    $('#webboards_detail').froalaEditor({ 
        height: 300 ,
        placeholderText: 'กรุณากรอกรายละเอียด'
    });
    count_div_gal = $("#row_div_gal div").length + 1;
}); 
function add_gallery(){
    if( $("#row_div_gal div").length != 9){
        new_gallery = ' <div id="div-gal-'+count_div_gal+'" class="col-md-3" style="margin-bottom: 15px;">';
        new_gallery +=  '<input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">';
        new_gallery +=  '<a href="javascript:void(0)" class="btn btn-danger btn-sm" style="position:absolute;right:15px;top:0;" onclick="del_gal('+count_div_gal+');">x</a>';
        new_gallery +=  '</div>';
        $("#row_div_gal").append(new_gallery);
        count_div_gal++;
    }
}
function del_gal(row){
    if( $("#row_div_gal div").length > 1){
        $("#div-gal-"+row).fadeOut(300, function() { 
            $(this).remove(); 
        }); 
    }else{
        $("#div-gal-"+row).fadeOut(300, function() { 
            new_gallery = ' <div id="div-gal-'+count_div_gal+'" class="col-md-3" style="margin-bottom: 15px;">';
            new_gallery +=  '<input type="file" name="webboards_gallery[]" style="width:100%" class="form-control" accept=".jpg, .jpeg, .png , .gif">';
            new_gallery +=  '</div>';
            $("#row_div_gal").append(new_gallery);
            count_div_gal++; 
            $(this).remove(); 
        });

    }
}  
</script>