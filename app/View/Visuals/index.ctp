<h2>Web Service Sample</h2> 
<p>This is a sample web application to demostrate data retrieval/additions through ajax request with JSON format.</p>
<p>All data is stored in 'users' table in the database.</p>

<div class="section">

  <h3>Get All Users</h3>
  <div class="codearea">
    <h4><button id="get_all" location="<?php echo $location_all_users; ?>" href="">Click here to get json data</button></h4>
    <code>
    </code>
  </div>
  <p>
    <?php echo $this->Html->link('Access endpoint URL', array('controller' => 'users', 'action' => 'all_users'), array('target' => '_blank')); ?>
  </p>
  
</div>

<div class="section">

  <h3>Get Unique User</h3>
  <input type="text" id="user_id" placeholder="enter user id" />
  <div class="codearea">
    <h4>
      <button id="get_unique" location="<?php echo $location_unique_user; ?>" href="">Enter user id and click to get json data</button>
    </h4>
    <code>
    </code>
  </div>
  <p>
    <?php echo $this->Html->link('Access endpoint URL', array('controller' => 'users', 'action' => 'unique_user'), array('target' => '_blank')); ?>
  </p>
  
</div>

<div class="section">

  <h3>Add User</h3>
  <input type="text" id="add_name" placeholder="enter name" />
  <input type="text" id="add_phone" placeholder="enter phone number" />
  <input type="text" id="add_email" placeholder="enter email address" />
  <div class="codearea">
    <h4>
      <button id="add_user" location="<?php echo $location_add; ?>" href="">Enter all fields and click here to add user</button>
    </h4>
    <code>
    </code>
  </div>
  <p>
    <?php echo $this->Html->link('Access endpoint URL', array('controller' => 'users', 'action' => 'add'), array('target' => '_blank')); ?>
  </p>
  
</div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(function(){

  var ajax_option = {
    type: 'post',
    data: null,
    dataType: 'json',
    url: '',
    complete: null
  };

  $('#get_all').click(function(e){

    e.preventDefault();

    var action = $(this).attr('location');
    var code = $(this).parents().siblings('code');

    ajax_option['url'] = action;
    ajax_option['complete'] = function(result) {

      console.log(result.responseText);
      code.text(result.responseText);

    };
    
    $.ajax(ajax_option);

  });

  $('#get_unique').click(function(e){

    e.preventDefault();

    var action = $(this).attr('location');
    var code = $(this).parents().siblings('code');
    var user_id = $('#user_id').val();

    ajax_option['url'] = action + '/' + user_id;
    ajax_option['complete'] = function(result) {

      console.log(result.responseText);
      code.text(result.responseText);

    };
    
    $.ajax(ajax_option);

  });

  $('#add_user').click(function(e){

    e.preventDefault();

    var name = $('#add_name').val();
    var phone = $('#add_phone').val();
    var email = $('#add_email').val();
    var action = $(this).attr('location');
    var code = $(this).parents().siblings('code');

    ajax_option['data'] = {
      name: name,
      phone: phone,
      email: email
    };
    ajax_option['url'] = action;
    ajax_option['complete'] = function(result) {

      console.log(result.responseText);
      code.text(result.responseText);

    };
    
    $.ajax(ajax_option);

  });

});
</script>

<p>NAK12387594 - Shuhei Nakahodo</p> 
