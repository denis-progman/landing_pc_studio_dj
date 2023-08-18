<?php require_once 'controller.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="pictures/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="pictures/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="pictures/favicon/favicon-16x16.png">
    <link rel="manifest" href="pictures/favicon/site.webmanifest">
    <link rel="stylesheet" href="stiles.css">
    <title>PC Studio DJ | new EDM label</title>
</head>
<body>
<!--<h1>PC Studio DJ</h1>-->
<section class="logo_box">
    <img src="pictures/pc%20studio%20dj%20logo.png" alt="pc studio dj group logo">
    <h2>The new generation label is coming soon!</h2>
    <button class="big_button" onclick="window.location.href='/#app_form';">join us the first!</button>
</section>

<section class="description">
    <p>
        We are starting the absolutely unique EDM project to help musicians from all the world to promote the tracks, to communicate between each other and to find their listeners.
        Our mission is getting rid of all borders between authors of different levels. We are going to make an environment where professionals and even popular EDM musicians can comfortable and interesting connect with not so popular guys and beginners. Along with it the beginners and developing musicians will have opportunities to have an opinion from experienced and famous men.
        <br/><br/>
        We started our movement more even 10 years ago, we already have a private EDM community with about 100 musicians and djs. So we’ve got some experience how to do such a thing.
        And now our founder became a prof. programmer, got a little iT team, so we can make the project bigger and better.
        <br><br/>
        The first pilot of the project will be introduced in October 2023. The vip access will be given to guys from our private group and for men who has made an application here.
        So this is your chance to get earlier vip access and extra points as well. You need just send as this short form.
        <br/>
        Stay with as look up the latest news. And se you soon in the EDM lable of the future!
    </p>
</section>
<hr/>
<section class="timer">
    <h5>Till start the first pilot:</h5>
    <h6 data-current="<?= $startDataTimeStamp?>"></h6>
</section>
<hr/>
<section class="application" id="app_form">
    <h3>Fill in the form to join us first!</h3>
    <form method="post">
        <input name="form_name" value="app_form" style="display: none" hidden>
        <label>Email:
            <input type="email" name="email" placeholder="your reliable email" required>
        </label>
        <label>
            Nickname:
            <input type="text" name="nickname" placeholder="pronoun as musician/dj" required>
        </label>
        <label>
            Music genre:
            <div>
                <select name="music_genre">
                    <option value="">main EDM style</option>
                    <option value="trap">trap</option>
                    <option value="house">house</option>
                    <option value="chill out">chill out</option>
                    <option value="drum 'n' bass">drum 'n' bass</option>
                    <option value="trance">trance</option>
                    <option value="hip-hop">hip-hop</option>
                    <option value="experimental">experimental</option>
                    <option value="instrumental">instrumental</option>
                    <option value="breaks">breaks</option>
                    <option value="techno">techno</option>
                    <option value="hard dance">hard dance</option>
                    <option value="dubstep">dubstep</option>
                    <option value="breaks">breaks</option>
                    <option value="future style">future style</option>
                    <option value="other">OTHER (not listed)</option>
                </select>
                <input type="text" placeholder="your style variant" style="display: none">
            </div>
        </label>
        <label>
            Years in EDM:
            <input type="number" data-note="How many years do you make music" name="experience_years" min="1" max="50" required>
        </label>
        <label>
            Tracks count:
            <input type="number" data-note="How many tracks have you made(approximately)" name="tracks_amount" min="1" max="50" required>
        </label>
        <label>
            Public page:
            <input type="text" name="link" placeholder="social network link">
        </label>
        <div>
            <label>
                Anything you want to say us:
                <br/>
                <textarea name="suggestion" placeholder="Any parting words, ideas, suggestions, etc. if you'd like to say something, fell free but be brief."></textarea>
            </label>
        </div>
        <button type="submit">Send form</button>
    </form>
</section>
<section class="current_news">
    <div>
    <h3>Now <span><?= $userCount?></span> musicians from all the world are already with us!</h3>
    <p>
        Every day the we develop the app,  each hour we become closer to launch the first version. All of you will have a message with short instructions how to login in your privilege account.
        <br/>
        If you know somebody who likes and makes dance music let him know about as, show this page!
        <br/>
        During this time you can see all our latest movements, how our project is growing up, step by step!
    </p>
    <h5>Last news:</h5>
    <ul>
        <li>-Aug 19 2023 It's great to see that people is coming here! Thanks everybody!</li>
        <li>-Aug 16 2023 The main part of the app interface is almost ready. So little by little</li>
        <li>-Aug 09 2023 We decided to make a back counter in the landing - now it's motivation!)</li>
        <li>-Aug 02 2023 Got the troubles with cloud deployment, but it's ok, almost solved!) </li>
        <li>-Jul 29 2023 We've got some guys to help - it's awesome!</li>
        <li>-Jul 23 2023 The part of player is ready, working for the main page view.</li>
        <li>-Jul 17 2023 The main thing is going to be an audio player, so working with it, maybe design will be changed a bit.</li>
        <li>-Jul 10 2023 Started front-end of the app, looks difficult but possible.</li>
        <li>-Jul 07 2023 The landing is ready, and now you can see all this news! ;)</li>
        <li>-Jul 04 2023 The big day in US! And our landing is ready to deploy, looking for the platform and the domain name.</li>
        <li>-Jun 30 2023 The design of the app is ready, this is going to be website first.</li>
        <li>-Jun 28 2023 It seems we all of it is gonna take a time, and we need some landing to start.</li>
        <li>-Jun 24 2023 Started the graphic design of the future app</li>
        <li>-Jun 13 2023 Have just realised that we need ios, android apps and a web site</li>
        <li>-Jun 11 2023 The blueprint is done. Trying to understand if it possible:)) and who can help.</li>
        <li>-Jun 03 2023 We finally decided make it! and started the blueprint of entire idea.</li>
        <li>-May -- 2023 The idea came to mind - to make PC Studio DJ the project of the world... so why not?</li>
        <li>-May -- 2023 Made some fixes in our private public, make the project alive again.</li>
        <li>-Apr -- 2023 The founder of "PC studio DJ" - Denis back to NY from ASOT-1000(Amsterdam) with a bunch of ideas and emotions.</li>
        <li>-Feb -- 2023 The project has got 12 years old. It's still private and not so active, probably we need something new...</li>
    </ul>
    <button class="big_button" onclick="window.location.href='/#app_form';">join us</button>
    </div>
</section>
<section class="donation">
    <h3>Help us, we really need your help!</h3>
    <form action="https://www.paypal.com/donate" method="post" target="_blank">
        <input type="hidden" name="business" value="2JSGP3WX4Q6LU" />
        <input type="hidden" name="no_recurring" value="0" />
        <input type="hidden" name="item_name" value="We are starting an unique EDM to help musicians promote the tracks, communicate between each other and find their listeners. " />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>
</section>
<hr/>
<section class="footer">
    <div>
        <strong>To connect with us, please use this mailbox <a href="mailto:pcstudiodj@gmail.com?subject=Feedback+from+PCstudioDj+site">pcstudiodj@gmail.com</a></strong>
    </div>
    <strong>PC Studio DJ | New York, USA | 2023</strong>
</section>
</body>
<script src="script.js"></script>
</html>
