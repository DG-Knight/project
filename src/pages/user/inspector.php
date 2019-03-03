
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--ข้อมูลผู้ตรวจการ--</h3>
      </div>
<a href="dashboard.php?file=user/inspector_form" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลผู้ตรวจการ </a>
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>ชื่อ-นามสกุล</b></th>
                      <th scope="col"><b>วันที่เป็นผู้ตรวจการ</b></th>
                      <th scope="col"><b>ช่วงเวลาที่เป็นผู้ตรวจการ</b></th>
                      <th scope="col"><b>จัดการ</b></th>



                      </thead>
                      <tbody>

                        <?php
                        $id = $_SESSION['AUTHEN']['UID'];

                        $conn = PDOConnector();

                        $sql = "SELECT * FROM inspector INNER JOIN users ON inspector.user_id=users.user_id WHERE users.user_id=$id";
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
                          <td><?=$data->inspector_start;?></td>
                          <td><?=$data->inspector_details;?></td>

                          <td>
                            <a href="dashboard.php?file=user/inspector_form_edit&id=<?=$data->inspector_id?>"class="btn btn-warning">
                            <i class="fa fa-edit"></i></a>

                            <a href="dashboard.php?file=user/inspector_del&id=<?=$data->inspector_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
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
