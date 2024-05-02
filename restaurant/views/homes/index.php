
<section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image: url(assets/imagers/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
            <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Bài viết tốt nhất</h1>
        </div>

        </div>
    </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(assets/imagers/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
            <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Chia sẻ công thức nấu ăn</h1>
        </div>

        </div>
    </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(assets/imagers/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
            <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Dinh dưỡng & ngon miệng</h1>
        </div>

        </div>
    </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="featured">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(assets/imagers/breakfast-1.jpg);"></div>
                        <div class="text text-center">
                        <h3>Bò nướng khoai tây</h3>
                            <p><span>Thịt</span>, <span>Khoai tây</span>, <span>Cơm</span>, <span>Cà chua</span></p>
                        </div>
                    </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(assets/imagers/breakfast-2.jpg);"></div>
                        <div class="text text-center">
                        <h3>Cơm rang</h3>
                            <p><span>Thịt</span>, <span>Trứng</span>, <span>Cơm</span>, <span>Rau</span></p>
                        </div>
                    </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(assets/imagers/breakfast-3.jpg);"></div>
                        <div class="text text-center">
                        <h3>Che khoai dẻo</h3>
                            <p><span>Đỗ</span>, <span>Khoai</span></p>
                        </div>
                    </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(assets/imagers/breakfast-4.jpg);"></div>
                        <div class="text text-center">
                        <h3>Nui xào spaghetti</h3>
                            <p><span>Thị</span>, <span>Nui</span>, <span>Sốt spaghetti</span></p>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2" style="background-image: url(assets/imagers/about.jpg);"></div>
                    <div class="img img-2 ml-md-2" style="background-image: url(assets/imagers/about-1.jpg);"></div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
            <div class="heading-section mb-4 my-5 my-md-0">
            <span class="subheading">About</span>
            <h2 class="mb-4">Feliciano Restaurant</h2>
            </div>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <pc class="time">
                        <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
                        <span><a href="#">+ 1-978-123-4567</a></span>
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    
    
    
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Bài viết gần đây</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach($products as $pro) :?>
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                        <a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>" class="block-20" style="background-image: url('../admin/assets/uploads/<?php echo $pro['avatar'] ?>');"></a>
                        <div class="text pt-3 pb-4 px-4">
                            <div class="meta">
                            <div><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><?php echo date("d/m/Y", strtotime($pro['created_at']));?></a></div>
                            <div><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><?php echo strtoupper($pro['user_name']) ?></a></div>
                            </div>
                            <h3 class="heading"><a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>"><?php echo $pro['title'] ?></a></h3>
                            <p class="clearfix">
                                <a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>" class="float-left read"><?php echo substr(htmlspecialchars(strip_tags($pro['content'])), 0, 200)?>...</a>
                            </p>
                            <p class="clearfix">
                                <a href="index.php?controller=product&action=detail&id=<?php echo $pro['id']?>" class="float-left read">Đọc thêm</a>
                            </p>
                        </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <!-- <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/imagers/image_2.jpg');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                    <div class="meta">
                        <div><a href="#">Sept. 06, 2019</a></div>
                        <div><a href="#">Admin</a></div>
                    </div>
                    <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                    <p class="clearfix">
                        <a href="#" class="float-left read">Read more</a>
                        <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/imagers/image_3.jpg');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                    <div class="meta">
                        <div><a href="#">Sept. 06, 2019</a></div>
                        <div><a href="#">Admin</a></div>
                    </div>
                    <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                    <p class="clearfix">
                        <a href="#" class="float-left read">Read more</a>
                        <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                    </div>
                </div>
                </div> -->
            </div>
        </div>
    </section>
    



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
