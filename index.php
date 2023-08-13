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
    <h3>Now <span><?= $userCount?></span> musicians from all the world are already with us!</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsa libero odio. Accusantium, architecto deserunt. Explicabo fuga, hic mollitia quaerat veritatis voluptatem! Aliquam cupiditate harum ipsam veniam. Blanditiis deserunt eius non quam rerum sit ut velit voluptatem? Ad aliquid amet aperiam aspernatur assumenda blanditiis consequatur consequuntur cum deleniti dolor eaque enim esse et eum facilis fuga harum id illum in iste itaque laborum libero, nam natus neque nesciunt nostrum optio perferendis quidem quod rem reprehenderit, similique sint ullam vel voluptas voluptates? Accusamus, sapiente, voluptatum. Accusamus alias assumenda, blanditiis consectetur distinctio ex labore maxime nihil quia, ratione sint sit temporibus unde!
    </p>
    <h5>Last news:</h5>
    <ul>
        <li>-10/12/2023 Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, nisi.</li>
        <li>-10/12/2023 Aliquid ducimus error illo ipsa laudantium necessitatibus odio rerum vero.</li>
        <li>-10/12/2023 Aut eos eum facilis hic ipsa libero officiis, quibusdam voluptatem.</li>
        <li>-10/12/2023 Architecto aspernatur cum dolor est nesciunt provident recusandae repudiandae velit.</li>
        <li>-10/12/2023 Ipsa, praesentium recusandae. Beatae eum ex optio perferendis recusandae, repudiandae.</li>
        <li>-10/12/2023 Accusamus magni praesentium tempore voluptatem voluptates. Cupiditate impedit laboriosam sint.</li>
        <li>-10/12/2023 At consequuntur ea eveniet quaerat, sapiente sint totam ullam veritatis.</li>
        <li>-10/12/2023 At, distinctio harum magni nam neque suscipit! Maxime, sequi, soluta.</li>
        <li>-10/12/2023 Accusamus hic, impedit laboriosam mollitia officiis quisquam ut veniam voluptatum.</li>
        <li>-10/12/2023 Dignissimos hic ipsam itaque nobis quae saepe soluta tempore, temporibus?</li>
        <li>-10/12/2023 Amet dolores error expedita facilis modi necessitatibus totam veniam voluptatibus!</li>
        <li>-10/12/2023 Esse impedit incidunt magnam nulla porro quae repellendus voluptatem voluptatibus.</li>
    </ul>
    <button class="big_button" onclick="window.location.href='/#app_form';">join us</button>
</section>
<hr/>
<section class="footer">
    <strong>New York, USA | 2023</strong>
</section>
</body>
<script src="script.js"></script>
</html>
