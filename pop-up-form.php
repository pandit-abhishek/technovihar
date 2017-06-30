<div id="client-area" class="uk-modal pop-up-form">
		<!--<a href="#"><i class="fa fa-times form-close" aria-hidden="true"></i></a>-->
            <div class="uk-modal-dialog">
				
                <ul id="client-area-tab" class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#account'}">
                   <!--  <li class="uk-width-large-1-2"><a href="">Sign in</a></li> -->
                    <li class="uk-width-large-1-2 uk-active"><a href="">Enquire Now!</a></li>
					

                </ul>

                <ul id="account" class="uk-switcher uk-margin">
                	<!-- Modal Login Form -->
                   <!--  <li>
                        <form id="signin-account" class="uk-form">
                            <fieldset>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-envelope"></i>
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-key"></i>
                                    <input type="text" placeholder="Password">
                                </div>
                                <label>
                                    <input type="checkbox">Remember me</label>
                                	<a href="client-area.html" class="uk-button uk-button-large idz-button blue uk-width-large-1-1">Login</a>
                            </fieldset>
                        </form>
                    </li> -->
                	<!-- Modal Login Form End -->
					
					<!-- Modal Register Form -->         
					<li>
                        <form id="create-account" name = "create-account" class="uk-form" method="POST" action="index.php">
                            <fieldset>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-user"></i>
                                    <input type="text" placeholder="Name" id="userName" name="userName">
                                </div>
								 <div class="uk-form-icon">
								    <i class="uk-icon-phone"></i>
                                    <input type="text" placeholder="Mobile Number"  id="mobileNo" name="mobileNo">
                                </div>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-envelope"></i>
                                    <input type="text" placeholder="Email"  id="emailId" name="emailId">
                                </div>
                                <div class="uk-form-icon">
                                   <!--  <i class="uk-icon-envelope"></i> -->
                                    <textarea type="text" placeholder="Message..."  id="userMessage" name="userMessage"></textarea>
                                </div>
								
								<script src='https://www.google.com/recaptcha/api.js'></script>
								<div class="g-recaptcha" data-sitekey="6Lc1vSEUAAAAAIOqSILOS4YIQs0wtvj6IFZxLDZp"></div>
								
								<input type="text" name="botChk" id="botChk" value="" style="display: none;">
								<button type="submit">Submit</button>
                            </fieldset>
                        </form>
                    </li>
                    <!-- Modal Register Form End -->
                </ul>
            </div>
        </div>