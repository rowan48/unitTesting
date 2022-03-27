<?php
function fact($n)  
{  
    if(is_numeric($n))   
    {  if($n<0){
        return null;
    }elseif($n==0){
        return 1;
    }elseif($n==1){
        return 1;  
    }elseif($n>1){
        return $n * fact($n - 1);  

    }  
}
    else   
    {  
        return null;
        
    }  
}  
  
//echo "Factorial of 6 is " .fact(6);  
?>  
<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number']; 
        $output=fact($number); 
        echo "Factorial of $number:<br><br>"."is $output";  

    }  
?>  
</body>  
</html>  

