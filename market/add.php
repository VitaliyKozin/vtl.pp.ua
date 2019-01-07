<?php
 include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
               <?
				if(isset($_SESSION['admin'])){
				
				
					echo "Hi admin";
					 
function printForm($n,$d,$p,$c,$id){
?>
<form id="loginForm" action="add.php" method="post">

	<div class="field">
		<label>Name</label>
		<div class="input"><input type="text" name="n" value="<?=$n?>" id="login" /></div>
	</div>
	<div class="field">
		<label>Desc</label>
		<div class="input"><input type="text" name="d" value="<?=$d?>" id="pass" /></div>
	</div>
<div class="field">
		<label>Price</label>
		<div class="input"><input type="text" name="p" value="<?=$p?>" id="pass" /></div>
	</div>
<div class="field">
		<label>Cat</label>
		<div class="input"><input type="text" name="c" value="<?=$c?>" id="pass" /></div>
	</div>	
	<div class="submit">
	<input type="hidden" name="id" value="<?=$id?>" />
		<button type="submit">Enter</button>
		
	</div>

</form>
<?
}

	if(isset($_POST['n'])){
		$query="UPDATE `products2` SET `name`='".$_POST['n']."',
		`description`='".$_POST['d']."',
		`price`='".$_POST['p']."',
		`category`='".$_POST['c']."' WHERE `id`=".$_POST['id']."";
		if(mysql_query($query)) echo "<br>Successfully updated<br>";
	}else{
	if(isset($_GET['edit'])){
		$query="SELECT * FROM `products2` WHERE `id`=".$_GET['edit']."";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0){
			$product=mysql_fetch_assoc($result);
			$n=$product[name];
			$d=$product[description];
			$p=$product[price];
			$c=$product[category];
			$id=$product[id];
			printForm($n,$d,$p,$c,$id);
		}
	}
	}
	$query="SELECT * FROM `products2`";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		$out="<table border=0>";
		for($i=0;$i<mysql_num_rows($result);$i++){
			$product=mysql_fetch_assoc($result);	
			$out.="<tr><td width=400><a href='?edit=".$product[id]."'>$product[name]</a></td>
			<td width=400>$product[description]</td>
			<td width=300>Цена:$product[price]</td></tr>";	
		}
		$out.="</table>";
	} 
	echo $out;
		if(isset($_POST['n'])){
		$query="INSERT INTO `products2` VALUES('','".$_POST['n']."','".$_POST['d']."','".$_POST['p']."','".$_POST['c']."')";
		if(mysql_query($query)) echo "<br>added to database<br>";
	} 
	printForm($n,$d,$p,$c,$id);				
				
			   
			   }else echo "You have no rights";
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
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright (c) by Виталий Козин</p>
</div>
<!-- end #footer -->
</body>
</html>
