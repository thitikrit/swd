<style>
  #content{
    padding: 40px;
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
                                      <p style="font-size: 18px;">
                                      <input type="text" class="form-control" 
                                             placeholder="ชื่อ - นามสกุล" id="contacts_name" name="contacts_name"  style="font-size: 18px;"/>
                                        <p class="help-block"></p>
                                     </div>
                       </div>     
                      
                            <div class="controls">
                              <input type="email" class="form-control" placeholder="อีเมล" 
                                      id="contacts_email" name="contacts_email" required
                                 data-validation-required-message="Please enter your email" style="font-size: 18px;"/>
                              </div>
                                    <div class="control-group" style="padding-top: 10px;">
                            <div class="controls">
                              <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์" 
                                      id="contacts_tel" name="contacts_tel" required
                                 data-validation-required-message="Please enter your email" style="font-size: 18px;"/>
                              </div>
                      </div>  
                      
                         <div class="control-group" style="padding-top: 10px;">
                           <div class="controls">
                           <textarea rows="10" cols="100" class="form-control" 
                                 placeholder="รายละเอียด" id="contacts_detail" name="contacts_detail"
                                  maxlength="999" style="resize:none;font-size: 18px;"></textarea>
                  </div>
                         </div>    
                   <div id="msg" style="font-size: 18px;color:deeppink;display:none;"><br/>* กรุณากรอกข้อมูลให้ครบถ้วน *</div>
      
                   <br/>
                       <button style="background-color: deepskyblue;border:none;padding:10px 10px;color:white;font-size: 18px;text-align:center">ส่งแบบสอบถาม</button>
                    </form>
        </div>
                                
    </div>
    </div>
    </section>
<script type="text/javascript">

    $( "input" ).keypress(function() {
       $("#msg").hide();
    });
    $( "textarea" ).keypress(function() {
       $("#msg").hide();
    });
   
   function chk_form(){
      event.preventDefault();
       var chk = true;
      if( $("#contacts_name").val() == ''){
        chk = false;
      }

      if( $("#contacts_email").val() == ''){
        chk = false;
      }

      if( $("#contacts_tel").val() == ''){
        chk = false;
      }

      if( $("#contacts_detail").val() == ''){
        chk = false;
      }
      if(!chk){
        $("#msg").show();
      }else{

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
                          alert('คุณได้ส่งแบบสอบถามเรียบร้อย');
                      }else{
                         alert('ไม่สามารถส่งแบบสอบถามได้');
                      }
                  }
          });

      }
   }
</script>