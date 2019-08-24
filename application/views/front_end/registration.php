<style>
  #content{
    padding: 0;
  }
  .registration-banner-desktop{
	object-fit: cover;
	object-position: center;
	height: 100%;
	width:100%;
	}
	.registration-banner-mobile{
		display: none;
	}
  @media only screen and (max-width: 500px) {
    .registration-banner-mobile{
    display:block;
    /*height: 500px;*/
    width:100%;
    }
    .registration-banner-desktop{
    	display:none;
    }
  }
   @media only screen and (max-width: 1024px) {
     .form-element {
      position: relative;
      margin-top: 2.25rem;
      margin-bottom: 3rem;
    }
  }
  @media only screen and (min-width: 1025px) {
    .form-registration{
    position: absolute;
    top:150px;
    right: 5%;
    width: 70%;
    margin:50% auto;
    }
    .form-element {
      position: relative;
      margin-top: 2.25rem;
      margin-bottom: 1rem;
    }

  }
  .btn-form{
      background-color: deepskyblue;border:none;padding:10px 10px;color:white;font-size: 18px;text-align:center;
  }
  .btn-process{
      background-color: limegreen;border:none;padding:10px 10px;color:white;font-size: 18px;text-align:center;
  }
  .form-registration{
    margin: 20px;
  }
  input, textarea {
    display: block;
    width: 100%;
    color: #005eab;
    font-size: 18px;
    line-height: 35px;
    border: none;
    background: 0 0;
    font-weight: 400;
    border-bottom: 1px solid #000;
    outline: none;
  }

.form-checkbox,
.form-radio {
  font-size: 16px;
  position: relative;
  text-align: left;
}

.form-checkbox-inline .form-checkbox-label,
.form-radio-inline .form-radio-label {
  display: inline-block;
  margin-right: 1.5rem;
}

.form-checkbox-legend,
.form-radio-legend {
  margin: 0 0 0.125rem 0;
  font-weight: bold;
  color: black;
}

.form-checkbox-label,
.form-radio-label {
  position: relative;
  cursor: pointer;
  padding-left: 2.5rem;
  text-align: left;
  color: #333;
  display: block;
  margin-bottom: 0.5rem;
}

.form-checkbox-label:hover i,
.form-radio-label:hover i {
  color: royalblue;
}

.form-checkbox-label span,
.form-radio-label span {
  display: block;
}

.form-checkbox-label input,
.form-radio-label input {
  width: auto;
  opacity: 0.0001;
  position: absolute;
  left: 0.25rem;
  top: 0.25rem;
  margin: 0;
  padding: 0;
}

.form-checkbox-button {
  position: absolute;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  display: block;
  color: #999;
  left: 0;
  top: 0.25rem;
  width: 1rem;
  height: 1rem;
  z-index: 0;
  border: 0.125rem solid currentColor;
  border-radius: 0.0625rem;
  transition: color 0.28s ease;
  will-change: color;
}

.form-checkbox-button::before,
.form-checkbox-button::after {
  position: absolute;
  height: 0;
  width: 0.2rem;
  background-color: #337ab7;
  display: block;
  -webkit-transform-origin: left top;
          transform-origin: left top;
  border-radius: 0.25rem;
  content: "";
  transition: opacity 0.28s ease, height 0s linear 0.28s;
  opacity: 0;
  will-change: opacity, height;
}

.form-checkbox-button::before {
  top: 0.65rem;
  left: 0.38rem;
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
  box-shadow: 0 0 0 0.0625rem #fff;
}

.form-checkbox-button::after {
  top: 0.3rem;
  left: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.form-checkbox-field:checked ~ .form-checkbox-button {
  color: #337ab7;
}

.form-checkbox-field:checked ~ .form-checkbox-button::after,
.form-checkbox-field:checked ~ .form-checkbox-button::before {
  opacity: 1;
  transition: height 0.28s ease;
}

.form-checkbox-field:checked ~ .form-checkbox-button::after {
  height: 0.5rem;
}

.form-checkbox-field:checked ~ .form-checkbox-button::before {
  height: 1.2rem;
  transition-delay: 0.28s;
}

.form-radio-button {
  position: absolute;
  left: 0;
  cursor: pointer;
  display: block;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: black;
}

.form-radio-button::before,
.form-radio-button::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  margin: 0.25rem;
  width: 1.7rem;
  height: 1.7rem;
  transition: color 0.28s ease, -webkit-transform 0.28s ease;
  transition: transform 0.28s ease, color 0.28s ease;
  transition: transform 0.28s ease, color 0.28s ease, -webkit-transform 0.28s ease;
  border-radius: 50%;
  border: 0.125rem solid currentColor;
  will-change: transform, color;
}

