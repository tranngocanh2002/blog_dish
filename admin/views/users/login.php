<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url(assets/images/image_10.png);">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
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
            <div class="brand-logo" style="text-align: center;">
              <!-- <img src="assets/images/logo.png" alt="logo"> -->
            </div>
            <h3 style="text-align: center; font-weight:600;">Chào mừng bạn trở lại!</h3>
            <h6 class="font-weight-light" style="text-align: center;">Đăng nhập tài khoản của bạn</h6>
            <form class="pt-3" method="post" action="">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Tên đăng nhập" name="username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu" name="password">
              </div>
              <div class="mt-3">
                  <input type="submit" name="submit" value="Đăng nhập" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>