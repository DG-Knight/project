<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--เพิ่มข้อมูลวันหยุด--</h3>
      </div>


        <form action="dashboard.php?file=admin/nurse/holiday_insert" method="post"style="padding-left:150px;padding-right:100px">

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="fisyear">ปี</label>
                <input type="text" class="form-control" name="fisyear" id="fisyear">
            </div>

            <div class="form-group col-md-4">
              <label for="publicholiday">วันหยุด</label>
                <input type="date" class="form-control" name="publicholiday" id="publicholiday">
            </div>

            <div class="form-group col-md-4">
              <label for="description">หมายเหตุ</label>
              <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
          </div>


          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