.form-radio-button::after {
  -webkit-transform: scale(0);
          transform: scale(0);
  background-color: #337ab7;
  border-color: #337ab7;
}

.form-radio-field:checked ~ .form-radio-button::after {
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
}

.form-radio-field:checked ~ .form-radio-button::before {
  color: #337ab7;
}

.form-has-error .form-checkbox-button,
.form-has-error .form-radio-button {
  color: #d9534f;
}

.form-card {
  border-radius: 2px;
  background: #fff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.56s cubic-bezier(0.25, 0.8, 0.25, 1);
  max-width: 500px;
  padding: 0;
  margin: 50px auto;
}

.form-card:hover,
.form-card:focus {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.form-card:focus-within {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.form-actions {
  position: relative;
  display: flex;
  margin-top: 2.25rem;
}

.form-actions .form-btn-cancel {
  order: -1;
}

.form-actions::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background: #999;
  opacity: 0.3;
}

.form-actions > * {
  flex: 1;
  margin-top: 0;
}

.form-fieldset {
  padding: 30px;
  border: 0;
}

.form-fieldset + .form-fieldset {
  margin-top: 15px;
}

.form-legend {
  padding: 1em 0 0;
  margin: 0 0 -0.5em;
  text-align: center;
}

.form-legend + p {
  margin-top: 1rem;
}

.form-element-hint {
  font-weight: 400;
  color: #a6a6a6;
  display: block;
}

.form-element-bar {
  position: relative;
  height: 1px;
  background: black;
  display: block;
}

.form-element-bar::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: #337ab7;
  height: 2px;
  display: block;
  -webkit-transform: rotateY(90deg);
          transform: rotateY(90deg);
  transition: -webkit-transform 0.28s ease;
  transition: transform 0.28s ease;
  transition: transform 0.28s ease, -webkit-transform 0.28s ease;
  will-change: transform;
}

.form-element-label {
  font-size: 16px;
  position: absolute;
  top: 0.75rem;
  line-height: 2em;
  pointer-events: none;
  padding-left: 0.125rem;
  z-index: 1;
  font-weight: bold;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin: 0;
  color: black;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transform-origin: left center;
          transform-origin: left center;
  transition: color 0.28s linear, opacity 0.28s linear, -webkit-transform 0.28s ease;
  transition: transform 0.28s ease, color 0.28s linear, opacity 0.28s linear;
  transition: transform 0.28s ease, color 0.28s linear, opacity 0.28s linear, -webkit-transform 0.28s ease;
  will-change: transform, color, opacity;
}

.form-element-field {
  outline: none;
  height: 3rem;
  display: block;
  background: none;
  padding: 1rem 0rem 2rem;
  border: 0 solid transparent;
  line-height: 1.5;
  width: 100%;
  color: royalblue;
  box-shadow: none;
  opacity: 0.001;
  transition: opacity 0.28s ease;
  will-change: opacity;
  font-weight: bold;
}

.form-element-field:-ms-input-placeholder {
  color: grey;
  transform: scale(0.9);
  transform-origin: left top;
}

.form-element-field::-webkit-input-placeholder {
  color: grey;
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
  -webkit-transform-origin: left top;
          transform-origin: left top;
}

.form-element-field::-ms-input-placeholder {
  color: grey;
  transform: scale(0.9);
  transform-origin: left top;
}

.form-element-field::placeholder {
  color: #656565;
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
  -webkit-transform-origin: left top;
          transform-origin: left top;
}

