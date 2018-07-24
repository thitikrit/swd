<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li>
                <a href="<?php echo site_url();?>member/webboard" class="waves-effect <?php if($menu == 1){echo 'active';} ?>"><i class="fa fa-comment-o m-r-10" aria-hidden="true"></i>กระดานซื้อ-ขาย</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>member/setting" class="waves-effect <?php if($menu == 2){echo 'active';} ?>"><i class="fa fa fa-wrench o m-r-10" aria-hidden="true"></i>ตั้งค่าบัญชี</a>
            </li>
        </ul>
        <div class="text-center m-t-30">
            <a href="<?php echo site_url();?>home" class="btn btn-info">กลับสู่หน้าเว็บไซต์หลัก</a>
        </div>
        <div class="text-center m-t-30">
            <a href="<?php echo site_url();?>logout" class="btn btn-danger">ออกจากระบบ</a>
        </div>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->