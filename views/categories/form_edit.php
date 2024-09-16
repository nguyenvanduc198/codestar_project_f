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
      <li class="breadcrumb-item active"> update danh mục</li>
    </ol>
    <form method= "POSt" action="?mod=category&act=update">
  <div class="form-group">
   <label for="exampleInputEmail1">ID danh mục</label>
    <input type="text" value="<?= $category['id'] ?>" name="id" readonly class="form-control" id="id_category" aria-describedby="emailHelp" >
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" value="<?= $category['c_name'] ?>" name="c_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   <?php echo renderError('c_name') ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  <?php
  require(__DIR__ . "/../../components/admin/footer.php");
  unset($_SESSION['validate']);
  unset($_SESSION['data']);
  unset($_SESSION['old']);
  ?>