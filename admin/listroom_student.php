
<?php 
$title="Student Room | Reports";
include_once"header.php"; 
	$data=$br->lists();
?>
	<div class="rightbar">
		<h2>Student-Room | Reports</h2>
		<div class="reptbl">
			 <table border="1px" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>SN</th>
                <th>Student Name</th>
                <th>Room Name</th>
                <th>Bed Name</th>
                <th>Description</th>
                <th>Date of Join</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Updated Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($data as $d) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d->fullName; ?></td>
                <td><?php echo $d->roomName; ?></td>
                <td><?php echo $d->bedName; ?></td>
                <td><?php echo $d->description; ?></td>
                <td><?php echo $d->date_of_joining; ?></td>
                <td><?php echo $d->created_by; ?></td>
                <td><?php echo $d->updated_by; ?></td>
                <td><?php echo $d->updated_date; ?></td>
                <td><a href="edit_studentroom.php?id=<?php echo $d->id;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="deletebed.php?id=<?php echo $d->id;?>"> Delete</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
		</div>
    </div>
	<?php include_once"footer.php"; ?>
