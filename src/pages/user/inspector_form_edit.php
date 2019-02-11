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
        <h3 class="text-center text-primary">--แก้ไขผู้ตรวจการ--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/inspector_edit" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="inspector_start"  class="col-md-4">วันที่เริ่มการเป็นผู้ตรวจการ</label>
            <div class="col-md-5">
              <input type="date"  name="inspector_start" value="<?=$row->inspector_start?>" id="inspector_start">
            </div>
          </div>

          <div class="form-group row">
            <label for="inspector_end"  class="col-md-4">วันที่สิ้นสุดการเป็นผู้ตรวจการ</label>
              <div class="col-md-5">
                <input type="date"  name="inspector_end" value="<?=$row->inspector_end?>" id="inspector_end">
              </div>
            </div>

            <div class="form-group row">
            <label for="inspector_total" class="col-md-4">จำนวนวันที่เป็นผู้ตรวจการ</label>
            <div class="col-md-2">
              <input type="text" class="form-control form-control-ss" id="inspector_total" name="inspector_total"placeholder="******"value="<?=$row->inspector_total?>">
            </div>
            </div>

              <div class="form-group row">
                <label for="inspector_details" class="col-md-4">รายละเอียดผู้ตรวจการ</label>
                <div class="col-md-6">
                <textarea class="form-control" id="inspector_details" rows="2" name="inspector_details"><?=$row->inspector_details?></textarea>
              </div>
              </div>
              <input type="hidden" name="inspector_id" value="<?=$row->inspector_id?>">
              <button type="submit" class="btn btn-primary">submit</button>
              <button type="reset" class="btn btn-primary">reset</button>
</form>
</div>
</div>
</div>
