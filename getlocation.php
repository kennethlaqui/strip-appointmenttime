
<?php


	include('config.php');
	

	$action = $_REQUEST['action'];
	
	//$dayofweek = isset($_GET['dayofweek']);
	//$dayofweek = isset($_REQUEST['dayofweek']);
	$dayofweek = isset($_GET['dayofweek']);
	
	
	//$daynum = date("w", strtotime($dayofweek)); //problem
	
	
	
	if($action=="showAll"){
		
		$stmt=$dbcon->prepare('SELECT std_time FROM c_validtme ORDER BY dsplsort');
		$stmt->execute();
		
	}else{
		//get the day number 
		$stmt=$dbcon->prepare('SELECT std_time FROM c_validtme WHERE locn_cde=:cid and day_numb=:daynumcode ORDER BY dsplsort');
		$stmt->execute(array(':cid'=>$action, ':daynumcode'=>$dayofweek));
		
	}
	
	?>
	
	<?php
	if($stmt->rowCount() > 0){
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
	
			?>
			<div class="form-group">
			
			<select name="getstd" id="getstd" class="form-control">
				<?php foreach ($stmt as $row): ?>
				<option><?=$row["std_time"]?></option>
				<?php endforeach ?>
				</select>
			</div>
			<?php		
		}
		
	}else{
		
		?>
       			<div class="form-group" >
			
			<select name="getstd" id="getstd" class="form-control">
				<?php foreach ($stmt as $row): ?>
				<option><?=$row["std_time"]?></option>
				<?php endforeach ?>
				</select>
			</div>
        <?php		
	}
	
	
	?>
	
	