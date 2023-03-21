<?php 

function display_news_items() 
{
    include("connection.php");

    try {
        $results = $db->query("SELECT * FROM news_items");
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "Query Failed";
        return false;
    }

    if ($results->num_rows > 0) {
        while($row = $results->fetch_assoc()) {
            $output = '<div class="latest_news_card ' . $row['colour'] . '">
                <div class="img_tool_tip">
                    <a href="#"><img src="' . $row['pictureURL'] . '"
                    class="img-responsive" alt="Matt Hurst - Netmatters 5 Year Legend "></a>
                    <a href="#" class="tool_tip tool_tip_' . $row['colour'] . '">' . $row['tag'] . '</a>
                </diV>
                <div class="latest_news_card_bottom">
                    <div>
                        <h3><a class="h3" href="#">' . $row['title'] . '</a></h3>
                    </div>
                    <div>
                        <p>' . $row['description'] . '</p>
                    </div>
                    <div>
                        <a href="#" class="btn btn_' . $row['colour'] . '">READ MORE</a>
                    </div>
                    <div class="icon_m_data">
                        <img class="icon_m" src="https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png" 
                        class="img-responsive" alt="Netmatters ">
                        <div class="text">
                            <strong class="text-primary">Posted by Netmatters </strong>
                            <br>
                            <span>9th of January 2023</span>
                        </div>
                    </div>
                </div>
            </div>';
            echo $output;
        }
    }
}




if(isset($_POST['submit_info'])) {
    $name_error = "";
    $email_error = "";
    $telephone_error = "";
    $subject_error = "";
    $message_error = "";
    $success_message = "";

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    $is_errors = false;

    
    if (empty($name)) {
        $name_error = "<p class='error'>Please enter your name!</p>";
        $is_errors = true;
    } else {
        $name_error = "";    
    }
    
    if (empty($email)) {
        $email_error = "<p class='error'>Please enter your email!</p>";
        $is_errors = true;
    } else if (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
        $email_error = "<p class='error'>Please enter a valid email!</p>";
        $is_errors = true;   
    }

    if (empty($telephone)) {
        $telephone_error = "<p class='error'>Please enter your phone number!</p>";
        $is_errors = true;
    } else if (!is_numeric($telephone)) {
        $telephone_error = "<p class='error'>Please enter a valid phone number!</p>";
        $is_errors = true;
    } else if (strlen($telephone) > 11) {
        $telephone_error = "<p class='error'>Please enter a valid phone number!</p>";
        $is_errors = true;
    }

    
    if (empty($subject)) {
        $subject_error = "<p class='error'>Please enter a subject!</p>";
        $is_errors = true;    
    } 

    if (empty($message)) {
        $message_error = "<p class='error'>Please enter a message!</p>";
        $is_errors = true;  
    } 

    if (!$is_errors) {
        insert_contact_info($name, $company, $email, $telephone, $message, $subject); 
        $success_message = "<p class='success'>Your infomation has been successfully logged</p>";
         
    } else {
        
    }
} 



function insert_contact_info($name, $company, $email, $telephone, $message, $subject) {
    include("connection.php");

    try {
        $sql = "INSERT INTO contact_info 
            (name, company, email, telephone, subject, message) 
            VALUES (?, ?, ?, ?, ?, ?)";
        $results = $db->prepare($sql);
        $results->bindParam(1,$name,PDO::PARAM_STR);
        $results->bindParam(2,$company,PDO::PARAM_STR);
        $results->bindParam(3,$email,PDO::PARAM_STR);
        $results->bindParam(4,$telephone,PDO::PARAM_INT);
        $results->bindParam(5,$subject,PDO::PARAM_STR);
        $results->bindParam(6,$message,PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "Query Failed";
        return false;
    }
    
}


