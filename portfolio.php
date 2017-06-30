<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
    <!--head -->
	<?php include 'head.php';?>
	<!--end-head-->
    <body>
        
        <!-- Header Section -->
         <!--head -->
		<?php include 'header.php';?>
		<!--end-head-->
        <!-- Header Section End -->

        <!-- Page Header -->
        <section id="idz-header-inner">
            <div class="uk-container uk-container-center">
                    
                <div class="idz-page-title idz-padding-medium">
                    <div class="uk-grid">
                    	<!-- Page Header Title -->
                        <div class="uk-width-large-1-2 uk-width-medium-1-3">
                            <div class="idz-title">
                                <h1 class="">Portfolio<span>Our works</span></h1>
                                <i class="uk-icon-server"></i>
                            </div>
                        </div>
                        <!-- Page Header Title End -->
						
						<!-- Page Description -->
                         <div class="uk-width-large-1-2 uk-width-medium-2-3">
                            <div class="uk-grid">
                                <div class="uk-width-medium-3-4 uk-push-1-4">
                                    <div class="idz-page-promo uk-margin-top">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-4 uk-pull-3-4"></div>
                          	</div>
                       	</div>
                       	<!-- Page Description -->

                    </div>
                </div>

            </div>
        </section>
        <!-- Page Header End -->

       	<!-- Content Section -->
        <section class="idz-padding uk-margin-top">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-large-1-1">
                    	<h3 class="idz-text-22px uk-hidden-small uk-hidden-medium uk-hidden-large">Intro Text</h3>
                        <!-- begin portfolio filter -->
                        <ul id="filter" class="uk-subnav uk-subnav-pill uk-margin-medium-bottom">
                            <li><i class="uk-icon-bars"></i></li>
                            <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                            <li data-uk-filter="print"><a href="#">Print Design</a></li>
                            <li data-uk-filter="web"><a href="#">Web Design</a></li>
                            <li data-uk-filter="motion"><a href="#">Motion Graphics</a></li>
                        </ul>
                        <!-- portfolio filter end -->
                    </div>
                </div>
                <ul id="pf-container" class="uk-grid-width-medium-1-3 uk-grid-width-small-1-2 uk-margin-large-bottom" data-uk-grid="{gutter: 35, controls: '#filter'}">
                    <li data-uk-filter="web, motion">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p1.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p1.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="motion">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p2.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p2.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="web print">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p3.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p3.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="web">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p4.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p4.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="print">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p5.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p5.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="motion">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p6.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p6.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="print">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p7.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p7.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="motion">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p8.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p8.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                    <li data-uk-filter="web">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="images/portfolio-thumb/p9.jpg" alt="" class="uk-overlay-spin" />
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                            <a class="uk-position-cover" href="images/portfolio-big/p9.jpg" data-uk-lightbox="{group:'portfolio'}" title="Project Name"></a>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Content Section End -->

        <!-- Footer -->
		<!--footer-->
		<?php include 'footer.php';?>
		<!-- Footer End -->
		<!-- Footer End -->

		<!-- client area modal begin -->
        <div id="client-area" class="uk-modal">
            <div class="uk-modal-dialog">

                <ul id="client-area-tab" class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#account'}">
                    <li class="uk-active uk-width-large-1-2"><a href="">Sign in</a></li>
                    <li class="uk-width-large-1-2"><a href="">New account</a></li>
                </ul>

                <ul id="account" class="uk-switcher uk-margin">
                	<!-- Modal Login Form -->
                    <li>
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
                    </li>
                	<!-- Modal Login Form End -->
					
					<!-- Modal Register Form -->
                    <li>
                        <form id="create-account" class="uk-form">
                            <fieldset>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-user"></i>
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-envelope"></i>
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-key"></i>
                                    <input type="text" placeholder="Password">
                                </div>
                                <label>
                                    <input type="checkbox">I agree to the <a href="#">Terms</a></label>
                                <a href="client-area.html" class="uk-button uk-button-large idz-button blue uk-width-large-1-1">Create account</a>
                            </fieldset>
                        </form>
                    </li>
                    <!-- Modal Register Form End -->
                </ul>
                <div class="uk-modal-caption">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
        <!-- client area modal end -->

       
    </body>
</html>