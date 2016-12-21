<center><h2><?php echo $title; ?></h2>
<br>

<?php echo validation_errors(); ?>

<?php echo form_open('register/edit/'.$user_item['user_id']); ?>
            <div class="transbox" style="margin-top:-20px">
            <p>
            <br><label for="name">Name</label><br>
            <input type="input" name="name" size="50" value="<?php echo $user_item['name'] ?>" /><br>
            <br><label for="nickname">Nickname</label><br>
            <input type="input" name="nickname" size="50" value="<?php echo $user_item['nickname'] ?>" /><br>
            <br><label for="email">Email</label><br>
            <input type="input" name="email" size="50" value="<?php echo $user_item['email'] ?>" /><br>
            <br><label for="phone">Phone Number</label><br>
            <input type="input" name="phone" size="50" value="<?php echo $user_item['phone'] ?>" /><br>
            <br><label for="homead">Address</label><br>
            <input type="input" name="homead" size="50" value="<?php echo $user_item['homead'] ?>" /><br>
            <br><label for="gender">Gender</label><br>
            <input type="input" name="gender" size="50" value="<?php echo $user_item['gender'] ?>" /><br>
            <br><label for="comment">Comment</label><br>
            <textarea name="comment" rows="3" cols="40"><?php echo $user_item['comment'] ?></textarea><br>
            <br><input type="submit" name="submit" value="Edit news item" /><br>
            </p>
          </div>
</form>
</center>
