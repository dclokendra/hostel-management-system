
<?php 
$title="Bed Reports";
include_once"header.php"; 
	$data=$bed->lists();
?>
	<div class="rightbar">
		<h2>Bed Reports</h2>
		<div class="reptbl">
			 <table border="1px" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>SN</th>
                <th>Room Name</th>
                <th>Bed Name</th>
                <th>Description</th>
                <th>Status</th>
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
                <td><?php echo $d->roomName ?></td>
                <td><?php echo $d->bedName; ?></td>
                <td><?php echo $d->description; ?></td>
                <td><?php if ($d->status==1){ ?><span style="color:#00f">Allocated</span>
                    <?php }else{?>
                    <span style="color:#f00">Not Allocated</span>
                    <?php }?>
                </td>
                <td><?php echo $d->created_by; ?></td>
                <td><?php echo $d->created_date; ?></td>
                <td><?php echo $d->updated_by; ?></td>
                <td><?php echo $d->updated_date; ?></td>
                <td><a href="editbed.php?id=<?php echo $d->bedID;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="deletebed.php?id=<?php echo $d->bedID;?>"> Delete</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
		</div>
    </div>
	<?php include_once"footer.php"; ?>
