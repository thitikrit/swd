<?php include 'bar.php';?>

<style>
.editContent{
        font-size:16px;
    }
    h4{
        margin-bottom:10px;
    }
    .gallery-item .gallery-details{
        padding-top:10px;
      
    }
    .article{
         word-wrap: break-word;
    }
    .article-detail-recom{
        padding: 15px 15px;
        font-size: 16px;
      
    }
    .article-detail{
        padding: 5px 10px;
        font-size: 16px;
    }
    .article-detail-bar{
        padding: 10px 10px;
        font-size: 18px;
        font-weight: bold;
    }
a:hover{
    text-decoration:none;
}

#search-article{
    background-color:rgba(255,255,255,0.7);
    background-repeat: no-repeat;
    background-position: center right 10px;
    background-position-y: 15px;
    background-position-x: 98%;
    width: 40%;
    margin: 5px;
    border:none;
    border: 1px solid lightgrey;
    border-radius: : 50px;
    font-size: 20px;
    padding: 10px 15px;
    height:48px;
}
#search-article::placeholder{
    color:gray;
}
 .article{
        background-color: white;
        border:1px solid lightgrey;
        border-radius: 5px;
        min-height:250px;
        max-height: auto;
        padding-left:10px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
        padding-right:10px;
        margin-bottom:20px;
        word-wrap: break-word;
    }
</style>

    <section id="call-to-action-2" style="padding:10px;padding-bottom:0px;background: aliceblue;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div style="margin-top: 10px" align="center">
                         <form id="search" name="search" method="post" action="<?php echo base_url();?>article/search" onsubmit="return chk_search();">
                        <span style="font-size:22px;font-weight: bold;color:deepskyblue;padding-right:1%">ค้นหาบทความ</span>
                       
                        <input type="text" name="search-article" id="search-article" placeholder="ค้นหาจากชื่อ หรือแท็ก" ></input>
                        <a href="##" title="คลิกเพื่อค้นหา" style="">
                            <button style="height:48px;font-size:22px;color:white;background-color:dodgerblue;border:0px;padding-left: 15px;padding-right:15px;"><i class="icon-info-blocks fa fa-search"></i>
                        </button></a>
                        </form>
                    </div>
                </div>               
            </div>
        </div>
    </section>
<?php if(!empty($article)){ ?>
    <?php foreach($article as $val){ ?>
    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1" style="padding-top: 40px;background-color: #eee">
        <div class="container">          
            <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-12 article">
                        <div class="col-sm-12 text-center" style="padding-top: 10px">
                            <h2 style="color:<?php if($val['articles_recommend'] == '1'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>"><?php echo $val['articles_name'];?></h2>  <hr/>
                        </div>
                         <div class="col-sm-12 text-center" style="padding-top: 10px;padding-bottom: 25px;">
                             <img alt="1" src="<?php echo base_url();?>images/articles/<?php echo $val['articles_picture'];?>" style="height:100%;width:80%;border-radius: 10px" >
                        </div>                
                        <div class="col-sm-12" style="font-size: 18px;line-height:30px;padding-bottom: 25px;padding-top: 10px;padding-left: 2%;padding-right:2%;">
                            <div class="col-sm-12">
                                <?php echo $val['articles_detail']; ?>
                            </div>
                            <br/><br/>	
      						<div class="col-sm-12 text-center ">
      							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>/article/detail/<?php echo $val['articles_id'];?>" style="padding:5px;">
                              		<img alt="sawasdee-share" src="<?php echo base_url();?>images/fb.png?>" width="40px">
                          		</a>
                          		<a href="line://msg/text/<?php echo site_url(); ?>/article/detail/<?php echo $val['articles_id'];?>" target="_blank" style="padding:5px;">
                                	<img alt="sawasdee-share" src="<?php echo base_url();?>images/line.png?>" width="40px">
	                            </a>
                            </div>
                            <div class="col-sm-12">    
                                <hr/>
                                 <?php if(!empty($val['articles_tag'])){ ?>
                                    <?php $tag = explode(",",$val['articles_tag']); 
                                    foreach($tag as $t){ ?>
                                    <span style="color:white;background:<?php if($val['articles_recommend'] == '1'){ echo 'deeppink'; }else{ echo 'deepskyblue'; } ?>;padding: 5px 10px;border-radius: 20px;display: inline-block;font-size:16px"><?php echo $t; ?></span>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                          
                    </div>           
            </div>
            <div class="col-sm-12 text-center" style="padding-bottom: 50px">
                <a href="<?php echo base_url();?>article"><button style="background-color:dodgerblue;border:1px solid white;padding:10px 10px;color:white;font-size:20px;        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;
">ย้อนกลับ</button></a>
            </div>
        </div>
    </section>
    <?php }?>
<?php }else{?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="background:white;height:300px;padding-top:120px;font-size:25px;">
                            - ไม่มีข้อมูลดังกล่าว -
                </div>
            </div>
        </div>
    </section>  
<?php  } ?>