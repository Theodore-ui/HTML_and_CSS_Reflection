<?php 

function display_news_pods() 
{
    include("connection.php");

    try {
        $results = $db->query("SELECT * FROM new_pods");
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


