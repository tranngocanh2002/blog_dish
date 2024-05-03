<?php
$year = '';
$username = '';
$jobs = '';
$avatar = '';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
    $jobs = $_SESSION['user']['jobs'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a href="index.php?controller=user&action=logout">Đăng xuất</a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <?php
    if (isset($_GET['controller'])) {
        $check = $_GET['controller'];
        $check_product ='';
        $check_contact ='';
        $check_user ='';
        $check_home ='';
        if ($check == 'product') {
            $check_product = "active";
        } elseif ($check == 'contact') {
            $check_contact = "active";
        } elseif ($check == 'category') {
            $check_home = "active";
        } elseif ($check == 'user') {
            $check_user = "active";
        }
    } else {
        $check_home = "active";
    }
    ?>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="index.php" class="nav-link <?php echo $check_home?>">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <i class="fa fa-th"></i>
                        <p>
                            Quản lý danh mục
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?controller=category&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=category&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link <?php echo $check_product?>">
                        <!-- <i class="nav-icon fas fa-copy"></i> -->
                        <i class="fas fa-truck-pickup"></i>
                        <p>
                            Quản lý blog món ăn
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?controller=product&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=product&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="index.php?controller=contact&action=index" class="nav-link <?php echo $check_contact?>">
                        <!-- <i class="nav-icon fas fa-copy"></i> -->
                        <i class="fas fa-truck-pickup"></i>
                        <p>
                            Quản lý liên hệ
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['user']['id'] == 0):?>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link <?php echo $check_user?>">
                        <!-- <i class="nav-icon fas fa-copy"></i> -->
                        <i class="fas fa-users"></i>
                        <p>
                            Quản lý tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?controller=user&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=user&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif;?>
            </ul>
        </nav>
    </div>
</aside>


