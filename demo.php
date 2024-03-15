<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <div class="container">
        <div class="card-group">
  
            <!--bootstrap card with 3 horizontal images-->
            <div class="row">
<?php
              include("admin/connection.php");  
              $sqlskr=$db->query("select * from tbl_video_category order by video_cat_id desc");

while($rows=$sqlskr->fetch_assoc())

                                              {
?>


<div class="col-lg-6 col-md-6 max-width-50">
<div id="tv_container">
				<iframe class="elementor-video-iframe" id="card-img-top" src="uploads/videos/<?php echo $rows['video_cat_img'];?>" allowfullscreen=""></iframe>
				<div class="elementor-custom-embed-image-overlay" style="background-image: url(images/img.jpg);">
																
									</div>
				

											</div>  </div>
                                        <?php } ?>
				</div>
				</div></div>
				

<style>
.card-img-top {
    width: 350px;
    height: 270px;
    padding-top:10px;

    position: relative;
min-height: 1px;
padding-left: 0.9375rem;
padding-right: 0.9375rem;
float: none;
}
h1 {
    color: green;
}
#card-img-top{
	width: 350px;
    height: 270px;
    padding-top:10px;

    position: relative;
min-height: 1px;
padding-left: 0.9375rem;
padding-right: 0.9375rem;
float: none;
}
</style>
<style>
@media screen and (max-width: 600px) {
.card-img-top {
width: 570px;
height: 414px;
padding-top: 10px;
position: relative;
min-height: 1px;
padding-left: 0.9375rem;
padding-right: 0.9375rem;
float: none;
}
}
@media screen and (max-width: 600px) {
#card-img-top{
	width: 350px;
    height: 270px;
    padding-top:10px;

    position: relative;
min-height: 1px;
padding-left: 0.9375rem;
padding-right: 0.9375rem;
float: none;
}
}


</style>

<style>
#tv_container {
    background: url('images/img.jpg') no-repeat top left transparent;
    width: 400px; /* Adjust TV image width */
    height: 300px; /* Adjust TV image height */
    position: relative;
}
#tv_container video {
    position: absolute;
    top: 30px; /* Adjust top position */
    left: 40px; /* Adjust left position */
}
</style>