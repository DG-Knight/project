<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <?php
      $conn = PDOConnector();
      $sql="select * from inspector where inspector_id=$_GET[id]";
      $query = $conn->prepare($sql);
      $query ->execute();
      $row=$query -> fetch(PDO::FETCH_OBJ);
      ?>

       <div class="page-header" >
        <h3 class="text-center text-primary">--แก้ไขข้อมูลผู้ตรวจการ--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/inspector_edit" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="inspector_start"  class="col-md-4">วันที่เป็นผู้ตรวจการ</label>
            <div class="col-md-5">
              <input type="date"  name="inspector_start" value="<?=$row->inspector_start?>" id="inspector_start">
            </div>
          </div>

          <div class="form-group row" >
          <label for="inspector_details" class="col-md-4">ช่วงเวลาที่เป็นผู้ตรวจการ</label>
          <div class="col-md-2">
            <select type="text" class="form-control form-control-ss" id="inspector_details" name="inspector_details">
              <option>S1</option>
              <option>S2</option>

            </select>
          </div>
          </div>
              <input type="hidden" name="inspector_id" value="<?=$row->inspector_id?>">
              <button type="submit" class="btn btn-primary">บันทึก</button>
              <button type="reset" class="btn btn-primary">รัเซ็ต</button>
</form>
</div>
</div>
</div>
