<?php 
$currentPage = "Contact Us | Assignment06 | Team-Seattle";
include "inc/html-top.inc";
?>

<body>

<?php include "inc/nav.inc"; ?>

<form action="#" method="post" id="signup">
	<h1>Contact Us</h1>
	<h2>Feel free to leave a message! We will get back to you ASAP.</h2>
	<input type="text" placeholder="Email address" name="email" required>
	<label>
		<input type="checkbox" checked="checked" name="subscribe"> 
	</label>
		<input type="submit" value="Subscribe">
</form>

<footer class="footerindex">CSC 174: Advanced Front-end Web Design and Development</footer>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

</body>
</html>