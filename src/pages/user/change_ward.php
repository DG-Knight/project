<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">---ข้อมูลการเปลี่ยนเวร--</h3>
      </div>
      <a href="dashboard.php?file=user/change_ward_form" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลการเปลี่ยนเวร </a>
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>พยาบาลที่ขอเปลี่ยนเวร</b></th>
                      <th scope="col"><b>พยาบาลที่เปลี่ยนเวร</b></th>
                      <th scope="col"><b>วันที่เปลี่ยนเวร</b></th>
                      <th scope="col"><b>เวรที่ปลี่ยน</b></th>
                      <th scope="col"><b>จัดการ</b></th>


                      </thead>
                      <tbody>

                        <?php
                        $conn = PDOConnector();
                        $sql = 'SELECT * FROM change_ward';
                        $query = $conn->prepare($sql);
                        $query->execute();
                           if ($query->rowCount()>0) {
                             $i = 1;
                             while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <tr>
                          <td><?=$i++ ?></td>
                          <td><?=$data->person_chang;?></td>
                          <td><?=$data->nurse_chang;?></td>
                          <td><?=$data->date_ward;?></td>
                          <td><?=$data->opt_names;?></td>
                          <td>


                            <a href="dashboard.php?file=user/change_ward_del&id=<?=$data->change_ward_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
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
