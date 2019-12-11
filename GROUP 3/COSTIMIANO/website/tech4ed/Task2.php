<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style type="text/css">
	  body{
	    background-color: #73CBBF ;
	    
	  }
	  #answer{
		  background-color: white;
		  padding: 30px; 
		  border-radius: 5px;
		  text-align:center; 
		  font-size: 30px;
       }
	   h1{
	   	 text-decoration: none;
	   	 text-align-last: center;
	   	 font-family:Times New Roman;

	   }


	  
		
	</style>
</head>
<body>
    <div class="container"> 
	   <div class="row">
	   
              
			<div class="col-lg-3"> </div>
			<div class="col-lg-6"> 
			   <h1> PHP Calculator</h1>
			    <br>
			    
			    <form method="POST">
				  <label>Enter First Number: </label>
			      <input type="number" name="fnum" placeholder="First Number" class="form-control">
				  <br>
				  <label>Enter Second  Number: </label>
			      <input type="number" name="snum" placeholder="Second Number" class="form-control">
				  <br>
				  <p> Choose Any Operator:</p>
				  <select name="Operator" class="form-control"> 
                    <option>None</option>
					<option>+</option>
					<option>-</option>
					<option>*</option>
					<option>/</option>
					
				  </select>
				  <br>
				     <input type="submit"  name="submit" value="Calculate" class="btn btn-success">
					 <input type="reset" value="Clear" class="btn btn-danger">
				</form>
				<br>
			      <h4>The Answer is:  </h4>
				  
				  <div id="answer">
                      <?php 
                        if(isset($_POST['submit'])){
                           $result1 = $_POST['fnum'];  
                           $result2 = $_POST['snum']; 
                           $sign = $_POST['Operator'];
                        }
                         switch ($sign) {
                          	case 'None':
                          		echo "Please choose at one Operator";
                          		break;
                          	
                          	case '+':
                          		echo $result1 + $result2;
                          		break;

                          	case '-':
                          	    echo $result1 - $result2;	
                                break;
                             case '*':
                          	    echo $result1 *  $result2;	
                                break;   
                             case '/':
                          	    echo $result1 /   $result2;	
                                break;    
                                
                             }
                        

                           

                    ?> 

				 </div>
	                     		   	    
   

				</div>
			
				
	        <div class="col-lg-3"> </div>  
	   </div>
	      
	
	</div>



</html>

 