.form-element-field:focus ~ .form-element-bar::after {
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

.form-element-field:focus ~ .form-element-label {
  color: black;
}

.form-element-field.-hasvalue,
.form-element-field:focus {
  opacity: 1;
}

.form-element-field.-hasvalue ~ .form-element-label,
.form-element-field:focus ~ .form-element-label {
  -webkit-transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
          transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
  cursor: pointer;
  pointer-events: auto;
}

.form-has-error .form-element-label.form-element-label,
.form-has-error .form-element-hint {
  color: red;
}

.form-has-error .form-element-bar,
.form-has-error .form-element-bar::after {
  background: red;
}

.form-is-success .form-element-label.form-element-label,
.form-is-success .form-element-hint {
  color: red;
}

.form-is-success .form-element-bar::after {
  background: red;
}

input.form-element-field:not(:placeholder-shown),
textarea.form-element-field:not(:placeholder-shown) {
  opacity: 1;
}

input.form-element-field:not(:placeholder-shown) ~ .form-element-label,
textarea.form-element-field:not(:placeholder-shown) ~ .form-element-label {
  -webkit-transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
          transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
  cursor: pointer;
  pointer-events: auto;
}

textarea.form-element-field {
  height: auto;
  min-height: 3rem;
}

select.form-element-field {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  cursor: pointer;
}

.form-select-placeholder {
  color: #a6a6a6;
  display: none;
}

.form-select .form-element-bar::before {
  content: "";
  position: absolute;
  height: 0.5em;
  width: 0.5em;
  border-bottom: 1px solid #999;
  border-right: 1px solid #999;
  display: block;
  right: 0.5em;
  bottom: 0;
  transition: -webkit-transform 0.28s ease;
  transition: transform 0.28s ease;
  transition: transform 0.28s ease, -webkit-transform 0.28s ease;
  -webkit-transform: translateY(-100%) rotateX(0deg) rotate(45deg);
          transform: translateY(-100%) rotateX(0deg) rotate(45deg);
  will-change: transform;
}

.form-select select:focus ~ .form-element-bar::before {
  -webkit-transform: translateY(-50%) rotateX(180deg) rotate(45deg);
          transform: translateY(-50%) rotateX(180deg) rotate(45deg);
}

.form-element-field[type="number"] {
  -moz-appearance: textfield;
}

.form-element-field[type="number"]::-webkit-outer-spin-button,
.form-element-field[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.star{
  font-size: 20px;
  color:red;
}
</style>
<section id="content">
  <img class="registration-banner-desktop" src="<?php echo base_url();?>images/banner.jpg"/>
  <img class="registration-banner-mobile" src="<?php echo base_url();?>images/cover_mobile.jpg"/>
  <div class="container">
    <div class="form-registration">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-6">
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-6" style="background-color: rgba(255,255,255,0.7);padding:20px">
        	<center><h3 style="color:#005eab">ลงทะเบียนรับข้อเสนอพิเศษ</h3></center>
            <form id="form-registration" method="post" onsubmit="chk_form();">
            <div class="row">
              <div class="col-12 col-md-12">
                <label class="form-element-label" style="color:red;font-size: 14px;"><span class="star"> * </span>ข้อมูลจำเป็น</label><br/><br/>  
                <div class="form-radio form-radio-inline">
                  <div class="form-radio-legend">คำนำหน้าชื่อ <span class="star"> *</span></div>
                  <label class="form-radio-label">
                      <input name="title_name" class="form-radio-field" type="radio" required value="นาย" />
                      <i class="form-radio-button"></i>
                      <span>นาย</span>
                  </label>
                  <label class="form-radio-label">
                      <input name="title_name" class="form-radio-field" type="radio" required value="นางสาว" />
                      <i class="form-radio-button"></i>
                      <span>นางสาว</span>
                  </label>
                  <label class="form-radio-label">
                      <input name="title_name" class="form-radio-field" type="radio" required value="นาง" />
                      <i class="form-radio-button"></i>
                      <span>นาง</span>
                  </label>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6">
                <div class="form-element ">
                  <input                   
                  id="fname" name="fname" class="form-element-field" placeholder=" " type="input" autocomplete="false" required />
                  <div class="form-element-bar"></div>
                  <label class="form-element-label" for="fname" >ชื่อ <span class="star"> *</span></label>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6">
                <div class="form-element ">
                  <input id="lname" name="lname" class="form-element-field" placeholder=" " type="input" autocomplete="false" required />
                  <div class="form-element-bar"></div>
                  <label class="form-element-label" for="lname" >นามสกุล <span class="star"> *</span></label>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6">
                <div class="form-element ">
                  <input id="mobile" name="mobile" class="form-element-field" placeholder=" " type="input" autocomplete="false" required/>
                  <div class="form-element-bar"></div>
                  <label class="form-element-label" for="mobile" >เบอร์มือถือ <span class="star"> *</span></label>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6">
                <div class="form-element ">
                  <input id="email" name="email" class="form-element-field" placeholder=" " type="input" autocomplete="false" />
                  <div class="form-element-bar"></div>
                  <label class="form-element-label" for="email" >อีเมล</label>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6">
                <div class="form-element ">
                  <input id="line" name="line" class="form-element-field" placeholder=" " type="input" autocomplete="false" />
                  <div class="form-element-bar"></div>
                  <label class="form-element-label" for="line" >ไอดีไลน์ </label>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12"></div>
              <div class="col-12 col-sm-12 col-md-6">
                <div class="form-radio form-radio-inline">
                  <br/>
                  <div class="form-radio-legend">โครงการที่ท่านสนใจ? <span class="star"> *</span></div>
                  <?php foreach($projects as $val){?>
                  <label class="form-radio-label">
                      <input name="projects" class="form-radio-field" type="radio" required value="<?php echo $val['projects_name'];?>" />
                      <i class="form-radio-button"></i>
                      <span><?php echo $val['projects_name'];?></span>
                  </label><br/>
                  <?php }?>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6">
                <div class="form-radio form-radio-inline">
                  <br/>
                  <div class="form-radio-legend">ท่านได้รับข่าวสารโครงการข้างต้นจากช่องทางใด? <span class="star"> *</span></div>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="เว็บไซต์" />
                      <i class="form-radio-button"></i>
                      <span>เว็บไซต์</span>
                  </label><br/>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="เฟสบุ๊ค" />
                      <i class="form-radio-button"></i>
                      <span>เฟสบุ๊ค</span>
                  </label><br/>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="ป้ายประชาสัมพันธ์" />
                      <i class="form-radio-button"></i>
                      <span>ป้ายประชาสัมพันธ์</span>
                  </label><br/>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="เพื่อนแนะนำ" />
                      <i class="form-radio-button"></i>
                      <span>เพื่อนแนะนำ</span>
                  </label><br/>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="ไลน์แอด" />
                      <i class="form-radio-button"></i>
                      <span>ไลน์แอด</span>
                  </label><br/>
                  <label class="form-radio-label">
                      <input name="channel" class="form-radio-field" type="radio" required value="ใบปลิว" />
                      <i class="form-radio-button"></i>
                      <span>ใบปลิว</span>
                  </label><br/>
                </div>
              </div>
            </div>
            <div class="row text-center"> 
            <button id="btn-form" class="btn-form" style="background-color: royalblue; width: 40%;text-align: center;font-weight: bold">ลงทะเบียน</button>
            </div>
           </form>
        </div>
      </div> 
      </div>
    </div>
  </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Notice</h3>
        </div>
        <div class="modal-body">
          <h4 id="message"></h4>
        </div>
        
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
    $('#mobile').mask('999-999-9999');

   function chk_form(){
      event.preventDefault();

          $('#btn-form').removeClass('btn-form');
          $('#btn-form').addClass('btn-process');
          $('#btn-form').html('กำลังประมวลผล...');
          $('#btn-form').prop('disabled', true);
          $.ajax({
              type: "POST",
                  url: "<?php echo base_url();?>registration/add",
                  data: $('#form-registration').serialize(), // serializes the form's elements.
                  dataType: 'json',
                  cache : false,
                  success: function(response)
                  {
                      if(response.status == 1){
                        $("#form-registration").trigger("reset");
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('ลงทะเบียน');
                        $('#btn-form').prop('disabled', false);
                        $('#message').html('ลงทะเบียนสำเร็จ');
                        $('#myModal').modal();
                      }else{
                        $('#btn-form').removeClass('btn-process');
                        $('#btn-form').addClass('btn-form');
                        $('#btn-form').html('ลงทะเบียน');
                        $('#btn-form').prop('disabled', false);
                        $('#message').html('ไม่สามารถลงทะเบียนได้!');
                        $('#myModal').modal();
                      }
                  }
          });
  }
</script>