<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="<?=site_url('../application/views/assets/js/jquery-2.1.4.js')?>"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- <script  src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script> -->
  <title><?=$title?></title>
</head>
<body>
<br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-danger" style="margin-top:90px;">
          <div class="panel-heading">
            <h3 class="panel-title">Lets Join</h3>
          </div>
          <div class="panel-body">

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/login");?>

              <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php $attributes = array('class' => 'form-control', 'id' => 'identity', 'name' => 'identity'); ?>
                <?php echo form_input($attributes);?>
                <label>Username /  Email</label> : <input type="text" name="idenity" id="identity" class="form-control">
              </p>

              <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
                <label>Pasword</label> : <input type="password" name="password" id="password" class="form-control">
              </p>

              <p>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"', $attributes);?>
              </p>
              <div class="col-lg-8 col-lg-offset-2">
                <p><?php echo form_submit('submit', lang('login_submit_btn'), array('class'=>'form-control'));?></p>
              </div>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              </p>

            <?php echo form_close();?>

            <!-- <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>