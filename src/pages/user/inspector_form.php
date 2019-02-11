<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
       <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มผู้ตรวจการ--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/inspector_insert" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="inspector_start"  class="col-md-4">วันที่เริ่มการเป็นผู้ตรวจการ</label>
            <div class="col-md-5">
              <input type="date"  name="inspector_start">
            </div>
          </div>

          <div class="form-group row">
            <label for="inspector_end"  class="col-md-4">วันที่สิ้นสุดการเป็นผู้ตรวจการ</label>
              <div class="col-md-5">
                <input type="date"  name="inspector_end">
              </div>
            </div>

            <div class="form-group row">
            <label for="inspector_total" class="col-md-4">จำนวนวันที่เป็นผู้ตรวจการ</label>
            <div class="col-md-2">
              <input type="text" class="form-control form-control-ss" id="inspector_total" name="inspector_total"placeholder="******">
            </div>
            </div>
              <div class="form-group row">
                <label for="inspector_details" class="col-md-4">รายละเอียดผู้ตรวจการ</label>
                <div class="col-md-6">
                <textarea class="form-control" id="inspector_details" rows="3" name="inspector_details"></textarea>
              </div>
              </div>

              <button type="submit" class="btn btn-primary">submit</button>
              <button type="reset" class="btn btn-primary">reset</button>
</form>
</div>
</div>
</div>
