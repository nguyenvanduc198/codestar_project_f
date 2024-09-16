<?php
require(__DIR__ . "/../../components/admin/header.php");
function renderError($field){
    if(isset($_SESSION['validate'][$field])){
        return '<span class = "invalid">'.$_SESSION['validate'][$field][0] .'</span>';

    }
}
?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="?mod=product&act=list">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Thêm sản phẩm</li>
    </ol>
    <form method= "POST" action="?mod=product&act=store" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên sản phẩm</label>
    <input type="text" name="pro_name" class="form-control" id="pro_name" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm...">
   <?php echo renderError('pro_name') ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Số lượng</label>
    <input type="number" min="0" name="pro_quantity" class="form-control" id="pro_quantity" aria-describedby="emailHelp">
   <?php echo renderError('pro_quantity') ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Đơn giá</label>
    <input type="number" min="0" name="pro_price" class="form-control" id="pro_price" aria-describedby="emailHelp">
   <?php echo renderError('pro_price') ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Danh mục</label>
  <select name="pro_category_id" id="pro_category_id" class="form-control">
      <?php foreach($categories as $key=> $row) { ?>
        <option value="<?= $row['id'] ?>"><?= $row['c_name'] ?></option>

     <?php }?>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">lượt xem</label>
    <input type="number" min="0" name="pro_view" class="form-control" id="pro_view" aria-describedby="emailHelp">
   <?php echo renderError('pro_view') ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mô tả sản phẩm</label>
    <textarea name ="pro_description" id="pro_description" class="form-control" ></textarea>
   <?php echo renderError('pro_description') ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Hình ảnh</label>
    <input type="file" name ="pro_avatar" class="form-control">
   <?php echo renderError('pro_avatar') ?>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
  <?php
  require(__DIR__ . "/../../components/admin/footer.php");
  unset($_SESSION['validate']);
  unset($_SESSION['data']);
  unset($_SESSION['old']);
  ?>