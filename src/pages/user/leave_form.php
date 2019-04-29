
  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

       <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มข้อมูลการลา--</h3>
      </div>
      <br>
      <form action="dashboard.php?file=user/leave_insert" method="post" style="padding-left:250px;padding-right:100px">
  <div class="form-group row">
    <label for="colFormLabelmd" class="col-md-3">ประภาทการลา</label>
    <div class="form-group col-md-5">
      <select class="form-control" id="leave_type" name="leave_type">
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


  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>

    </div>
    </div>
    </div>
