<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
       <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มข้อมูลผู้ตรวจการ--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/inspector_insert" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="inspector_start"  class="col-md-4">วันที่เป็นผู้ตรวจการ</label>
            <div class="col-md-5">
              <input type="date"  name="inspector_start" id="inspector_start">
            </div>
          </div>
          <ul class="list-inline" style="padding-left:205px">
            <h6 class="text-danger list-inline-item">*S1 = ผู้ตรวจการเวรเช้า</h6>
            <h6 class="text-danger list-inline-item">*S2 = ผู้ตรวจการเวรบ่าย/ดึก</h6>
          </ul>
            <div class="form-group row" >
            <label for="inspector_details" class="col-md-4">ช่วงเวลาที่เป็นผู้ตรวจการ</label>
            <div class="col-md-2">
              <select type="text" class="form-control form-control-ss" id="inspector_details" name="inspector_details">
                <option>S1</option>
                <option>S2</option>

              </select>
            </div>
            </div>


              <button type="submit" class="btn btn-primary">บันทึก</button>
              <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>

</div>
</div>
</div>
