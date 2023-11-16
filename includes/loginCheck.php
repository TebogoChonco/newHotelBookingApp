<?php
			if(isset($_POST['login']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$query    = "select * from users where username='$username' and password='$password' ";
				  //echo $query;
				$query_run = mysqli_query($conn,$query);
				  //echo mysqli_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username; 
					$_SESSION['password'] = $password;
					
					header( "Location: hotel.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("Incorrect username or password")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
				
			}
		?>
		
	</div>
	