<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--แก้ไขข้อมูลวันหยุด--</h3>
      </div>

      <?php
      $conn = PDOConnector();
      $sql="select * from holiday where holiday_id=$_GET[id]";
      $query = $conn->prepare($sql);
      $query ->execute();
      $row=$query -> fetch(PDO::FETCH_OBJ);
      ?>

        <form action="dashboard.php?file=admin/nurse/holiday_edit" method="post"style="padding-left:150px;padding-right:100px">

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="fisyear">ปี</label>
                <input type="text" class="form-control" name="fisyear" id="fisyear"  value="<?=$row->fisyear?>">
            </div>

            <div class="form-group col-md-4">
              <label for="publicholiday">วันหยุด</label>
                <input type="date" class="form-control" name="publicholiday" id="publicholiday" value="<?=$row->publicholiday?>">

            </div>

            <div class="form-group col-md-4">
              <label for="description">หมายเหตุ</label>
              <textarea class="form-control" name="description" id="description" ><?=$row->description?></textarea>

            </div>
          </div>

          <input type="hidden" name="holiday_id" value="<?=$row->holiday_id?>">
          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
