<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Analytics</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/analytics.css'>
</head>
<style>
    body{
        background-image: url('/images/main/3.jpg');
    }
</style>
<body>

    <div class='container'>
                <div class='menu'>
                    <ul>
                        <li class='logo'><img src='/images/bg/LOGO.png'></li>
                        <li><a href='ecom.php'>Home</a></li>
                        <li><a href='service.php'>Services</a></li>
                        <li><a href=''>Product</a></li>
                        <li><a href='contact.php'>Contact</a></li>
                        <li><a href='#' class='signup'><span>Sign Up</span></a></li>
                    </ul>
                </div>

    <h1>CoBol's <span>ANALYTICS</span></h1>
    <br>
    <div class='process-wrapper'>
        <div id='progress-bar-container'>
            <ul>
                <li class='step step01 active'>
                    <div class='step-inner'>ALIGNED WORK</div>
                </li>
                <li class='step step02'>
                    <div class='step-inner'>IMMERSIVE PART</div>
                </li>
                <li class='step step03'>
                    <div class='step-inner'>CREATIVE CREATIONS</div>
                </li>
                <li class='step step04'>
                    <div class='step-inner'>TESTIMONIALS</div>
                </li>
                <li class='step step05'>
                    <div class='step-inner'>OUR DIVISIONS</div>
                </li>
            </ul>
            <div id='line'>
                <div id='line-progress'></div>
            </div>
        </div>
        <div id='progress-content-section'>
            <div class='section-content discovery active'>
                <h2>HOME SECTION</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit metus nunc, sed varius nisl fermentum vel. Aenean accumsan est a ante finibus aliquam. Nam non porttitor tortor.</p>
            </div>
            <div class='section-content strategy'>
                <h2>GALLERY SECTION</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit metus nunc, sed varius nisl fermentum vel. Aenean accumsan est a ante finibus aliquam. Nam non porttitor tortor.</p>
            </div>
            <div class='section-content creative'>
                <h2>CREATIVE CREATIONS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit metus nunc, sed varius nisl fermentum vel. Aenean accumsan est a ante finibus aliquam. Nam non porttitor tortor.</p>
            </div>
            <div class='section-content production'>
                <h2>TESTIMONIALS NOW</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit metus nunc, sed varius nisl fermentum vel. Aenean accumsan est a ante finibus aliquam. Nam non porttitor tortor.</p>
            </div>
            <div class='section-content analysis'>
                <h2>OUR DIVISIONS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit metus nunc, sed varius nisl fermentum vel. Aenean accumsan est a ante finibus aliquam. Nam non porttitor tortor.</p>
            </div>
        </div>
    </div>

    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type='text/javascript'>
        $(".step").click( function() {
        $(this).addClass("active").prevAll().addClass("active");
        $(this).nextAll().removeClass("active");
    });

    $(".step01").click( function() {
        $("#line-progress").css("width", "3%");
        $(".discovery").addClass("active").siblings().removeClass("active");
    });

    $(".step02").click( function() {
        $("#line-progress").css("width", "25%");
        $(".strategy").addClass("active").siblings().removeClass("active");
    });

    $(".step03").click( function() {
        $("#line-progress").css("width", "50%");
        $(".creative").addClass("active").siblings().removeClass("active");
    });

    $(".step04").click( function() {
        $("#line-progress").css("width", "75%");
        $(".production").addClass("active").siblings().removeClass("active");
    });

    $(".step05").click( function() {
        $("#line-progress").css("width", "100%");
        $(".analysis").addClass("active").siblings().removeClass("active");
    });
    </script>


</body>

</html>