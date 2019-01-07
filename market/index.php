<?php
include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
				<h2>Добро пожаловать в магазин !</h2>
					<p> Наши профессиональные менеджеры помогут быстро и качественно подобрать нужный Вам товар. Звоните круглосуточно!</p>
					<p>Покупки доступны <a href='login.php'>зарегистрированным пользователям.</a> После регистрации<a href='login.php'> введите логин и пароль.</a></p>
					<p>Вы можете наткнуться на схожий дизайн в интернете - это значит мы идем проверенным путем.</p>
					<p>Надеемся, Вам понравится наше стремление к стабильности.</p>
					<p style="font-size: 150%;">Мы находимся:</p>
					<?
					 
						echo $page->page['pagetext'];
					
					?>
				</div>
				<div id="sidebar">
				    
					<h2>Боковое меню</h2>
					<ul>
						<li><a href="products.php">Phones</a></li>
						<li><a href="products.php">TV</a></li>
						<li><a href="products.php">Notebooks</a></li>
						<li><a href="registration.php">Регистрация</a></li>
						<li><a href="login.php">Вход</a></li>
						<li><a href="cart.php">Корзина</a></li>
						<li><a href="index.php?contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'inc/footer.php'; 
?>
<!-- end #footer -->
</body>
</html>
