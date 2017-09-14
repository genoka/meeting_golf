<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"><a href="#">Golf</a>
   </div>
   <div id="header-main-right">
      <div id="header-main-right-nav">
         <?php 
              echo form_open('signin-golf-meeting-1', 'id="login_form" name="login_form"');
          ?>
          <table border="0" style="border:none">
            <tr>
              <td ><?php 
                      echo form_error('login');
                      $data = array(
                              'name'          => 'user_login',
                              'id'            => 'email',
                              'tabindex'         => '1',
                              'placeholder'     => 'Email or Phone',
                              'class'          => 'inputtext radius1'
                      );

                      echo form_input($data);
              ?></td>
              <td ><?php 
                    echo form_error('pass');
                    $data = array(
                            'name'          => 'user_pass',
                            'id'            => 'pass',
                            'tabindex'         => '2',
                            'placeholder'     => 'Password',
                            'class'          => 'inputtext radius1'
                    );

                    echo form_password($data);
              ?></td>
              <td ><?php 
                      $extra = array(
                              'class'          => 'fbbutton'
                      );
                      echo form_submit('login','Login',$extra);
               ?></td>
            </tr>
            <tr>
              <td><label>
                  <?php ?><input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
                  <span style="color:#ccc;">Keep me logged in</span></label></td>
              <td><label><a href="<?php echo base_url().'index.php/forget-pass-golf-meeting-1'; ?>" style="color:#ccc; text-decoration:none">mot de passe oublié?</a></label></td>
            </tr>
          </table>
       <?php 
              //$hidden = array('username' => 'Joe', 'member_id' => '234');
              echo form_close();
              echo validation_errors();
          ?>
      </div>
    </div>
  </div>
</div>
<div id="facebook-Bar">
<?php 
              //$hidden = array('username' => 'Joe', 'member_id' => '234');
              echo form_open('webapp-golf-meeting-langs', 'id="lang_form" name="lang_form"');
              echo form_label('Langue', 'language');
              $options = array(
                      'arabe'         => 'Arabe',
                      'francais'           => 'Francais',
                      'anglais'         => 'Anglais',
                      'allemand'        => 'Allemand',
                      'espagnol'           => 'Espagnol',
                      'italien'         => 'Italien',
                      'russe'        => 'Russe',
                      'afrikaans'           => 'Afrikaans'
              );

              echo form_dropdown('language', $options, 'large');
              echo form_submit('langsubmit', 'Valider');
              //$hidden = array('username' => 'Joe', 'member_id' => '234');
              echo form_close();
          ?>
</div>