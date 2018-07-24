
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
        <h3 class="text-themecolor m-b-0 m-t-0">ตั้งค่าบัญชี</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">สมาชิก</a></li>
            <li class="breadcrumb-item active">ตั้งค่าบัญชี</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<?php foreach($member as $val){ ?>
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <form id="user_form" name="user_form" method="post" action="<?php echo base_url();?>member/update_info" onsubmit="return chk_form();"  enctype="multipart/form-data">

                     <div class="form-group">
                        <label class="col-md-12">รหัสผู้ใช้งาน  <span style="color:red;font-size: 14px;">( ไม่สามารถแก้ไขได้* )</span></label>
                            <div class="col-md-12">
                            <input id="user_username" name="user_username" type="text" placeholder="กรุณากรอกชื่อ" class="form-control form-control-line" value="<?php echo $val['user_username'];?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ชื่อ - นามสกุล</label>
                            <div class="col-md-12">
                            <input id="user_fullname" name="user_fullname" type="text" placeholder="กรุณากรอกชื่อ" class="form-control form-control-line" value="<?php echo $val['user_fullname'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">เบอร์โทรศัพท์</label>
                            <div class="col-md-12">
                            <input id="user_tel" name="user_tel" type="text" placeholder="กรุณากรอกเบอร์โทรศัพท์" class="form-control form-control-line" value="<?php echo $val['user_tel'];?>">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $val['user_id'];?>" />        
                        <button class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <form id="user_form" name="user_form" method="post" action="<?php echo base_url();?>member/webboard_update" onsubmit="return chk_form_2();"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-12">รหัสผ่านเก่า</label>
                            <div class="col-md-12">
                            <input id="password_old" name="password_old" type="password" placeholder="รหัสผ่านเก่า" class="form-control form-control-line" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">รหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new" name="password_new" type="password" placeholder="รหัสผ่านใหม่" class="form-control form-control-line" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ยืนยันรหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new_2" name="password_new_2" type="password" placeholder="ยืนยันรหัสผ่านใหม่" class="form-control form-control-line" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $val['user_id'];?>" />        
                        <button class="btn btn-primary">ตั้งรหัสผ่านใหม่</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
<script> 
function chk_form(){
    var chk = true;
    if( $("#user_fullname").val() == ''){
         $("#user_fullname").focus();
        chk = false;
      }else if( $("#user_tel").val() == ''){
         $("#user_tel").focus();
        chk = false;
      }
    return false;
}
function chk_form_2(){
    var chk = true;
    if( $("#password_old").val() == ''){
         $("#password_old").focus();
        chk = false;
      }else if( $("#password_new").val() == ''){
         $("#password_new").focus();
        chk = false;
      }else if( $("#password_new_2").val() == ''){
         $("#password_new_2").focus();
        chk = false;
      }
    return false;
}
</script>