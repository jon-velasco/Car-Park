<?php  
	error_reporting(0);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		if(isset($_SESSION['phone']))
			{
				
				
				} 
			else
			{
				//header("Location: index.php");
			}
}
 ?>
	
	<header>
	
		<?php 
			if(isset($_SESSION['phone']))
			{
			?>
			<div class="logged-in">
				<div>Username: <?php echo $_SESSION['phone']; ?> </div>
				<div><a href="profile.php">My Profile</a></div>
				<div><a href="proc/logout.php">Sign Out</a></div>
			</div>
			
			<?php
			} 
			else
			{
			?>	
			<button class="create_account">Create Account</button>
				<section class="log-form">
		<form class="log-in" action="proc/login.php" method="POST">
			<input type="text" name="phone" value="" />
			<input type="password" name="password" value="" />
			<input type="Submit" name="Submit" value="Log In" />
			<br />
			<p>Phone no</p><p>Password</p>
		</form>
		</section>
			<?php	
			}  
			?>
		
	</header>