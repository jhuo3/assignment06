<?php 
$currentPage = "Learn More | Assignment06 | Team-Seattle";
include "inc/html-top.inc";
?>


<body class="f-pattern">

<?php include "inc/nav.inc"; ?>
	
<article class="container">
	
	<div class="main">

<figure>
	<img src="images/logo.JPG" alt="URCSSA logo">
</figure>
	
	<section>
		<h3>About URCSSA</h3>
		<p>The <strong class="contrast">URCSSA</strong> is The University of Rochester Chinese Students and Scholars Association - URCSSA is the only official Chinese student organization covering undergraduate, postgraduate, doctoral and visiting scholars at the University of Rochester. It is also the bridge and link between the Chinese Consulate General in New York and Chinese students. We are committed to serving all Luo Da Chinese students and organizing various activities in life and academics.</p>
	</section>

	<section>
		<h3>Departments</h3>
		<p>There are several <strong class="contrast">departments</strong> in URCSSA, such as activities planning department, career&development department, designing departmnet, communication department, and culture&sports... Members work in each department based on their preference. URCSSA welcomed the new members of 2019-2020. After a series of interviews and interviews, our family now has 67 members, including 53 undergraduates, 12 graduate students, and 2 doctoral students.</p>
	</section>	


	<section>	
		<h3>Activities</h3>
		<p><strong class="contrast">Looking back on the past year,</strong> we organized and organized a series of exciting activities, such as "UR Basketball Game", "UR 72 Hours Couple", and "UR Masked Singer". In addition, the “Mid-Autumn Lake Ontario Party”, the “New Year Lantern Festival”, and the “New Year's Kitchen King Competition” allow Chinese students to spend the holidays in a foreign country. URCSSA established exchanges and cooperation with 25 companies and companies outside the school. In addition to planning offline activities full of creativity and innovation, CSSA will launch more service activities like “New Life Pickup”, “Final Week Warmth”, and “New Life Beijing Meetup” to bring Chinese students to UR. At the same time, we will expand cooperation and exchanges with the outside world, and provide careers for more students by holding job-seeking activities such as “URCSSA Alumni Summit”, “China Career Expo”, “New York Consulate Meet”, and “Huawei Campus Line”. Develop resources and create opportunities.</p>
	</section>
	</div>

	<section class="newslettersub">

		<div id="newsletter">
		    <h2>Contact us</h2>
		    <p>Sign up for more information about URCSSA.</p>
		 
		 	<form action="#" method="post" id="signup">
		    <input type="text" placeholder="Email address" name="email" required>
		    <label>
		      <input type="checkbox" checked="checked" name="subscribe"> 
		    </label>
		    <input type="submit" value="Subscribe">
		 	</form>
		</div>
	</section>


</article>

<footer class="footerindex">CSC 174: Advanced Front-end Web Design and Development</footer>

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