<?php
//tempConversion.php
//P1: Temperature Conversion for ITC250 SP18
//Coded by Scott Allen
//tempConversion.php has two select boxes for selecting the input temperature and output temperature
//a textbox for inputing initial temperature value
//start of temperature calculations
//Fahrenheit to Celsius
function f2c($tempValue)
{
	$celsius=($tempValue-32)*(5/9);
    return round($celsius,2);
}
//Fahrenheit to kelvin
function f2k($tempValue)
{
	$kelvin=($tempValue+459.67)*(5/9);
    return round($kelvin,2);
}
//Celsius to fahrenheit
function c2f($tempValue)
{
	$fahrenheit=($tempValue*(9/5))+32;
    return round($fahrenheit,2);
}
//Celsius to kelvin 
function c2k($tempValue)
{
	$kelvin=$tempValue+273.15;
    return round($kelvin,2);
}
//Kelvin to fahrenheit
function k2f($tempValue)
{
	$fahrenheit=($tempValue * (9/5))-459.67;
    return round($fahrenheit,2);
}
//Kelvin to celsius
function k2c($tempValue)
{
	$celsius=$tempValue-273.15;
    return round($celsius,2);
}
//end of temperature calculations
?>
 
<head>
<title>Temperature</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="styles/style.css" rel="stylesheet" >

   
</head>
<body>


<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/satin.jpg');background-repeat:no-repeat;"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">The AMAZING Temperature Conversion Magician!</a></h1>
      </div>
    </header>
  </div>

  <div id="pageintro" class="hoc clear"> 
    <article>
      <p class="heading">Is it cold outside?</p>
      <h2 class="heading">Unleash the power of Kelvin!</h2>
        
        <center>
        <div id="calcbox">
<form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <select name="firstTempType" selected="firstTempType">
                                <option value="fahrenheit">Fahrenheit</option>
                                <option value="celsius">Celsius</option>
                                <option value="kelvin"> Kelvin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="tempValue" autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="secondTempType" selected="secondTempType">
                                <option value="fahrenheit">Fahrenheit</option>
                                <option value="celsius">Celsius</option>
                                <option value="kelvin">Kelvin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="button" value="Click to Convert">
                        </td>
                    </tr>
                    <td>
<?php //Determines which temps to use for conversion
if(isset($_POST['button'])) {
    
        $firstTempType=$_POST['firstTempType'];
        $secondTempType=$_POST['secondTempType'];
        $tempValue=$_POST['tempValue'];
    
    //Checks to see if a number is inputted into $tempValue
    if (is_numeric($tempValue)) {
    
        //Fahrenheit to Celsius and Kelvin
        if ($firstTempType=='fahrenheit') 
        {
            if ($secondTempType=='celsius') 
            {
                $celsius=f2c($tempValue);
                echo "$tempValue Fahrenheit = $celsius Celsius";
            }  elseif ($secondTempType=='kelvin') 
            {
                $kelvin=f2k($tempValue);
                echo "$tempValue Fahrenheit = $kelvin Kelvin";
            }  else 
            {
                echo "$tempValue Fahrenheit = $tempValue Fahrenheit.  How surprising!";
            }
        }
        //Celsius to fahrenheit and kelvin
        if ($firstTempType=='celsius') 
        {
            if ($secondTempType=='fahrenheit') 
            {
                $fahrenheit=c2f($tempValue);
                echo "$tempValue Celsius = $fahrenheit Fahrenheit";
            }  elseif ($secondTempType=='kelvin') 
            {
                $kelvin=c2k($tempValue);
                echo "$tempValue Celsius = $kelvin Kelvin";
            }  else 
            {
                echo "$tempValue Celsius = $tempValue Celsius.  Who would've thought?";
            }
        }
        //Kelvin to fahrenheit and celsius
        if ($firstTempType=='kelvin') 
        {
            if ($secondTempType=='fahrenheit')
            {
                $fahrenheit=k2f($tempValue);
                echo "$tempValue Kelvin  = $fahrenheit Fahrenheit";
            }  elseif ($secondTempType=='celsius') 
            {
                $celsius=k2c($tempValue);
                echo "$tempValue Kelvin = $celsius Celsius";
            }  else 
            {
                echo "$tempValue Kelvin = $tempValue Kelvin.  What a crazy coincidence!";
            }
        }
    }
    else //print an error message if input is blank or not a number
		  echo "<span>*$tempValue is not a valid temperature.<br>
                Please enter a number.</span>";
}
				?>
                    </td>
                </table>
        </form>
     </div>
            </center>
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->


<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/satin.jpg');background-repeat:no-repeat;">

 
   <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Green Check</a></p>

    </div>
  </div>
</div>
<!-- End Footer Background Image Wrapper -->


</body>
</?>