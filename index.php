<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My bank</title>
</head>
<body>
	<style>

		body{
			/* background: url(img/bank.png) no-repeat 50% 50%; */
			background-color: yellow;
		}
		input {
			border-radius: 10px;
			color: blue;
			margin: 10px;
		}

		label {
			color: blue;
			font-weight: bold;
		}
		.btn1 {
			appearance:none;
			-webkit-appearance:none;
			padding:10px;
			border:none;
			background-color:#3F51B5;
			color:#fff;
			font-weight:600;
			border-radius:5px;
			width: 70 px;
		}

		.knopka {
			appearance:none;
			-webkit-appearance:none;
			padding:10px;
			border:none;
			background-color:#3F51B5;
			color:#fff;
			font-weight:600;
			border-radius:5px;
			width: 70 px;
			text-decoration: none;
		}

		legend {
			font-size: 25px;
			font-weight: bold;
			color: green;
		}




	</style>
	<form action="php/create.php" method="post">
		<fieldset>
			<legend>My Bank</legend>
			<br />
			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
			<div>
				<label>Name</label>
				<input type="text"
				       name="name">
			</div><br />

			<!-- mywork -->
			<div>
				<label>Surname</label>
				<input type="text" name="surname">
			</div><br />

			<div>
				<label>Patronymic</label>
				<input type="text" name="patronymic">
			</div><br />

			<div>
				<label>DataOfBirth</label>
				<input type="date" max="2023-02-13" name="DataOfBirth">
			</div><br />

			<div>
				<label>Passport Series</label>
				<input type="text" name="PassportSeries">
			</div><br />

			<div>
				<label>Number of Passport</label>
				<input type="text" name="NumberOfPassport">
			</div><br />

			<div>
				<label>Issued By</label>
				<input type="text" name="IssuedBy">
			</div><br />

			<div>
				<label>Data of issue</label>
				<input type="date" max="2023-02-13" name="DataOfIssue">
			</div><br />

			<div>
				<label>Identification number</label>
				<input type="text" name="IdentNumber">
			</div><br />

			<div>
				<label>Place of birth</label>
				<input type="text" name="PlaceOfBirth">
			</div><br />


						<div>
							<label>City of actual residence</label>
							<select name="CityOfActualResidence">
								<option value="Moscow">Moscow</option>
								<option value="Minsk">Minsk</option>
								<option value="Nukus">Nukus</option>
								<option value="Tashkent">Tashkent</option>
								<option value="Grodno">Grodno</option>
							</select>
						</div><br />

			<div>
				<label>Address of actual residence</label>
				<input type="text" name="AddressOfActualResidence">
			</div><br />

			<div>
				<label>Home phone</label>
				<input type="text" name="HomePhone">
			</div><br />

			<div>
				<label>Mobile phone</label>
				<input type="text" name="MobilePhone">
			</div><br />

			<div>
				<label>Email</label>
				<input type="email" name="Email">
			</div><br />

			<div>
				<label>Place of work</label>
				<input type="text" name="PlaceOfWork">
			</div><br />

			<div>
				<label>Job title</label>
				<input type="text" name="JobTitle">
			</div><br />


						<div>
							<label>City of residence</label>
							<select name="CityOfResidence">
								<option value="Moscow">Moscow</option>
								<option value="Minsk">Minsk</option>
								<option value="Nukus">Nukus</option>
								<option value="Tashkent">Tashkent</option>
								<option value="Grodno">Grodno</option>
							</select>
						</div><br />

												<div>
													<label>Family status</label>
													<select name="FamilyStatus">
														<option value="Married">Married</option>
														<option value="NotMarried">Not married</option>
													</select>
												</div><br />


					<div>
								<label>Citizenship</label>
								<select name="Citizenship">
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Karakalpakstan">Karakalpakstan</option>
									<option value="Belarus">Belarus</option>
									<option value="Russia">Russia</option>
								</select>
			</div><br />

			<div>
						<label>Disability</label>
						<select name="Disability">
							<option value="Healthy">Healthy</option>
							<option value="1-group">1-group</option>
							<option value="2-group">2-group</option>
							<option value="3-group">3-group</option>
						</select>
	</div><br />


			<div>
				<label>Monthly income</label>
				<input type="number" name="MonthlyIncome">
			</div><br />


			<div>
					<label>Are you a Pensioner?</label>
				<input type="checkbox"
				       name="pensioner">
			</div><br />
			<input type="submit" value="Create" class="btn1">
			<a class="knopka" href="read.php">View</a>
		</fieldset>
	</form>
</body>
</html>
