<?php require_once 'controller.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stiles.css">
    <title>PC Studio DJ | the new generation label</title>
</head>
<body>
<!--<h1>PC Studio DJ</h1>-->
<section class="logo_box">
    <img src="pc%20studio%20dj%20logo.png" alt="pc studio dj group logo">
    <h2>The new generation label is coming soon!</h2>
    <button class="big_button" onclick="window.location.href='/#app_form';">join us the first!</button>
</section>

<section class="description">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae eius in ipsam repellat? Ad aliquid aut ex itaque quo totam? Accusamus aliquam aliquid autem beatae, blanditiis distinctio dolor dolore explicabo illum inventore iste itaque labore libero maxime mollitia nam non officia officiis, perspiciatis placeat porro quibusdam quidem similique sint sunt ullam voluptatem!
        <br/>
        Alias beatae commodi corporis cum, dolor esse molestiae nemo officiis, perspiciatis provident, reprehenderit repudiandae sunt tempora veniam voluptate! Ad aspernatur, aut autem cumque dolore ea error hic magnam maxime minima nobis obcaecati odio odit quos reiciendis veniam voluptates!
        <br/>
        Ad aliquam asperiores aspernatur aut culpa dicta eveniet ipsam iusto minima neque odio placeat provident, quas ratione recusandae rerum saepe sequi temporibus veritatis voluptatibus. Amet aspernatur delectus dolor dolorem et ex, hic id ipsum molestias, nemo nisi numquam odio perspiciatis porro quisquam quos recusandae reprehenderit sint tenetur voluptates.
    </p>
</section>
<hr/>
<section class="timer">
    <h5>Till start the first pilot:</h5>
    <h6 data-current="<?= $startDataTimeStamp?>"></h6>
</section>
<hr/>
<section class="application">
    <h3>Fill in the form to join us first!</h3>
    <form id="app_form" method="post">
        <input name="form_name" value="app_form" hidden>
        <label>Email:
            <input type="email" placeholder="your reliable email" required>
        </label>
        <label>
            Nickname:
            <input type="text" placeholder="your pronoun as musician or dj" required>
        </label>
        <label>
            Genre:
            <div>
                <select>
                    <option value="">your main EDM style</option>
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
                <input type="text" placeholder="your variant of EDM style" style="display: none">
            </div>
        </label>
        <label>
            How many years do you make music:
            <input type="number" min="1" max="50" required>
        </label>
        <label>
            How many tracks have you made (approximately):
            <input type="number" min="1" max="50" required>
        </label>
        <label>
            Your public music page:
            <input type="text" placeholder="social network link or something">
        </label>
        <div>
            <label>
                Anything you want to say us:
                <br/>
                <textarea placeholder="Any parting words, ideas, suggestions, etc. if you'd like to say something, fell free but be brief."></textarea>
            </label>
        </div>
        <button type="submit">Send form</button>
    </form>
</section>
<hr/>
<section class="footer">
    <strong>New York, USA | 2023</strong>
</section>
</body>
<script src="script.js"></script>
</html>
