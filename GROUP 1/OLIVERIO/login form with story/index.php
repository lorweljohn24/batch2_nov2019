<html>
<head>
<title>User Login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <form action="login.php" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table">

                <div class="form-head">Login to Continue</div>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Username:</label><span id="username" class="error-info"></span>
                    </div>
                    <div>
                        <input name="username" id="username" type="text"
                            class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password:</label><span id="password" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
				
				<div class="field-column">
                    <div>
					    <label for="Captcha">Captcha:</label><span id="Captcha" class="error-info"></span>					
						<img src="captcha.php"/> 					
					    <input name= "captcha_num" type="captcha_num" required class="demo-input-box" placeholder="Enter the Captcha" >
                        
                    </div>
                    
                </div>
												
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login"
                        class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<style>
body{
	background-image: url("picss.jpg");
}
</style>