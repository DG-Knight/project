<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header" >
        <h3 class="text-center text-primary">--แก้ไขข้อมูลส่วนตัว--</h3>
      </div>
<?php
$conn = PDOConnector();
$sql="select * from users where user_id=$_GET[id]";
$query = $conn->prepare($sql);
$query ->execute();
$row=$query -> fetch(PDO::FETCH_OBJ);
?>
<form action="dashboard.php?file=master/m_personals_edit" method="post"style="padding-left:100px;padding-right:100px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_name">Username</label>
      <input type="text" class="form-control" name="user_name" id="user_name"value="<?=$row->user_name?>">
    </div>
    <div class="form-group col-md-6">
      <label for="user_pass">Password</label>
      <input type="password" class="form-control"  name="user_pass" id="user_pass" value="<?=$row->user_pass?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_fname">ชื่อ</label>
      <input type="text" class="form-control" name="user_fname" id="user_fname" value="<?=$row->user_fname?>">
    </div>
    <div class="form-group col-md-6">
      <label for="user_lname">นามสกุล</label>
      <input type="text" class="form-control"  name="user_lname"id="user_lname"value="<?=$row->user_lname?>">
    </div>
  </div>
  <div class="form-group">
    <label for="user_email">email</label>
    <input type="email" class="form-control" name="user_email" id="user_email" value="<?=$row->user_email?>">
  </div>
  <div class="form-group">
    <label for="user_add">ที่อยู่</label>
    <input type="text" class="form-control" name="user_add" id="user_add"value="<?=$row->user_add?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="user_position">ตำแหน่ง</label>
      <select id="user_position" name="user_position" class="form-control">
        <?php
        $id = $_SESSION['AUTHEN']['UID'];
        $conn = PDOConnector();
        $sql = "SELECT * FROM users where user_id=$_GET[id]";
        $query = $conn->prepare($sql);
        $query->execute();
           if ($query->rowCount()>0) {
             while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
        ?>
        <option><?=$data->user_position;?><option>
          <option>พยาบาลชำนาญการ</option>
          <option>พยาบาลปฏิบัติการ</option>
          <option>พยาบาลชำนาญการพิเศษ</option>
        <?php }} ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="user_level">level</label>
      <select id="user_level"  name="user_level"class="form-control" >

        <?php
        $id = $_SESSION['AUTHEN']['UID'];
        $conn = PDOConnector();
        $sql = "SELECT * FROM users where user_id=$_GET[id]";
        $query = $conn->prepare($sql);
        $query->execute();
           if ($query->rowCount()>0) {
             while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
        ?>
        <option><?=$data->user_level;?><option>
          <option>1</option>
          <option>2</option>
        <?php }} ?>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="user_tel">เบอร์โทรศัพท์</label>
      <input type="tel" class="form-control" name="user_tel" id="user_tel" value="<?=$row->user_tel?>">
    </div>
  </div>
  <input type="hidden" name="user_id" value="<?=$row->user_id?>">
  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>
</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
