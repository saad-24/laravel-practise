<?php include __DIR__ . '/include/header.php'?>

<body class="regBody">


    <section class="registBanner">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-6 p-0">
                    <div class="registForm text-center">
                        <div>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="card regCard">
                                            <form id="msform">

                                                <fieldset>
                                                    <div class="field-Display"> </div>
                                                    <h2 class="sectionheading"><span>Join</span> <span
                                                            class="yellow">Us</span></h2>
                                                    <div class="form-card">
                                                        <label class="fieldlabels">Full Name: *</label>
                                                        <input type="text" name="uname" />

                                                        <label class="fieldlabels">Email: *</label>
                                                        <input type="email" name="email" class="email-Input" />
                                                        <small class="smallForm">We'll never share your email.</small>

                                                    </div>
                                                    <input type="button" name="next" class="next themeBtn"
                                                        value="Next" /><br>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2 class="steps">Step <span>1</span> out of <span>4</span>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <h2 class="sectionheading"><span>Create password</span></h2>
                                                    <div class="form-card">
                                                        <label class="fieldlabels">Password *</label>
                                                        <input type="password" class="email-Input" name="password"
                                                            placeholder="Strong-Password123#." />
                                                        <small class="smallForm">Passwords should have:</small>
                                                        <ul class="passList">
                                                            <li>Minimum length at 8 characters</li>
                                                            <li>At least one uppercase character is required</li>
                                                            <li>At least one lowercase character is required</li>
                                                            <li>Number character(s) is required</li>
                                                        </ul>
                                                    </div>

                                                    <input type="button" name="next" class="next themeBtn"
                                                        value="Create Account" />



                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2 class="steps">Step <span>2</span> out of <span>4</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <h2 class="sectionheading"><span>Enter phone number</span></h2>
                                                    <div class="form-card">
                                                        <input id="phone" type="tel" class="phonePadding"
                                                            name="phone" />


                                                    </div>

                                                    <input type="button" name="next" class="next themeBtn"
                                                        value="Next" />


                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2 class="steps">Step <span>3</span> out of
                                                                <span>4</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="sectionheading"><span>Verify Phone Number</span></h2>
                                                        <p>Please enter the one-time-password (OTP) sent to you</p>
                                                        <input type="text" name="password" placeholder="Code" />
                                                    </div>

                                                    <input type="button" name="next" class="next themeBtn"
                                                        value="Submit" />

                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2 class="steps">Step <span>4</span> out of
                                                                <span>4</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </fieldset>


                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="sectionheading"><span>Investment Planning</span></h2>
                                                        <p>How much do you plan to invest in the next 12 months?</p>

                                                        <div class="aedForm">
                                                            <figure>
                                                                <img src="assets/images/logo.png" class="img-fluid"
                                                                    alt="">
                                                            </figure>
                                                            <h4>Invest From</h4>
                                                            <h2>AED 500</h2>
                                                            <ul>
                                                                <li><i class="far fa-check"></i> AED 200 for each
                                                                    qualified referral</li>
                                                                <li><i class="far fa-check"></i> Member events</li>
                                                                <li><i class="far fa-check"></i> Market updates</li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <input type="button" name="next" class="next themeBtn"
                                                        value="Proceed" />

                                                    <!-- <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2 class="steps">Step <span>4</span> out of
                                                                <span>4</span>
                                                            </h2>
                                                        </div>
                                                    </div> -->
                                                </fieldset>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="registCont">
                        <figure>
                            <img src="assets/images/moneyImg.png" class="img-fluid w-100" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include __DIR__ . '/include/footer.php'?>