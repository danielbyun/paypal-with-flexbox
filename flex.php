<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> flexbox test </title>
        <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/flex.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="heroDiv">
                <nav class="flex-nav">
                    <a href="#" class="toggleNav"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
                    <ul class="nav">
                        <li class="logo"><a href="">paypal</a></li>
                        <ul class="menu">
                            <li class="cta"><a href="">personal <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                            <li class="cta"><a href="">business <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                            <li class="cta"><a href="">send</a></li>
                            <li class="cta"><a href="">request</a></li>
                        </ul>
                        <ul class="user">
                            <button class="logIn pp-sans-small-bold"><a href=""><p>log in</p></a></button>
                            <button class="signUp pp-sans-small-bold"><a href=""><p>sign up</p></a></button>
                        </ul>
                    </ul>
                </nav>
                
                <section class="hero">
                    <h3 class="pp-sans-big-light">global purchase protection.</h3>
                    <h3 class="pp-sans-big-light">music to your ears.</h3>
                    <p class="description" >If the description sounded better than what showed up, PayPal can cover you.*</p>
                    <button class="signUpForFree pp-sans-small-medium"><a href="#"><p>Sign Up for Free</p></a></button>
                    <button class="video pp-sans-small-medium"><a href="#">
    <p class="videoIcon"><i class="fa fa-play-circle-o fa-lg" aria-hidden="true"></i> Watch the Video</p></a></button>
                    <p class="asteriks">*see eligibility.</p>
                </section>
            </div>
            <section class="info">
                <h3 class="pp-sans-big-light">From everyday purchases to running a business, people around the world rely on us to pay and get paid.</h3>
                <button class="infoButton"><a href="#"><p>How PayPal Works</p></a></button>
            </section>

            <section class="businessSolutions">
                <h3 class="pp-sans-big-light">Looking for business solutions?</h3>
                <p class="getPaid pp-sans-small-light">PayPal makes it easy to get paid securely anywhere you do business: online, on mobile, in person or via an invoice.</p>
                <button class="explore pp-sans-small-medium"><a href="#"><p>explore business solutions</p></a></button>
            </section>
        
            <section class="bottom">
                
            </section>

        </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script>
        $(function() {
            $('.toggleNav').on('click',function() {
                $('.flex-nav ul').toggleClass('open');
            });
        });
    </script>

    </body>
</html>