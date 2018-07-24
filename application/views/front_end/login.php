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
  .form-login{
    border:1px solid lightgrey;
    border-radius: 5px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    margin-bottom:20px;
    padding-bottom:20px;

  }
</style>

    <div style="background-color: white;height:72px"><br/><br/><br/>
    </div>
    <section id="call-to-action-2" style="padding-top: 50px;padding-bottom:  20px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div align="center">
                            <span style="margin-top:0px;font-size:26px;font-weight: bold;color:white;">เข้าสู่ระบบ</span>
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
        
        <div class="col-md-6 form-login">
                    <form name="sentMessage" id="form-login"  onsubmit="chk_form();" novalidate>
                        <h3 style="color:deepskyblue;text-align: center">กรอกข้อมูลเพื่อเข้าสู่ระบบ <div onclick="admin_direct();" style="position:absolute;top:0px;right:0px;height:50px;width: 50px"></div></h3><hr/>
                            
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">รหัสเข้าใช้งาน : </span>
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="text" class="form-control" placeholder="รหัสเข้าใช้งาน เฉพาะ (a-z)(A-Z)(0-9)" id="username" name="username" maxlength="14"  style="font-size: 18px;"/>
                                        <p id="msg-3" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรหัสเข้าใช้งาน *</p>

                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-12" style="padding-top: 15px;">
                                  <div class="col-md-4">
                                      <div class="controls">                                  
                                        <span style="font-size:20px;">รหัสผ่าน : </span>
                                      </div>
                                  </div>
                                   <div class="col-md-8">
                                      <div class="controls">
                                        <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password" maxlength="14"  style="font-size: 18px;" required/>
                                        <p id="msg-4" class="help-block" style="color:deeppink;display:none;">กรุณารหัสผ่าน *</p>
                                      </div>
                                  </div>
                                </div>
                            </div>    
                            <div class="control-group">
                                <div class="col-md-12 box-message" style="text-align:center;padding-top:30px;color:red;font-size:20px;display: none;">
                                  * ไม่มีผู้ใช้งานนี้ในระบบ *
                                </div>
                            </div>       
                        <div class="col-md-12 text-center" style="padding-top: 15px;">
                          <hr/>
                          <button id="btn-form" class="btn-form text-center">เข้าสู่ระบบ</button>
                        </div>
                         <div class="col-md-12 text-center" style="padding-top: 15px;">
                          <span style="font-size: 16px;">หรือ </span><a href="<?php echo base_url();?>register" style="font-size: 18px;margin-top: 15px;">สมัครสมาชิกใหม่</a>
                        </div>
                    </form>
        </div>
                                
    </div>
    </div>
    </section>
<script type="text/javascript">
    var click=0;
    $( "input" ).keypress(function() {
       $(".help-block").hide();
       $("#accept_form").prop('checked',false);

    });
    $("input").on("keydown", function(e){
        if(e.keyCode == 32){
            return(false);//The function executes but the page is scrolled down
        }
    });
    $( "#username" ).keyup(function() {
      $(".usr-status").hide();
      if ( /[^A-Za-z0-9]/.test($("#username").val())) {     
            alert("ห้ามกรอกอักขระพิเศษหรือภาษาไทย กรุณากรอกใหม่อีกครั้ง");  
            $("#username").val('');   
            return (false);    
      }
       
    });

   
   function chk_form(){
      event.preventDefault();
       var chk = true;

      if( $("#username").val() == ''){
        $("#msg-3").show();
        chk = false;
      }
      if( $("#password").val() == ''){
        $("#msg-4").show();
        chk = false;
      }
     
      if(chk){

          $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>login/validate_login",
                  data: {username:$('#username').val(),password:$('#password').val()}, // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        location.href = "<?php echo base_url();?>home";
                      }else{
                        $('.box-message').show();
                        setTimeout(function(){ $('.box-message').fadeOut(); }, 1600);
                      }
                  }
          });

      }
   }
   function admin_direct(){
      click++;
      if(click == 10){
        location.href="manage_center/login";
      }
   }
</script>