

<form action="send" method="post" id="cf1" autocomplete="off">
    <fieldset>
        <div class="cf1-main-container">
            <div class="cf1-main-wrapper">
                <div class="cf1-input-container" cf1-category="name-container">
                    <div class="cf1-input-wrapper" cf1-category="name-wrapper">
                        <label for="cf1-name">Name:</label>
                        <input type="text" name="name" id="cf1-name">
                    </div>
                </div>
                <div class="cf1-input-container" cf1-category="hny-pt-container" data-type="security">
                    <div class="cf1-input-wrapper" cf1-category="hny-pt-wrapper" data-type="security">
                        <label for="cf1-hny-name">LastName:</label>
                        <input type="text" name="lastName" id="cf1-hny-name">
                    </div>
                </div>
                <div class="cf1-input-container" cf1-category="email-container">
                    <div class="cf1-input-wrapper" cf1-category="email-wrapper">
                        <label for="cf1-email">Email:</label>
                        <input type="email" name="email" id="cf1-email">
                    </div>
                </div>
                <div class="cf1-input-container" cf1-category="subject-container">
                    <div class="cf1-input-wrapper" cf1-category="subject-wrapper">
                        <label for="cf1-email">Subject:</label>
                        <input type="text" name="subject" id="cf1-subject">
                    </div>
                </div>
                <div class="cf1-input-container" cf1-category="message-container">
                    <div class="cf1-input-wrapper" cf1-category="message-wrapper">
                        <label for="cf1-message">Message:</label>
                        <textarea name="message" id="cf1-message"></textarea>
                    </div>
                </div>
                <br>
                <?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

switch (true) {

    case strpos($fullUrl, "?form=empty") !== false:
        echo "<p cf1-category='error'>One or more fields are empty.</p>";
        break;

    // Add more cases as needed
    case strpos($fullUrl, "?form=emailerror") !== false:
        echo "<p cf1-category='error'>Invalid Email Input</p>";
        break;
    
    case strpos($fullUrl, "?form=invalid") !== false:
        echo "<p cf1-category='error'>Invalid Character Use:</p>
            <p cf1-category='error'>Only letters, -, and ' are allowed.</p>";
        break;

    case strpos($fullUrl, "?form=emailvalerror") !== false:
        echo "<p cf1-category='error'>Email Not Valid:</p>
            <p cf1-category='error'>Please try another one</p>";
        break;

    case strpos($fullUrl, "?form=success") !== false:
        echo "<p cf1-category='success'>Email Sent. Thank You! </p>";
        break;
    default:}
        // Default case if none of the conditions are met
        // This can be used for additional handling or fallback
                                

 ?>
                <br>
                
                <div class="cf1-form-submit-container">
                    <div class="cf1-form-submit-wrapper">
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

</form>
