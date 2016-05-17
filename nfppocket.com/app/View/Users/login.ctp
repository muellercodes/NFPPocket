<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend id="loginflash"><?php echo __('<div style="font-size:50%;">Please enter your username and password or <a href="http://www.nfppocket.com/users/add" style="color:green;">Register here</a></div>'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>

    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

<script>
 (function autoLog()
 {
  u = false;
  p = false;
  if(localStorage.getItem('username') != null)
  {
   $('form input[id=UserUsername]').val(localStorage.getItem('username'));
   u = true;  
  }
  if(localStorage.getItem('password') != null)
  {
   $('form input[id=UserPassword]').val(localStorage.getItem('password'));
   p = true;  
  }
  if((u == true) && (p == true))
  {
   $('form').submit();
  } else {
  $('form').submit(function()
  {
   localStorage.username = $('form input[id=UserUsername]').val();
   localStorage.password = $('form input[id=UserPassword]').val();
  })};
  } 
 )();
 </script>
