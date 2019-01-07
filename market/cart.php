<?php
include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
               
				
					<h2><?if(isset($_SESSION['user_name'])) echo $_SESSION['user_name'] .' вы выбрали следующие товары:'?></h2></br>
<?php
    if(isset($_GET['clear'])){
		unset($_SESSION['cart']);
	}
	if(!isset($_SESSION['user_name'])){
		unset($_SESSION['cart']);
	}
		if(isset($_GET['delete'])){
		unset($_SESSION['cart'][$_GET['delete']]);
		if(count($_SESSION['cart'])==0) unset($_SESSION['cart']);
	}
	if(isset($_SESSION['cart'])){
		$counter=1;
		foreach($_SESSION['cart'] as $k=>$v){
			echo "<br/>$counter.";
			foreach($v as $key=>$value){
				echo "--$value--";
			}
			echo "<a style='color:blue' href='?delete=".$k."'>Удалить товар</a><br/>";
			$counter++;
		}
		echo "<br/><br/><a style='color:blue' href='?clear'>Очистить корзину</a>";
		echo "<br/><br/>";
	}
	else echo"<h2><b>&bdquo;0&ldquo;</b> Товаров. </br></br>Покупки доступны <a href='login.php'>зарегистрированным пользователям.</a> После регистрации<a href='login.php'> введите логин и пароль.</a></h2>"		

?>
	        </div>
            
				<div id="sidebar">
					<table border=1>
                    <tr>
                    <td width="252" align="left">
                    <font color=white>
                    Вы авторизировались как <?if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']?>
                    <br/>В вашей корзине <?if(isset($_SESSION['cart'])) echo count($_SESSION['cart']);else echo "0"; ?> товаров.
                    </font>
                    </td>
                    </tr>
                    </table>
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
