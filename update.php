<?php
    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

    	$fakeTok = "562random";
        include "php/read-single.php";

        if (mysqli_num_rows($result) > 0) {
        	$user = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Bank</title>
</head>
<body>
	<form action="php/update.php" method="post">
		<fieldset>
			<legend>Edit:</legend>
			<br />
			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
			<div>
				<label>Name</label>
				<input type="text"
				       name="name"
				       value="<?=$user['name']?>">
			</div><br />
<!--
mywork -->
      <div>
        <label>Surname</label>
        <input type="text"
               name="surname"
               value="<?=$user['surname']?>">
      </div><br />

      <div>
        <label>Patronymic</label>
        <input type="text"
               name="patronymic"
               value="<?=$user['patronymic']?>">
      </div><br />

      <div>
        <label>DataOfBirth</label>
        <input type="date" name="DataOfBirth" value="<?=$user['DataOfBirth']?>">
      </div><br />

      <div>
        <label>PassportSeries</label>
        <input type="text"
               name="PassportSeries"
               value="<?=$user['PassportSeries']?>">
      </div><br />

      <div>
        <label>NumberOfPassport</label>
        <input type="text"
               name="NumberOfPassport"
               value="<?=$user['NumberOfPassport']?>">
      </div><br />

      <div>
        <label>IssuedBy</label>
        <input type="text"
               name="IssuedBy"
               value="<?=$user['IssuedBy']?>">
      </div><br />

      <div>
        <label>DataOfIssue</label>
        <input type="date"
               name="DataOfIssue"
               value="<?=$user['DataOfIssue']?>">
      </div><br />

      <div>
        <label>IdentNumber</label>
        <input type="text"
               name="IdentNumber"
               value="<?=$user['IdentNumber']?>">
      </div><br />

      <div>
        <label>PlaceOfBirth</label>
        <input type="text"
               name="PlaceOfBirth"
               value="<?=$user['PlaceOfBirth']?>">
      </div><br />

      <div>
        <label>AddressOfActualResidence</label>
        <input type="text"
               name="AddressOfActualResidence"
               value="<?=$user['AddressOfActualResidence']?>">
      </div><br />

      <div>
        <label>HomePhone</label>
        <input type="text"
               name="HomePhone"
               value="<?=$user['HomePhone']?>">
      </div><br />

      <div>
        <label>MobilePhone</label>
        <input type="text"
               name="MobilePhone"
               value="<?=$user['MobilePhone']?>">
      </div><br />

      <div>
        <label>Email</label>
        <input type="email"
               name="Email"
               value="<?=$user['Email']?>">
      </div><br />

      <div>
        <label>PlaceOfWork</label>
        <input type="text"
               name="PlaceOfWork"
               value="<?=$user['PlaceOfWork']?>">
      </div><br />

      <div>
        <label>JobTitle</label>
        <input type="text"
               name="JobTitle"
               value="<?=$user['JobTitle']?>">
      </div><br />

      <div>
        <label>MonthlyIncome</label>
        <input type="number"
               name="MonthlyIncome"
               value="<?=$user['MonthlyIncome']?>">
      </div><br />


      			<div>
      				<label>City of actual residence</label>
      				<select name="CityOfResidence">
      					<option value="Moscow">Moscow</option>
      					<option value="Minsk">Minsk</option>
      					<option value="Nukus">Nukus</option>
                <option value="Tashkent">Tashkent</option>
                <option value="Grodno">Grodno</option>
      				</select>
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



			<input type="text"
			       name="id"
			       value="<?=$user['id']?>"
			       hidden>


			<div>
				<input type="checkbox"
				       name="pensioner"
				       <?php echo ($user['pensioner'] == "Yes")?"checked":"" ?>>
				<label>Are you a Pensioner?</label>
			</div><br />
			<input type="submit" value="Create">
			<a href="read.php">View</a>
		</fieldset>
	</form>
</body>
</html>

<?php
	}else {
	    header("Location: read.php");
	    exit;
	}

}else {
    header("Location: read.php");
    exit;
}
?>
