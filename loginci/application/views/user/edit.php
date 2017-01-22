<div class="container">
  <div class="boxed row">
    <div class="dashboard col-md-12">
      <h3>Dashboard</h3>
      <div class="dashboard-posts">
        <div class="buttons">
          <a href="player/"><button><i class="fa fa-plus" aria-hidden="true"></i>Create LFG Post</button></a>
          <button><i class="fa fa-plus" aria-hidden="true"></i>Create Team Post</button>
        </div>
      </div>
    </div>
  </div>
  <div class="boxed row">
    <div class="dashboard col-md-12">
      <h3>Edit Profile</h3>
      <div class="edit">
        <div class="col-md-6">
          <h4>Change Password</h4>
          <?php
            echo form_open('changepassword','class="myclass"');
            echo form_label('Current Password','currentpassword');
            echo form_password('cupassword','',' id="changepassword"');
            echo form_label('New Password','newpassword');
            echo form_password('npassword','',' id="changepassword"');
            echo form_submit('changepassword', 'Change Password','class="edit-sub"');
            echo form_close();
          ?>
        </div>
        <div class="col-md-6">
          <h4>Change Email</h4>
          <?php
            echo form_open('changeemail','class="myclass"');
            echo form_label('Old Email','oemail');
            echo form_input('text','',' id="oldemail"');
            echo form_label('New Email','nemail');
            echo form_input('text','',' id="newemail"');
            echo form_submit('changeemail', 'Change Email','class="edit-sub"');
            echo form_close();
          ?>
        </div>
        <h3>User Information</h3>
        <div class="col-md-6">
          <h4>Set BattleTag</h4>
          <?php
            echo form_open('battletag','class="myclass"');
            echo form_label('BattleTag','btag');
            echo form_input('text','',' id="btag"');
            echo form_submit('battletag', 'Submit','class="edit-sub"');
            echo form_close();
          ?>
        </div>
        <div class="col-md-6">
          <h4>Set PSN Username</h4>
          <?php
            echo form_open('psn','class="myclass"');
            echo form_label('PSN Username','btag');
            echo form_input('text','',' id="btag"');
            echo form_submit('battletag', 'Submit','class="edit-sub"');
            echo form_close();
          ?>
        </div>
        <div class="col-md-6">
          <h4>Set GamerTag</h4>
          <?php
            echo form_open('gamertag','class="myclass"');
            echo form_label('Gamertag','btag');
            echo form_input('text','',' id="btag"');
            echo form_submit('battletag', 'Submit','class="edit-sub"');
            echo form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
