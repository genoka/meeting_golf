<nav>
    <ul>
        <li><a></a></li>
         <li><a></a></li>
          <li><a></a></li>
    </ul>
</nav>
<div class="loginbox radius">
  <h2 style="color:#141823; text-align:center;">Inscription c'est gratuit</h2>
  <div class="loginboxinner radius">
    <div class="loginheader">
      <h4 class="title">trouver des partenaires pr&eacute;s de chez vous pour jouer du golf <?php echo base_url().'assets/css/bootstrap.css'; ?> </h4>
    </div>
   
    <div class="loginform">  
       <?php
             echo validation_errors();
       ?>
      <form id="login" action="<?php echo base_url().'index.php/signup-golf-meeting-1'; ?>" method="post">
        <p>
          <?php 
                      echo form_error('user_nicename');
                      //echo form_label('Nicename');
                      $data = array(
                              'name'          => 'user_nicename',
                              'id'            => 'lastname',
                              'class'     => 'radius',
                              'placeholder'         => 'Username'
                      );

                      echo form_input($data);
               ?>
        </p>
        <p>
          <?php 
                     echo form_error('user_email');
                     //echo form_label('Email');
                      $data = array(
                              'name'          => 'user_email',
                              'id'            => 'email',
                              'class'     => 'radius',
                              'placeholder'         => 'Your email'
                      );

                      echo form_input($data);
               ?>
        </p>
         <p>
          <?php 
                     echo form_error('phone_number');
                     //echo form_label('Phone Number');
                      $data = array(
                              'name'          => 'user_phone',
                              'id'            => 'phone',
                              'class'     => 'radius',
                              'placeholder'         => 'Your phone number'
                      );

                      echo form_input($data);
               ?>
        </p>
        <p>
          <?php 
                     
                      echo form_error('firstname');
                      //echo form_label('Firstname');
                      $data = array(
                              'name'          => 'firstname',
                              'id'            => 'firstname',
                              'class'     => 'radius',
                              'placeholder'         => 'First Name'
                      );

                      echo form_input($data);
               ?>
        </p>
        <p>
          <?php 
                      echo form_error('lastname');
                      //echo form_label('Lastname');
                      $data = array(
                              'name'          => 'lastname',
                              'id'            => 'lastname',
                              'class'     => 'radius',
                              'placeholder'         => 'Last Name'
                      );

                      echo form_input($data);
               ?>
        </p>
        <p>
          <?php 
                      echo form_error('Website');
                      //echo form_label('Website');
                      $data = array(
                              'name'          => 'Website',
                              'id'            => 'website',
                              'class'     => 'radius',
                              'placeholder'         => 'Website'
                      );

                      echo form_input($data);
               ?>
        </p>
        <p>
          <?php 
                     echo form_error('user_pass');
                    // echo form_label('Password');
                      $data = array(
                              'name'          => 'user_pass',
                              'id'            => 'password',
                              'placeholder'     => 'New Password',
                              'class'          => 'radius'
                      );

                      echo form_password($data);
               ?>
        </p>
         <p>
          <?php 
                     echo form_error('user_pass');
                      $data = array(
                              'name'          => 'user_repass',
                              'id'            => 'repassword',
                              'placeholder'     => 'RE-Enter Password',
                              'class'          => 'radius'
                      );

                      echo form_password($data);
               ?>
        </p>
        <p>
          <?php 
                      $extra = array(
                              'class'          => 'radius button',
                              'name'         => 'signup'
                      );
                     // echo form_button($data='submit', $value='Cr&eacute;er un compte',$extra);
                      echo form_submit($data='submit', $value='Créer un compte',$extra);
               ?>
        </p>
      </form>
    </div>
  </div>
</div>
