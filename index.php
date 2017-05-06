<!DOCTYPE html>
 <html>
 <body>
 <div name="top" align="center">
 	<img src="images/Titulo.PNG" width="1500" height="150"/>
 </div>
 <div name="middle" align="center">
 <table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
			?>
			<tr>
				<th colspan=2 align="left" style="font-size:30px">For data scientists</th> 
				<th colspan=3 align="left" style="font-size:30px">For IT professionals</th> 	
			</tr>
			<?php
				if($result->num_rows > 0){
				
			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td aling="left"><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td><?php
					$row=$result->fetch_assoc() ?>
					<td aling="left"><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td>
				</tr> <?php				
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
	 </div>
 <div name="bottom" align="center">
 	<img src="images/Final.PNG" width="1500" height="150"/>
 </div>
  
 </body>
 </html>