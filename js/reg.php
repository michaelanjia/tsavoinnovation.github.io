<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name">
                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name">
                    <input name="phone" type="telephone" class="form-control" id="phone" placeholder="Phone Number">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
                    <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                        <input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
                    </div>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("info@tsavolabs.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
