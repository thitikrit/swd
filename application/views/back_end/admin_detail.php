
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
        <h3 class="text-themecolor m-b-0 m-t-0">ตั้งค่าผู้ดูแลระบบ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">ตั้งค่าผู้ดูแลระบบ</li>
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
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <form id="user_form" name="user_form" method="post" action="<?php echo base_url();?>manage_admin/update_status">

                     <div class="form-group">
                        <label class="col-md-12">รหัสผู้ใช้งาน</label>
                            <div class="col-md-12">
                            <?php echo $val['user_username'];?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผู้ดูแลล</label>
                            <div class="col-md-12">
                            <?php echo $val['user_fullname'];?>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-12">สถานะ</label>
                        <div class="col-sm-4">
                            <select class="form-control form-control-line" id="user_active" name="user_active">
                                <option value="1" <?php if($val['user_active'] == '1'){ echo 'selected'; } ?>>เปิดใช้งาน</option>
                                <option value="0" <?php if($val['user_active'] == '0'){ echo 'selected'; } ?>>ปิดใช้งาน</option>
                            </select>
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
                <form id="user_form" name="user_form" method="post"  onsubmit="chk_form_2();"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-12">รหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new" name="password_new" type="password" placeholder="รหัสผ่านใหม่" class="form-control form-control-line input2" >
                            <p id="msg-8" class="help-block2" style="color:red;display:none;">กรุณากรอกรหัสผ่าน *</p>
                            <p id="msg-8-1" class="help-block2" style="color:red;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                            <p id="msg-8-3" class="help-block2" style="color:red;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ยืนยันรหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new_2" name="password_new_2" type="password" placeholder="ยืนยันรหัสผ่านใหม่" class="form-control form-control-line input2" >
                            <p id="msg-9" class="help-block2" style="color:red;display:none;">กรุณากรอกรหัสผ่านอีกครั้ง *</p>
                            <p id="msg-9-1" class="help-block2" style="color:red;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                            <p id="msg-9-3" class="help-block2" style="color:red;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
                        <div class="box-message"></div><br/>
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $val['user_id'];?>" />        
                        <button id="cf_password" class="btn btn-primary">ตั้งรหัสผ่านใหม่</button>
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

$( ".input2" ).keypress(function() {
    $(".help-block2").hide();
}); 
function chk_form_2(){
    event.preventDefault();
    chk2 = true;
    if( $("#password_new").val() == ''){
         $("#msg-8").show();
        chk2 = false;
      }else{
        if($("#password_new").val().length < 6){
          $("#msg-8-3").show();
          chk2 = false;
        }
      }

    if( $("#password_new_2").val() == ''){
         $("#msg-9").show();
        chk2 = false;
      }else{
        if($("#password_new_2").val().length < 6){
          $("#msg-9-3").show();
          chk2 = false;
        }
      }

    if($("#password_new").val() != '' && $("#password_new_2").val() != ''){
        if($("#password_new").val() != $("#password_new_2").val()){
            $("#msg-8-1").show();
            $("#msg-9-1").show();
            chk2 = false;
        }
    }

    if(chk2)
    {
         $('#cf_password').prop('disabled', true);
         $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>manage_admin/update_password",
                  data: {user_id:$("#user_id").val(),password_new:$('#password_new').val(),password_new_2:$('#password_new_2').val()},
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        $('#password_new').val('');
                        $('#password_new_2').val('');
                        $('.box-message').css('color','limegreen');
                        $('.box-message').html('* เปลี่ยนรหัสผ่านใหม่สำเร็จ');
                        $('.box-message').show();
                        setTimeout(function(){ $('.box-message').fadeOut(); }, 3000);
                        $('#cf_password').prop('disabled', false);
                      }else{
                        $('.box-message').css('color','red');
                        $('.box-message').html('* ไม่สามารถเปลี่ยนรหัสผ่านได้');
                        $('.box-message').show();
                        setTimeout(function(){ $('.box-message').fadeOut(); }, 3000);
                        $('#cf_password').prop('disabled', false);
                      }
                  },
                  error: function(data){
                    $('.box-message').css('color','red');
                    $('.box-message').html('* ไม่สามารถเปลี่ยนรหัสผ่านได้');
                    $('.box-message').show();
                    setTimeout(function(){ $('.box-message').fadeOut(); }, 3000);
                    $('#cf_password').prop('disabled', false);
                  }
            });
    }
}
</script>