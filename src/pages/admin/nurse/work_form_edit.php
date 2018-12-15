<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--แก้ไขข้อมูลประเภทอายุงานของพยาบาล--</h3>
      </div>

      <?php
      $conn = PDOConnector();
      $sql="select * from work_exp_type where work_exp_type_id=$_GET[id]";
      $query = $conn->prepare($sql);
      $query ->execute();
      $row=$query -> fetch(PDO::FETCH_OBJ);
      ?>
        <form action="dashboard.php?file=admin/nurse/work_edit" method="post"style="padding-left:250px;padding-right:100px">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="work_exp">อายุงาน</label>
              <select id="work_exp" name="work_exp" class="form-control">
                <?=$row->work_exp?>
                <option></option>
                <option>senior</option>
                <option>middle</option>
                <option>junior</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="time_length">ระยะเวลา</label>
              <input type="text" class="form-control"  name="time_length" id="time_length" value="<?=$row->time_length?>">
            </div>
          </div>
          <input type="hidden" name="work_exp_type_id" value="<?=$row->work_exp_type_id?>">
          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
