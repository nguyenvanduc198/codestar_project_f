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
        <a href="?mod=category&act=list">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Thêm danh mục</li>
    </ol>
    <form method= "POSt" action="?mod=category&act=store">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" name="c_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên danh mục...">
   <?php echo renderError('c_name') ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
  <?php
  require(__DIR__ . "/../../components/admin/footer.php");
  unset($_SESSION['validate']);
  unset($_SESSION['data']);
  unset($_SESSION['old']);
  ?>