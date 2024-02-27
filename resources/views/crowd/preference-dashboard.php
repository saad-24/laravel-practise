<?php include __DIR__ . '/include/header.php'?>

<body class="dashboard">



    <section class="dashboard-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-2 p-0">
                    <?php include __DIR__ . '/include/dashboard-left.php'?>
                </div>
                <div class="col-md-10 p-0">
                    <div class="dashRight">
                        <div class="drTop">
                            <div class="lang">
                                <a href="javascript:;"><i class="fal fa-globe"></i> EN</a>
                            </div>
                            <p>Complete onboarding. Local regulations require all investors to complete onboarding
                                before they can invest.</p>
                            <div class="dasheadBtn">
                                <a href="javascript:;">Complete Onboarding</a>
                            </div>
                        </div>
                        <div class="drMedium">
                            <h2>Preferences</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="newRight">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="transac-table">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="insCard insQuick">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for=""><span><i
                                                                                        class="fal fa-globe"></i></span>Language</label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <select id="inputState"
                                                                                    class="form-control">
                                                                                    <option selected>English</option>
                                                                                    <option>Arabic</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for=""><span><i
                                                                                        class="far fa-dollar-sign"></i></span>
                                                                                Currency</label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <select id="inputState"
                                                                                    class="form-control">
                                                                                    <option selected>ADE</option>
                                                                                    <option>EGP</option>
                                                                                    <option>USD</option>
                                                                                    <option>EUR</option>
                                                                                    <option>GBP</option>
                                                                                    <option>SAR</option>
                                                                                    <option>KWD</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="mailMarket">
                                                                <h3>Marketing emails</h3>
                                                                <p>Receive newsletters, promotional offers, new property
                                                                    launch emails and more.</p>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <?php include __DIR__ . '/include/footer.php'?>