<div id="login" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <h2>Account Management</h2>
    <?php
    if(validation_errors()){
      ?>
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo validation_errors(); ?></strong>
      </div>
      <?php
    }
      echo form_open('login','class="myclass"');
    ?>
    <?php
      echo form_label('Username','username');
      echo form_input('username','',' id="username"')
      ?>
      <?php
        echo form_label('Password','password');
        echo form_password('password','',' id="password"')
      ?>
      <?php echo form_submit('login', 'Login') ?>
      <a class="modal-link" href="#forgot"><p>Forgot password?</p></a>
      <a class="modal-link" href="register#register"><p>Need an account?</p></a>
      <?php echo form_close() ?>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
