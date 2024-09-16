<?php
require(__DIR__ . "/../../components/admin/header.php")
?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="?mod=category&act=list">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>
    <a href="?mod=category&act=add" class= "btn btn-warning">Thêm</a>
<?php 
if(isset($_COOKIE['message'])) : ?>
<div class="alert alert-primary" role="alert">
  <?php echo ($_COOKIE['message']) ?>
</div>
<?php endif ?>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Tên danh mục</th>
                <th>Tên slug</th>
                <th>Ngày tạo</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Tên danh mục</th>
                <th>Tên slug</th>
                <th>Ngày tạo</th>
                <th>Action</th>
              </tr>
            </tfoot>
            </thead>
            <tbody>
              <?php
              foreach ($categories as $item) {
              ?>
                <tr>
                  <td><?= $item['id'] ?></td>
                  <td><?= $item['c_name'] ?></td>
                  <td><?= $item['c_slug'] ?></td>
                  <td><?= $item['created_at'] ?></td>
                  <td>
                    <a href="?mod=category&act=edit&id=<?= $item['id'] ?>" class="btn btn-warning" >Update</a>
                    <a href="?mod=category&act=delete&id=<?= $item['id'] ?>"class="btn btn-danger" >Delete</a>
                  </td>

                </tr>
              <?php } ?>

            </tbody>

          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <?php
  require(__DIR__ . "/../../components/admin/footer.php")
  ?>