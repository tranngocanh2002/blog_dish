<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/imagers/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
        <h1 class="mb-2 bread">Liên hệ</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Liên hệ chúng tôi <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
    </div>
</section>




<div class="container-xxl py-5">
    <div class="container">
            <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($this->error)): ?>
                <div class="alert alert-danger">
                    <?php
                    echo $this->error;
                    ?>
                </div>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8857.095709853149!2d105.7755864647563!3d21.03468589581113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b6163c392f%3A0x1ebf64facbb56d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaMawxqFuZyBt4bqhaQ!5e0!3m2!1svi!2s!4v1699777228475!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="full_name">Họ và tên</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Họ và tên" value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="subject">Chủ đề</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Chủ đề" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="message">Nội dung</label>
                                        <textarea class="form-control" placeholder="Để lại tin nhắn ở đây" id="message" name="message" style="height: 150px"><?php echo isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input name="submit" type="submit" value="Gửi" class="btn btn-primary w-100 py-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    