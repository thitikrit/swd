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
</style>
<?php if($menu[0]['menu_type'] == 'SLIDE'){?>
    <section id="banner">
     
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <?php $slider = json_decode($menu[0]['menu_picture']); ?>
                <?php for($i = 0 ; $i < count($slider);$i++){ ?>
                  <li>
                        <img src="<?php echo base_url(); ?>images/slides/<?php echo $slider[$i]->name; ?>" alt="" />
                  </li>
                <?php }?>
            </ul>
        </div>
    <!-- end slider -->
    </section>
<?php }?>
<?php if($menu[0]['menu_type'] == 'TEXT'){?>
    <div style="background-color: white;height:72px"><br/><br/><br/>
    </div>
    <section id="call-to-action-2" style="padding-top: 50px;padding-bottom:  20px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div align="center">
                            <span style="margin-top:0px;font-size:26px;font-weight: bold;color:white;"><?php echo $menu[0]['menu_name'];?></span>
                    </div>
                    
                    
                </div>
               
            </div>
        </div>
    </section>   
    <br/>
<?php } ?>

    <section id="content">
    
    <div class="container">
        
    <div class="row">
        <div class="col-md-6">
                  <h3 style="color:deepskyblue">ข้อมูลติดต่อ</h3>
                  <p style="font-size: 18px;"> สถานที่ตั้ง : 660/44 ถนนสุขุมวิท ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20110 <br/>
                  เบอร์โทรศัพท์ : 038-064757<br/>
                  อีเมล : sawasdee.chonburi@hotmail.com</p>
                  <br/><br/>

                   <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCwiI39TyG_aaKXbnyulKrff7Eu7DDo03A&language=th&region=TH"></script><div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:400px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(13.2476252,100.9334953),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.2476252,100.9334953)});infowindow = new google.maps.InfoWindow({content:"  <img src='<?php echo base_url(); ?>/images/sawasdee.png' height='50px'/>"  });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

         </div>
        
        <div class="col-md-6">
                    <form name="sentMessage" id="contactFormxxx"  onsubmit="chk_form();" novalidate>
                        <h3 style="color:deepskyblue">ติดต่อสอบถาม</h3>
                            <div class="control-group">
                                 <div class="controls">
                                    <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล" id="contacts_name" name="contacts_name"  style="font-size: 18px;"/>
                                      <p id="msg-1" class="help-block" style="color:deeppink;display:none;">กรุณากรอกชื่อ - นามสกุล *</p>
                                  </div>
                            </div>     
                            <div class="control-group" style="padding-top:10px">
                                <div class="controls">
                                  <input type="email" class="form-control" placeholder="อีเมล" id="contacts_email" name="contacts_email" style="font-size: 18px;"/>
                                  <p id="msg-2" class="help-block" style="color:deeppink;display:none;">กรุณากรอกอีเมล *</p>
                                </div>
                            </div>
                            <div class="control-group" style="padding-top:10px">
                                <div class="controls">
                                  <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์" id="contacts_tel" name="contacts_tel" style="font-size: 18px;"/>
                                  <p id="msg-3" class="help-block" style="color:deeppink;display:none;">กรุณากรอกเบอร์โทรศัพท์ *</p>
                                </div>
                            </div>  
                      
                            <div class="control-group" style="padding-top:10px">
                                  <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" 
                                         placeholder="รายละเอียด" id="contacts_detail" name="contacts_detail" maxlength="999" style="resize:none;font-size: 18px;"></textarea><p id="msg-4" class="help-block" style="color:deeppink;display:none;">กรุณากรอกรายละเอียด *</p>
                                  </div>
                            </div>    
                   <br/>
                       <button id="btn-form" class="btn-form">ส่งแบบสอบถาม</button>
                    </form>
        </div>
                                
    </div>
    </div>
    </section>
<script type="text/javascript">

    $( "input" ).keypress(function() {
       $(".help-block").hide();
    });
    $( "textarea" ).keypress(function() {
       $(".help-block").hide();
    });
   
   function chk_form(){
      event.preventDefault();
       var chk = true;
      if( $("#contacts_name").val() == ''){
        $("#msg-1").show();
        chk = false;
      }

      if( $("#contacts_email").val() == ''){
        $("#msg-2").html('กรุณากรอกอีเมล *');
        $("#msg-2").show();
        chk = false;
      }else{
        var Email=/^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-zA-Z0-9]{2,5})$/
          if(!document.getElementById('contacts_email').value.match(Email)){
             $("#msg-2").html('กรุณากรอกอีเมลให้ถูกต้อง *');
             $("#msg-2").show();
             chk = false;
          }
      }

      if( $("#contacts_tel").val() == ''){
        $("#msg-3").show();
        chk = false;
      }

      if( $("#contacts_detail").val() == ''){
        $("#msg-4").show();
        chk = false;
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
                  url: "<?php echo base_url();?>contact/add",
                  data: {contacts_name:$('#contacts_name').val(),contacts_email:$('#contacts_email').val(),contacts_tel:$('#contacts_tel').val(),contacts_detail:$('#contacts_detail').val()}, // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        $('#contacts_name').val('');
                        $('#contacts_email').val('');
                        $('#contacts_tel').val('');
                        $('#contacts_detail').val('');
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('ส่งแบบสอบถาม');
                        $('#btn-form').prop('disabled', false);
                        alert('คุณได้ส่งแบบสอบถามเรียบร้อย');
                      }else{
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('ส่งแบบสอบถาม');
                        $('#btn-form').prop('disabled', false);
                        alert('ไม่สามารถส่งแบบสอบถามได้');
                      }
                  }
          });

      }
   }
</script>