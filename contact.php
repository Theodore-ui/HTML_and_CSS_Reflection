<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="JS/slick/slick.css">
        <link rel="stylesheet" href="JS/slick/slick-theme.css">
        <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
        <title>Netmatters Contact Page</title>
</head>
<body>
    <div class="main_column">
        <div class="cover"></div>
        <?php include('header.php') ?>
        <div class="small_nav">
            <p class="nav_text"><a href="index.php"><strong>Home</strong></a> / Our Offices</p>
        </div>
        <div class="page_head">
            <h2 class="page_header">Our Offices</h2>
        </div>
        <main>
            <div class="office_cards_container">
                <div class="office_card">
                    <img class="office_img">
                    <div class="office_description">
                        <a class="office_title"></a>    
                        <ul class="office_address">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <a class="office_number"></a>
                        <a class="office_btn">VIEW MORE</a>
                    </div>
                    <img class="office_map">
                </div>    
            </div>
            <div class="info_form">
                <div class="info">
                    <p><strong>Email us on:</strong></p>
                    <p><a class="email" href="#">sales@netmatters.com</a></p>
                    <p><strong>Business hours:</strong></p>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                    <p class="support_dropper"><strong>Out of Hours IT Support<i class="fa-solid fa-angle-down"></i></strong></p>
                    <div class="support_dropdown">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p>
                            <strong>Monday - Friday 18:00 - 22:00</strong>
                            <strong>Saturday 08:00 - 16:00</strong><br>
                            <strong>Sunday 10:00 - 18:00</strong>
                        </p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                    </div>
                </div>
                <form class="Large_form" method="POST" action="https://www.netmatters.co.uk/enquiry#contact-form" accept-charset="UTF-8" id="contact-form" novalidate="novalidate">
                    <div class="input_group">
                        <div class="form-group left_child">
                            <label for="name" class="required">Your Name</label>
                            <input class="form-control" name="name" type="text" value="" id="name">
                        </div>
                        <div class="form-group">
                            <label for="company" class="">Company Name</label>
                            <input class="form-control" name="company" type="text" value="" id="company">
                        </div>
                    </div>
                    <div class="input_group">
                        <div class="form-group left_child">
                            <label for="email" class="required">Your Email</label>
                            <input class="form-control" name="email" type="email" value="" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="required">Your Telephone Number</label>
                            <input class="form-control" name="telephone" type="text" value="" id="telephone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="required">Subject</label>
                        <input class="form-control" name="subject" type="text" value="Train For A Career In Tech" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message" class="required">Message</label>
                        <textarea class="form-control" name="message" cols="50" rows="10" id="message"></textarea>
                    </div>
                    <div class="checkbox_note">
                        <span class="checkbox_outter">
                            <span class="action"><i class="fa-solid fa-check"></i></span>
                            <input class="checkbox" type="checkbox" id="marketing" value="1" 
                            name="user_interests">
                        </span>
                        <label class="side_label" for="marketing">Please tick this box 
                        if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> 
                        for more information on how we keep your data safe.</label>
                    </div>
                    <div class="action-block">
                        <button name="submit" class="btn btn-web">
                            SEND ENQUIRY
                        </button>
                        <small class="helper-text"><span class="text-danger">*</span> Fields Required</small>    
                    </div>
                </form>
            </div>
        </main>
        <?php include('newsletter.php') ?>
        <?php include('footer.php') ?>
    </div>
    <?php include('sideMenu.php') ?>
    <script src="JS/jquery-3.6.3.min.js"></script>
    <script src="JS/jquery.sticky.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/1e403b2a33.js" crossorigin="anonymous"></script>
    <script src="JS/app.js?v=<?php echo time(); ?>"></script>
</body>
</html>