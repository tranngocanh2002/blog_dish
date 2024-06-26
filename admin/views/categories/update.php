<?php if (empty($category)): ?>
    <h2>Không tồn tại category</h2>
<?php else: ?>
    <h2>Chỉnh sửa danh mục #<?php echo $category['id'] ?></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name"
                   value="<?php echo isset($_POST['name']) ? $_POST['name'] : $category['name']; ?>"
                   class="form-control"/>
        </div>

        <!-- <div class="form-group">
            <label>Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control"/>
            <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        </div>
        <?php if (!empty($category['avatar'])): ?>
            <img src="assets/uploads/<?php echo $category['avatar']; ?>" height="50"/>
        <?php endif; ?> -->

        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control"
                      name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : $category['description']; ?></textarea>
        </div>
        <!-- <div class="form-group">
            <label>Vị trí</label>
            <input type="number" name="loca"
                   value="<?php echo isset($_POST['loca']) ? $_POST['loca'] : $category['loca']; ?>"
                   class="form-control"/>
        </div> -->

        <div class="form-group">
            <?php
            $selected_active = '';
            $selected_disabled = '';
            if (isset($_POST['status'])) {
                switch ($_POST['status']) {
                    case 0:
                      $selected_disabled = 'selected';
                        break;
                    case 1:
                      $selected_active = 'selected';
                        break;
                }
            }
            ?>
            <label>Trạng thái</label>
            <select name="status" class="form-control">
                <option value="1" <?php echo $selected_disabled ?> >Active</option>
                <option value="0" <?php echo $selected_active ?> >Disabled</option>
            </select>
        </div>
        <input type="hidden" name="user_name" class="form-control" id="user_name" value="<?php echo $_SESSION['user']['username']?>"/>

        <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
        <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
    </form>
<?php endif; ?>