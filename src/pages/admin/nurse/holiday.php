
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--วันหยุด--</h3>
      </div>
      <a href="dashboard.php?file=admin/nurse/holiday_form_insert" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลวันหยุด </a>
  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th scope="col"><b>#</b></th>
                      <th scope="col"><b>ปี</b></th>
                      <th scope="col"><b>วันหยุด</b></th>
                      <th scope="col"><b>ชื่อวันหยุด</b></th>
                      <th scope="col"><b>จัดการ</b></th>


                      </thead>
                      <tbody>

                        <?php

                        $conn = PDOConnector();
                        $sql = 'SELECT * FROM holiday where year(publicholiday) = 2019';
                        $query = $conn->prepare($sql);
                        $query->execute();
                           if ($query->rowCount()>0) {
                             $i = 1;
                             while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <tr>
                          <td><?=$i++ ?></td>
                          <td><?=$data->fisyear;?></td>
                          <td><?=$data->publicholiday;?></td>
                          <td><?=$data->description;?></td>
                          <td>

                            <a href="dashboard.php?file=admin/nurse/holiday_form_edit&id=<?=$data->holiday_id?>"class="btn btn-warning">
                            <i class="fa fa-edit"></i></a>

                            <a href="dashboard.php?file=admin/nurse/holiday_del&id=<?=$data->holiday_id?>"onclick="return confirm('ยืนยันการลบ')"class="btn btn-danger">
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
