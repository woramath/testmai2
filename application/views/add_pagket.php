<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>จัดการแพ็คเก็ต</title>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    
           <form action="" method="POST"  name="contact"  id="contact">
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td  colspan="3">
              <h3 align="center"> เพิ่มแพ็คเก็ต </h3>
            </td>
          </tr>
		  <tr>
            <td align="right"> ชื่อแพ็คเก็ต &nbsp;</td>
            <td colspan="2"><input name="pname" type="text" id="pname"  class="form-control" placeholder="กรุณากรอกข้อมูล" required></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"> หมวดหมู่ &nbsp;</td>
            <td colspan="2"><input name="pgroup" type="text" id="pgroupe"  class="form-control" placeholder="กรุณากรอกข้อมูล" required></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"> จังหวัด &nbsp;</td>
            <td colspan="2"><input name="pprovince"type="text"id="pprovince"class="form-control"placeholder="กรุณากรอกข้อมูล"required></td>
            <td>&nbsp;</td>
          </tr>
		  <tr>
            <td align="right"> ราคาแพ็คเก็ต &nbsp;</td>
            <td colspan="2"><input name="pprice" type="text" id="pprice"  class="form-control" placeholder="กรุณากรอกข้อมูล" required></td>
            <td>&nbsp;</td>
          </tr>
		  <tr>
            <td width="18%" align="right" valign="top">รายละเอียด&nbsp;</td>
            <td colspan="2"><textarea name="detail" rows="3" required="required" class="form-control" id="detail" placeholder="กรุณากรอกข้อมูล"></textarea></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
            
            <input type="reset" name="reset" id="reset" class="btn btn-warning btn-sm" value="Reset">
             &nbsp;&nbsp; &nbsp;
              <input type="submit" name="regis" id="regis" class="btn btn-info btn-sm" value="Submit" >
            
            </td>
          </tr>
          <tr>
            <td colspan="4" align="center"></td>
          </tr>
          <tr>
            <td align="right"><br /></td>
            <td>&nbsp;</td>
            <td width="10%">&nbsp;</td>
            <td width="41%">&nbsp;</td>
          </tr>
        </table>
      </form>
      </div>
    </div>
  </div>
      
<!--start footer-->      
<p align="center"> สำหรับผู้ดูแลระบบเท่านั้น </p>
<!--end footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>