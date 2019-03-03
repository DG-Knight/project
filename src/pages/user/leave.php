
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--ข้อมูลการลา--</h3>
      </div>
<a href="dashboard.php?file=user/leave_form" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลการลา </a>
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>ชื่อ-นามสกุล</b></th>
                      <th scope="col"><b>ประภาทการลา</b></th>
                      <th scope="col"><b>วันที่เริ่มลา</b></th>
                      <th scope="col"><b>วันที่สิ้นสุด</b></th>

                      <th scope="col"><b>จัดการ</b></th>



                      </thead>
                      <tbody>

                        <?php
                        $id = $_SESSION['AUTHEN']['UID'];

                        $conn = PDOConnector();

                        $sql = "SELECT * FROM leaves INNER JOIN users ON leaves.user_id=users.user_id WHERE users.user_id=$id";
                        $query = $conn->prepare($sql);
                        $query->execute();
                           if ($query->rowCount()>0) {
                             $i = 1;
                            // echo "$id";
                             while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <tr>
                          <td><?=$i++ ?></td>
                          <td><?=$data->user_fname;?>&nbsp
                          <?=$data->user_lname;?></td>
                          <td><?=$data->leave_type_id;?></td>
                          <td><?=$data->leave_start;?></td>
                          <td><?=$data->leave_end;?></td>

                          <td>
                            <a href="dashboard.php?file=user/leave_form_edit&id=<?=$data->leave_id?>"class="btn btn-warning">
                            <i class="fa fa-edit"></i></a>

                            <a href="dashboard.php?file=user/leave_del&id=<?=$data->leave_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
                            <i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <?php }}//EndRowCount&&WhileLoop ?>
                      </tbody>
                    </table>
                  </div>
      </div><!--end card-->
    </div><!--end card-body-->
  </div><!--end col-md-6 grid-margin stretch-card-->
