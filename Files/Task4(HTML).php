<!DOCTYPE html>

<head>
	
</head>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operation) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}

?>

<body>
    
	
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    
</body>
</html>