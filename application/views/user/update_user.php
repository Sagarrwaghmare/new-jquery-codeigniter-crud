
<div class="container">
    <!-- <h2><?php print_r($user);?></h2> -->
    <form action="<?php echo base_url('user/update_user')?>" method="get">
        <input type="text" name='id' value="<?php echo $user[0]['id'];?>" hidden>
        <input type="text" name="name" id="name" placehoder="Enter Name"    value="<?php echo $user[0]['name']?>">
        <input type="text" name="email" id="email" placehoder="Enter Email" value="<?php echo $user[0]['email']?>">
        <input type="submit"id="submit" value="Update">
    </form>
</div>