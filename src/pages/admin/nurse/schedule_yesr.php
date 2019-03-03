
    <form method="POST" style="padding-left:50px;" action="../schedule.php">

      <table>
        <tr>
          <td>ระบุเดือน-ปี : </td>
          <td>
            <select name="txt_month">
              <option value="">--ระบุเดือน--</option>
              <?php
              $month = array('01' => 'มกราคม', '02' => 'กุมภาพันธ์', '03' => 'มีนาคม', '04' => 'เมษายน',
                      '05' => 'พฤษภาคม', '06' => 'มิถุนายน', '07' => 'กรกฎาคม', '08' => 'สิงหาคม',
                      '09' => 'กันยายน ', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
              $txtMonth = isset($_POST['txt_month']) && $_POST['txt_month'] != '' ? $_POST['txt_month'] : date('m');
              foreach($month as $i=>$mName) {
                $selected = '';
                if($txtMonth == $i) $selected = 'selected="selected"';
                echo '<option value="'.$i.'" '.$selected.'>'. $mName .'</option>'."\n";
              }
              ?>
            </select>
          </td>

          <td>
            <select name="txt_year">
              <option value="">--ระบุปี--</option>
              <?php
              $txtYear = (isset($_POST['txt_year']) && $_POST['txt_year'] != '') ? $_POST['txt_year'] : date('Y');

              $yearEnd <= date('Y');
              $yearStart = $txtYear +3;

              for($year=$yearStart;$year > $yearEnd;$year--){
                $selected = '';
                if($txtYear == $year) $selected = 'selected="selected"';
                echo '<option value="'.$year.'" '.$selected.'>'. ($year+543) .'</option>'."\n";
              }
              ?>
            </select>
          </td>

          <td><input type="submit" value="ค้นหา" id="myval" name="" ></td>
         <td><input type="submit" name="" value="save"><label id="myval2">sss</label></td>

        </tr>

      </table>
    <br>
    </form>
