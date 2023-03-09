<?php

if (isset($_POST['name']) &&
		isset($_POST['surname']) &&
		isset($_POST['patronymic']) &&
		isset($_POST['DataOfBirth']) &&
		isset($_POST['PassportSeries']) &&
		isset($_POST['NumberOfPassport']) &&
		isset($_POST['IssuedBy']) &&
		isset($_POST['DataOfIssue']) &&
		isset($_POST['IdentNumber']) &&
		isset($_POST['PlaceOfBirth']) &&
		isset($_POST['AddressOfActualResidence']) &&
		isset($_POST['HomePhone']) &&
		isset($_POST['MobilePhone']) &&
		isset($_POST['Email']) &&
		isset($_POST['PlaceOfWork']) &&
		isset($_POST['JobTitle']) &&
		isset($_POST['MonthlyIncome']) &&
		isset($_POST['CityOfActualResidence']) &&
		isset($_POST['CityOfResidence']) &&
		isset($_POST['FamilyStatus']) &&
		isset($_POST['Citizenship']) &&
		isset($_POST['Disability'])

	) {

	include "../db_conn.php";

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$patronymic = $_POST['patronymic'];
	$DataOfBirth = $_POST['DataOfBirth'];
	$PassportSeries = $_POST['PassportSeries'];
	$NumberOfPassport = $_POST['NumberOfPassport'];
	$IssuedBy = $_POST['IssuedBy'];
	$DataOfIssue = $_POST['DataOfIssue'];
	$IdentNumber = $_POST['IdentNumber'];
	$PlaceOfBirth = $_POST['PlaceOfBirth'];
	$AddressOfActualResidence = $_POST['AddressOfActualResidence'];
	$HomePhone = $_POST['HomePhone'];
	$MobilePhone = $_POST['MobilePhone'];
	$Email = $_POST['Email'];
	$PlaceOfWork = $_POST['PlaceOfWork'];
	$JobTitle = $_POST['JobTitle'];
	$MonthlyIncome = $_POST['MonthlyIncome'];
	$CityOfActualResidence = $_POST['CityOfActualResidence'];
	$CityOfResidence = $_POST['CityOfResidence'];
	$FamilyStatus = $_POST['FamilyStatus'];
	$Citizenship = $_POST['Citizenship'];
	$Disability = $_POST['Disability'];
	$pensioner = $_POST['pensioner'];

	if (empty($name)) {
		header("Location: ../index.php?ms=Name is required");
	    exit;
		}
			elseif (empty($surname)) {
				header("Location: ../index.php?ms=Surname is required");
				exit;}
				elseif (empty($patronymic)) {
					header("Location: ../index.php?ms=Patronymic is required");
					exit;
				}
		elseif (empty($DataOfBirth)) {
			header("Location: ../index.php?ms=DataOfBirth is required");
			exit;

		} elseif (empty($PassportSeries)) {
			header("Location: ../index.php?ms=PassportSeries is required");
			exit;
		} elseif (empty($NumberOfPassport)) {
			header("Location: ../index.php?ms=NumberOfPassport is required");
			exit;
		} elseif (empty($IssuedBy)) {
			header("Location: ../index.php?ms=IssuedBy is required");
			exit;
		}elseif (empty($DataOfIssue)) {
			header("Location: ../index.php?ms=DataOfIssue is required");
			exit;
		} elseif (empty($IdentNumber)) {
			header("Location: ../index.php?ms=IdentNumber is required");
			exit;
		} elseif (empty($PlaceOfBirth)) {
			header("Location: ../index.php?ms=PlaceOfBirth is required");
			exit;
		} elseif (empty($CityOfActualResidence)) {
			header("Location: ../index.php?ms=CityOfActualResidence is required");
			exit;
		} elseif (empty($AddressOfActualResidence)) {
			header("Location: ../index.php?ms=AddressOfActualResidence is required");
			exit;
		} elseif (empty($CityOfResidence)) {
			header("Location: ../index.php?ms=CityOfResidence is required");
			exit;
		} elseif (empty($FamilyStatus)) {
			header("Location: ../index.php?ms=FamilyStatus is required");
			exit;
		} elseif (empty($Citizenship)) {
			header("Location: ../index.php?ms=Citizenship is required");
			exit;
		} elseif (empty($Disability)) {
			header("Location: ../index.php?ms=Disability is required");
			exit;
		} elseif (empty($MonthlyIncome)) {
			header("Location: ../index.php?ms=MonthlyIncome is required");
			exit;
		}
	else {
		if (isset($_POST['pensioner'])) {
			$pensioner = "YES";
		}else {
			$pensioner = "NO";
		}



        $sql = "INSERT INTO users(name, surname, patronymic, pensioner, DataOfBirth, PassportSeries, NumberOfPassport,
					IssuedBy, DataOfIssue, IdentNumber, PlaceOfBirth, AddressOfActualResidence, HomePhone, MobilePhone,
				Email, PlaceOfWork, JobTitle, MonthlyIncome, CityOfActualResidence, CityOfResidence, FamilyStatus, Citizenship, Disability)
                VALUES('$name', '$surname', '$patronymic', '$pensioner', '$DataOfBirth', '$PassportSeries', '$NumberOfPassport',
									'$IssuedBy', '$DataOfIssue', '$IdentNumber', '$PlaceOfBirth', '$AddressOfActualResidence', '$HomePhone',
									'$MobilePhone', '$Email', '$PlaceOfWork', '$JobTitle', '$MonthlyIncome', '$CityOfActualResidence', '$CityOfResidence',
								'$FamilyStatus', '$Citizenship', '$Disability')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Successfully created";
        	header("Location: ../index.php?ms=$ms");
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: ../index.php?ms=$ms");
	        exit;
        }

	}
}else {
	header("Location: ../index.php");
	exit;
}
