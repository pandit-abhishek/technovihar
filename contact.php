<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

     <!--head -->
	<?php include 'head.php';?>
	<!--end-head-->

    <body>
        
        <!-- Header Section -->
		<?php include 'header.php';?>
        <!-- Header Section End -->

		<section id="idz-header-contact">
			<div id="idz-gmap"></div>
			<div class="idz-color-overlay"></div>

				<div class="idz-contact-overlay idz-padding-medium">
					<div class="uk-container uk-container-center">
						
						<div class="uk-grid" data-uk-margin>

							<div class="uk-width-medium-1-1"><h1 class="uk-text-contrast uppercase uk-margin-large-bottom">Meet Us</h1></div>
						
							<!--<div class="uk-width-medium-1-2 uk-margin-large-bottom">
								<div class="idz-contact-box">
									<p class="idz-text-22px uk-text-contrast uk-margin-remove idz-margin-bottom-tiny">Manhattan</p>
									<h1 class="idz-text-48px uk-text-contrast">1-800-123-4567</h1>
									<span class="idz-text-block">24/7 Support</span>
									<span class="idz-text-block">cs.manhattan@altishost.com</span>
								</div>
							</div> -->

							<div class="uk-width-medium-1-2 uk-margin-large-bottom address-details">
								<div class="idz-contact-box">
									<p class="idz-text-22px uk-text-contrast uk-margin-remove idz-margin-bottom-tiny">Los Angeles</p>
									<h1 class="idz-text-48px uk-text-contrast">1-500-234-3376</h1>
									<span class="idz-text-block">24/7 Support</span>
									<span class="idz-text-block">cs.losangeles@altishost.com</span>
								</div>
							</div>

							<div class="uk-width-medium-1-1">
								<p class="idz-text-18px uk-text-contrast">Altis Hosting customer support is available free of charge. Connection charges can vary when calling from outside the area, abroad or from a mobile phone, depending on your specific phone plan.</p>
							</div>

						</div>

					</div>
				</div>
		</section>
	
		
	
		<section class="idz-padding">
			<div class="uk-container uk-container-center">
				<div class="uk-grid">

					<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-container-center">

						<h1>Get in Touch</h1>
						<p class="idz-text-18px idz-text-blue">For <strong>Billing</strong> or <strong>Support</strong> inquiries, please log in to the Customer Portal and use the "support" tab.</p>

						<div id="contact-form-wrapper">
                            <form id="contact-form" class="uk-form">
                                <fieldset>
                                    <label>Name <em class="required">*</em></label>
                                    <input type="text" name="name" class="textfield" id="name" value="" />
                                    <label>E-mail <em class="required">*</em></label>
                                    <input type="email" name="email" class="textfield" id="email" value="" />
                                    <label>Subject <em class="required">*</em></label>
                                    <input type="text" name="subject" class="textfield" id="subject" value="" />
                                    <label>Message <em class="required">*</em></label>
                                    <textarea name="message" id="message" class="textarea" cols="2" rows="6"></textarea>
                                    <label>&nbsp;</label>
                                    <button type="submit" name="submit" class="uk-button idz-button blue uk-align-right" id="buttonsend">Submit</button>
                                    <span class="loading" style="display: none;">Please wait..</span>
                                </fieldset>
                            </form>
                        </div>

					</div>

					<div class="uk-width-large-1-2 uk-width-medium-1-1">
						<h1>Additional Contacts</h1>
						<div class="uk-clearfix"></div>

						<div class="uk-grid">

							<div class="uk-width-medium-1-2">
								<h3 class="idz-text-22px">Media relations</h3>
								<ul class="uk-list ">
									<li><i class="uk-icon-user idz-text-blue idz-margin-right-small"></i>John Paul</li>
									<li><i class="uk-icon-phone idz-text-blue idz-margin-right-small"></i>1-800-123-4455</li>
									<li><i class="uk-icon-envelope idz-text-blue idz-margin-right-small"></i>johnpaul@altishost.com</li>
								</ul>
							</div>

							<div class="uk-width-medium-1-2">
								<h3 class="idz-text-22px">Affiliate program</h3>
								<ul class="uk-list ">
									<li><i class="uk-icon-user idz-text-blue idz-margin-right-small"></i>Ralph Wagner</li>
									<li><i class="uk-icon-phone idz-text-blue idz-margin-right-small"></i>1-800-123-4456</li>
									<li><i class="uk-icon-envelope idz-text-blue idz-margin-right-small"></i>ralphw@altishost.com</li>
								</ul>
							</div>

						</div>

						<hr class="uk-grid-divider">
						
						<h3 class="idz-text-22px">Affiliate program</h3>
						<ul class="uk-list ">
							<li class="idz-margin-right-small">2733 Sigley Road</li>
							<li class="idz-margin-right-small">Manhattan Ville</li>
							<li class="idz-margin-right-small">New York 10016, US</li>
						</ul>

					</div>

				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include 'footer.php';?>
		<!-- Footer End -->

		<!-- client area modal begin -->
        <?php include 'pop-up-form.php';?>
        <!-- client area modal end -->
    </body>
</html>
