
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="page-header" >
        <h3 class="text-center text-primary">--เพิ่มข้อมูลพยาบาล--</h3>
      </div>

<form action="dashboard.php?file=admin/nurse/insert" method="post" id="form1"style="padding-left:100px;padding-right:100px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_name" >*Username</label>
      <input type="text" class="form-control" name="user_name" id="user_name" placeholder="username" minlength="3" required>
    </div>
    <div class="form-group col-md-6">
      <label for="user_pass" >*Password</label>
      <input type="password" class="form-control"  name="user_pass" id="user_pass" minlength="6" placeholder="password" required/>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_fname">*ชื่อ</label>
      <input type="text" class="form-control" name="user_fname" id="user_fname"  placeholder="FNAME" required>
    </div>
    <div class="form-group col-md-6">
      <label for="user_lname">*นามสกุล</label>
      <input type="text" class="form-control"  name="user_lname" id="user_lname" placeholder="LNAME" required>
    </div>
  </div>
  <div class="form-group">
    <label for="user_email">email</label>
    <input type="user_email" class="form-control" name="user_email" id="user_email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="user_add">ที่อยู่</label>
    <input type="text" class="form-control" name="user_add" id="user_add" placeholder="Address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="user_position">*ตำแหน่ง</label>
      <select id="user_position" name="user_position" class="form-control" required>
        <option selected></option>
        <option>พยาบาลชำนาญการ</option>
        <option>พยาบาลปฏิบัติการ</option>
        <option>พยาบาลชำนาญการพิเศษ</option>
        <option>ผู้ดูแลระบบ</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="user_level" >*สิทธิ์การเข้าใชงาน</label>
      <select id="user_level"  name="user_level"class="form-control" required>
        <option selected></option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="user_tel">เบอร์โทรศัพท์</label>
      <input type="tel" class="form-control" name="user_tel" id="user_tel">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-primary">รีเซ็ต</button>
</form>

</div><!--end card-->
</div><!--end card-body-->
</div><!--end col-md-6 grid-margin stretch-card-->
<!-- <script>
function show_psw( opt ){
form1.user_pass.setAttribute('type', opt? 'text' : 'password');
 }
</script> -->
<!-- onclick="show_psw(true)" onmouseout="show_psw(false)" -->
