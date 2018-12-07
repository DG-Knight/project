<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--เพิ่มข้อมูลช่วงระยะเวลาการเข้าเวร--</h3>
      </div>

      <?php
      $conn = PDOConnector();
      $sql="select * from operating_time where opt_time_id=$_GET[id]";
      $query = $conn->prepare($sql);
      $query ->execute();
      $row=$query -> fetch(PDO::FETCH_OBJ);
      ?>
        <form action="dashboard.php?file=admin/nurse/opt_time_edit" method="post"style="padding-left:250px;padding-right:100px">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="opt_name">ช่วงเวลา</label>
              <select id="opt_name" name="opt_name" class="form-control" value="<?=$row->opt_name?>">

                  <option>เช้า</option>
                  <option>บ่าย</option>
                  <option>ดึก</option>
                </select>

            </div>
            <div class="form-group col-md-6">
              <label for="opt_time">เวลา</label>
              <input type="text" class="form-control"  name="opt_time" id="opt_time" value="<?=$row->opt_time?>">
            </div>
          </div>
          <input type="hidden" name="opt_time_id" value="<?=$row->opt_time_id?>">
          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
