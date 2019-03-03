
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--ข้อมูลการอบรม--</h3>
      </div>
<a href="dashboard.php?file=user/training_form" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลการอบรม </a>
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>ชื่อ-นามสกุล</b></th>
                      <th scope="col"><b>วันที่เริ่มอบรม</b></th>
                      <th scope="col"><b>วันที่สิ้นสุด</b></th>

                      <th scope="col"><b>รายละเอียดการอบรม</b></th>
                      <th scope="col"><b>จัดการ</b></th>



                      </thead>
                      <tbody>

                        <?php
                        $id = $_SESSION['AUTHEN']['UID'];

                        $conn = PDOConnector();

                        $sql = "SELECT * FROM training INNER JOIN users ON training.user_id=users.user_id WHERE users.user_id=$id";
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
                          <td><?=$data->training_start;?></td>
                          <td><?=$data->training_end;?></td>                        
                          <td><?=$data->training_details;?></td>

                          <td>
                            <a href="dashboard.php?file=user/training_form_edit&id=<?=$data->training_id?>"class="btn btn-warning">
                            <i class="fa fa-edit"></i></a>

                            <a href="dashboard.php?file=user/training_del&id=<?=$data->training_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
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
