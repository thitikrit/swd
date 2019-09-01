
<style type="text/css">
    label{
        font-weight: bold !important;
         font-size: 16px;
        padding: 5px 10px;
        margin: 3px;
    }
    .tag{
        font-size: 16px;
        padding: 5px 10px;
        margin: 3px;
    }
</style>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">แก้ไขกระดานซื้อขาย</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
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
<form id="webboards_form" name="webboards_form" method="post" action="<?php echo base_url();?>manage_webboards/update_webboard_member"  enctype="multipart/form-data">
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">ชื่อ :  <span style="font-weight:normal;font-size: 18px"><?php echo $val['webboards_name'];?></span></label>
                        <div class="col-md-12">
                         
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">ประเภท : <span style="font-weight:normal;font-size: 18px">
                            <?php if($val['webboards_type'] == 'SELL'){ echo 'ซื้อ-ขาย'; } ?>
                            <?php if($val['webboards_type'] == 'HIRE'){ echo 'เช่า'; } ?>
                        </span>
                        </label>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">ทำเล :  <span style="font-weight:normal;font-size: 18px"> <?php echo $val['webboards_area'];?></span></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ประเภทอสังหาริมทรัพย์ :   <span style="font-weight:normal;font-size: 18px"> <?php echo $val['webboards_property'];?></span></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ราคาซื้อ ขาย / เช่า :  <span style="font-weight:normal;font-size: 18px"><?php echo $val['webboards_price'];?></span></label>
                       </div>
                    <div class="form-group">
                        <label class="col-md-12">หน่วย :  <span style="font-weight:normal;font-size: 18px"><?php echo $val['webboards_unit'];?></span></label>
                    </div>
                        <div class="form-group">
                        <label class="col-md-12">สถานะ :  
                                            <?php if($val['webboards_status'] == 'ACTIVE'){ 
                                                echo '<span class="label label-success tag">เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'INACTIVE'){
                                                echo '<span class="label label-warning tag">ไม่เผยแพร่</span>';
                                            }else if($val['webboards_status'] == 'SOLDOUT'){
                                                echo '<span class="label label-danger tag">ขายแล้ว</span>';
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
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                    <div class="form-group">
                        <label class="col-md-12">รูปภาพ</label>
                        <div class="col-md-12">
                            <img src="<?php echo base_url();?>images/webboards/<?php echo $val['webboards_picture'];?>" width="50%">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-12">แท็ก</label>
                        <div class="col-md-12">
                            <?php $tag = explode(",",$val['webboards_tag']); 
                                foreach($tag as $t){
                                    echo '<span class="label label-info tag" >'.$t.'</span>';
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">สิทธิ์ในการเผยแพร่</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="webboards_permission" name="webboards_permission">
                                <option value="1" <?php if($val['webboards_permission'] == '1'){ echo 'selected'; }?> >อนุญาตให้เผยแพร่</option>
                                <option value="2" <?php if($val['webboards_permission'] == '2'){ echo 'selected'; }?> >ไม่อนุญาตให้เผยแพร่</option>
                            </select>

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
                        <label class="col-md-12">รายละเอียด <hr/></label>
                        <div class="col-md-12">
                            <?php echo $val['webboards_detail'];?>
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
                        <label class="col-md-12">แกลลอรี่</label>
                        <div id="row_div_gal" class="row" style='padding: 15px 15px;'>
                            <?php $gallery = json_decode($val['webboards_gallery']); 
                            for($i = 0 ; $i < count($gallery);$i++){ ?>
                                <div  id="div-gal-<?php echo $i; ?>" class="col-md-3" style="margin-bottom: 15px;">
                                    <img src="<?php echo base_url(); ?>images/webboards/gallery/<?php echo $gallery[$i]; ?>" width="100%"/>                       
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
        <button class="btn btn-primary" >บันทึก</button>
        <a href="<?php echo base_url(); ?>manage_webboards" class="btn btn-warning" style="position:absolute;left:15px;">ย้อนกลับ</a>
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
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/ckfinder/ckfinder.js"></script>
<script> 
var count_div_gal; 
$(function() { 
    CKFinder.setupCKEditor();
    CKEDITOR.replace( 'textarea' );
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