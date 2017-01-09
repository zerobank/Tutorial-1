<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page : Admin</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>

<div class="container">
  <div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://placeholdit.imgix.net/~text?txtsize=75&txt=1170%C3%97300&w=1170&h=300&fm=jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="https://placeholdit.imgix.net/~text?txtsize=75&bg=42bdc2&txtclr=ffffff&txt=1170%C3%97300&w=1170&h=300" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>

  <div class="row">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php
    include ('manu.php')
     ?>
  </div><!-- /.container-fluid -->
</nav>
  </div>
<div  class="col-md-9 col-sm-9">

          <div class="content-form-page">
            <div class="row">
              <div class="col-md-9 col-sm-9">
                <form  class="form-horizontal form-bordered"  action="and2.php" method="POST">
                  <fieldset>
                    <legend>เพิ่มข้อมูลครุภัณฑ์</legend>
<div class="container">
                    <div class="form-group">
                      <label for="รหัสครุภัณฑ์" class="col-lg-4 control-label">รหัสครุภัณฑ์<span class="require">*</span></label>
                      <div class="col-lg-5">
                        <input type="text" class="form-control" maxlength="20" id="dg_id" name="txt_dgid" placeholder="รหัสครุภัณฑ์" required>
                        </div>
                      </div>
                          <div class="form-group">
                          <label for="ชื่อครุภัณฑ์" class="col-lg-4 control-label">ชื่อครุภัณฑ์ <span class="require">*</span></label>
                        <div class="col-lg-5">
                          <input type="text" class="form-control" maxlength="20" id="dg_name" name="txt_dgname" placeholder="ชื่อครุภัณฑ์" required>
                          </div>
                        </div>
                            <div class="form-group">
                          <label for="lot" class="col-lg-4 control-label">Lot <span class="require">*</span></label>
                          <div class="col-lg-5">
                            <input type="text" class="form-control" maxlength="20" id="lot" name="txt_lot" placeholder="lot" required>
                            </div>
                          </div>
                              <div class="form-group">
                                <label for="หน่วยนับ" class="col-lg-4 control-label">หน่วยนับ <span class="require">*</span></label>
                            <div class="col-lg-5">
                              <input type="text" class="form-control" maxlength="10" id="dg_unit" name="txt_dgunit" placeholder="หน่วยนับ" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="status" class="col-lg-4 control-label">status <span class="require">*</span></label>
                          <div class="col-lg-5">
                            <input type="text" class="form-control" maxlength="10" id="status" name="txt_status" placeholder="status" required>
                            </div>
                          </div>
                          <div class="form-group">
                        <label for="วันที่เเทงจำหน่าย" class="col-lg-4 control-label">วันที่เเทงจำหน่าย<span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input style="height:30px" name="txt_ssdate" type="date" id="ss_date" required>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="วันที่รับครุภัณฑ์" class="col-lg-4 control-label">วันที่รับครุภัณฑ์<span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input style="height:30px" name="txt_dgdate" type="date" id="dg_date" required>
                        </div>
                      </div>

                  </fieldset>
                  <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <input  type="submit"  id="btnSend" class="btn btn-primary"  value="บันทึกข้อมูล">
                        <button type="button" class="btn btn-default">ยกเลิก</button>
                      </div>
                    </div>
                </form>
              </div>
              </div>
            </div>
          </div>


<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
