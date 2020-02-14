
<?php 
$title="Room Reports";
include_once"header.php"; 
	$data=$room->lists();
?>
	<div class="rightbar">
		<h2>Room Reports</h2>
		<div class="reptbl">
			 <table border="1px">
        <thead>
            <tr>
                <th>SN</th>
                <th>Room Name</th>
                <th>Floor</th>
                <th>Description</th>
                <th>Crated By</th>
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
                <td><?php echo $d->roomName; ?></td>
                <td><?php echo $d->floor; ?></td>
                <td><?php echo $d->description; ?></td>
                <td><?php echo $d->created_by; ?></td>
                <td><?php echo $d->created_date; ?></td>
                <td><?php echo $d->updated_by; ?></td>
                <td><?php echo $d->updated_date; ?></td>
                <td><a href="editroom.php?id=<?php echo $d->roomID;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="deleteroom.php?id=<?php echo $d->roomID;?>"> Delete </a><a href="bedaddform.php?id=<?php echo $d->roomID;?>"> AddBed</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
		</div>
	</div>
    </div>
	<?php include_once"footer.php"; ?>
