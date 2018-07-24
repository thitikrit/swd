<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/monster-lite/assets/images/favicon.png">
    <title>SWD - Admin</title>
</head>
<script type='text/javascript' src='<?php echo base_url();?>/assets/js/jquery-11.0.min.js'></script>   
<style>
@font-face {
    font-family: 'swd';
    src: url('<?php echo base_url(); ?>assets/united-business/fonts/CLOUD-LIGHT.OTF');
    font-weight: normal;
    font-style: normal;
    }
body{
    font-family: 'swd' !important;
}
.content{
    background: #009efb !important;
    /* Old browsers */
    background: -moz-linear-gradient(left, #0178bc 0%, #00bdda 100%) !important;
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #0178bc 0%, #00bdda 100%) !important;
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #0178bc 0%, #00bdda 100%) !important;
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}
.box-login{
    position:fixed;
    top: 45%;
    left: 55%;
    width:27em;
    min-height:20em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    background:white;
    border-radius: 10px;
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.4), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
}
.box-top{
    text-align: center;
    font-size:25px;
    padding-top: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid gray;
}
.box-content{
    font-size:20px;
    text-align: right;
    padding-top: 30px;
    padding-bottom: 10px;
    margin-right: 20px;
}
.box-message{
    display: none;
    font-size:20px;
    text-align: center;
    color:red;
     padding-bottom: 10px;
}
input{
    border:1px solid grey;
    border-radius: 10px;
    margin: 10px 10px;
    padding:5px 10px;
    height:30px;
    width:230px;
    font-size: 18px;
}
input:focus{
   outline: 0;
}
.box-footer{
    text-align: center;
    padding-bottom: 30px;
}
button{
    font-family: 'swd';
    height:45px;
    background-color: #009efb;
    border: 0;
    border-radius: 5px; 
    width:85%;
    color:white;
    font-size: 22px;
    margin-top: 15px;
}
</style>
<body class="content">
        <div class="box-login">
               <div class="box-top">
                    SWD - <span style="color:red;">Admin</span>  
               </div>
               <div class="box-content">
                    รหัสผู้ใช้งาน : <input id="username" type="text"/><br/>

                    รหัสผ่าน : <input id="password" type="password" />
               </div>
               <div class="box-message"></div>
                <div class="box-footer">
                    <button onclick="validate_form_login();">เข้าสู่ระบบ</button>
                    <br/><br/><a href="<?php echo base_url();?>home">กลับสู่หน้าเว็บไซต์</a>
               </div>          
        </div>
    </form>
</body>
<script>
$(document).ready(function(){
    $("input").keypress(function() {
         $('.box-message').hide();
    }); 
});
function validate_form_login(){
    if( $('#username').val() == '' || $('#password').val() == ''){
        if($('#username').val() == ''){
            $('#username').focus(); 
        }else if($('#password').val() == ''){
            $('#password').focus(); 
        }
        $('.box-message').html('* กรุณากรอกข้อมูล *');
        $('.box-message').show();
    }else{
        validate_login();
    }
}
function validate_login(){
    $.ajax({
        type: "POST",
            url: "<?php echo base_url();?>manage_center/validate_login",
            data: {username:$('#username').val(),password:$('#password').val()}, // serializes the form's elements.
            dataType: 'json',
            cache : false,
            success: function(response)
            {
                if(response.status == 1){
                    location.href = "<?php echo base_url();?>manage_general";
                }else{
                    $('.box-message').html(response.message);
                    $('.box-message').show();
                    setTimeout(function(){ $('.box-message').fadeOut(); }, 3000);
                }
            }
    });
}
</script>
</html>
