<?php 
	session_start();
	include 'connection_open.php';
								if(isset($_COOKIE['user_id']))
								{
									$user_id = $_COOKIE['user_id'];
									$sql = 'SELECT * FROM user WHERE user_id='.$user_id;
									$result = mysqli_query($link,$sql);

									if(mysqli_num_rows($result))
									{
										$row = mysqli_fetch_assoc($result);

										echo $row['user_name'];

										$sqlUpdate = 'UPDATE user set status=1 WHERE user_id='.$user_id;
	         							$resultupdate = mysqli_query($link,$sqlUpdate);

	         							if($resultupdate)
											{
											echo'<script type="text/javascript">alert("update")</script>';
											}
											else
											{
											  echo'<script type="text/javascript">alert("NOT update")</script>';

											}
									}
									
								}
	session_destroy();
	header('location:login1.php');

 ?>