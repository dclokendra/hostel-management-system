
<?php 
$title="User Lists";
include_once"header.php"; 
	$data=$admin->lists();
?>	
<link rel="stylesheet" type="text/css" href="css/layout.css">
	<div class="rightbar">
		<h2>User Lists</h2>
		<div class="reptbl">
			<table border="1px">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Created Date</th>
                        <th>Updated By</th>
                        <th>Updated Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data as $d) {?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $d->email; ?></td>
                        <td><?php echo $d->username; ?></td>
                        <td><?php echo $d->password; ?></td>
                        <td><?php echo $d->role; ?></td>
                        <td><?php if ($d->status==1){ ?><span style="color:#00f">Active
                            </span>
                            <?php }else{?>
                            <span style="color:#f00">De Active</span>
                            <?php }?>
                         </td>
                        <td><?php echo $d->created_by; ?></td>
                        <td><?php echo $d->created_date; ?></td>
                        <td><?php echo $d->updated_by; ?></td>
                        <td><?php echo $d->updated_date; ?></td>
                        <td><a href="edit_user.php?id=<?php echo $d->adminID;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="delete_user.php?id=<?php echo $d->adminID;?>"> Delete</a></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
	   </div>
    </div>
    </div>
	<?php include_once"footer.php"; ?>

