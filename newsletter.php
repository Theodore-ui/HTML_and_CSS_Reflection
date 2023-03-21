<div class="section">
    <form class="section_container"  method="POST">
        <div class="form_container">
            <h2>Email Newsletter Sign-Up</h2>
            <div class="name_email_container">
                <div class="name_container">
                    <label class="required" for="user_name">Your Name</label>
                    <input class="form-control" type="text" id="name" value="<?php if (isset($_POST['submit_newsletter_info']) && $is_errors) {echo $_POST["user_name"];} ?>" name="user_name">
                    <?php 
                    if(!empty($name_error)) {
                        echo $name_error;
                    } else {
                        echo "<br/><br/>";
                    }
                    ?>
                </div>
                <div class="email_container">
                    <label class="required" for="email">Your Email</label>
                    <input class="form-control" type="email" id="email" value="<?php if (isset($_POST['submit_newsletter_info']) && $is_errors) {echo $_POST["user_email"];} ?>" name="user_email">
                    <?php 
                    if(!empty($email_error)) {
                        echo $email_error;
                    } else {
                        echo "<br/><br/>";
                    }
                    ?>
                </div>
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
            <div>
                <button class="btn form_btn" name="submit_newsletter_info" type="submit">SUBSCRIBE</button>
                <?php 
                if(!empty($success_message_newsletter)) {
                    echo $success_message_newsletter;
                } else {
                    echo "<br/><br/>";
                }
                ?>
            </div>
        </div>
    </form>
</div>