<?php include('functions.php') ?>
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
        <main class="contact_main">
            <div class="office_cards_container">
                <div class="office_card">
                    <div class="office_card_top">
                        <img class="office_img" src="https://www.netmatters.co.uk/assets/images/offices/london.jpg" alt="London office">
                        <div class="office_description">
                            <a href="#" class="office_title">London Office</a>    
                            <ul class="office_address">
                                <li>Unit G6,</li>
                                <li>Pixel Business Centre,</li>
                                <li>110 Brooker Road, Waltham Abbey,</li>
                                <li>London,</li>
                                <li>EN9 1JH</li>
                            </ul>
                            <a href="#" class="office_number">02045 397354</a>
                            <a href="#" class="office_btn">VIEW MORE</a>
                        </div>
                    </div>
                    <img class="office_map" src="images/london_map.png">
                </div>
                <div class="office_card">
                    <div class="office_card_top">
                        <img class="office_img" src="https://www.netmatters.co.uk/assets/images/offices/cambridge.jpg" alt="Cambridge office">
                        <div class="office_description">
                            <a href="#" class="office_title">Cambridge Office</a>    
                            <ul class="office_address">
                                <li>Unit 1.31,</li>
                                <li>St John's Innovation Centre,</li>
                                <li>Cowley Road, Milton,</li>
                                <li>Cambridge,</li>
                                <li>CB4 0WS</li>
                            </ul>
                            <a href="#" class="office_number">01223 37 57 72</a>
                            <a href="#" class="office_btn">VIEW MORE</a>
                        </div>
                    </div>
                    <img class="office_map" src="images/cambridge_map.png" alt="Cambridge office map">
                </div>
                <div class="office_card">
                    <div class="office_card_top">
                        <img class="office_img" src="https://www.netmatters.co.uk/assets/images/offices/wymondham.jpg" alt="Wymondham office">
                        <div class="office_description">
                            <a href="#" class="office_title">Wymondham Office</a>    
                            <ul class="office_address">
                                <li>Unit 15,</li>
                                <li>Penfold Drive,</li>
                                <li>Gateway 11 Business Park,</li>
                                <li>Wymondham, Norfolk,</li>
                                <li>NR18 0WZ</li>
                            </ul>
                            <a href="#" class="office_number">01603 70 40 20</a>
                            <a href="#" class="office_btn">VIEW MORE</a>
                        </div>
                    </div>
                    <img class="office_map" src="images/Wymondham_map.png" alt="Wymondham office map">
                </div>
                <div class="office_card">
                    <div class="office_card_top">
                        <img class="office_img" src="https://www.netmatters.co.uk/assets/images/offices/yarmouth-2.jpg" alt="Yarmouth office">
                        <div class="office_description">
                            <a href="#" class="office_title">Great Yarmouth Office</a>    
                            <ul class="office_address">
                                <li>Suite F23,</li>
                                <li>Beacon Innovation Centre,</li>
                                <li>Beacon Park, Gorleston,</li>
                                <li>Great Yarmouth, Norfolk,</li>
                                <li>NR31 7RA</li>
                            </ul>
                            <a href="#" class="office_number">01493 60 32 04</a>
                            <a href="#" class="office_btn">VIEW MORE</a>
                        </div>
                    </div>
                    <img class="office_map" src="images/Wymondham_map.png" alt="Yarmouth office map">
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
                <form class="Large_form" method="POST" accept-charset="UTF-8" id="contact-form" novalidate="novalidate">
                    <div class="input_group">
                        <div class="form-group left_child">
                            <label for="name" class="required">Your Name</label>
                            <input class="form-control" name="name" type="text" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["name"];} ?>" id="name">
                            <?php 
                            if(!empty($name_error)) {
                                echo $name_error;
                            } else {
                                echo "<br/><br/>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="company" class="">Company Name</label>
                            <input class="form-control" name="company" type="text" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["company"];} ?>" id="company">
                        </div>
                    </div>
                    <div class="input_group">
                        <div class="form-group left_child">
                            <label for="email" class="required">Your Email</label>
                            <input class="form-control" name="email" type="email" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["email"];} ?>" id="email">
                            <?php 
                            if(!empty($email_error)) {
                                echo $email_error;
                            } else {
                                echo "<br/><br/>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="required">Your Telephone Number</label>
                            <input class="form-control" name="telephone" type="text" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["telephone"];} ?>" id="telephone">
                            <?php 
                            if(!empty($telephone_error)) {
                                echo $telephone_error;
                            } else {
                                echo "<br/><br/>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="required">Subject</label>
                        <input class="form-control" name="subject" type="text" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["subject"];} ?>" id="subject">
                        <?php 
                        if(!empty($subject_error)) {
                            echo $subject_error;
                        } else {
                            echo "<br/><br/>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="message" class="required">Message</label>
                        <textarea class="form-control message-area" name="message" cols="50" rows="10" value="" id="message"><?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["message"];} ?>
                        </textarea>
                        <?php 
                        if(!empty($message_error)) {
                            echo $message_error;
                        } else {
                            echo "<br/><br/>";
                        }
                        ?>
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
                        <button name="submit_info" class="btn btn-web" type="submit" value="send">
                            SEND ENQUIRY
                        </button>
                        <?php 
                        if(!empty($success_message)) {
                            echo $success_message;
                        } else {
                            echo "<br/><br/>";
                        }
                        ?>
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