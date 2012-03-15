<?php
// $Id$;
global $theme;
$image_location = $GLOBALS['base_url'].'/'.drupal_get_path('theme', $theme);
?>
<!--
    <div style="font-size:12px; color:#333333; font-style: italic; text-align:left; margin:3px 0px 25px 8px;">Registration is free and open to all practicing healthcare professionals with an interest in  spinal disorders.</div> -->
    <div class="professionalRegLeft">
 <!--     <div class="alredayReg">Already registered? <?php print l(t("Log in"),"user/login") ?> here!<br />
        Not a healthcare professional? <?php //print l(t("Register"),"register/member") ?> or <?php //print l(t("Log in"),"user/login") ?> here!</div>-->
    
      <ul class="regBenefits">
        <li><b>Add your practice to the physician directory on the patient site</b></li>
        
		<li><b>Education and learning invitations:</b> Receive regular market research and updates on new technology from us.</li>
        <li><b>Full access to case studies:</b> Offer treatment suggestions and engage with other spine experts in our case library.</li>
		
        <li><b>updates on medical education opportunities:</b> Receive email reminders about upcoming online and offline spine medical education programs.</li>
      </ul>
	  <p><b>Please Note</b>: By submitting your name and practice information, you agree to I) have your information publicly available in the Aging Spine Center's Physician Directory, and II) be contacted periodically by Alphatec Spine.</p>
    </div>
    <div class="innerRightRegistration">
      <div class="RegistrationtopCurve">
        <p>Get Started Now! </p>
      </div>
      <div class="accountRegistration">
        <?php print $contents->form ; ?>
      <div><img src="<?php print $image_location; ?>/images/curve_bottom.gif" /></div>
    </div>
  </div>
          
        </div>