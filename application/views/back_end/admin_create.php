
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
        <h3 class="text-themecolor m-b-0 m-t-0">เพิ่มผู้ดูแลระบบ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active">เพิ่มผู้ดูแลระบบ</li>
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
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <form id="user_form" name="user_form" method="post" action="<?php echo base_url();?>manage_admin/add" >
                    <div class="form-group">
                        <label class="col-md-12">ชื่อผู้ดูแลระบบ</label>
                        <div class="col-md-12">
                             <input id="user_fullname" name="user_fullname" type="text" placeholder="ชื่อผู้ดูแลระบบ" class="form-control form-control-line " >
                             <p id="msg-1" class="help-block" style="color:red;display:none;">กรุณากรอกชื่อ *</p>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-12">รหัสผู้ใช้งาน</label>
                            <div class="col-md-12">
                             <input id="user_username" name="user_username" type="text" placeholder="รหัสผู้ใช้งาน เฉพาะ (a-z)(A-Z)(0-9)" class="form-control form-control-line " >
                            <p id="msg-2" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสเข้าใช้งาน *</p>
                            <p id="msg-2-1" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสเข้าใช้งาน 6-14 ตัวอักษร</p>
                            <p id="msg-2-2" class="usr-status" style="color:limegreen;display:none;">รหัสเข้าใช้งานนี้สามารถใช้งานได้</p>
                            <p id="msg-2-3" class="usr-status" style="color:red;display:none;">รหัสเข้าใช้งานนี้มีผู้ใช้งานแล้ว</p>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-12">รหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new" name="password_new" type="password" placeholder="รหัสผ่านใหม่" class="form-control form-control-line " >
                            <p id="msg-8" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสผ่าน *</p>
                            <p id="msg-8-1" class="help-block" style="color:red;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                            <p id="msg-8-3" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">ยืนยันรหัสผ่านใหม่</label>
                            <div class="col-md-12">
                            <input id="password_new_2" name="password_new_2" type="password" placeholder="ยืนยันรหัสผ่านใหม่" class="form-control form-control-line input2" >
                            <p id="msg-9" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสผ่านอีกครั้ง *</p>
                            <p id="msg-9-1" class="help-block" style="color:red;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                            <p id="msg-9-3" class="help-block" style="color:red;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-12">สถานะ</label>
                        <div class="col-sm-4">
                            <select class="form-control form-control-line" id="user_active" name="user_active">
                                <option value="1">เปิดใช้งาน</option>
                                <option value="0">ปิดใช้งาน</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-12 col-md-12 text-center"> 
                        <button class="btn btn-primary" type="button" onclick="chk_form_admin();">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>


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
var username_status = false;

$( "input" ).keypress(function() {
    $(".help-block").hide();
}); 
$( "#user_username" ).keyup(function() {
      username_status = false;
      $(".usr-status").hide();
      if ( /[^A-Za-z0-9]/.test($("#user_username").val())) {     
            alert("ห้ามกรอกอักขระพิเศษหรือภาษาไทย กรุณากรอกใหม่อีกครั้ง");  
            $("#user_username").val('');   
            return (false);    
      }else{
        if($("#user_username").val().length > 5){
           $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>manage_admin/check_username",
                  data: {username:$('#user_username').val()}, // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        username_status = true;
                        $("#msg-2-2").show();
                      }else{
                        username_status = false;
                        $("#msg-2-3").show();
                      }
                  },
                  error: function(data){
                      username_status = false;
                      alert('ไม่สามารถตรวจสอบ รหัสผู้ใช้งานได้');
                  }
          });
        }
      } 
    });
function chk_form_admin(){
        chk = true;    
      if( $("#user_fullname").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
      }

      if( $("#user_username").val() == ''){
        $("#msg-2").show();
        chk = false;
      }else{
        if($("#user_username").val().length < 6){
          $("#msg-2-1").show();
          chk = false;
        }else{
          if(!username_status){
            chk = false;
          }
        }
      }

      if( $("#password_new").val() == ''){
        $("#msg-8").show();
        chk = false;
      }else{
        if($("#password_new").val().length < 6){
          $("#msg-8-3").show();
          chk = false;
        }
      }

      if( $("#password_new_2").val() == ''){
        $("#msg-9").show();
        chk = false;
      }else{
        if($("#password_new_2").val().length < 6){
          $("#msg-9-3").show();
          chk = false;
        }
      }

      if($("#password_new").val() != '' && $("#password_new_2").val() != ''){
        if($("#password_new").val() != $("#password_new_2").val()){
          $("#msg-8-1").show();
          $("#msg-9-1").show();
            chk = false;
        }
      }
      if(chk){
        $('#user_form').submit();
      }
}
</script>