<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkoperation($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<html>
<head>
<title> Calculator </title>
<style type="text/css">
body {
	background-color: #fdc;
	</style>
<form method="post">
<table align="center" style="border:  double" black" height=300px; width=500px; bgcolor="skyblue" >
   	
	<tr>
        <td>Enter First Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter Second Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Calculate" class="btn btn-sucess"></td>		
    </tr>
	<tr>
	<td> The Answer is </td>	
        <td><strong><?php echo $result; ?><strong></td>
 </tr>
	

</table>
</form>
</head>
</html>