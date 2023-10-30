<?php 
  $time = $_POST['time'];
	$store = $_POST['store']; 
  $person = $_POST['person'];
  $items = $_POST['items'];
  $verbs = $_POST['verbs'];
  $store = $_POST['store'];
  $brand = $_POST['brand'];
  $interstate = $_POST['interstate'];
  $famousperson = $_POST['famousperson'];
  $occupation = $_POST['occupation'];
  $money = $_POST['money'];
  $company = $_POST['company'];

  $sentence = "Yesterday at" . $time . "," . $person1 . "went to " . $store; 
?>

<!DOCTYPE html>
<html>
 
<head>
  <title>Joellen's Mad Lib's</title>  
  <link rel="stylesheet" type="text/css" href="mad.css">
</head>
 
<body>
</br>
  <img src="madlib.png">

</br></br></br></br>
<div class="typewriter">
     <label style="text-shadow: 2px 2px white; font-family: 'Poppins', sans-serif; color:black; font-size:43px; text-align:center; align:center;">"Yesterday at <?php echo $time; ?>, I went to <?php echo $store; ?> with <?php echo $person; ?> to buy some <?php echo $items; ?>. When we were leaving <?php echo $store; ?>, we <?php echo $verbs; ?> into our <?php echo $brand; ?> and drove down <?php echo $interstate; ?>, only to get into a car accident with <?php echo $famousperson; ?>, who we found out was a famous <?php echo $occupation; ?>. Because of <?php echo $famousperson; ?>'s wealth from being a <?php echo $occupation; ?>, we had to pay them <?php echo $money; ?> because our car insurance with <em><?php echo $company; ?></em> had expired."</label>
</div>
      </br>
</br>
 <a href="madindex.html">
        <div class="button" role="button">
        <label>&nbsp;</label>
        <input class="button-74" type="submit" value="Play Again!"><br>
   </a>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
 <footer>
    <small style="color:black"><em> &copy; Copyright 2022 Joellen Allah-Mensah </em></small>
    </footer>
</body>
</html>
 

