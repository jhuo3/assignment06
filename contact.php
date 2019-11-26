<?php 
$currentPage = "Contact Us | Assignment06 | Team-Seattle";
include "inc/html-top.inc";
?>

<body>

<?php include "inc/nav.inc"; ?>

	<section class="newslettersub">

		<div id="newsletter">
		 <h1>Contact Us</h1>
	<h2>Feel free to leave a message! We will get back to you ASAP.</h2>
		 
		 	<form action="#" method="post" id="signup">
		    <input type="text" placeholder="Email address" name="email" required>
		    <label>
		      <input type="checkbox" checked="checked" name="subscribe"> 
		    </label>
		    <input type="submit" value="Subscribe">
		 	</form>
		</div>
	</section>

<footer class="footerindex">CSC 174: Advanced Front-end Web Design and Development</footer>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>


<script>
$("#signup").submit(function(e) {
	var formData = $("#signup").serialize();
	$.ajax({
		type: 'POST',
		url: "new.php",
		data: formData,
		success: function(data){
			$("#newsletter").html("Thank you for subscribing!");
		}
	});
	e.preventDefault();
});
</script>

</body>
</html>