<?php 

/*Поиск пользователя по базе данных*/ 

session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` 
	WHERE `email` = '$email' AND `password` = '$password'");

if (mysqli_num_rows($check_user)>0){

	$user = mysqli_fetch_assoc($check_user);
	$id =  $user['id'];

	$_SESSION['user'] = [
		"id" => $id,
		"email" => $user['email'],
		"full_name" => $user['full_name'],
		"quized" => $user['quized'],
		"theme" => 'dark'
	];


	$check_user_quiz_baza = mysqli_query($connect, "SELECT * FROM `progress-baza`
		WHERE `id` =  '$id' ");

	$check_user_quiz_profil = mysqli_query($connect, "SELECT * FROM `progress-profil`
		WHERE `id` = '$id' ");

	if ((mysqli_num_rows($check_user_quiz_baza) + mysqli_num_rows($check_user_quiz_profil)) === 0){

		header('Location: ../quiz/quiz-subject.php');

		} else {

	header('Location: ../profile/profile.php');

	}

} else {
	$_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../index.php');
}

?>