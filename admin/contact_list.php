
<?php 
$title="Contact List";
include_once"header.php"; 
	$data=$contact->lists();
?>
	<div class="rightbar">
		<h2>Viewer Reports</h2>
		<div class="reptbl">
			 <table border="1px" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th> 
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($data as $d) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d->name; ?></td>
                <td><?php echo $d->address; ?></td>
                <td><?php echo $d->email; ?></td>
                <td><?php echo $d->mobile; ?></td>
                <td><?php echo $d->message; ?></td>
                <td><a href="edit_contact.php?id=<?php echo $d->contactID;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="delete_contact.php?id=<?php echo $d->contactID;?>"> <span type="button">Delete<span></a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
		</div>
    </div>
	<?php include_once"footer.php"; ?>
