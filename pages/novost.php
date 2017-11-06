<?php
	$title = 'Novost';
	$keywords = 'Novost';
	$description = 'Novost';
	include '../include/header.php';
?>

<div class="row white">
  <div class="wrapper">
    <div class="content fw">

    	<div class="bread-crumbs fw">
    	  <ul>
    	    <li><a href="home.php">Naslovna</a></li>
    	    <li><a href="novosti.php">Novosti</a></li>
            <li>Naslov novosti</li>
    	  </ul>
    	</div><!-- end of .bread-crumbs -->

		<h1>Naslov novosti</h1>
        <div class="ghidden gallery">
            <div class="c-img">
                <a href="../images/content-images/i1.jpg">
                    <img src="../lib/plugins/thumb.php?src=../images/content-images/i1.jpg&w=480&h=480&zc=1" alt="">
                </a>
            </div>
            <div class="gal-thumbs-hide">
                <a href="../images/content-images/i2.jpg">
                    <img src="../lib/plugins/thumb.php?src=../images/content-images/i2.jpg&w=480&h=480&zc=1" alt="">
                </a>
                <a href="../images/content-images/i3.jpg">
                    <img src="../lib/plugins/thumb.php?src=../images/content-images/i3.jpg&w=480&h=480&zc=1" alt="">
                </a>
            </div>
        </div><!-- end of .ghidden-->

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima voluptas molestias aliquam amet aut adipisci repellendus tempore necessitatibus qui sequi neque similique minus vitae rerum, voluptatum dolorem commodi nesciunt aliquid odio assumenda consequatur fugiat repellat hic. Molestias quo reiciendis consectetur ipsa maiores nobis, tempore eligendi. Omnis quibusdam, blanditiis sapiente quis labore optio officiis nemo officia aut quia, quae totam rerum, mollitia, tenetur voluptas quo unde nesciunt. Libero expedita possimus, odit voluptas sunt ipsa dicta optio sit! Veniam in doloribus incidunt consequatur magni mollitia tempora deserunt itaque cumque, illo distinctio est accusantium facilis suscipit assumenda, voluptatibus quis minus at blanditiis, dolor eos debitis optio! Sequi quas, aspernatur. Quas aperiam, dicta eos similique in, cum saepe esse corporis commodi quos sint, alias maiores tempore quidem praesentium. Dolorem adipisci quae obcaecati nisi at, provident illum soluta non fugit ipsa placeat, consequuntur, temporibus totam tempore doloribus optio quod excepturi doloremque. Odit, vero ratione!</p>
        <p>Molestias quo reiciendis consectetur ipsa maiores nobis, tempore eligendi. Omnis quibusdam, blanditiis sapiente quis labore optio officiis nemo officia aut quia, quae totam rerum, mollitia, tenetur voluptas quo unde nesciunt. Libero expedita possimus, odit voluptas sunt ipsa dicta optio sit! Veniam in doloribus incidunt consequatur magni mollitia tempora deserunt itaque cumque, illo distinctio est accusantium facilis suscipit assumenda, voluptatibus quis minus at blanditiis, dolor eos debitis optio! Sequi quas, aspernatur. Quas aperiam, dicta eos similique in, cum saepe esse corporis commodi quos sint, alias maiores tempore quidem praesentium. Dolorem adipisci quae obcaecati nisi at, provident illum soluta non fugit ipsa placeat, consequuntur, temporibus totam tempore doloribus optio quod excepturi doloremque.</p>

        <div class="tab-holder fw">
            <a href="javascript:;" id="tab1" class="tab-link">Dokumenti</a>
            <div class="tabs-container" id="tab1-container">
              <div class="docs-list fw">
                <ul>
                    <li><a href="../images/content-images/test-dokument.pdf" target="_blank">Document 1</a></li>
                    <li><a href="../images/content-images/test-dokument.pdf" target="_blank">Document 2</a></li>
                    <li><a href="../images/content-images/test-dokument.pdf" target="_blank">Document 3</a></li>
                </ul>
              </div><!-- end of .docs-list -->
            </div>
            <a href="javascript:;" id="tab2" class="tab-link">Video</a>
            <div class="tabs-container" id="tab2-container" style="display: none;">
                <div class="video-holder">
                    <div class="video-page">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nYgb1YudIKI" frameborder="0" allowfullscreen></iframe>
                    </div><!-- end of .video-page -->
                </div><!-- end of .video-holder -->
                <div class="video-holder">
                    <div class="video-page">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wB7D5yw_km0" frameborder="0" allowfullscreen></iframe>
                    </div><!-- end of .video-page -->
                </div><!-- end of .video-holder -->
            </div><!-- end of .tabs-container -->
        </div><!-- end of .tab-holder -->

    </div><!-- end of .content -->
  </div><!-- end of .wrapper -->
</div><!-- end of .white -->

<?php include '../include/footer.php' ?>
