<?php
include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
 <?
function printForm(){

?>
<form id="loginForm" action="login.php" method="post">

	<div class="field">
		<label>Enter your login:</label>
		<div class="input"><input type="text" name="login" value="" id="login" /></div>
	</div>

	<div class="field">
		<a href="#" id="forgot">Forgot your password?</a>
		<label>Enter your password:</label>
		<div class="input"><input type="password" name="psw" value="" id="pass" /></div>
	</div>

	<div class="submit">
		<button type="submit">Enter</button>
		<label id="remember"><input name="" type="checkbox" value="" /> Remember me</label>
	</div>

</form>
<?
}
if(isset($_GET['delete'])){
	unset($_SESSION['user_name']);
	if(isset($_SESSION['admin'])) unset($_SESSION['admin']);
	//session_destroy();
}
if(!isset($_SESSION['user_name'])){
if(isset($_POST['login'])){
	$query="SELECT `id`,`first_name` FROM `users2` WHERE `name`='".$_POST['login']."' and `password`='".$_POST['psw']."'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		$user=mysql_fetch_assoc($result);
		if($user['id']==2){
			$_SESSION['admin']=true;
		}
		$_SESSION['user_name']=$user['first_name'];
	}else{ 
		echo "<center>Access Denied</center>";
		printForm();
	}	
}else{
	printForm();
}
}
if(isset($_SESSION['user_name'])){
echo "<center>Access granted<br/>Hello, ".$_SESSION['user_name']."<br/>
<a href='login.php?delete'>Logout</a></center>";
}	
if(isset($_SESSION['admin'])){
	echo "<br/><br/><a href='add.php'>Add product</a>";

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
						<li><a href='?cat=1'>Phones</a></li>
						<li><a href='?cat=2'>TV</a></li>
						<li><a href='?cat=3'>Notebooks</a></li>
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
