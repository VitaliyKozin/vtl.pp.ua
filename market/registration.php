<?php
 include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
<?php
				function form($login,$psw,$name,$area,$gender){
echo "<form action=registration.php method='post'>
<center>
<table border=0>
<tr><td>login</td><td>Введите логин<br/><input type=text name='login'></td></tr>
<tr><td>password</td><td>Введите пароль<br/><input type=password name='psw'></td></tr>
<tr><td>first_name</td><td>Введите Ваше имя <br/><input type=text name='first_name'></td></tr>
<tr><td>area</td>
    <td>Выберете область <br/><select name=area size='1'>
	                             <option selected value='Ukraine'>Ukraine</option>
                                 <option value='Donbabve'>Donbabve</option>
                                 <option value='Luganda'>Luganda</option>								 
	                          </select>
	</td>
</tr>
<tr><td>gender</td><td>Укажите пол <br/><input  type=radio name='gender' value='man' checked>М</td></tr>
<tr><td></td><td><br/><input type=radio name='gender' value='woman'>Ж</td></tr>
<tr><td align=left><br/><input type=submit value=SEND style='background:gray'></td><td align=right><br/><input type='reset'  value='RESET' style='background:gray'></td></tr>
</table><br/>
</center>
</form>";
}

if(isset($_POST['login']) or isset($_POST['psw'])) {
	
	$login=htmlspecialchars(trim($_POST['login']));
	$psw=htmlspecialchars(trim($_POST['psw']));
	$first_name=htmlspecialchars(trim($_POST['first_name']));
	$area=htmlspecialchars(trim($_POST['area']));
	$gender=($_POST['gender']);
	$error=false;
	$errortext="<ul>";
	if(empty($login)){
		$error=true;
		$errortext.="<li>Empty login</li>";
	}
	if(empty($psw)){
		$error=true;
		$errortext.="<li>Empty password</li>";
	}
	if(empty($first_name)){
		$error=true;
		$errortext.="<li>Enter your first_name</li>";
	}
	 
    if(empty($area)){
		$error=true;
		$errortext.="<li>Enter your area</li>";
	} 
    if(empty($gender)){
		$error=true;
		$errortext.="<li>Enter your gender</li>";
	} 
	if(isset($_POST['login']))  {
	
	$result= mysql_query("INSERT INTO `users2`(`first_name`, `name`, `password`, `area`, `gender`) VALUES('$first_name','$login','$psw','$area','$gender')");
	
	}
		
	if(!$error)  echo "OK, &nbsp;".$first_name.". Registration successful!";
	   	else{
		echo "<table><tr><td>";
		form($login,$psw,$name,$area,$gender);
		echo "</td><td><b style='color:red;'>$errortext</b></td></tr></table>";
	}
/*  else */  //Если нужно выводить форму в любом другом случае.
}elseif (!isset($_SESSION['user_name'])){// Выводится форма регистрации, если не залогинились.
	form($login,$psw,$first_name,$area,$gender);
    }
   
?>
			  </div>
            
				<div id="sidebar">
				<?if(!isset($_SESSION['user_name'])){
		                       unset($_SESSION['cart']);
	                        }
				?>
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
						<li><a href="products.php">Noutbooks</a></li>
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
