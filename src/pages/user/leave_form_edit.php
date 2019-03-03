
  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <?php
      $conn = PDOConnector();
      $sql="select * from leaves where leave_id=$_GET[id]";
      $query = $conn->prepare($sql);
      $query ->execute();
      $row=$query -> fetch(PDO::FETCH_OBJ);
      ?>
       <div class="page-header" >
        <h3 class="text-center text-primary">--แก้ไขข้อมูลการลา--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/leave_edit" method="post" style="padding-left:250px;padding-right:100px">
  <div class="form-group row">
    <label for="colFormLabelmd" class="col-md-3">ประภาทการลา</label>
    <div class="form-group col-md-5">
      <select class="form-control" id="leave_type_id" name="leave_type_id" value="<?=$row->leave_type_id?>">
     <option></option>
      <option>ป่วย</option>
      <option>กิจ</option>
      <option>คลอด</option>
      <option>พักร้อน</option>
    </select>
</div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel"  class="col-md-3">วันที่เริ่มลา</label>
    <div class="col-md-5">
      <input type="date"  name="leave_start" value="<?=$row->leave_start?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelMd" class="col-md-3">วันที่สิ้นสุดการลา</label>
    <div class="col-md-5">
      <input type="date"  name="leave_end" value="<?=$row->leave_end?>">
    </div>
  </div>


    <input type="hidden" name="leave_id" value="<?=$row->leave_id?>">
    <button type="submit" class="btn btn-primary">บันทึก</button>
    <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>

    </div>
    </div>
    </div>
