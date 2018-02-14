<div id="Page">
		<div id="LoginArea"><img src="images/LandingLogo.png"  alt="Organic Kids LA">
		
		<form id="LoginForm" method="post" action="<?php print($siteRoot . '/admin/index.php?action=LOGIN_ADM_SUBMIT'); ?>">
			<p> <input name="Username"  type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
				onBlur="if(this.value=='')this.value=this.defaultValue;" value="Username" class="formstyle" /></p>

			<p>	<input name="Password"   type="password" onFocus="if(this.value==this.defaultValue)this.value='';" 
				  onblur="if(this.value=='')this.value=this.defaultValue;" value="Password"  class="formstyle"/></p>
				
			<center>
      	<input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Login-Btn.png" class="SubmitButton" Value="LOGIN">
				<!--<p><a href="http://www.organickidsla.com/admin/forgot-password/">forgot password?</a></p>-->
				<p><a href="<?php print($siteRoot . '/admin/index.php?action=LOST_PWD'); ?>">forgot password?</a></p>
        <?php
					if ($log_err) {
						print('<p><span style="color:#f00;font-weight:bold;">' . $log_err . '</span></p>');
					}
				?>
    	</center>
          
		</form>
		</div>
</div> <!-- End DIV PAGE -->		
	
		
