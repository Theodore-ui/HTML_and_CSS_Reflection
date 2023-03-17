<div class="section">
    <form class="section_container" action="index.html" method="post">
        <div class="form_container">
            <h2>Email Newsletter Sign-Up</h2>
            <div class="name_email_container">
                <div class="name_container">
                    <label class="required" for="user_name">Your Name</label>
                    <input class="form-control" type="text" id="name" name="user_name">
                </div>
                <div class="email_container">
                    <label class="required" for="email">Your Email</label>
                    <input class="form-control" type="email" id="email" name="user_email">
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
                <button class="btn form_btn" type="submit">SUBSCRIBE</button>
            </div>
        </div>
    </form>
</div>