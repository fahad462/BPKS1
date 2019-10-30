<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <title>Admin Dashboard - Home</title>
    <meta name="author" content="Fahad Hasan"/>

    <script src="//cdn.jsdelivr.net/phaser/2.2.2/phaser.min.js"></script>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/colors/main.css')}}" id="colors">

</head>

<body>
<div id="loading">
    <img src="{{asset('assets/images/loading.gif')}}" alt="loading">
</div>

<div class="responsive-menu"><a href="#"> <b>BPKS</b></a> <a id="menu-icon" class="but" href="#"><span
                class="ti-menu"><img src="{{ asset('/assets/images/menu.png') }}" alt="image"></span> </a></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">
            <script type="text/javascript">

                var game = new Phaser.Game(800, 600, Phaser.AUTO, '', {
                    preload: preload,
                    create: create,
                    update: update,
                });

                function preload() {
                    game.load.image('sky', '{{ asset('/assets/sky.png')}}');
                    game.load.image('ground', '{{ asset('/assets/platform.png')}}');
                    game.load.image('star', '{{ asset('/assets/star.png')}}');
                    game.load.image('bomb', '{{ asset('/assets/bomb.png')}}');
                    game.load.spritesheet('dude', '{{ asset('/assets/dude.png')}}', 32, 48);
                }

                var player;
                var platforms;
                var cursors;

                var stars;
                var score = 0;
                var scoreText;
                var iter = 45;

                function create() {

                    game.physics.startSystem(Phaser.Physics.ARCADE);
                    game.add.sprite(0, 0, 'sky');
                    platforms = game.add.group();
                    platforms.enableBody = true;
                    var ground = platforms.create(0, game.world.height - 64, 'ground');
                    ground.scale.setTo(2, 2);
                    ground.body.immovable = true;
                    var ledge = platforms.create(400, 400, 'ground');
                    ledge.body.immovable = true;

                    ledge = platforms.create(-150, 250, 'ground');
                    ledge.body.immovable = true;
                    player = game.add.sprite(32, game.world.height - 150, 'dude');
                    game.physics.arcade.enable(player);
                    player.body.bounce.y = 0.2;
                    player.body.gravity.y = 300;
                    player.body.collideWorldBounds = true;
                    player.animations.add('left', [0, 1, 2, 3], 10, true);
                    player.animations.add('right', [5, 6, 7, 8], 10, true);
                    stars = game.add.group();
                    bombs = game.add.group();

                    // bomb.children.iterate(function(child){
                    //     child.setBounceY(Phaser.Math.FloatBetween(0.4,0.8));
                    // });

                    bombs.enableBody = true;


                    for (var i = 0; i < 12; i++) {
                        //var bombs = bomb.create(i * 70, 0, 'bomb');
                        var bombss = bombs.create(i * iter, 0, 'bomb');
                        iter = iter + 5;
                        bombss.body.gravity.y = 150;
                        bombss.body.bounce.y = Math.random() * (0.8 - 0.4) + 0.4;
                    }

                    stars.enableBody = true;
                    for (var i = 0; i < 12; i++) {
                        var star = stars.create(i * 70, 0, 'star');
                        star.body.gravity.y = 300;
                        star.body.bounce.y = 0.7 + Math.random() * 0.2;
                    }

                    scoreText = game.add.text(16, 16, 'score: 0', {fontSize: '32px', fill: '#000'});
                    cursors = game.input.keyboard.createCursorKeys();
                }

                function update() {
                    var hitPlatform = game.physics.arcade.collide(player, platforms);
                    game.physics.arcade.collide(stars, platforms);
                    game.physics.arcade.overlap(player, stars, collectStar, null, this);
                    game.physics.arcade.collide(player, bombs, hitkorse, null, this);
                    game.physics.arcade.collide(bombs, platforms);
                    player.body.velocity.x = 0;

                    if (cursors.left.isDown) {
                        player.body.velocity.x = -150;

                        player.animations.play('left');
                    }
                    else if (cursors.right.isDown) {
                        player.body.velocity.x = 150;

                        player.animations.play('right');
                    }
                    else {
                        player.animations.stop();

                        player.frame = 4;
                    }
                    if (cursors.up.isDown && player.body.touching.down && hitPlatform) {
                        player.body.velocity.y = -350;
                    }
                }

                var text1;

                function hitkorse(player, bombs) {
                    game.physics.pause = true;
                    //player.setTint(0xff0000);

                    // text1 = game.add.text(300, 300, "GAME OVER", {
                    //     fontSize: '32px',
                    //     fill: '#000'
                    // });

                    gameOver = true;
                }

                function between(min, max) {

                    return Math.floor(Math.random() * (max - min + 1) + min);

                }

                function collectStar(player, star) {
                    star.kill();
                    score += 10;
                    scoreText.text = 'Score: ' + score;

                    var x = (player.x < 400) ? between(400, 800) : between(0, 400);
                    bomb = bombs.create(x, 16, 'bomb');
                    // bomb.arcade.setc(true);
                    bomb.velocity = (between(-200, 200), 20);
                    bomb.allowGravity = false;
                }
            </script>
        </div>
    </div>
</div>
<a href="#" class="goto-top"><span class="fa fa-arrow-up"></span></a>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/typed.js')}}"></script>
<script src="{{asset('assets/js/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<script src="{{asset('assets/js/materialize.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg"></script>
<script type="text/javascript" src="{{asset('assets/js/gmap3.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/switcher.js')}}"></script>

</body>

</html>




