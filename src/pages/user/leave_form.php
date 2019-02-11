
  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

       <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มการลา--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/leave_insert" method="post" style="padding-left:250px;padding-right:100px">
  <div class="form-group row">
    <label for="colFormLabelmd" class="col-md-3">ประภาทการลา</label>
    <div class="form-group col-md-5">
      <select class="form-control" id="leave_type_id" name="leave_type_id">
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
      <input type="date"  name="leave_start">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelMd" class="col-md-3">วันที่สิ้นสุดการลา</label>
    <div class="col-md-5">
      <input type="date"  name="leave_end">
    </div>
  </div>
    <div class="form-group row">
    <label for="colFormLabelss" class="col-md-3">จำนวนวันที่ลา</label>
    <div class="col-md-2">
      <input type="text" class="form-control form-control" id="colFormLabelss" placeholder="********" name="total">
    </div>
    </div>

  <button type="submit" class="btn btn-primary">submit</button>
</form>

    </div>
    </div>
    </div>
