<div class="navbar navbar-default navbar-static-top">
    <div class="container">            
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="<?php echo base_url(); ?>home"><img  style="margin-top:11px;padding-left: 10px" src="<?php echo base_url(); ?>images/sawasdee.png" alt="logo" width="115px" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($menu_list as $menu_l){ ?>

                    <?php if($menu_l['menu_id'] == 1 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-1"  <?php if($menu == 1){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>home"><?php echo $menu_l['menu_name'];?></a></li>
    				<?php }?>

                    <?php if($menu_l['menu_id'] == 2 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-2"  <?php if($menu == 2){ echo "class='active'"; } ?> class="dropdown" onmouseover="$('.project').show();" onmouseout="$('.project').hide();">
                        <a href="<?php echo base_url(); ?>project"><?php echo $menu_l['menu_name'];?></a>
                        <ul class="dropdown-menu project">
                            <?php foreach($area as $val){?>
                            <li><a href="<?php echo base_url();?>project/area/<?php echo $val['area_id'];?>"><?php echo $val['area_name'];?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>

                    <?php if($menu_l['menu_id'] == 3 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-3"  <?php if($menu == 3){ echo "class='active'"; } ?> class="dropdown" onmouseover="$('.workings').show();" onmouseout="$('.workings').hide();">
                        <a href="<?php echo base_url(); ?>working"><?php echo $menu_l['menu_name'];?></a>
                        <ul class="dropdown-menu workings" >
                            <li><a href="<?php echo base_url();?>working/now">โครงการที่รับบริหารงานขายในปัจจุบัน</a></li>
                            <li><a href="<?php echo base_url();?>working/old">โครงการที่รับบริหารงานขายที่ผ่านมา</a></li>
                        </ul>
                    </li>
                    <?php }?>

                    <?php if(empty($this->session->userdata("user_username"))){ ?>
                    <?php if($menu_l['menu_id'] == 4 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-4" <?php if($menu == 4){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>webboard"><?php echo $menu_l['menu_name'];?></a></li>
                    <?php }?>
                    <?php }else{ ?>
                    <?php if($menu_l['menu_id'] == 4 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-4" <?php if($menu == 4){ echo "class='active'"; } ?>  class="dropdown" onmouseover="$('.webboard-li').show();" onmouseout="$('.webboard-li').hide();"><a href="<?php echo base_url(); ?>webboard"><?php echo $menu_l['menu_name'];?></a>
                        <?php if($this->session->userdata("user_status") == 'MEMBER'){ ?>
                         <ul class="dropdown-menu webboard-li" >
                            <li><a href="<?php echo base_url();?>member/webboard">สร้างกระดานซื้อขาย</a></li>
                        </ul>
                        <?php }?>
                    </li>
                    <?php }?>
                    <?php } ?>

                    <?php if($menu_l['menu_id'] == 5 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-5" <?php if($menu == 5){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>event"><?php echo $menu_l['menu_name'];?></a></li>
                    <?php }?>

                    <?php if($menu_l['menu_id'] == 6 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
    				<li id="menu-6" <?php if($menu == 6){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>article"><?php echo $menu_l['menu_name'];?></a></li>
                    <?php }?>

                    <?php if($menu_l['menu_id'] == 7 && $menu_l['menu_status'] == 'ACTIVE'){ ?>
                    <li id="menu-7" <?php if($menu == 7){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>contact"><?php echo $menu_l['menu_name'];?></a></li>
                    <?php }?>
				    
                <?php }?>
                <?php if(empty($this->session->userdata("user_username"))){ ?>
                <li id="menu-login" <?php if($menu == 'login'){ echo "class='active'"; } ?> ><a href="<?php echo base_url(); ?>login"><i class="fa fa-unlock-alt" style="font-size:18px"></i>&nbsp;เข้าสู่ระบบ</a></li>
                <?php }else{ ?>
                    <?php if($this->session->userdata("user_status") == 'MEMBER'){ ?>
                        <li id="menu-login" <?php if($menu == 'login'){ echo "class='active'"; } ?> class="dropdown" onmouseover="$('.login').show();" onmouseout="$('.login').hide();"><a href="#"><i class="fa fa-user" style="font-size:18px"></i>&nbsp;บัญชีผู้ใช้</a>
                            <ul class="dropdown-menu login" >
                                    <li><a href="<?php echo base_url();?>member/webboard">จัดการกระดานซื้อขาย</a></li>
                                    <li><a href="<?php echo base_url();?>member/setting">ตั้งค่าบัญชี</a></li>
                                    <li><a href="<?php echo base_url();?>logout">ออกจากระบบ&nbsp;<i class="fa fa-sign-out"></i> </a></li>
                                </ul>
                        </li>
                    <?php }else {?>
                        <li id="menu-login" <?php if($menu == 'login'){ echo "class='active'"; } ?> class="dropdown" onmouseover="$('.login').show();" onmouseout="$('.login').hide();"><a href="#"><i class="fa fa-user" style="font-size:18px"></i>&nbsp;ผู้ดูแลระบบ</a>
                            <ul class="dropdown-menu login" >
                                    <li><a href="<?php echo base_url();?>manage_general">จัดการข้อมูล</a></li>
                                    <li><a href="<?php echo base_url();?>logout">ออกจากระบบ&nbsp;<i class="fa fa-sign-out"></i> </a></li>
                                </ul>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>