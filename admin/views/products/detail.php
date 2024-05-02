<?php
require_once 'helpers/Helper.php';
?>
<h2>Chi tiết sản phẩm</h2>
<table class="table table-bordered">
    <tr>
        <th>Mã sản phẩm</th>
        <td><?php echo $product['id']?></td>
    </tr>
    <tr>
        <th>Tên danh mục</th>
        <td><?php echo $product['category_name']?></td>
    </tr>
    <tr>
        <th>tên sản phẩm</th>
        <td><?php echo $product['title']?></td>
    </tr>
    <tr>
        <th>Ảnh sản phẩm</th>
        <td>
            <?php if (!empty($product['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $product['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Mô tả</th>
        <td><?php echo $product['content'] ?></td>
        
    </tr>
    <tr>
        <th>Trạng thái</th>
        <td><?php echo Helper::getStatusText($product['status']) ?></td>
    </tr>
    <tr>
        <th>Thời gian tạo</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($product['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Thời gian cập nhật</th>
        <td><?php echo !empty($product['updated_at']) ? date('d-m-Y H:i:s', strtotime($product['updated_at'])) : '--' ?></td>
    </tr>
</table>
<a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>