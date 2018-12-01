<?php include "inc/html_top.inc"; ?>
<title>F.I.T | Team Paris</title>
<?php include "inc/html_top2.inc"; ?>

		<form method="post" action="form-processor.php" class="full-width">

		<fieldset>
			<legend>Personal Information</legend>

			<label for="name"></label>

			Name:<input type="text" name="name" id="name"><br>


		    <label for="email"> </label>

				UR Email:<input type="text" name="email" id="email"><br>
			

		</fieldset>


		<h2>Demographic Question</h2>
		 
			<h3> What's your gender</h3>

				<input type="radio" name="gender" id="female" value="Femal"><label for="female">Female</label><br>

				<input type="radio" name="gender" id="male" value="Male"><label for="male">male</label><br>

				<input type="radio" name="gender" id="not-sure" value="Prefer not to answer"><label for="not-sure">Prefer not to answer</label><br>


			<h3> What's your age Group</h3>

				<input type="radio" name="age" id="young" value="below25"><label for="young">Under 25</label><br>
				<input type="radio" name="age" id="middle" value="25-55"><label for="middle">25-55</label><br>
				<input type="radio" name="age" id="senior" value="over56"><label for="senior">Over 55</label><br>
				<input type="radio" name="gender" id="not-answer" value="Prefer not to answer"><label for="not-sure">Prefer not to answer</label><br>

			

		<h2> Specific Question</h2>

			

			<h3> Have you ever heard about meal kit industry? (Hellofresh / Blue Aprone)</h3>

				<input type="radio" name="heard"  id="heard" value="heard">
					<label for="fav-extent">Yes, I had heard.</label><br>

				<input type="radio" name="never-heard"  id="never-heard" value="never-heard">
					<label for="never-heard">No, I never heard about that.</label><br>


			<h3> If you had heard about the meal kit industry, please select the company you know / had tried </h3>


				<input type="checkbox" name="Hellofresh" id=Hellofresh" value="Hellofresh">
					<label for="Hellofresh">Hellofresh</label><br>

				<input type="checkbox" name="Blue-Aprone" id="Blue-Aprone" vlaue="Blue-Aprone">
					<label for="Blue-Aprone">Blue-Aprone</label><br>

				<input type="checkbox" name="Plated" id="Plated" value="Plated">
					<label for="Plated">Plated</label><br>

				<input type="checkbox" name="Home-Chef" id="Home-Chef" value="Home-Chef">
					<label for="Home-Chef">Home-Chef</label><br>
		<h2>
		

	<input type="submit" value="Submit">