<?php include("./header.php");?>

<script type="text/javascript">
jQuery(function(){
        $("#submit").click(function(){                                         
        $(".error").hide();
        var hasError = false;
				var userVal = $("#user").val();
				var tempPWVal = $("#tempPW").val();
        var passwordVal = $("#newPW").val();
        var checkVal = $("#confirmPW").val();
				var pwReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,16}$/;
				
        if (userVal == 'Enter Login Name' ) {   
            $("#user").after('<span class="error" style="font-size: 10px; color: #f00; font-weight: bold;">Please Enter Your Login Name</span>');
            hasError = true;
        } else if (tempPWVal == 'Enter Temporary Password' ) {   
            $("#tempPW").after('<span class="error" style="font-size: 10px; color: #f00; font-weight: bold;">Please Enter Your Temporary Password</span>');
            hasError = true;
				} else if (!pwReg.test(passwordVal)) {
            $("#newPW").after('<span class="error" style="font-size: 10px; color: #f00; font-weight: bold;">Passwords must be between 8 and 16 characters and must contain at least 1 uppercase letter and 1 number.</span>');
						hasError = true;
				} else if (checkVal == 'Confirm New Password') {
            $("#confirmPW").after('<span class="error" style="font-size: 10px; color: #f00; font-weight: bold;">Please re-enter your password.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {   
            $("#confirmPW").after('<span class="error" style="font-size: 10px; color: #f00; font-weight: bold;">Passwords do not match.</span>');
            hasError = true;
				}
        if(hasError == true) { return false; }
		else {
			return true;
			}
	});	
});
</script>
<style type="text/css">
div.form-container span.error {margin-left: 10px;}
.content-block ul {margin: 0 0 15px 15px;}
.content-block ul li {list-style: disc; line-height: 1.5em;}
</style>

<div id="Page">	<!--980px-->
		
		<div id="ForgotPasswordArea">
		
		<h1>FORGOT PASSWORD</h1>
		<form id="changePWForm" method="post" action="<?php print($siteRoot . '/admin/index.php?action=PWD_CHANGE_SUBMIT'); ?>">
			<p>
      	<label for="user" style="margin-bottom: 10px;">Enter Login Name:&nbsp;&nbsp;&nbsp;
        <input name="user" id="user" type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  	onblur="if(this.value=='')this.value=this.defaultValue;" value="Enter Login Name"  class="formstyle"/></label></p>
			<p>
      	<label for="tempPW" style="margin-bottom: 10px;">Enter Temporary Password:
        <input name="tempPW" id="tempPW" type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  	onblur="if(this.value=='')this.value=this.defaultValue;" value="Enter Temporary Password"  class="formstyle"/></label></p>
			<p>
      	<label for="newPW" style="margin-bottom: 10px;">Enter New Password:
        <input name="newPW" id="newPW" type="password" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  	onblur="if(this.value=='')this.value=this.defaultValue;" value="Enter New Password" class="formstyle"/></label></p>
			<p>
      	<label for="confirmPW" style="margin-bottom: 10px;">Confirm New Password:
				<input name="confirmPW" id="confirmPW"  type="password" onFocus="if(this.value==this.defaultValue)this.value='';" 
				  onblur="if(this.value=='')this.value=this.defaultValue;" value="Confirm New Password"  class="formstyle"/></p>	
			<center>
      	<input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Update-Btn.png" class="SubmitButton" Value="UPDATE" id="submit"></label>
        <?php
					if ($change_err) {
						print('<p><span style="color:#f00;font-weight:bold;">' . $change_err . '</span></p>');
					}
				?>
			</center>
		</form>
		
    </div>
		
</div> <!-- End DIV Page -->
		
	
