<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--เพิ่มข้อมูลช่วงระยะเวลาการเข้าเวร--</h3>
      </div>


        <form action="dashboard.php?file=admin/nurse/opt_time_insert" method="post"style="padding-left:250px;padding-right:100px">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="nurse_name">ราย</label>
              <select id="nurse_name" name="nurse_name" class="form-control">
                <option></option>
                <?php
                $conn = PDOConnector();
                $sql  = 'SELECT * FROM users';
                $query = $conn->prepare($sql);
                $query ->execute();
                $row=$query -> fetch(PDO::FETCH_OBJ);
                ?>
                <option value="<?=$row->user_id;?>"><?=$row->user_fname;?>&nbsp<?=$row->user_lname;?></option>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="opt_time">เวลา</label>
              <input type="text" class="form-control"  name="opt_time" id="opt_time">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">submit</button>
          <button type="reset" class="btn btn-primary">reset</button>
        </form>

      </div>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
