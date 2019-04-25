<style>
    @media only screen and (max-width: 768px) {
        .home-page header .navbar-default{
            position: relative; 
        }
        .space{
            display: none;
        }
    }
.
</style>
<?php if($menu[0]['menu_type'] == 'SLIDE' && !empty($menu[0]['menu_picture'])){?>
    <section id="banner">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <?php 
                    $slider = json_decode($menu[0]['menu_picture']);
                    usort($slider, function($a, $b) {
                        return $a->order - $b->order ;
                     }); 
                ?>
                <?php for($i = 0 ; $i < count($slider);$i++){ ?>
                  <li>
                        <img src="<?php echo base_url(); ?>images/slides/<?php echo $slider[$i]->name; ?>" alt="" height="auto"/>
                  </li>
                <?php }?>
            </ul>
        </div>
    <!-- end slider -->
    </section>
<?php }else if($menu[0]['menu_type'] == 'GIF' && !empty($menu[0]['menu_video'])){?>
    <section id="banner">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <?php
                    $slider = json_decode($menu[0]['menu_video']);
                    usort($slider, function($a, $b) {
                        return $a->order - $b->order ;
                     }); 
                ?>
                <?php for($i = 0 ; $i < count($slider);$i++){ ?>
                  <li>
                        <img src="<?php echo base_url(); ?>videos/<?php echo $slider[$i]->name; ?>" alt="" />
                  </li>
                <?php }?>
            </ul>
        </div>
    <!-- end slider -->
    </section>
<?php }else{?>
    <div style="background-color: white;height:72px" class="space"><br/><br/><br/>
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
<?php } ?>
