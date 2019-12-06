<?php

ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['value1'];

$add2 = $_REQUEST['value2'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['value1'];

$add2 = $_REQUEST['value2'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['value1'];

$add2 = $_REQUEST['value2'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['value1'];

$add2 = $_REQUEST['value2'];

$res= $add1/$add2;

}

if($_REQUEST['value1']==NULL && $_REQUEST['value2']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['value1']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['value2']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}

}

?>

<form>

<table style="border: double"black">
<!-- This is the code for the first textfield  
-->	 
            <tr>

                <td style="font-family:'Calibri'">Enter First Number</td>

                <td colspan="1">

               

                    <input name="value1" type="text" style="color:red"/></td>
<!-- This is the code for the operator 
-->	
                    <tr>
                    <td style="font-family:'Calibri'">Select Operator</td>

                   <td>
                    <select name="operator" style="width: 63px">
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
						</select></td>

               </tr>     
<!-- This is the code for the second textfield  
-->	   
			   <tr>
			   <td style="font-family:'Calibri'">Enter Second Number</td>
			   <td class="auto-style5">
			   <input name="value2" type="text"  style="color:red"/></td>

               

				</tr>
				<tr>
                <td></td>
<!-- This is the code for the results  
-->
                <td><input type="submit" name="calculate" value="Calculate" style="color:white;background-color:black" /></td>              
				</tr>
				<tr>
                <td style="font-family:'Calibri'">Output = </td>
                <td style="color:black"><?php echo $res;?></td>
                </tr>
				</table>

 </form>