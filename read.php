<?php
$fakeTok = "562random";
include "php/read.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Bank</title>
	<style>
  body {
    background-color: yellow;
  }
		table, tr, th, td {
			border: 1px solid #aaa;
			border-collapse: collapse;
			padding: 5px;
		}
		th {background: #eee}
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
	</style>
</head>
<body>
	<?php if(mysqli_num_rows($result)){ ?>
		<br />
		<mark>
			<?php if (isset($_GET['ms'])) {
				echo $_GET['ms'];
			} ?>
		</mark>
	<table>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Patronymic</th>
      <th>Pensioner</th>
      <th>DataOfBirth</th>
      <th>PassportSeries</th>
      <th>NumberOfPassport</th>
      <th>IssuedBy</th>
      <th>DataOfIssue</th>
      <th>IdentNumber</th>
      <th>PlaceOfBirth</th>
      <th>AddressOfActualResidence</th>
      <th>HomePhone</th>
      <th>MobilePhone</th>
      <th>Email</th>
      <th>PlaceOfWork</th>
      <th>JobTitle</th>
      <th>MonthlyIncome</th>
      <th>CityOfActualResidence</th>
      <th>CityOfResidence</th>
      <th>FamilyStatus</th>
      <th>Citizenship</th>
      <th>Disability</th>
			<th>Action</th>
		</tr>
		<?php
            $i = 0;
            while ($users = mysqli_fetch_assoc($result)) {
            $i++;
		 ?>
		<tr>
           <td><?=$i?></td>
           <td><?=$users['name']?></td>
           <td><?=$users['surname']?></td>
           <td><?=$users['patronymic']?></td>
           <td><?=$users['pensioner']?></td>
           <td><?=$users['DataOfBirth']?></td>
           <td><?=$users['PassportSeries']?></td>
           <td><?=$users['NumberOfPassport']?></td>
           <td><?=$users['IssuedBy']?></td>
           <td><?=$users['DataOfIssue']?></td>
           <td><?=$users['IdentNumber']?></td>
           <td><?=$users['PlaceOfBirth']?></td>
           <td><?=$users['AddressOfActualResidence']?></td>
           <td><?=$users['HomePhone']?></td>
           <td><?=$users['MobilePhone']?></td>
           <td><?=$users['Email']?></td>
           <td><?=$users['PlaceOfWork']?></td>
           <td><?=$users['JobTitle']?></td>
           <td><?=$users['MonthlyIncome']?></td>
           <td><?=$users['CityOfActualResidence']?></td>
           <td><?=$users['CityOfResidence']?></td>
           <td><?=$users['FamilyStatus']?></td>
           <td><?=$users['Citizenship']?></td>
           <td><?=$users['Disability']?></td>

           <td>
           	   <a href="update.php?id=<?=$users['id']?>">Edit</a>
           	   <a href="php/delete.php?id=<?=$users['id']?>">Delete</a>
           </td>
		</tr>
	<?php } ?>
	</table><br />
	<a class="knopka" href="index.php">Create</a>
<?php }else{ ?>
	<h1>Empty!</h1>
	<a class="knopka" href="index.php">Create</a>
<?php } ?>
</body>
</html>
