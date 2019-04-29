<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">ข้อมูลส่วนตัว</h3>
      </div>
<!-- <a href="dashboard.php?file=admin/nurse/n_personals_form" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลส่วนตัว </a> -->
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>ชื่อ</b></th>
                      <th scope="col"><b>นามสกุล</b></th>
                      <th scope="col"><b>ตำแหน่ง</b></th>
                      <th scope="col"><b>เบอร์โทรศัพท์</b></th>
                      <th scope="col"><b>จัดการ</b></th>
                      </tr>

                    </thead>
                    <tbody>

                      <?php
                        $id = $_SESSION['AUTHEN']['UID'];
                      $conn = PDOConnector();
                      $sql = "SELECT * FROM users where user_id=$id";
                      $query = $conn->prepare($sql);
                      $query->execute();
                         if ($query->rowCount()>0) {
                           $i = 1;
                           while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
                      ?>
                      <tr>
                        <td><?=$i++ ?></td>
                        <td><?=$data->user_fname;?></td>
                        <td><?=$data->user_lname;?></td>
                        <td><?=$data->user_position;?></td>
                        <td><?=$data->user_tel;?></td>

                        <td>

                          <a href="dashboard.php?file=admin/nurse/n_personals_form_edit&id=<?=$data->user_id?>"class="btn btn-warning">
                          <i class="fa fa-edit"></i></a>

                          <!-- <a href="dashboard.php?file=admin/nurse/n_personals_del&id=<?=$data->user_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
                          <i class="fa fa-trash-o"></i></a> -->
                        </td>
                      </tr>
                      <?php }}//EndRowCount&&WhileLoop ?>
                    </tbody>
                  </table>
                </div>
    </div><!--end card-->
  </div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
