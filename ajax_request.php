<?php 
	require('config.php');
	
	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{
		$countryID = $_POST['country_id'];
		$sql = "select * from states where country_id = '".$countryID."' order by name ASC";
		$rs = mysqli_query($conn,$sql);
		$numRows = mysqli_num_rows($rs);
		echo "entered";
		if($numRows == 0)
		{
			echo 'No City Found';
		}
		else
		{
			echo '<label>Cities: </label>';
			echo '<select name="cities" id="cities">';
			while($cities = mysqli_fetch_assoc($rs))
			{
				echo '<option value="'.$cities['id'].'">'.$cities['name'].'</option>';
			}
			echo '</select>';
		}
		
	}
 
?>