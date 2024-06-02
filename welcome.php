<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if(isset($_POST['num']))  
    {  
        //get the value from form  
        $num = $_POST['num'];  
        $rev=0;
        $temp=$num;
        $rem;
        //reversing the number  
        while(floor($temp)){
          $rem=$temp%10;
          $rev=$rev*10+$rem;
          $temp=$temp/10;
        }

        //checking if the number and reverse is equal  
        if($rev == $num){  
            echo "The number $num is Palindrome";
            echo $rev;     
        }else{  
            echo "The number $num is not a Palindrome";   
            echo $rev;
        }  
}     
      ?> 