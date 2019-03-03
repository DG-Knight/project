
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
       <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มข้อมูลการอบรม--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/training_insert" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="training_start"  class="col-md-3">วันที่เริ่มการอบรม</label>
          <div class="col-md-5">
            <input type="date"value="่" name="training_start" id="training_start">
            <p></p>

          </div>
        </div>

  <div class="form-group row">
    <label for="training_end"  class="col-md-3">วันที่สิ้นสุดการอบรม</label>
    <div class="col-md-5">
      <input type="date"value="" name="training_end" id="training_end">
    </div>
  </div>

  <div class="form-group row">
    <label for="training_details" class="col-md-3">รายละเอียดการอบรม</label>
    <div class="col-md-6">
    <textarea class="form-control" id="training_details" rows="3" name="training_details"></textarea>
  </div>
  </div>

  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>

    </div>
    </div>
    </div>
