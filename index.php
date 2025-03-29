<?php
// Get the page parameter from the .htaccess rewrite
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <title>
        <?php
        switch ($page) {
            case 'about':
                echo 'About Us - Property Buyers Connect';
                break;
            case 'faqs':
                echo 'FAQ - Property Buyers Connect';
                break;
            case 'contact':
                echo 'Contact Us - Property Buyers Connect';
                break;
            case 'post-wtb':
                echo 'Post (WTB) - Property Buyers Connect';
                break;
            case 'search-wtb':
                echo 'Search (WTB) - Property Buyers Connect';
                break;
            default:
                echo 'Property Buyers Connect';
                break;
        }
        ?>
    </title>
    <style>
        /* Base styles from original index.php and Search WTB */
        body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.42857143; color: #333333; background-color: #fff; padding-top: 61px; }
        p { color: #6c6c6f; font-size: 1em; }
        h1, h2, h3, h4, h5, h6 { color: #323233; text-transform: uppercase; font-family: 'Roboto Slab', serif; }
        h3 { font-size: 30px; line-height: 36px !important; }
        h4 { font-size: 20px; line-height: 36px !important; text-transform: capitalize; }
        label { font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 600; letter-spacing: 1.3px; }
        label span { color: red; font-size: 18px; font-weight: 500; display: inline-block; }
        hr { border: 0; height: 1px; margin-bottom: 45px; background-image: linear-gradient(left, transparent, rgba(0, 0, 0, 0.2), transparent); }
        .navbar-brand { color: #fff; font-size: 25px; font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive; font-weight: 700; letter-spacing: 0.1em; }
        .navbar-nav .nav-item .nav-link { padding: 1.1em 1em !important; font-size: 14px; font-weight: 400; letter-spacing: 1px; color: #1f488d; font-family: 'Roboto Slab', serif; text-transform: uppercase; }
        .navbar-nav .nav-item .nav-link:hover { color: #fed136; }
        .navbar-expand-md .navbar-nav .dropdown-menu { border-top: unset; margin: 1.2rem 0 0; background-color: #000; }
        .dropdown-item { color: #fff; }
        .dropdown-item:hover { background-color: #000; color: #fed136; }
        .dropdown-menu a { padding: 7px 15px; font-family: 'Roboto Slab', serif; font-weight: 400; font-size: 14px; line-height: 23px; text-transform: uppercase; }
        nav#banner { background-color: #fffdfd; border-bottom: 1px solid #ddd; }
        .banner { text-align: center; color: #fff; background-image: url('assets/images/guerilla-banner2.jpg'); background-repeat: no-repeat; background-attachment: scroll; background-position: center center; background-size: cover; }
        .banner-text { padding: 130px 0 85px 0; }
        .banner-heading { font-family: 'Roboto Slab', serif !important; font-size: 60px; font-weight: 700; line-height: 80px; margin-bottom: 10px; color: #fff; }
        .banner-sub-heading { font-family: 'Lato', Arial, Helvetica, sans-serif !important; font-size: 21px; font-weight: 300; line-height: 30px; margin-bottom: 50px; color: #fff; }
        .btn-banner { padding: 5px 20px; margin-bottom: 15px; border-radius: 10px; font-weight: 700; line-height: 1.5; text-align: center; color: #fff; text-transform: uppercase; }
        .callout-dark { color: #fff; z-index: 10; position: relative; background-color: #2d2d2d !important; }
        .callout-dark p { color: #fff !important; font-size: 17px !important; max-width: inherit !important; margin: inherit !important; }
        .callout-dark h3 p { color: #fff !important; font-size: 30px !important; max-width: inherit !important; margin: inherit !important; }
        .heading-title.heading-arrow-bottom::after { content: ' '; position: absolute; width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #2d2d2d !important; left: 50%; margin-left: -20px; bottom: -20px; }
        section.page-header { position: relative; padding: 80px 0 20px 0; background-attachment: fixed; background-position: center center; background-repeat: no-repeat; background-size: cover !important; box-sizing: border-box !important; border-top: 0; margin-top: 0; margin-bottom: 0 !important; background-color: rgba(0, 0, 0, 0.05); border-bottom: rgba(0, 0, 0, 0.05) 1px solid; transition: all 0s; }
        section.page-header h1 { margin-bottom: 0px !important; font-family: 'Roboto Slab', serif; font-size: 26px; font-weight: 300; color: #414141; line-height: 1.5; text-transform: capitalize; }
        #contentwrap { margin-top: 60px; margin-bottom: 100px; font-family: 'Open Sans', Arial, Helvetica, sans-serif !important; }
        #contentwrap p { color: #666 !important; font-size: 14px; line-height: 1.42857143; }
        #faqs .card { margin-bottom: 4px; }
        #faqs .card-link h4 { font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 600; color: #414141; line-height: 1.5; letter-spacing: normal; text-transform: capitalize; }
        #mainpage h3 { font-family: 'Roboto Slab', serif; font-size: 24px; font-weight: 400; color: #414141; line-height: 1.5; letter-spacing: normal; text-transform: capitalize; margin-bottom: 30px; border-bottom: 2px solid #ccc; }
        footer { color: rgba(255, 255, 255, 0.6); background: linear-gradient(to bottom, #555555 0%, #313131 100%); }
        footer > .copyright { background-color: rgba(0, 0, 0, 0.2); text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); padding: 25px 0; font-size: 13px; display: block; }
        .pull-right { float: right !important; }
        .pull-left { float: left !important; }

        /* Styles from Search WTB */
        #search h3 { font-family: 'Roboto Slab', serif; font-size: 24px; font-weight: 400; color: #414141; line-height: 1.5; letter-spacing: normal; text-transform: capitalize; margin-bottom: 30px; border-bottom: 2px solid #ccc; }
        #search form { margin-top: 40px; }
        #search { margin-bottom: 100px; }
        .listing-item p { color: #666; font-family: 'Open Sans', Arial, Helvetica, sans-serif; }
        .listing-item h3 { line-height: 1.5; font-weight: 600; color: #414141; font-size: 24px; letter-spacing: normal; font-family: 'Roboto Slab', serif; text-transform: capitalize; border-bottom: unset !important; }
        .listing-options i.fa { width: 25px; }
        .listing-options ul { list-style-type: none; margin-left: 0px; padding-left: 0px; }
        .listing-options li { color: #666; padding-left: 0px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; }
        .font12 { font-size: 12px !important; }
        .font14 { font-size: 14px !important; }
        .font15 { font-size: 15px !important; }
        .font16 { font-size: 16px !important; }
        .font17 { font-size: 17px !important; }
        .font18 { font-size: 18px !important; }
        .font20 { font-size: 20px !important; }
        .font22 { font-size: 22px !important; }
        .socialpop i.fab { width: 30px; height: 30px; line-height: 30px; font-size: 16px; border-radius: 50%; text-align: center; transition: 0.5s all; }
        .socialpop i.fab.fa-facebook-f { color: #fff; background-color: #3b5998; }
        .socialpop i.fab.fa-twitter { color: #fff; background-color: #1d9bf0; }
        .socialpop i.fab.fa-linkedin-in { color: #fff; background-color: #0270ad; }
        .socialpop i.fab.fa-whatsapp { color: #fff; background-color: #12940a; }
        .socialpop i.fab.fa-facebook-f:hover { background-color: #17233E; }
        .socialpop i.fab.fa-twitter:hover { background-color: #17233E; }
        .socialpop i.fab.fa-linkedin-in:hover { background-color: #17233E; }
        .socialpop i.fab.fa-whatsapp:hover { background-color: #17233E; }

        /* New styles from Post WTB */
        .msg-sent { color: red; font-weight: bold; }
        .start-hidden { display: none; }
        #checkuser-error { display: none; color: red; }
        .navbar-brand span { color: #fed136; }
        .shrink { padding-top: 0; padding-bottom: 0; background-color: #212529; }
        nav { -webkit-transition: padding-top .3s, padding-bottom .3s; -moz-transition: padding-top .3s, padding-bottom .3s; transition: padding-top .3s, padding-bottom .3s; border: none; }
        nav.shrink .navbar-brand img { max-height: 60px; }
        .text-intro { width: 90%; margin: auto; text-align: center; padding-top: 30px; }
        #post { margin-bottom: 100px; }
        #options h4 { font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 400; color: #414141; line-height: 1.5; letter-spacing: normal; text-transform: capitalize; }
        #options form { margin-top: 40px; }
        #options .card { margin-bottom: 4px; }
        #options .fa, #options .fas { margin-right: 5px; }
        /* Inline styles from Post WTB */
        .container[style*="padding: 0px; height: 55px;"] { padding: 0px; height: 55px; }
        .pull-right[style*="margin-top:-33px;overflow:visible;"] { margin-top: -33px; overflow: visible; }
        .copyright[style*="padding: 0px; margin: 0 auto; height: 55px;"] { padding: 0px; margin: 0 auto; height: 55px; }

        @media (max-width: 500px) {
            .navbar-nav { background-color: #000; border-top: 3px solid #fed136; color: #fff; z-index: 1; margin-top: 5px; }
            .navbar-nav .nav-item .nav-link { padding: 0.7em 1em !important; font-size: 100%; font-weight: 500; }
            .banner-text { padding: 150px 0 150px 0; }
            .banner-heading { font-size: 30px; line-height: 30px; margin-bottom: 20px; }
            .banner-sub-heading { font-size: 10px; font-weight: 200; line-height: 10px; margin-bottom: 40px; }
        }
        @media (max-width: 768px) {
            .banner-text { padding: 150px 0 150px 0; }
            .banner-sub-heading { font-size: 23px; font-weight: 200; line-height: 23px; margin-bottom: 40px; }
        }
        @media (max-width: 991px) { .hidden-small { display: none !important; } }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/about">About Us</a>
                            <a class="dropdown-item" href="/giving-back">Giving Back</a>
                            <a class="dropdown-item" href="/contact">Contact Us</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Post</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/post-wtb">Post Want to Buy (WTB)</a>
                            <a class="dropdown-item" href="/post-wtr">Post Want to Rent (WTR)</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Search</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/search-wtb">Search Want to Buy (WTB)</a>
                            <a class="dropdown-item" href="/search-wtr">Search Want to Rent (WTR)</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faqs">FAQ'S</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resource-center">Resource Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Signup / Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    switch ($page) {
        case 'home':
            ?>
            <div class="banner">
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-md-8 offset-md-4">
                                <div class="banner-heading">Join the Evolution.</div>
                                <div class="banner-sub-heading">A Real Estate Buyer's Marketplace that's Changing the Rules!</div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 text-center">
                                        <a href="/post-wtb" class="btn btn-warning text-dark btn-banner">Post a "Want to Buy"</a>
                                        <a href="/post-wtr" class="btn btn-warning text-dark btn-banner">Post a "Want to Rent"</a>
                                    </div>
                                    <div class="col-lg-2 hidden-small"><div id="app"></div></div>
                                    <div class="col-lg-5 col-md-6 text-center">
                                        <a href="/search-wtb" class="btn btn-warning text-dark btn-banner">Search "Want to Buy"</a>
                                        <a href="/search-wtr" class="btn btn-warning text-dark btn-banner">Search "Want to Rent"</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="callout-dark heading-title heading-arrow-bottom" style="padding-top: 25px;padding-bottom: 25px;">
                <div class="text-center container">
                    <h3><p>A NEW WAY TO BUY OR RENT PROPERTY<br></p></h3>
                    <p>Scroll down to read more...</p>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <div id="mainpage">
                    <h3>What is Property Buyers Connect?</h3>
                    <p class="mt-4">This is a Real Estate Marketplace where our goal is to enable potential Buyers and Renters to post their real estate needs to a wide audience using what we call <b>Want to Buy</b> or <b>Want to Rent</b> posts (<b>WTB</b> or <b>WTR</b>). The goal is to allow ANY potential Seller, Landlord, Owner, Realtor®, Broker, Property Manager, Builder, etc. to respond individually and confidentially.</p>
                    <div class="embed-responsive embed-responsive-16by9 mt-5"><iframe class="tc-attributes embed-responsive-item" src="https://www.youtube.com/embed/SRD5lEaJ9yk"></iframe></div>
                    <h3 class="mt-5">Why?</h3>
                    <p class="mt-4">Buyers and Renters spend countless hours sifting through hundreds of sites directed at showcasing Sellers' properties, they’re helpful, but they’re all alike. Every potential Buyer/Renter and Seller/Landlord can create their own <b>Inbox</b> to receive confidential responses and reply only to those they consider appropriate. If you want even More convenience, you can sign-up for <b>e-mail Notifications</b> or <b>SMS Text Notifications</b></p>
                    <h3 class="mt-5">Registration Information:</h3>
                    <p class="mt-4">Registration is simple, the only thing you need to do as a potential Buyer/Renter or Seller/Landlord is create your personal Dashboard with individual User-Name and Password, that’s it! Your e-mail address or mobile phone number are <b>NOT required</b>, ever (Unless you want to receive e-mail or text Notifications. We’re smart but we still haven’t figured a way around that...yet)!</p>
                    <h3 class="mt-5">For More Information:</h3>
                    <p class="mt-4">To learn more about how www.propertybuyersconnect.com is going to change the way you search for or market Real Estate, visit the <b>About</b> and <b>FAQ</b> tabs on the Home Page or email us directly at <a href="mailto:info@propertybuyersconnect.com">info@propertybuyersconnect.com</a>.</p>
                </div>
            </div>
            <?php
            break;

        case 'about':
            ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"><h1>About Property Buyers Connect</h1></div>
                        <div class="col-md-5">
                            <span>
                                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-top:-15px;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/instagram-icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <p>Propertybuyersconnect.com is the first Real Estate website dedicated to the needs of Buyers and Renters by creating a private communication forum open to all users. Here’s how it works (and it REALLY is this simple):</p>
                <p>    • Go to the <u><b>Dashboard</b></u> icon from the main task bar and set up your account to create and send posts and receive messages in your personal <i><b>InBox</b></i>.  All you’ll need to do is create a User-Name and Password…<span>NO </span>e-mail address is required, EVER. (The other typical websites have one common and irreplaceable goal...to obtain your PERSONAL CONTACT INFORMATION either for themselves or to be delivered to the "Highest Bidder")!</p>
                <p>    • Then go to the <u><b>Post</b></u> icon on the main task bar and select either <i><b>Want to Buy (WTB)</b></i> for potential Buyers or <i><b>Want to Rent (WTR)</b></i> for potential Tenants and just follow the prompts and the easy to use instructions.</p>
                <p>    • Potential Sellers or Landlords will also follow those same steps and then search Buyer or Tenant posts by City, State, Zip Code, etc. and respond only to those that are appropriate for you.</p>
                <p>    • Your personal <b><i>InBox</i></b> will be found in your <u><b>Dashboard</b></u> which enables you to send and receive messages directly and discretely with other users.</p>
                <p>    • If you wish to receive notifications of Responses to your <i><b>Want to Buy</b></i> or <i><b>Want to Rent</b></i> posts via e-mail or SMS Text you can do so in your Profile page at any time!  Again, this is 100% optional as your e-mail address or mobile phone number will NEVER be required.</p>
                <p>One of the most cumbersome internet searches involves real estate, and most sites are good at finding new ways to feature the same properties. Many people use those types of sites for more than finding homes; some look for design trends, ideas on places they might want to live, or any number of reasons other than to buy or sell Real Estate.</p>
                <p>But, if you truly want to find a property that fits your criteria, then why not have that property find you!  www.propertybuyersconnect.com is designed to have potential Sellers contact you discretely after reading your individual <i><b>Want To Buy (WTB)</b></i> or <i><b>Want To Rent (WTR)</b></i> post and allowing the results to come directly to your personal Inbox instead of wasting countless hours looking at the same properties over and over.  Or, if you want to potentially sell your property but not go through the “normal” routines, our site was created for you. This site is dedicated to changing the way we search Real Estate as well offer new avenues for potential Sellers.</p>
                <p>As stated in our FAQ’s, if you haven’t already read them, we are not trying to advocate anything other than creating an open forum of communication between potential Buyers, Sellers, Tenants, Landlords, and Realtors®. Each party will be given a private Inbox in their own personal Dashboard. Once established, the written communication is 100% direct and 100% Private between the parties, and what happens from that point on is entirely up to them. Open communication breeds competition and www.propertybuyersconnect.com was designed to open this process to everyone.  If you want more insight, write us at <a href="mailto:info@propertybuyersconnect.com">info@propertybuyersconnect.com</a> or follow us on social media.  But no matter where you are, you can bet things will be VERY different from now on.</p>
            </div>
            <?php
            break;

        case 'faqs':
            ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"><h1>Frequently Asked Questions</h1></div>
                        <div class="col-md-5">
                            <span>
                                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-top:-15px;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/instagram_icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <div id="faqs">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse1"><h4>What makes this service/site different than others?</h4></a>
                        </div>
                        <div id="collapse1" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Everything! We're trying to streamline the process for potential Buyers or Tenants to broadcast their Buying or Rental needs to a wide audience. Potential Sellers, Landlords, Realtors, and Property Managers can respond directly with as much information as they wish.<br><em>*The more specific and relevant the potential Seller response, the more likely they'll get a response back!</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse2"><h4>How Do I Know If Someone Has Responded my Want to Buy (WTB) or Want to Rent (WTR) Post?</h4></a>
                        </div>
                        <div id="collapse2" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                When creating your Profile you can indicate whether you wish to receive e-mail and/or SMS/Text notifications when someone responds to your WTB/WTR post. E-Mail addresses and Mobile Phone Numbers are strictly OPTIONAL and are to be given ONLY if you wish to receive notifications. If you don't wish to provide them, simply use your dedicated InBox in your Dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse3"><h4>How Do I Know If There Is a Want to Buy (WTB) or Want to Rent (WTR) Post In A Certain Area?</h4></a>
                        </div>
                        <div id="collapse3" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                When creating your Profile you can indicate whether you wish to receive e-mail and/or SMS/Text notifications when a WTB/WTR post is created for an area you wish to follow. E-Mail addresses and Mobile Phone Numbers are strictly OPTIONAL and are to be given ONLY if you wish to receive notifications. If you don't wish to provide them, simply use your dedicated InBox in your Dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse4"><h4>Do I have to Register or Set up an Account?</h4></a>
                        </div>
                        <div id="collapse4" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                The only requirement to post or reply as an Individual User to a Want to Buy (WTB) or Want to Rent (WTR) post will be to activate your personal Dashboard to receive responses to your InBox. NO e-mail address or mobile phone number is required for registration. E-mail addresses are an OPTIONAL field if you would like to receive a Notification or Reminder that you have received a message in your dedicated InBox. This is not an effort to build a database, sell, share, or collect contact information which is why the e-mail field remains at your discretion...we respect your privacy above all else.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse5"><h4>Is there a Fee for Individual Users to use this service?</h4></a>
                        </div>
                        <div id="collapse5" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                No. The service is 100% FREE to Individual Users (Buyers/Tenants and Sellers/Landlords).<br>For Realtors and other Industry Professionals, there is nominal monthly subscription described below in FAQ.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse6"><h4>How can I find Realtors or other Industry Professionals?</h4></a>
                        </div>
                        <div id="collapse6" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                There is a Resource Center tab leading to a directory so you can pick and choose at your discretion based on the information provided by that person/entity regarding their qualifications and services offered. For Example: John Q. Public, Realtor. I can act as a Facilitator to this transaction for a set fee or reduced commission percentage, etc.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse7"><h4>How much does it cost Realtors and other Industry Professionals to subscribe to www.PropertyBuyersConnect.com?</h4></a>
                        </div>
                        <div id="collapse7" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                There is NO annual contract and there are two tiers of subscription types, Realtors and Industry Professionals (Separately Categorized in the Resource Center)<br>1) Realtor subscription is $14.95 per month via PayPal.<br>2) All other industry professionals/vendors are also billed at the same $14.95 per month via PayPal.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse8"><h4>What if I’m not ready to buy, can I use this site to help me seek a Rental Property?</h4></a>
                        </div>
                        <div id="collapse8" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Absolutely! The site functions the EXACT same way for potential Tenants/Renters and potential Landlords, Owners, Realtors, and Property Managers.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse9"><h4>Is there a section where I can download photos for my property on the site?</h4></a>
                        </div>
                        <div id="collapse9" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                This is not a typical Seller driven website showcasing properties that are already advertised For Sale. Potential Buyers/Tenants post WTB (Want To Buy) or WTR (Want To Rent) requests for ANY potential properties they would like to purchase or rent and potential Sellers/Landlords can reply directly based on the information requested. Whether the property is formally listed for sale or rent has no bearing regarding the use of this site.<br>Your response to a potential Buyer is specific to that WTB (Want To Buy) or WTR (Want To Rent) post. If you wish to include photos, links, PDFs, etc., you should do so in your response via a file sharing service (examples below). We chose this method to ensure the site runs quicker so as to maintain faster page load and response times.<br><em>*We STRONGLY recommend using file sharing services like DropBox, GoogleDrive, SendSpace, etc. to send content to potential Buyers to ensure your information is received. Using a file sharing service allows you to the flexibility to send as much information as you like!</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse10"><h4>Does a property have to be formally listed anywhere in order for a potential Seller/Landlord to respond to a WTB (Want to Buy) or WTR (Want to Rent) Post?</h4></a>
                        </div>
                        <div id="collapse10" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                No. Many Potential Sellers/Landlords do not wish to formally list their property for one reason or another. This enables ANY potential Seller/Landlord the opportunity to respond to a WTB (Want To Buy) or WTR (Want To Rent) post.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse11"><h4>How does a potential Seller/Landlord respond to a potential Buyer/Tenant?</h4></a>
                        </div>
                        <div id="collapse11" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Each WTB (Want To Buy) or WTR (Want To Rent) post comes accompanied by a REPLY TO POST button that will link to the potential Buyers private InBox. Potential Sellers will also be directed to create a personal Dashboard to access their own private InBox for all future correspondence within www.PropertyBuyersConnect.com.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse12"><h4>Does a potential Buyer/Tenant's or a potential Seller/Landlord's preferred e-mail address appear immediately?</h4></a>
                        </div>
                        <div id="collapse12" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                No. The potential Seller/Landlord and Potential Buyer/Tenant will communicate directly through their dedicated InBox created in their personal Dashboard. Their responses will remain confidential until both the potential Buyer/Tenant and the potential Seller/Landlord determine their response and property submission to be appropriate.<br><em>*Once a potential Buyer/Tenant and a potential Seller/Landlord have established the possibility for a transaction to become more realistic they should arrange to communicate directly.</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse13"><h4>As a potential Buyer/Tenant, do I need a Realtor to post a WTB (Want To Buy) or WTR (Want To Rent)?</h4></a>
                        </div>
                        <div id="collapse13" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                No. The choice to employ the services of a Realtor is STRONGLY recommended, but not a requirement for any or all of your potential transaction. That decision is left solely to the discretion of the potential Buyer or Tenant.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse14"><h4>As a potential Seller/Landlord, do I need a Realtor when responding to a WTB (Want To Buy) or WTR (Want To Rent) post?</h4></a>
                        </div>
                        <div id="collapse14" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                No. Same as above, the decision to employ the services of a Realtor is solely at the discretion of the potential Seller/Landlord.<br><em>*This is no way intended to advocate for or against the use of Realtors, however the sale transaction process itself can be complicated and the use of a real estate professional (Realtor, Title Closer, Real Estate Lawyer, etc.) is STRONGLY recommended, even if in only a limited capacity.</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse15"><h4>How long will a WTB (Want To Buy) or WTR (Want To Rent) post remain active?</h4></a>
                        </div>
                        <div id="collapse15" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Your WTB or WTR post will remain active until you choose to either Edit it Or Delete it. We strongly recommend that if you haven't received favorable or adequate responses to your Post that you consider editing the content before deleting.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse16"><h4>What information do I have to provide as either a potential Buyer/Tenant or Seller/Landlord to www.PropertyBuyersConnect.com?</h4></a>
                        </div>
                        <div id="collapse16" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                As a potential Buyer/Tenant or Seller/Landlord the only things required to create your personal Dashboard will be User Name and Password for your dedicated Inbox. This site is intended to act as a portal ONLY to connect Buyers and Sellers who might not ever have reason to correspond.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse17"><h4>How will I know if my WTB (Want To Buy) or WTR (Want To Rent) is effective?</h4></a>
                        </div>
                        <div id="collapse17" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Like sites that focus on Sellers/Landlords who have properties available and/or listed for sale or rent, the information you provide will be self-policing. In short, if your WTB (Want To Buy) or WTR (Want To Rent) request is so far out of line or unrealistic it can’t or won’t be taken seriously, you will get very little, if any, response.<br><em>*Just like sites that have properties available for sale or rent, a Seller/Landlord having an asking price that is so unrealistic and out of line won't have anyone take it seriously, respond, or even inquire about the property. Guess what? As a potential Buyer/Tenant, the same thing can happen. If your WTB (Want To Buy) or WTR (Want To Rent) posts are so unrealistic for one reason or another, they will not be taken seriously and responses will likely be minimal.</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse18"><h4>If I am a Realtor, can I respond to WTB (Want To Buy) or WTR (Want To Rent) posts?</h4></a>
                        </div>
                        <div id="collapse18" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Yes. And you can even post WTB (Want To Buy) or WTR (Want To Rent) notices for yourself on behalf potential clients. You will first be directed to the Subscription page before being able to do so, we don’t want Realtors using our site for “fishing expeditions” or database building, data mining, etc.. A nominal subscription fee will allow you to respond as well as post your own potential WTB (Want To Buy) or WTR (Want To Rent) needs, or those of potential customers. Upon completion of your subscription you will use a dedicated Realtor/Industry Professional Response button to indicate your status as a Realtor. Based on your response to the potential Buyer, they can either respond or not, so try to be as relevant in your response as possible. This nominal monthly subscription fee will demonstrate to potential Buyers/Tenants and Sellers/Landlords that you take your business seriously, and you are interested in new ways of establishing relationships and doing business.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse19"><h4>Why should Realtors use a site that is different than traditional seller driven Real Estate related sites?</h4></a>
                        </div>
                        <div id="collapse19" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Many reasons! Realtors can use this service as a more effective means of communicating their Buyer needs to a wider audience! This is also a great chance for Realtors to showcase “pocket listings” when an appropriate WTB (Want To Buy) or WTR (Want To Rent) post appears. In addition, many people will use the services of a Realtor even if they have used this site, just as they do now with traditional real estate listing based sites. www.PropertyBuyersConnect.com will also be another valuable resource for Realtors to engage potential FSBO, Expired, or Withdrawn properties.<br>Individual users will potentially seek out the services of a Realtor after having have used this site, which we STRONGLY recommend! Negotiations can also include compensation based on the transactional level of service agreed upon and can actually enhance or streamline their careers. With all of the new websites sprouting up every day seeking to take the place of Realtors, www.PropertyBuyersConnect.com is looking to encourage you to customize your services to a whole new audience!
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse20"><h4>What if a Realtor poses as an individual Seller or Buyer while creating or responding to a WTB (Want To Buy) or WTR (Want To Rent) post?</h4></a>
                        </div>
                        <div id="collapse20" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                Report him/her to the appropriate MLS Board, County, State, or National Board of Realtors as they are required legally and ethically to identify themselves as a Realtor in any inquiry regarding real estate transaction, even if it is a property they own. In many States/Counties, even if the Realtor is only related to the Seller or Buyer, they are also required to disclose that as well.<br><em>*Make it easy on yourselves Realtors, use the REALTOR RESPONSE button and avoid even the appearance of impropriety!<br>*Also, if a Realtor is in fact a potential Seller for a property he or she owns, they still have a requirement to identify themselves as a Realtor.</em>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse21"><h4>What is the process if I choose to discontinue my subscription?</h4></a>
                        </div>
                        <div id="collapse21" class="collapse" data-parent="#faqs">
                            <div class="card-body">
                                You simply need to log into your individual PayPal account and "Unsubscribe" from there.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'contact':
            ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"><h1>Contact Us</h1></div>
                        <div class="col-md-5">
                            <span>
                                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-top:-15px;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/instagram_icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <div id="contact">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.</div>
                                <div class="card-body">
                                    <form action="/contact.php" method="post" id="contactform">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" rows="6" required></textarea>
                                        </div>
                                        <div id="response-message"></div>
                                        <div class="mx-auto">
                                            <button type="submit" class="btn btn-primary text-right" id="contactform-submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5">
                            <div class="card bg-light mb-3">
                                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Contact Information</div>
                                <div class="card-body">
                                    <p>General Inquiries: <a href="mailto:info@propertybuyersconnect.com">info@propertybuyersconnect.com</a></p>
                                    <p>Technical Inquiries: <a href="mailto:support@propertybuyersconnect.com">support@propertybuyersconnect.com</a></p>
                                    <p>Telephone: <a href="tel:+18336474663">833-647-HOME (4663)</a></p>
                                </div>
                            </div>
                            <img src="assets/images/contact-us.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'post-wtb':
            ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"><h1>Post a "Want to Buy"</h1></div>
                        <div class="col-md-5">
                            <span>
                                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-top:-15px;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/instagram_icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <div id="post">
                    <h4 class="mb-4">Fill out the short form below to continue...</h4>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        A valid account is required to post a listing.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/addlisting.php" method="post">
                        <input type="hidden" name="type" value="wtb">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="type">Property Type: <span>*</span></label>
                                    <select name="proptype" class="form-control" id="type">
                                        <option value="">Choose a Category</option>
                                        <option value="1">Single Family Home</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Townhome</option>
                                        <option value="4">Residential Income Property</option>
                                        <option value="5">Residential Land</option>
                                        <option value="6">Commercial</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minprice">Minimum Price:</label>
                                    <input name="minprice" type="text" class="form-control" placeholder="Numeric Values Only, e.g.- 1000" id="minprice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="maxprice">Maximum Price:</label>
                                    <input name="maxprice" type="text" class="form-control" placeholder="If used, value should exceed Min Price, Use Numeric Values Only, e.g.- 200000" id="maxprice">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minsqft">Minimum Square Footage:</label>
                                    <input name="minsqft" type="text" class="form-control" placeholder="Numeric Values Only, e.g.- 1000" id="minsqft">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="maxsqft">Maximum Square Footage:</label>
                                    <input name="maxsqft" type="text" class="form-control" placeholder="If used, value should exceed Min SF, Use Numeric Values Only, e.g.- 2000" id="maxsqft">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject: <span>*</span></label>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Think of it as a 'HEADLINE' for your WTB or WTR, e.g.: I want to buy.....see message below.">
                                </div>
                            </div>
                        </div>
                        <div id="options" class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse1">
                                                <h4><i class="fa fa-bed"></i> Beds</h4>
                                            </a>
                                        </div>
                                        <div id="collapse1" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_beds|beds|1|1 Bedroom">1 Bedroom
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_beds|beds|2|2 Bedroom">2 Bedroom
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_beds|beds|3|3 Bedroom">3 Bedroom
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_beds|beds|4|4+ Bedroom">4+ Bedroom
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse2">
                                                <h4><i class="fa fa-tv"></i> Interior Features</h4>
                                            </a>
                                        </div>
                                        <div id="collapse2" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|1|Fireplace">Fireplace
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|2|Granite / Stone Counters">Granite / Stone Counters
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|3|Crown Molding">Crown Molding
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|4|Ceiling Fans">Ceiling Fans
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|5|Furnished">Furnished
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|6|Window Treatments">Window Treatments
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|7|Wet Bars">Wet Bars
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_features|interior|8|Butler Pantry">Butler Pantry
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse3">
                                                <h4><i class="fa fa-utensils"></i> Kitchen Features</h4>
                                            </a>
                                        </div>
                                        <div id="collapse3" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_kitchen|kitchen|1|Island">Island
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_kitchen|kitchen|2|Stainless Appliances">Stainless Appliances
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_kitchen|kitchen|3|Closet Pantry">Closet Pantry
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_kitchen|kitchen|4|Walk In Pantry">Walk In Pantry
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_kitchen|kitchen|5|Breakfast Bar">Breakfast Bar
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse4">
                                                <h4><i class="fa fa-plug"></i> Appliances Included</h4>
                                            </a>
                                        </div>
                                        <div id="collapse4" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|1|Refrigerator">Refrigerator
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|2|Microwave">Microwave
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|3|Range">Range
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|4|Dishwasher">Dishwasher
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|5|Disposal">Disposal
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|6|Washer/Dryer">Washer/Dryer
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|7|Built In Oven">Built In Oven
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|8|Double Oven">Double Oven
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|9|Exhaust Fan / Hood">Exhaust Fan / Hood
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|10|Gas Appliances">Gas Appliances
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_appliances|appliances|11|Water Conditioning / Softner System">Water Conditioning / Softner System
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse5">
                                                <h4><i class="fa fa-paw"></i> Pet Friendly</h4>
                                            </a>
                                        </div>
                                        <div id="collapse5" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pets|pets|1|yes">yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pets|pets|2|no">no
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse6">
                                                <h4><i class="fa fa-cogs"></i> Exterior Construction Type</h4>
                                            </a>
                                        </div>
                                        <div id="collapse6" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|1|Block">Block
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|2|Stucco">Stucco
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|3|Frame">Frame
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|4|Brick">Brick
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|5|Stone">Stone
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|6|Siding">Siding
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_const|construction|7|Tilt-Up Walls">Tilt-Up Walls
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse7">
                                                <h4><i class="fa fa-compass"></i> Property Characteristics</h4>
                                            </a>
                                        </div>
                                        <div id="collapse7" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|2|Waterfront- Pond">Waterfront- Pond
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|5|Waterfront- Other">Waterfront- Other
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|6|Water Access">Water Access
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|7|Golf Front/View">Golf Front/View
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|8|Waterfront-Lake">Waterfront-Lake
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|9|Waterfront - Ocean">Waterfront - Ocean
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|3|Waterfront- River">Waterfront- River
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|1|Waterfront- Canal">Waterfront- Canal
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_propchar|property|4|Waterfront- Bay">Waterfront- Bay
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse8">
                                                <h4><i class="fa fa-bath"></i> Baths</h4>
                                            </a>
                                        </div>
                                        <div id="collapse8"    class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_baths|baths|1|1 Bath">1 Bath
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_baths|baths|2|2 Bath">2 Bath
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_baths|baths|3|3 Bath">3 Bath
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_baths|baths|4|4+ Bath">4+ Bath
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse9">
                                                <h4><i class="fa fa-car"></i> Garage</h4>
                                            </a>
                                        </div>
                                        <div id="collapse9" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|1|1 Car">1 Car
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|2|2 Car">2 Car
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|3|3 Car">3 Car
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|4|4+ Car">4+ Car
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|5|Attached">Attached
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_garage|garage|6|Detached">Detached
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse10">
                                                <h4><i class="fa fa-door-open"></i> Additional Rooms</h4>
                                            </a>
                                        </div>
                                        <div id="collapse10" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|1|Dedicated Office">Dedicated Office
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|2|Bonus Room">Bonus Room
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|3|Game Room">Game Room
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|4|Media Room">Media Room
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|5|Attached In-Law Apt / Guest Suite">Attached In-Law Apt / Guest Suite
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_addrooms|addrooms|6|Detached In-Law Apt / Guest Suite">Detached In-Law Apt / Guest Suite
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse11">
                                                <h4><i class="fa fa-swimming-pool"></i> Pool</h4>
                                            </a>
                                        </div>
                                        <div id="collapse11" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|1|Yes">Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|2|No">No
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|3|Community">Community
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|4|In Ground">In Ground
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|5|Above Ground">Above Ground
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|6|Gunite / Concrete">Gunite / Concrete
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|7|Vinyl">Vinyl
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|8|Screen Enclosed">Screen Enclosed
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|9| Heated"> Heated
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|10|Gas">Gas
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|11|Solar">Solar
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_pool|pool|12|Spa">Spa
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse12">
                                                <h4><i class="fa fa-institution"></i> HOA Info</h4>
                                            </a>
                                        </div>
                                        <div id="collapse12" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_hoa|hoa|1|HOA Yes">HOA Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_hoa|hoa|2|HOA No">HOA No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse13">
                                                <h4><i class="fa fa-calendar-alt"></i> Home Age</h4>
                                            </a>
                                        </div>
                                        <div id="collapse13" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_age|age|1|0-10 Years">0-10 Years
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_age|age|2|10-20 Years">10-20 Years
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_age|age|3|20-30 Years">20-30 Years
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_age|age|4|30-40 Years">30-40 Years
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_age|age|5|40+ Years">40+ Years
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse14">
                                                <h4><i class="fa fa-cubes"></i> Foundation Type</h4>
                                            </a>
                                        </div>
                                        <div id="collapse14" class="collapse" data-parent="#options">
                                            <div class="card-body">
                                                <p>Multiple boxes can be selected.</p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_foundation|foundation|1|Slab">Slab
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_foundation|foundation|2|Basement">Basement
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_foundation|foundation|3|Crawlspace">Crawlspace
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_foundation|foundation|4|Stem Wall">Stem Wall
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="options[]" value="x_options_foundation|foundation|5|Piers / Stilts">Piers / Stilts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea name="message" class="form-control" id="message" placeholder="Type as much specific information about the property you Want To Buy/Rent."></textarea>
                                </div>
                            </div>
                        </div>
                        <div>Once State is selected, City or Zip Code is preferred but only ONE of the two is required, e.g.- Los Angeles, CA or CA 90210</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City: <span>*</span></label>
                                    <input name="city" type="text" class="form-control" placeholder="Seperate multiple cities with commas" id="city">
                                </div>
                            </div>
<div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">State: <span>*</span></label>
                                    <select name="state" class="form-control" id="state">
                                        <option value=""></option>
                                        <option value="AK">Alaska</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">Washington, D.C.</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="IA">Iowa</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MD">Maryland</option>
                                        <option value="ME">Maine</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MT">Montana</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NY">New York</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VA">Virginia</option>
                                        <option value="VT">Vermont</option>
                                        <option value="WA">Washington</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip">Zip Code: <span>*</span></label>
                                    <input name="zip" type="text" class="form-control" placeholder="Seperate multiple zip codes with commas" id="zip">
                                </div>
                            </div>
                        </div>
                        <div id="acct-created"></div>
                        <input type="hidden" id="userid" name="uid" value="">
                        <button type="submit" id="adpost" class="btn btn-lg btn-primary mt-4">Create Posting</button>
                    </form>
                </div>

                <div id="post-account" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Account Required</h3>
                                <a class="close" data-dismiss="modal">×</a>
                            </div>
                            <div class="modal-body">
                                <form id="newacct" action="#" method="post">
                                    <div class="form-group">
                                        <label for="username">Username: <span>*</span></label>
                                        <input name="username" type="text" class="form-control" placeholder="" id="username" required>
                                        <div id="checkuser-error">Username already taken. Please choose another.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Password: <span>*</span></label>
                                        <input name="pass1" type="password" class="form-control" placeholder="" id="pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass2">Password (re-type to confirm): <span>*</span></label>
                                        <input name="pass2" type="password" class="form-control" placeholder="" id="pass2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="utype">User Type: <span>*</span></label>
                                        <select name="usertype" class="form-control" id="utype" required>
                                            <option value="private">Private Seller / Private Buyer</option>
                                            <option value="realtor">Realtor</option>
                                            <option value="professional">Industry Professional</option>
                                        </select>
                                    </div>
                                    <div class="row start-hidden">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email (optional):</label>
                                                <input name="email" type="text" class="form-control" placeholder="Enter email here only if you want to receive updates, blog feeds, notifications, etc." id="email">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id="create-acct">Create Account</button>
                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'search-wtb':
            ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Search "Want to Buy"</h1>
                        </div>
                        <div class="col-md-5">
                            <span>
                                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-top:-15px;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/instagram_icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;margin-top:-15px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contentwrap" class="container">
                <div id="search">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="heading">Filters</h3>
                            <form action="#" id="search-form" method="post">
                                <input type="hidden" name="type" id="searchtype" value="wtb">
                                <div class="form-group">
                                    <label for="title">Title / Description</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="type">Category:</label>
                                    <select name="proptype" class="form-control" id="proptype">
                                        <option value=""></option>
                                        <option value="1">Single Family Home</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Townhome</option>
                                        <option value="4">Residential Income Property</option>
                                        <option value="5">Residential Land</option>
                                        <option value="6">Commercial</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="sqft">SQ. Footage</label>
                                    <input type="text" name="sqft" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select name="state" class="form-control" id="state">
                                        <option value=""></option>
                                        <option value="AK">Alaska</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">Washington, D.C.</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="IA">Iowa</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MD">Maryland</option>
                                        <option value="ME">Maine</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MT">Montana</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NY">New York</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VA">Virginia</option>
                                        <option value="VT">Vermont</option>
                                        <option value="WA">Washington</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zipcode</label>
                                    <input type="text" name="zip" class="form-control" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <h3 class="heading">Search Results</h3>
                            <div id="search-results" class="search-results">
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Searching For Industrial Flex 2k Office And Min 4k Warehouse</h3>
                                            <p class="font14">Commercial in Longwood, Lake Mary, Sanford, Cassleberry, Altamonte Springs, FL 32773, 32771, 32746, 32750, 32779, 32714</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $0</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $900,000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 4,000</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 7,000</div>
                                            </div>
                                            <p class="mt-4 font16">Licensed FL Realtor seeking industrial/flex space for end user client for purchase. Must have minimum 4,000 SF warehouse with at least one dock-high door and 16' clear height. Offices must be at least 1200 SF with additional space considered for showroom potential. Immediate need and you can reply through this post or direct to Ed Lachcik, 407-430-5454. edward.lachcik@premiersir.com</p>
                                            <div class="listing-options">
                                                <ul class="row"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>May 15th, 2022</p>
                                            <p id="posted-msg"><a href="#" data-id="20" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/20/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/20/&text=Searching For Industrial Flex 2k Office And Min 4k Warehouse&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/20/&title=Searching For Industrial Flex 2k Office And Min 4k Warehouse" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Searching For Industrial Flex 2k Office And Min 4k Warehouse https://propertybuyersconnect.com/wtb/20/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Licensed Fl Realtor Seeking Lake Mary Condo For Cash Buyer End User With Immediate Need</h3>
                                            <p class="font14">Condo in Lake Mary, FL 32746</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $0</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $200,000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 700</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 0</div>
                                            </div>
                                            <p class="mt-4 font16">Licensed FL Realtor seeking 1/1 condo in Lake Mary for cash buyer with immediate need. This is NOT for investment or rental so vacant of the ability to close quickly is preferred. Pet friendly very important. If you wish to reply through this site please do or you can contact me directly at edward.lachcik@premiersir.com or 407-430-5454</p>
                                            <div class="listing-options">
                                                <ul class="row">
                                                    <li class="col-md-6 font14"><i class="fa fa-paw"></i> Yes</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>January 25th, 2022</p>
                                            <p id="posted-msg"><a href="#" data-id="19" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/19/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/19/&text=Licensed Fl Realtor Seeking Lake Mary Condo For Cash Buyer End User With Immediate Need&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/19/&title=Licensed Fl Realtor Seeking Lake Mary Condo For Cash Buyer End User With Immediate Need" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Licensed Fl Realtor Seeking Lake Mary Condo For Cash Buyer End User With Immediate Need https://propertybuyersconnect.com/wtb/19/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Seeking Commercial Office Building/condo For Client In Orange Or Seminole County</h3>
                                            <p class="font14">Commercial in Orlando, Winter Park, Maitland, Altamonte Springs, Lake Mary, Longwood, Clermont, Winter Garden, FL</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $1,000,000</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $2,000,000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 4,500</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 6,000</div>
                                            </div>
                                            <p class="mt-4 font16">Orlando Area Licensed Realtor searching for Client in Orange or Seminole Counties for Commercial office space for purchase. Needs to be minimum 4,500 SF to maximum 6,000SF with ample parking. If property may be available but is not currently listed, sale commission can be easily negotiated. You can reply to this post to OR contact me directly at 407-430-5454 or e-mail to edward.lachcik@premiersir.com</p>
                                            <div class="listing-options">
                                                <ul class="row"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>January 18th, 2022</p>
                                            <p id="posted-msg"><a href="#" data-id="18" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/18/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/18/&text=Seeking Commercial Office Building/condo For Client In Orange Or Seminole County&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/18/&title=Seeking Commercial Office Building/condo For Client In Orange Or Seminole County" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Seeking Commercial Office Building/condo For Client In Orange Or Seminole County https://propertybuyersconnect.com/wtb/18/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Seeking Heathrow Or Heathrow Area Pool Home For Client-cash Buyer With Immediate Need</h3>
                                            <p class="font14">Single Family Home in Lake Mary, Longwood, FL 32746, 32779</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $0</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $999,000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 2,700</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 3,200</div>
                                            </div>
                                            <p class="mt-4 font16">Orlando Area Licensed Realtor searching for Heathrow or Heathrow area pool home for Client. Cash transaction with immediate need. If house not currently listed, sale commission can be easily negotiated. Buyer is local with a flexible time to close so you can have a reasonable period of time to find your own alternate location or to move if you already have one. Areas include: Heathrow, Alaqua Lakes, Heathrow Woods. You can reply to this post to OR contact me directly at 407-430-5454 or e-mail to edward.lachcik@premiersir.com</p>
                                            <div class="listing-options">
                                                <ul class="row">
                                                    <li class="col-md-6 font14"><i class="fa fa-bed"></i> 3 Bedroom</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bed"></i> 4+ Bedroom</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-cogs"></i> Block</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-cogs"></i> Stucco</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-cogs"></i> Frame</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-cogs"></i> Brick</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-compass"></i> Waterfront- Other</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-compass"></i> Golf Front/View</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bath"></i> 3 Bath</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bath"></i> 4+ Bath</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-car"></i> 2 Car</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-car"></i> 3 Car</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-car"></i> Attached</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-swimming-pool"></i> Yes</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>January 18th, 2022</p>
                                            <p id="posted-msg"><a href="#" data-id="17" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/17/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/17/&text=Seeking Heathrow Or Heathrow Area Pool Home For Client-cash Buyer With Immediate Need&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/17/&title=Seeking Heathrow Or Heathrow Area Pool Home For Client-cash Buyer With Immediate Need" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Seeking Heathrow Or Heathrow Area Pool Home For Client-cash Buyer With Immediate Need https://propertybuyersconnect.com/wtb/17/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Orlando Area Realtor Seeking Home On Behalf Of Cash Buyer-ready To Buy-immediate Need</h3>
                                            <p class="font14">Single Family Home in Lake Mary, Longwood, FL 32746, 32779</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $200,000</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $500,000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 2,000</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 0</div>
                                            </div>
                                            <p class="mt-4 font16">MY name id Ed Lachcik and I represent a CASH BUYER with an immediate need for the house described above. Please contact me via this website or directly at 407-430-5454</p>
                                            <div class="listing-options">
                                                <ul class="row"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>December 16th, 2021</p>
                                            <p id="posted-msg"><a href="#" data-id="14" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/14/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/14/&text=Orlando Area Realtor Seeking Home On Behalf Of Cash Buyer-ready To Buy-immediate Need&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/14/&title=Orlando Area Realtor Seeking Home On Behalf Of Cash Buyer-ready To Buy-immediate Need" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Orlando Area Realtor Seeking Home On Behalf Of Cash Buyer-ready To Buy-immediate Need https://propertybuyersconnect.com/wtb/14/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-mdhesians

9">
                                            <h3>Looking For Condo In Longwood</h3>
                                            <p class="font14">Condo in Longwood, Florida 32779</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $200</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $300</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 0</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 0</div>
                                            </div>
                                            <p class="mt-4 font16">Looking for a condo in Longwood area. Not a fixer upper but doesn't have to be pristine either, decent condition</p>
                                            <div class="listing-options">
                                                <ul class="row">
                                                    <li class="col-md-6 font14"><i class="fa fa-bed"></i> 3 Bedroom</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bed"></i> 4+ Bedroom</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-tv"></i> Granite / Stone Counters</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-tv"></i> Ceiling Fans</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-utensils"></i> Stainless Appliances</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-utensils"></i> Walk In Pantry</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-paw"></i> Yes</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bath"></i> 2 Bath</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-bath"></i> 3 Bath</li>
                                                    <li class="col-md-6 font14"><i class="fa fa-swimming-pool"></i> Community</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>September 5th, 2021</p>
                                            <p id="posted-msg"><a href="#" data-id="12" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/12/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/12/&text=Looking For Condo In Longwood&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/12/&title=Looking For Condo In Longwood" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Looking For Condo In Longwood https://propertybuyersconnect.com/wtb/12/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="listing-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Looking For Minmum 200k Square Feet Warehouse/distribution Center-immediate Need-purchase Only</h3>
                                            <p class="font14">Commercial in Orlando, Lakeland, Haines City, Auburndale, Apopka, Clermont, Winter Garden, Longwood, Sanford, DeLand, FL, Florida</p>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum Price:</b> $0</div>
                                                <div class="col-md-6 font14"><b>Maximum Price:</b> $0</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 font14"><b>Minimum SQ. Footage:</b> 2,000,000</div>
                                                <div class="col-md-6 font14"><b>Maximum SQ. Footage:</b> 3,000,000</div>
                                            </div>
                                            <p class="mt-4 font16">Licensed FL Realtor looking on behalf of regional retail client with IMMEDIATE need for acreage to build warehouse/distribution center with minimum 20 AC land can go up to 30 AC, must be able to construct MINIMUM 200,000 SF,, min 35 dock high doors, minimum 50 trailer parking spots, 34-36' clear height, visibility preferred but for right properity not an absolute requirement. CASH BUYER READY TO MOVE QUICKLY Please contact me via this post or directly at 407-430-5454 or edward.lachcik@premiersir.com</p>
                                            <div class="listing-options">
                                                <ul class="row"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <p>August 23rd, 2021</p>
                                            <p id="posted-msg"><a href="#" data-id="11" data-type="wtb" class="adreply btn btn-primary">Reply to Post</a></p>
                                            <p><b>SHARE POST</b><br>
                                                <a href="https://www.facebook.com/sharer.php?u=https://propertybuyersconnect.com/wtb/11/" class="facebook socialpop" rel="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/share?url=https://propertybuyersconnect.com/wtb/11/&text=Looking For Minmum 200k Square Feet Warehouse/distribution Center-immediate Need-purchase Only&via=PropGuerilla" class="twitter socialpop" rel="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url=https://propertybuyersconnect.com/wtb/11/&title=Looking For Minmum 200k Square Feet Warehouse/distribution Center-immediate Need-purchase Only" class="linkedin socialpop" rel="tooltip" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="https://api.whatsapp.com/send?text=Looking For Minmum 200k Square Feet Warehouse/distribution Center-immediate Need-purchase Only https://propertybuyersconnect.com/wtb/11/" class="whatsapp socialpop" title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adpost-modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Contact Buyer</h3>
                                <a class="close" data-dismiss="modal">×</a>
                            </div>
                            <div class="modal-body">
                                <form id="adreply-form" action="#" method="post">
                                    <input type="hidden" name="action" value="adpost">
                                    <input type="hidden" name="ad_id" value="" id="ad-id">
                                    <input type="hidden" name="ad_type" value="" id="ad-type">
                                    <div class="form-group">
                                        <label for="msgtitle">Message Title: <span>*</span></label>
                                        <input name="msgtitle" type="text" class="form-control" placeholder="" id="msgtitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="msgbody">Your Message: <span>*</span></label>
                                        <textarea name="msgbody" class="form-control" id="msgbody"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id="adreply-submit">Submit Message</button>
                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="post-account" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Account Required</h3>
                                <a class="close" data-dismiss="modal">×</a>
                            </div>
                            <div class="modal-body">
                                <form id="newacct" action="#" method="post">
                                    <div class="form-group">
                                        <label for="username">Username: <span>*</span></label>
                                        <input name="username" type="text" class="form-control" placeholder="" id="username" required>
                                        <div id="checkuser-error">Username already taken. Please choose another.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Password: <span>*</span></label>
                                        <input name="pass1" type="password" class="form-control" placeholder="" id="pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass2">Password (re-type to confirm): <span>*</span></label>
                                        <input name="pass2" type="password" class="form-control" placeholder="" id="pass2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="utype">User Type: <span>*</span></label>
                                        <select name="usertype" class="form-control" id="utype" required>
                                            <option value="private">Private Seller / Private Buyer</option>
                                            <option value="realtor">Realtor</option>
                                            <option value="professional">Industry Professional</option>
                                        </select>
                                    </div>
                                    <div class="row start-hidden">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email (optional):</label>
                                                <input name="email" type="text" class="form-control" placeholder="Enter email here only if you want to receive updates, blog feeds, notifications, etc." id="email">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id="create-acct">Create Account</button>
                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        default:
            header('Location: /');
            exit;
    }
    ?>

    <footer>
        <div class="container" style="padding: 0px; height: 55px;">
            <div class="pull-right" style="margin-top:-33px;overflow:visible;">
                <a style="background:url('assets/images/facebook-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;" href="https://www.facebook.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                <a style="background:url('assets/images/instagram-icon.png') 0 0 no-repeat;background-size:contain;width:64px;height:64px;display:inline-block;margin-right:8px;" href="https://www.instagram.com/propertybuyersconnect/" target="_blank" class="pull-right"></a>
                <a style="background:url('assets/images/twitter-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;" href="https://twitter.com/PropGuerilla" target="_blank" class="pull-right"></a>
                <a style="background:url('assets/images/linkedin-icon.png') 0 0 no-repeat;width:64px;height:64px;display:inline-block;margin-right:8px;" href="https://www.linkedin.com/in/property-guerilla/" target="_blank" class="pull-right"></a>
            </div>
        </div>
        <div class="copyright" style="padding: 0px; margin: 0 auto; height: 55px;">
            <div class="container">
                <div class="pull-left">© All Rights Reserved, Property Buyers Connect</div>
                <div class="pull-right">Contact Us: <a href="mailto:support@propertybuyersconnect.com">support@propertybuyersconnect.com</a></div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>