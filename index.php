<html>
    <head>
    </head>
    <body>
    <?php
    if(isset($_POST['button'])){
        $x = $_POST["x"];
        $iter = $_POST["iter"];
        $k = 1;
        $res = (3.14/2);
        for ($i=0;$i<$iter;$i++){
			if($i%2==0){
				$res-=1/($k*(pow($x,$k)));
			}
			else{
				$res+=1/($k*(pow($x,$k)));
			}
			$k+=2;		}
            echo ("Ответ: " . $res);
    }
        ?>
    <form method = "POST">
	<p>Введите значение x больше 1</p>
	<p><input type ="text" name="x" value="-1"></p>
	<p>Введите количество итераций</p>
	<p><input type="text" name="iter" value="5"></p>
	<p><input type="submit" name="button"></p>
</form>
    </body>
</html>