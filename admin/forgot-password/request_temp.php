<div id="Page">
		<div id="LoginArea"><img src="images/LandingLogo.png"  alt="Organic Kids LA">
		<p>Please enter your email address.  A temporary password and link will be sent to you.<br />&nbsp;</p>
		<form id="RequestPWForm" method="post" action="<?php print($siteRoot . '/admin/index.php?action=TMP_PW_REQ'); ?>">
			<p> <input name="email"  type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
				onBlur="if(this.value=='')this.value=this.defaultValue;" value="Email Address" class="formstyle" /><br />&nbsp;</p>

			<center>
      	<input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Submit-Btn.png" class="SubmitButton" Value="REQUEST PASSWORD">
    	</center>
        <?php
					if ($email_err) {
						print('<p><span style="color:#f00;">' . $email_err . '</span></p>');
					}
				?>
          
		</form>
		</div>
		
</div> <!-- End DIV PAGE -->	
		
