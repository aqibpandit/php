//suppose your html file with javascript in <script> tag is as follows
<script>
var var1=value1;
var var2=value2;
..
..
..
var varN=valueN;

location.href="http://localhost/phpFileName.php?var1="+var1+"&var2="+var2+....."&varN="+varN;
//when you open html file in browser you will be redirected to php file due to above code line.

</script>


//Now to access javascript Variable use $_GET[] global variable in your php file
<?php

echo $_GET['var1'];
echo $_GET['var2'];
...
...
...
echo $_GET['varN'];
?>
