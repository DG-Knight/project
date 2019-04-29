<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header">
        <h3 class="text-center text-primary">--เพิ่มข้อมูลการเปลี่ยนเวร</h3>
      </div>


        <form action="dashboard.php?file=user/change_ward_insert" method="post"style="padding-left:250px;padding-right:100px">
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="person_chang">พยาบาลที่ขอเปลี่ยนเวร</label>
              <select type="text" id="person_chang" name="person_chang" class="form-control" placeholder="ชื่อ-นามสกุล">
                <option></option>
                <?php
                $id = $_SESSION['AUTHEN']['UID'];
                $conn = PDOConnector();
                $sql = "SELECT * FROM users where user_id=$id";
                $query = $conn->prepare($sql);
                $query->execute();
                   if ($query->rowCount()>0) {

                     while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
                ?>
                <option value="<?=$data->user_id; ?>"><?=$data->user_fname;?>&nbsp<?=$data->user_lname;?></option>
                <?php }} ?>
                </select>
            </div>

            <div class="form-group col-md-5">
              <label for="nurse_chang">พยาบาลที่เปลี่ยนเวร</label>


              <select type="text"id="nurse_chang" name="nurse_chang" class="form-control" placeholder="ชื่อ-นามสกุล">
              <option></option>
              <?php

              $conn = PDOConnector();
              $sql = 'SELECT * FROM users where user_level != 0';
              $query = $conn->prepare($sql);
              $query->execute();
                 if ($query->rowCount()>0) {
                   while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
              ?>
              <option value="<?=$data->user_id; ?>"><?=$data->user_fname;?>&nbsp<?=$data->user_lname;?></option>
              <?php }} ?>
              </select>
            </div>

            <div class="form-group col-md-5">
              <label for="date_ward">วันที่เปลี่ยนเวร</label>
              <input type="date" class="form-control"  name="date_ward" id="date_ward">
            </div>

          <div class="form-group col-md-5">
            <label for="opt_names">เวรที่ปลี่ยน</label>
            <select id="opt_names" name="opt_names" class="form-control">
              <option></option>
              <option>เช้า</option>
              <option>บ่าย</option>
              <option>ดึก</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <button type="reset" class="btn btn-primary">รีเซ็ต</button>

        </form>

</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
