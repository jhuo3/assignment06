<?php 
$currentPage = "Assignment06 | Team-Seattle";
include "inc/html-top.inc";
?>

<body class="z-pattern">
<header class="persistent">

<div class="banner">
	<section class="bannerHead">
		<!-- Primary Optical Area -->
            <h1>URCSSA</h1>
    </section>
    <section>
        <!-- Strong Follow Area -->
        <?php include "inc/nav.inc"; ?>
    </section>        
</div>
</header>

<div class="center">

	<section class="intro">
		<p class="font">University of Rochester Chinese Studnets and Scholars Association</p>
		   <p class="font">Including undergraduates, graduate, and PHD studnets.</p>
		   <p class="font">link between the Chinese Consulate General in New York and Chinese students</p>
	</section>
</div>

<section class="newsletterhome">
	<div id="newsletter">
		<h2>Subscribe to our Newsletter</h2>
		<p>Sign up for more SmartPhone news.</p>
		 
		 <form action="#" method="post" id="signup">
		    <input type="text" placeholder="Email address" name="email" required>
		    <label>
		      <input type="checkbox" checked="checked" name="subscribe"> 
		    </label>
		    <input type="submit" value="Subscribe">
		 </form>
	</div>
</section>


<footer class="persistent">
   <p>CSC 174: Advanced Front-end Web Design and Development</p>
</footer>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
