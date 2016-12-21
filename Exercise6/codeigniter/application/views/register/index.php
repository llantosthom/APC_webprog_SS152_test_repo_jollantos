<center><h2><?php echo $title; ?></h2>

<table cellspacing="4" style="margin-top: -20px">
    <tr>
        <th><strong>Name</strong></th>
        <th><strong>Nickname</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Contact</strong></th>
        <th><strong>Address</strong></th>
        <th><strong>Gender</strong></th>
        <th><strong>Comment</strong></th>
		<th><strong>Operations</strong></th>
    </tr>
<?php foreach ($users as $user_item): ?>
        <tr>
            <td><?php echo $user_item['name']; ?></td>
            <td><?php echo $user_item['nickname']; ?></td>
            <td><?php echo $user_item['email']; ?></td>
            <td><?php echo $user_item['phone']; ?></td>
            <td><?php echo $user_item['homead']; ?></td>
            <td><?php echo $user_item['gender']; ?></td>
            <td><?php echo $user_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('register/view/'.$user_item['user_id']); ?>">View</a> |
                <a href="<?php echo site_url('register/edit/'.$user_item['user_id']); ?>">Update</a> |
                <a href="<?php echo site_url('register/delete/'.$user_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table></center>
