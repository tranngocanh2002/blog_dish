<h1>Chi tiết category</h1>

<table class="table table-bordered">
    <tr>
        <th>Mã danh mục</th>
        <td><?php echo $category['id']; ?></td>
    </tr>
    <tr>
        <th>Tên danh mục</th>
        <td><?php echo $category['name']; ?></td>
    </tr>
    <!-- <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($category['avatar'])): ?>
                <img src="assets/uploads/<?php echo $category['avatar'] ?>" width="60"/>
            <?php endif; ?>
        </td>
    </tr> -->
    <tr>
        <th>Mô tả</th>
        <td><?php echo $category['description']; ?></td>
    </tr>
    <tr>
        <th>Trạng thái</th>
        <td>
            <?php
            $status_text = 'Active';
            if ($category['status'] == 0) {
                $status_text = 'Disabled';
            }
            echo $status_text;
            ?>
        </td>
    </tr>
    <tr>
        <th>Thời gian tạo</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($category['created_at'])); ?>
        </td>
    </tr>
    <tr>
        <th>Thời gian cập nhật</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($category['updated_at'])); ?>
        </td>
    </tr>
</table>
<a class="btn btn-primary" href="index.php?controller=category">Back</a>

