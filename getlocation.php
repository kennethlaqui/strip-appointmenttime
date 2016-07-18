<?php

	include('config.php');
	
	$action = $_REQUEST['action'];
	$week_day = array('0','6');
$string = implode(',', $week_day);
	
	$daynum = date("w", strtotime("saturday	")); //problem
	
	if($action=="showAll"){
		
		$stmt=$dbcon->prepare('SELECT std_time FROM c_validtme ORDER BY dsplsort');
		$stmt->execute();
		
	}else{
		//get the day number 
		$stmt=$dbcon->prepare('SELECT std_time FROM c_validtme WHERE locn_cde=:cid and day_numb=:daynumcode ORDER BY dsplsort');
		$stmt->execute(array(':cid'=>$action, ':daynumcode'=>$daynum));
		
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
	