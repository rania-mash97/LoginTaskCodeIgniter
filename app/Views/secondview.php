<?php
    session_start(); ?>

    <!DOCTYPE html>



<html lang="en">

<head>

	<style>
		.container {
			padding: 50px 50 50 50px;
		}

		.card {
			display: flex;
			flex-direction: column;
		}

		h1 {
			margin-bottom: -8px;

		}

		p {
			margin-bottom: 10px;
			font-size: 20px;
		}
	</style>
</head>

<body>

	<form method="post" action="Secondframe/updatee">
		<div class="container">
			<div class="card">
				<h1>Rest Password</h1>
				<p>Enter new password</p>
				<div class="input">
					<input type="password" name="password" placeholder="New password">
					<br>
					<br>
					<label>Password should contain capital later, special
						carachtar and number </label>
				</div>
				<br>
				<br>
				<div class="button">
					<button name=submit>Submit</button>
					<button name="cancel">Cancel</button>

				</div>
			</div>

		</div>


	</form>

</body>

</html>