<?php

$prompts = array(
'Be a fucking',
'Dress up as a fucking',
'Fuck everything else, go as a',
'Fuck it, just go as a',
'I can totally fucking see you as a',
'Just go as a fucking',
'Why not be a fucking',
'Why not dress as a fucking',
'Why the fuck not be a',
'You should go as a fucking',
'You would make a fucking perfect',
'You would make the best fucking',
);

$nexts = array(
'And lose my job? No way!',
'Are you kidding me?',
'I could never pull that off.',
'I don\'t have the pieces for that costume.',
'I don\'t swing that way.',
'I\'m too shy to pull that off.',
'In my country, you get arrested for that kind of thing.',
'My mother would never let me.',
'No no, that won\'t do at all.',
'Not on your life!',
'That won\'t work with my figure.',
);

$adjectives = array(
'bawdy',
'erotic',
'exotic',
'fervid',
'filthy',
'flirtatious',
'indecent',
'kinky',
'lecherous',
'lewd',
'lusty',
'obscene',
'profane',
'provocative',
'prurient',
'racy',
'raunchy',
'risquÉ',
'salacious',
'seductive',
'sensual',
'sensuous',
'sexual',
'sexy',
'slutty',
'steamy',
'suggestive',
'titilating',
//'hot', // Too literal
);

$nouns = array(
'500 thread-count fitted sheet',
'Cheese plate',
'Fort Knox',
'Kitchenaid mixer',
'Lake Superior',
'Lord Nelson',
'Mayor of Detroit',
'Mona Lisa',
'Mount Rushmore',
'National Park',
'New York Subway System',
'Pope Alexander VI',
'UPS truck',
'US Treasury Bond',
'United States 112th Congress',
'air freshener',
'aircraft carrier',
'ambulance',
'aphid',
'apple fritter',
'apple',
'autoharp',
'baby crib',
'bagel bite',
'balalaika',
'ball bearing',
'bamboo shoot',
'barge',
'beet',
'bell pepper',
'bingo card',
'blimp',
'blogging platform',
'bounced check',
'bowling shoe',
'bunny',
'burrito',
'bus pass',
'bus',
'bush',
'business memo',
'cactus',
'can of soup',
'carrot person from veggieland',
'carrot person',
'cashew',
'cello',
'chair',
'cheese danish',
'chicken dinner',
'chimney',
'chip clip',
'chop salad',
'christmas ham',
'commissioner of baseball',
'cookie',
'corrugated cardboard box',
'crumpet',
'cup \'o noodles',
'cupcake',
'curtain',
'dashboard',
'deviled egg',
'doorbell',
'double-decker bus',
'dump truck',
'fig newton',
'fingernail clipper',
'fire hose',
'firetruck',
'fishing lure',
'flapjack',
'freeway off-ramp',
'fruit fly',
'fruit salad',
'garbage pail',
'ginger snap',
'girraffe',
'gold ingot',
'government contract',
'grand canyon',
'grandfather clock',
'grapefruit',
'hangnail',
'helicoptor landing pad',
'highway mile marker',
'hospital bed',
'hot pocket',
'ice cream cone',
'igloo',
'infant\'s car seat',
'inkjet printer',
'jalopy',
'jellybean',
'keytar',
'labratory rat',
'laser beam',
'lawn chair',
'lawnmower',
'leaf blower',
'lobster',
'locamotive',
'lozenge',
'mathematics textbook',
'mermaid egg',
'microplankton',
'model train',
'monorail',
'moose',
'mop',
'nacho',
'neo-victorian spice rack',
'nicotine patch',
'nose-hair trimmer',
'organic tofu cube',
'packing peanut',
'pair of britches',
'pancake',
'pet door',
'pickle',
'pork barrel',
'pork dumplint',
'post office',
'pot roast',
'potato',
'power washer',
'proof of insurance',
'rabbit',
'radish',
'rainbow',
'red vine',
'rolodex',
'salad',
'sausage',
'science fair project',
'sea barnacle',
'sewage treatment plant',
'sherman\'s march to the sea',
'side of ranch',
'ski lift',
'small business loan',
'soup bread-bowl',
'sperm whale',
'spice rack',
'sponge',
'squash',
'statuette',
'steamroller',
'stick figure',
'stop sign',
'subway train',
'super quesadilla',
'tadpole',
'thanksgiving turkey',
'tikki lamp',
'toe',
'toilet',
'tow truck',
'tractor',
'train',
'tram',
'tuba',
'turnip',
'typewriter',
'viola de gamba',
'walnut',
'walrus',
'water bill',
'weasel',
'wine rack',
'wishbone',
'wombat',
'yogurt container',
'zamboni',
'zebra',
'zither',
);

$noun = $nouns[array_rand($nouns)];
$adjective = $adjectives[array_rand($adjectives)];
$costume = mb_strtoupper($adjective . ' ' . $noun);

$prompt = $prompts[array_rand($prompts)];
$next = $nexts[array_rand($nexts)];

?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>What The Fuck Should I Be For Halloween?</title>
        <style>
            body { text-align: center; margin-top: 100px; font-family: Arial, Helvetica, sans-serif; }
            a:link, a:visited { color: blue; }
            h1,h2 { margin-bottom: 100px; }
            h1 { font-size: 60px; }
            h2 { font-size: 35px; }
            #next { font-size: 25px; }
            #footer { position: fixed; bottom: 0; width: 100%; text-align: center; margin-bottom: 100px; line-height: 30px; }
        </style>
    </head>
    <body>
        <!-- Facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=140251516068779";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- The actual content -->
        <h2><?php echo $prompt; ?>...</h2>
        <h1><?php echo $costume; ?></h1>
        <a href='.' id='next'><?php echo $next; ?> Give me another idea.</a>


        <div id='footer'>
            <!-- Facebook -->
            <div class="fb-like" data-href="http://whatthefuckshouldibeforhalloween.com/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>

            <!-- Twitter -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://whatthefuckshouldibeforhalloween.com/" data-text="I'm going as a <?php echo $costume; ?> for halloween thanks to">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <br />
            By: <a href='http://blog.classicalcode.com/'>Jordan</a> (<a href='https://twitter.com/captbaritone'>@captbaritone</a>)
            <br />
            Apologies to <a href='http://whatthefuckshouldimakefordinner.com' target='_blank'>whatthefuckshouldimakefordinner.com</a>
        </div>

        <!-- Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96948-13', 'whatthefuckshouldibeforhalloween.com');
        ga('send', 'pageview');

        </script>
	</body>
</html>