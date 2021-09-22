<table id="ut">
		<thead id="ut">
			<th id="ut">Profile</th>
			<th id="ut">Full Name</th>
			<th id="ut">Post</th>
			<th id="ut">Votes</th>
		</thead>
		<tbody id="ut">
			<?php 
			require_once '../database/connection.php';
			$sql="SELECT * FROM `CANDIDATES`";
			$runq1=$connection->query($sql);
			while($results1=$runq1->fetch_assoc()){ 
			$imgurl="../uploads/$results1[profilephoto]";
			if ($results1['post']==='governor') {
			 ?>
				<tr id="ut">
					<td id="ut"><img src="<?php echo($imgurl) ?>" id="cimg"></td>
					<td id="ut"><?php echo($results1['firstname']."  ".$results1['lastname']); ?></td>
					<td id="ut"><?php echo($results1['post']); ?></td>
					<td id="ut"><?php echo($results1['currentVotes']); ?></td>

				</tr>
			<?php  }}$connection->close(); ?>	
		</tbody>
	</table>