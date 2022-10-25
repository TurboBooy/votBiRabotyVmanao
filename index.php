<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кусочек кода</title>
	<link rel="shortcut icon" href="img/kakao.png" type="image/x-icon">
	<link rel="stylesheet" href="style/style.css">
</head>

<body>
	<?php 	
	
	$userName = htmlspecialchars(trim($_POST['userName']));
	$userTel = htmlspecialchars(trim($_POST['userTel']));
	$userAddress = htmlspecialchars(trim($_POST['userAddress']));
	$userEmail = htmlspecialchars(trim($_POST['userEmail']));
	$userInfo = htmlspecialchars(trim($_POST['userInfo']));
	$userFile = htmlspecialchars(trim($_POST['userFile']));

	unset($error_userEmail);
	unset($error_userName);

	if(strlen($userName) <= 1) {
		$error_userName = 'Введите корректно Имя';
		;} 
		else if(strlen($userEmail) < 5) {
			$error_userEmail = 'Введите корректно почтовый адресс';
		}	else {
			$error_userName = '';
			$error_userEmail = '';
		}
		?>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__logo-img">
					<img src="img/kakao.png" alt="">
				</div>
				<div class="header__menu menu">
					<ul class="menu__list">
						<li class="menu__item"><a class="menu__link" href="">О компании</a></li>
						<button class="menu__item menu__button"><a class="menu__link">Услуги</a></button>
						<ul hidden class="button__list">
							<li><a href="" class="button__link">Разработка сайта с нуля</a></li>
							<li><a href="" class="button__link">Поддержка сайтов</a></li>
							<li><a href="" class="button__link">Внедрение Битрикс24</a></li>
							<li><a href="" class="button__link">Полный аудит сайта</a></li>
							<li><a href="" class="button__link">Разработка дизайна сайтов</a></li>
							<li><a href="" class="button__link">Вертска сайтов</a></li>
							<li><a href="" class="button__link">Технические работы</a></li>
						</ul>
						<li class="menu__item"><a class="menu__link" href="">Продукты</a></li>
						<li class="menu__item"><a class="menu__link" href="">Кейсы</a></li>
						<li class="menu__item"><a class="menu__link" href="">Публикации</a></li>
						<li class="menu__item"><a class="menu__link" href="">Контакты</a></li>
					</ul>
				</div>
				<button class="header__button" onclick="alert">Презентация</button>
			</div>
		</header>
		<main class="main">
			<div class="main__container">
				<h1 class="title">Оставьте заявку</h1>
				<div class="under__title">Расскажите о проекте и задайте вопросы - мы скоро ответим</div>
				<div class="contact__menu">
					<div class="contact">
						<span class="contact__title">Наш адрес</span><br>
						<b>Минск, ул.Пушкина, дом Колотушкина</b>
					</div>
					<div class="contact">
						<span class="contact__title">Время работы</span><br>
						<b>До отказа</b>
					</div>
					<div class="contact">
						<span class="contact__title">Звоните</span><br>
						<b>+8 (800) 555-35-35</b> class="contact__title"
					</div>
					<div class="contact">
						<span class="contact__title">Пишите</span><br>
						<b>info@Kakao-team.com</b><br>
						<b>KakaoTeamBot</b>
					</div>
				</div>
				<div class="forma">
					<form action="/" method="post" class="form__list">
						<span><?=$error_userName?></span> <br>
						<input class="form__item" placeholder="Ваше имя*" type="text" name="userName"> 
						<input placeholder="Ваш телефон" class="form__item" type="tel" name="userTel"><br>
						<input class="form__item" style="width: 590px" placeholder="ваш e-mail*" type="email"
							name="userEmail">
							<span><?=$error_userEmail?></span><br>
						<input class="form__item" style="width: 590px" placeholder="Адрес проекта" type="text"
							name="userAdress"><br>
						<textarea class="form__item" type="text" placeholder="Расскажите о себе"
							style="width: 590px; height: 214px;" name="userInfo"></textarea><br>
						<input class="form__item" type="file" name="userFail"> <input class="form__item submit"
							value="Отправить заявку" type="submit">
					</form>
				</div>
			</div>
		</main>
	</div>
		<script src="script/script.js"></script>
</body>

</html>