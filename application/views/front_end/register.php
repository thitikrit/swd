<style>
  #content{
    padding: 40px;
  }
  .btn-form{
      background-color: deepskyblue;border:none;padding:10px 10px;color:white;font-size: 18px;text-align:center;
  }
  .btn-process{
      background-color: limegreen;border:none;padding:10px 10px;color:white;font-size: 18px;text-align:center;
  }
  .form-register{
    border:1px solid lightgrey;
    border-radius: 5px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    margin-bottom:20px;
    padding-bottom:20px;

  }
  .checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 18px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.checkbox:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.checkbox input:checked ~ .checkmark {
    background-color: deeppink;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.checkbox input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>

    <div style="background-color: white;height:72px"><br/><br/><br/>
    </div>
    <section id="call-to-action-2" style="padding-top: 50px;padding-bottom:  20px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div align="center">
                            <span style="margin-top:0px;font-size:26px;font-weight: bold;color:white;">สมัครสมาชิก</span>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>   
    <br/>

    <section id="content">
    
    <div class="container">
        
    <div class="row">
        <div class="col-md-6">
                  <h3 style="color:#ff0000d1;font-size: 28px;">รับสิทธิ์สร้างกระดานซื้อขาย ฟรี!!! เพียงสมัครสมาชิก! </h3>
                  <p style="font-size: 20px;line-height:1.5"><b>บริษัท สวัสดีชลบุรี จำกัด </b>เปิดให้บุคคลทั่วไปสามารถสร้างกระดานซื้อขาย ฟรี!!! เพียงแค่สมัครเป็นสมาชิกผ่านทางเว็บไซต์ สามารถสร้างกระดานซื้อขายได้ไม่จำกัด กรอกข้อมูลเพียงไม่กี่ขั้นตอน กระดานซื้อขายของคุณก็จะถูกเผยแพร่ผ่านทางเว็บไซต์ของเรา สมัครฟรี ไม่เสียค่าใช้บริการ</p><a style="font-size: 18px;" href="<?php echo site_url();?>contact">ติดต่อสอบถามเพิ่มเติม</a>
                  <br/><br/>
         </div>
        
        <div class="col-md-6 form-register">
                    <form name="sentMessage" id="form-register"  onsubmit="chk_form();" novalidate>
                        <h3 style="color:deepskyblue;text-align: center">กรอกแบบฟอร์มเพื่อสมัครสมาชิก</h3><hr/>
                            <div class="control-group">
                                <div class="col-md-12">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <p style="font-size:20px;">ชื่อ - นามสกุล : </p>
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล" id="fullname" name="fullname" maxlength="50" style="font-size: 18px;"/>
                                        <p id="msg-1" class="help-block" style="color:deeppink;display:none;">กรุณากรอกชื่อ - นามสกุล *</p>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">เบอร์โทรศัพท์ : </span><br/><p style="color:red;"></p>
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" id="tel" name="tel"  maxlength="10"  style="font-size: 18px;"/>
                                        <p id="msg-2" class="help-block" style="color:deeppink;display:none;">กรุณากรอกเบอร์โทรศัพท์ *</p>
                                        <p id="msg-2-1" class="help-block" style="color:deeppink;display:none;">กรุณาตรวจสอบเบอร์โทรศัพท์อีกครั้ง</p>
                                        <p id="msg-2-2" class="tel-status" style="color:limegreen;display:none;">เบอร์โทรศัพท์นี้สามารถใช้งานได้</p>
                                        <p id="msg-2-3" class="tel-status" style="color:red;display:none;">เบอร์โทรศัพท์นี้มีผู้ใช้งานแล้ว</p>


                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">รหัสเข้าใช้งาน : </span><br/>(6 - 14 ตัวอักษร)
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="text" class="form-control" placeholder="รหัสเข้าใช้งาน เฉพาะ (a-z)(A-Z)(0-9)" id="username" name="username" maxlength="14"  style="font-size: 18px;"/>
                                        <p id="msg-3" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสเข้าใช้งาน *</p>
                                        <p id="msg-3-1" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสเข้าใช้งาน 6-14 ตัวอักษร</p>
                                        <p id="msg-3-2" class="usr-status" style="color:limegreen;display:none;">รหัสเข้าใช้งานนี้สามารถใช้งานได้</p>
                                        <p id="msg-3-3" class="usr-status" style="color:red;display:none;">รหัสเข้าใช้งานนี้มีผู้ใช้งานแล้ว</p>

                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">รหัสผ่าน : </span><br/>(6 - 14 ตัวอักษร)
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password" maxlength="14"  style="font-size: 18px;" required/>
                                        <p id="msg-4" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสผ่าน *</p>
                                        <p id="msg-4-1" class="help-block" style="color:deeppink;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                                        <p id="msg-4-2" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">ยืนยันรหัสผ่าน : </span><br/>(6 - 14 ตัวอักษร)
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" id="chf_password" name="chf_password" maxlength="14"    style="font-size: 18px;"/>
                                        <p id="msg-5" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสผ่านอีกครั้ง *</p>
                                        <p id="msg-5-1" class="help-block" style="color:deeppink;display:none;">รหัสผ่านไม่ตรงกัน *</p>
                                        <p id="msg-5-2" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสผ่าน 6-14 ตัวอักษร</p>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                  <div class="col-md-12" style="padding-top: 25px;">
                                    <div class="col-md-12">
                                        <div class="controls">                                  
                                          <label class="checkbox">ยืนยันการสมัครสมาชิก
                                            <input type="checkbox" value="accept" id="accept_form" name="accept_form">
                                            <span class="checkmark"></span>
                                          </label>
                                           <p id="msg-6" class="help-block" style="color:deeppink;display:none;">กรุณายืนยันการสมัครสมาชิก *</p>
                                        </div>
                                    </div>
                          
                                  </div>
                              </div>              
                        <div class="col-md-12 text-center" style="padding-top: 15px;">
                          <hr/>
                          <button id="btn-form" class="btn-form text-center">สมัครสมาชิก</button>
                        </div>
                         <div class="col-md-12 text-center" style="padding-top: 15px;">
                          <span style="font-size: 16px;">หรือ </span><a href="<?php echo base_url();?>login" style="font-size: 18px;margin-top: 15px;">เข้าสู่ระบบด้วยรหัสผู้ใช้งาน</a>
                        </div>
                    </form>
        </div>
                                
    </div>
    </div>
    </section>
<script type="text/javascript">
var username_status = false;
var tel_status = false;
    $( "input" ).keypress(function() {
       $(".help-block").hide();
       $("#accept_form").prop('checked',false);

    });

    $( "#username" ).keyup(function() {
      username_status = false;
      $(".usr-status").hide();
      if ( /[^A-Za-z0-9]/.test($("#username").val())) {     
            alert("ห้ามกรอกอักขระพิเศษหรือภาษาไทย กรุณากรอกใหม่อีกครั้ง");  
            $("#username").val('');   
            return (false);    
      }else{
        if($("#username").val().length > 5){
           $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>register/check_username",
                  data: {username:$('#username').val()}, // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        username_status = true;
                        $("#msg-3-2").show();
                      }else{
                        username_status = false;
                        $("#msg-3-3").show();
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
    $( "#tel" ).keyup(function() {
      $(".tel-status").hide();
      tel_status = false;
      $(".tel-status").hide();
      if ( /[^0-9]/.test($("#tel").val())){     
          alert("กรอกได้เฉพาะตัวเลข");  
          $("#tel").val('');   
          return (false);    
      }else{
          if($("#tel").val().length > 8){
             $(".tel-status").hide();
            $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>register/check_tel",
                  data: {tel:$('#tel').val()}, // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        tel_status = true;
                        $("#msg-2-2").show();
                      }else{
                        tel_status = false;
                        $("#msg-2-3").show();
                      }
                  },
                  error: function(data){
                      tel_status = false;
                      alert('ไม่สามารถตรวจสอบ รหัสผู้ใช้งานเบอร์โทรศัพท์ได้');
                  }
            });
          }
      }

    });
   
   function chk_form(){
      event.preventDefault();
       var chk = true;

      if( $("#fullname").val().trim() == ''){
        $("#msg-1").show();
        chk = false;
      }

      if( $("#tel").val() == ''){
        $("#msg-2").show();
        chk = false;
      }else{
        if(!tel_status){
            chk = false;
          }
      }

      if( $("#username").val() == ''){
        $("#msg-3").show();
        chk = false;
      }else{
        if($("#username").val().length < 6){
          $("#msg-3-1").show();
          chk = false;
        }else{
          if(!username_status){
            chk = false;
          }
        }
      }

      if( $("#password").val() == ''){
        $("#msg-4").show();
        chk = false;
      }else{
        if($("#password").val().length < 6){
          $("#msg-4-2").show();
          chk = false;
        }
      }

      if( $("#chf_password").val() == ''){
        $("#msg-5").show();
        chk = false;
      }else{
        if($("#chf_password").val().length < 6){
          $("#msg-5-2").show();
          chk = false;
        }
      }

      if($("#password").val() != '' && $("#chf_password").val() != ''){
        if($("#password").val() != $("#chf_password").val()){
          $("#msg-4-1").show();
          $("#msg-5-1").show();
            chk = false;
        }
      }

      if(chk){
        if(!$('#accept_form').is(':checked')){
          $("#msg-6").show();
          chk = false;
        }
      }

     if(!chk){
        $("#msg").show();
      }else{
          $('#btn-form').removeClass('btn-form');
          $('#btn-form').addClass('btn-process');
          $('#btn-form').html('กำลังดำเนินการ...');
          $('#btn-form').prop('disabled', true);
          $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>register/create",
                  data: {fullname:$('#fullname').val(),tel:$('#tel').val(),username:$('#username').val(),password:$('#password').val()}, 
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        $('#fullname').val('');
                        $('#tel').val('');
                        $('#username').val('');
                        $('#password').val('');
                        $('#chf_password').val('');
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('สมัครสมาชิก');
                        $('#btn-form').prop('disabled', false);
                        $(".help-block").hide();
                        $("#accept_form").prop('checked',false);
                        $(".usr-status").hide();
                        username_status = false;
                        $(".tel-status").hide();
                        tel_status = false;
                        alert('สมัครสมาชิกสำเร็จ');
                      }else{
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('สมัครสมาชิก');
                        $('#btn-form').prop('disabled', false);
                        alert('ไม่สามารถสมัครสมาชิกได้');
                      }
                  },
                  error: function(data){
                      alert('ไม่สามารถสมัครสมาชิกได้');
                  }
          });

      }
      
   }
</script>