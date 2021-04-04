<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>
		<hr />
		<h2>Please, fill below fields correctly</h2>
        <div class="container">
           <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"/>
            <label>Name: <input type="text" value="name"/></label>
            <label>Email: <input type="text" value="email"/></label>
            <label>Username: <input type="text" value="username"/></label>
            <label>Password: <input type="text" value="password"/></label>
            <label>Confirm Password: <input type="text" value="confirm"/></label>
            <label>Date of Birth: <input type="text" value="date"/></label>
            <label>Gender:<input type="radio" name="gender" value="female">Female
                      <input type="radio" name="gender" value="male">Male</label>
            <label>Address: <input type="text" value="address"/></label>
            <label>City: <input type="text" value="city"/></label>
            <label>Postal Code: <input type="text" value="postcode"/></label>
            <label>Home Phone: <input type="text" value="hphone"/></label>
            <label>Mobile Phone: <input type="text" value="mphone"/></label>
            <label>Credit Card Number: <input type="text" value="creditnum"/></label>
            <label>Credit Card Expiry Date: <input type="text" value="creditdate"/></label>
            <label>Monthly Salary: <input type="text" value="salary"/></label>
            <label>Web Site URL: <input type="text" value="url"/></label>
            <label>Overall GPA: <input type="text" value="gpa"/></label>
            </form>
</div>




        <div>
			Register
		    </div>
        </form>
	</body>
</html>