<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li>
                <a href="<?php echo site_url();?>manage_general" class="waves-effect <?php if($menu == 0){echo 'active';} ?>"><i class="fa fa-dashboard m-r-10" aria-hidden="true"></i>แดชบอร์ด</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_menu" class="waves-effect <?php if($menu == 1){echo 'active';} ?>"><i class="fa fa-globe m-r-10" aria-hidden="true"></i>จัดการเมนู</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_company" class="waves-effect <?php if($menu == 2){echo 'active';} ?>"><i class="fa fa-home m-r-10" aria-hidden="true"></i>ข้อมูลบริษัท</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_projects" class="waves-effect <?php if($menu == 3){echo 'active';} ?>"><i class="fa fa-building-o m-r-10" aria-hidden="true"></i>โครงการ</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_workings" class="waves-effect <?php if($menu == 4){echo 'active';} ?>"><i class="fa fa-trophy m-r-10" aria-hidden="true"></i>ผลงาน</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_webboards" class="waves-effect <?php if($menu == 5){echo 'active';} ?>"><i class="fa fa-comment-o m-r-10" aria-hidden="true"></i>กระดานซื้อ-ขาย</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_events" class="waves-effect <?php if($menu == 6){echo 'active';} ?>"><i class="fa fa-bullhorn m-r-10" aria-hidden="true"></i>กิจกรรม ข่าวสาร โปรโมชั่น</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_articles" class="waves-effect <?php if($menu == 7){echo 'active';} ?>"><i class="fa fa-file-text-o m-r-10" aria-hidden="true"></i>บทความ</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>manage_contacts" class="waves-effect <?php if($menu == 8){echo 'active';} ?>"><i class="fa fa fa-phone o m-r-10" aria-hidden="true"></i>ติดต่อเรา</a>
            </li>
            
        </ul>
        <div class="text-center m-t-30">
            <a href="<?php echo site_url();?>manage_center/logout" class="btn btn-danger">ออกจากระบบ</a>
        </div>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->