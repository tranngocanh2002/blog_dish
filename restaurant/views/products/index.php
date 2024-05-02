<?php
require_once 'helpers/Helper.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/imagers/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
        <h1 class="mb-2 bread">Blog</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
    </div>
</section>

<section class="container-xxl py-5">
<div class="container">
	<div class="ftco-search">
			<div class="row">
				<div class="col-md-12 nav-link-wrap">
					<div class="nav nav-pills d-flex text-center justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<?php foreach ($categories AS $key => $category): ?>
						<?php if ($key == 0) {
							$active = "active";
						} else {
							$active = "";
						}
						?>

					<a class="nav-link ftco-animate <?php echo $active ?>" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-<?php echo ++$key?>" role="tab" aria-controls="v-pills-1" aria-selected="true"><?php echo $category['name'] ?></a>
					<?php endforeach; ?>
					</div>
				</div>
				<div class="col-md-12 tab-wrap">
					
					<div class="tab-content" id="v-pills-tabContent">
					<?php foreach ($products AS $count => $product): ?>
						<?php if ($count == 0) {
							$active_pro = "active";
						} else {
							$active_pro = "";
						}
						?>
					<div class="tab-pane fade show <?php echo $active_pro ?>" id="v-pills-<?php echo ++$count?>" role="tabpanel" aria-labelledby="day-1-tab">
						<div class="row">
							<?php foreach ($product AS $pro): ?>
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
							<?php endforeach; ?>
						</div>
					</div>
					<?php endforeach; ?>
					
					</div>
				</div>
			</div>
			<!-- <div class="row no-gutters">
			<div class="col text-center">
				<div class="block-27">
				<ul>
					<li><a href="#">&lt;</a></li>
					<li class="active"><span>1</span></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&gt;</a></li>
				</ul>
				</div>
			</div>
			</div> -->
		</div>
	</div>
</section>