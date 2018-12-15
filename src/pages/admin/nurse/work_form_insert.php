<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--เพิ่มข้อมูลประเภทอายุงานของพยาบาล--</h3>
      </div>


        <form action="dashboard.php?file=admin/nurse/work_insert" method="post"style="padding-left:250px;padding-right:100px">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="work_exp">อายุงาน</label>
              <select id="work_exp" name="work_exp" class="form-control">
                <option></option>
                <option>senior</option>
                <option>middle</option>
                <option>junior</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="time_length">ระยะเวลา</label>
              <input type="text" class="form-control"  name="time_length" id="time_length">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
