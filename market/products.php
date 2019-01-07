<?php
 include 'inc/header.php'; 
?>
<div id="page">
	<div id="bg1">
		<div id="bg2">
			<div id="bg3">
				<div id="content">
					<h2><a href='?cat=2'><img src="images/img03.jpg" alt="" width="165" height="103" title="Phasellus nec erat sit amet nibh pellentesque congue." /></a> <a href='?cat=3'><img src="images/img04.jpg" alt="" width="165" height="103" title="Phasellus nec erat sit amet nibh pellentesque congue." /></a> <a href='?cat=1'><img src="images/img02.jpg" alt="" width="165" height="103" title="Phasellus nec erat sit amet nibh pellentesque congue." /></a></h2>
					<center>
  <p style='font-size: 200%;'><a href='?cat=2'>TV</a><span style='color:#131313;'>----------</span><a href='?cat=3'>Notebooks</a><span style='color:#131313;'>----------</span><a href='?cat=1'>Phones</a><br/><br/>
  </p>
	<?
	if(isset($_GET['clear'])){
		unset($_SESSION['cart']);
	}
	
	
	if(isset($_GET['buy'])){
		$check=false;
		if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $k=>$v){
			if($v[0]==$_GET['buy']){
				$_SESSION['cart'][$k][4]++;
				$check=true;
				break;
			}
		}
		}
		if(!$check){
		$query="SELECT * FROM `products2` WHERE `id`='".$_GET['buy']."'";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0){
			$product=mysql_fetch_assoc($result);
			$_SESSION['cart'][]=array($product['id'],$product['name'],$product['description'],$product['price'],1);
		}
		}		
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
	if(isset($_GET['cat'])){
	$query="SELECT * FROM `products2` WHERE `category`='".$_GET['cat']."'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		$out="<table border=0>";
		for($i=0;$i<mysql_num_rows($result);$i++){
			$product=mysql_fetch_assoc($result);	
			$out.="<tr><td width=300>Товар :</td><td width=400>$product[name]</td></tr>
			<tr><td width=300 ><img src='images/$product[id].jpg' width=299 /></td><td width=400>$product[description]</td></tr>
			<tr><td width=300>Цена:$product[price]</td><td width=400 align=center><b><a href='?cat=".$_GET['cat']."&buy=".$product['id']."'>КУПИТЬ</a></b></td></tr>
			<tr><td width=300>--------</td><td width=400 align=center>--------</td></tr>";	
		}
		$out.="</table>";
	} 
	echo $out;
	
	}
	?>
  </center>
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
