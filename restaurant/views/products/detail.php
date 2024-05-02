<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/imagers/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.php?controller=product&action=index">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $product['title']?><i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
          <?php echo $product['content']?>
          <!-- cmt -->
          <!-- <div class="pt-5 mt-5">
            <div class="fb-share-button" data-href="http://localhost/blog_dish/restaurant/index.php?controller=product&action=detail&id=339" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
          </div> -->

          <div class="pt-5 mt-5">
            <div class="fb-comments" data-href="https://phimtrend.top/" data-width="" data-numposts="5"></div>
          </div>
            
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Các bài viết phổ biến</h3>
              <?php foreach ($products as $pro) :?>
                <div class="block-21 mb-4 d-flex">
                  <a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>" class="blog-img mr-4" style="background-image: url('../admin/assets/uploads/<?php echo $pro['avatar'] ?>');"></a>
                  <div class="text">
                    <h3 class="heading"><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><?php echo substr($pro['title'],0,40) ?>...</a></h3>
                    <div class="meta">
                      <div><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><span class="icon-calendar"></span><?php echo date("d/m/Y", strtotime($pro['created_at']));?></a></div>
                      <div><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><span class="icon-person"></span><?php echo strtoupper($pro['user_name']) ?></a></div>
                      <!-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
			</div>
		</section>





    