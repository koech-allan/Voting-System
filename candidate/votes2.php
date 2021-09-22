
<div class="flexBox">
<div id="sch">
	<h3>GOVERNORS VOTING PROGRESS</h3>
	<?php
	$sql="SELECT * FROM `CANDIDATES`";
	$runq1=$connection->query($sql);
	?>
	<table id="ut">
		<thead id="ut">
			<th id="ut">Profile</th>
			<th id="ut">Full Name</th>
			<th id="ut">Post</th>
			<th id="ut">Votes</th>
		</thead>
		<tbody id="ut">
			<?php while($results1=$runq1->fetch_assoc()){ 
			$imgurl="../uploads/$results1[profilephoto]";
			if ($results1['post']==='governor') {
			 ?>
				<tr id="ut">
					<td id="ut"><img src="<?php echo($imgurl) ?>" id="cimg"></td>
					<td id="ut"><?php echo($results1['firstname']."  ".$results1['lastname']); ?></td>
					<td id="ut"><?php echo($results1['post']); ?></td>
					<td id="ut"><?php echo($results1['currentVotes']); ?></td>

				</tr>
			<?php  }} ?>	
		</tbody>
	</table>
</div>
<div id="sch">
		<h3>SCHOOL REP VOTING PROGRESS</h3>
	<?php
	$sql="SELECT * FROM `CANDIDATES`";
	$runq1=$connection->query($sql);
	?>
	<table id="ut">
		<thead id="ut">
			<th id="ut">Profile</th>
			<th id="ut">Full Name</th>
			<th id="ut">Post</th>
			<th id="ut">Votes</th>
		</thead>
		<tbody id="ut">
			<?php while($results1=$runq1->fetch_assoc()){ 
			$imgurl="../uploads/$results1[profilephoto]";
			if ($results1['post']==='school rep') {
			 ?>
				<tr id="ut">
					<td id="ut"><img src="<?php echo($imgurl) ?>" id="cimg"></td>
					<td id="ut"><?php echo($results1['firstname']."  ".$results1['lastname']); ?></td>
					<td id="ut"><?php echo($results1['post']); ?></td>
					<td id="ut"><?php echo($results1['currentVotes']); ?></td>

				</tr>
			<?php  }} ?>	
		</tbody>
	</table>
</div>

<div id="sch">
		<h3>ACADEMIC REP VOTING PROGRESS</h3>
	<?php
	$sql="SELECT * FROM `CANDIDATES`";
	$runq1=$connection->query($sql);
	?>
	<table id="ut">
		<thead id="ut">
			<th id="ut">Profile</th>
			<th id="ut">Full Name</th>
			<th id="ut">Post</th>
			<th id="ut">Votes</th>
		</thead>
		<tbody id="ut">
			<?php while($results1=$runq1->fetch_assoc()){ 
			$imgurl="../uploads/$results1[profilephoto]";
			if ($results1['post']==='academic rep') {
			 ?>
				<tr id="ut">
					<td id="ut"><img src="<?php echo($imgurl) ?>" id="cimg"></td>
					<td id="ut"><?php echo($results1['firstname']."  ".$results1['lastname']); ?></td>
					<td id="ut"><?php echo($results1['post']); ?></td>
					<td id="ut"><?php echo($results1['currentVotes']); ?></td>

				</tr>
			<?php  }} ?>	
		</tbody>
	</table>
</div>

<div id="sch">
		<h3>LADIES REP VOTING PROGRESS</h3>
	<?php
	$sql="SELECT * FROM `CANDIDATES`";
	$runq1=$connection->query($sql);
	?>
	<table id="ut">
		<thead id="ut">
			<th id="ut">Profile</th>
			<th id="ut">Full Name</th>
			<th id="ut">Post</th>
			<th id="ut">Votes</th>
		</thead>
		<tbody id="ut">
			<?php while($results1=$runq1->fetch_assoc()){ 
			$imgurl="../uploads/$results1[profilephoto]";
			if ($results1['post']==='ladies rep') {
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
</div>
</div>