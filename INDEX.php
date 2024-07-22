<?php
session_start();
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = "Guest";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK WEB Anime</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <header>
        <div class="menu-button">
            <i class="fas fa-ellipsis-v"></i>
        </div>
        <div class="sidebar">
            <div class="sidebar-header">
                <button class="back-btn"><i class="fas fa-arrow-left"></i></button>
                <div class="h2side">
                    <h2>Hello <b class="nama-user"><?php echo $username; ?></b></h2>
                </div>
            </div>
            <div class="sidebar-content">
            </div>

            <div class="sidebar-footer">
            <?php if($username == "Guest"): ?>
            <div>
            <a href="login.php" id="login-link" class="masuk">Sign in</a>
            </div>
            <?php else: ?>
                <a class="logout-btn" class="fas fa-sign-out-alt" href="logout.php"> Logout</a>
                <?php endif; ?>
            </div>
            
        </div>
        
        <div class="first container">
             <a href="#" class="logo"></i>ANIMEFLIX</a>
        </div>
        <nav class="navbar">
             <a href="INDEX.PHP">Home</a>
             <a href="#anime">Populer</a>
             <a href="#action">Action</a>
             <a href="#child">Comedy</a>
             <a href="#family">Family</a>
             <a href="#sport">Sports</a>i
        </nav>

        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search for anime...">
        </div>
        
    </header>


<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box " style="background: url(gambar/piece.jpg) no-repeat;">
                    <div class="content">
                        <h3>One Piece</h3>
                        <p><b>Monkey D.Luffy berlayar bersama awak kapal straw Hat Pirates untuk mengarungi Grand Line demi mencari harta karun One Piece dan menjadi raja bajak laut baru.</b></p>
                        <a href="onepiece.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(gambar/death\ note.png) no-repeat;">
                    <div class="content">
                        <h3>DEATH NOTE</h3>
                         <p><b>Dia menggunakan buku itu untuk menciptakan dunia baru yang bebas dari kejahatan, namun segera berhadapan dengan detektif jenius L.</b> </p>
                        <a href="deathnote.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box " style="background: url(gambar/dragon.jpg) no-repeat;">
                    <div class="content">
                        <h3>dragonball</h3>
                         <p><b>Dragon Ball Super mengikuti petualangan tokoh utama Goku dan teman-temannya, setelah mengalahkan Majin Boo dan membawa kedamaian ke Bumi sekali lagi. Goku bertemu dengan makhluk yang jauh lebih kuat dan mendapatkan kekuatan dewa.</b></p>
                        <a href="dragonball.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box " style="background: url(gambar/narutoo.jpg) no-repeat;">
                    <div class="content">
                        <h3>Naruto Shippuden</h3>
                        <p><b>Dipandu oleh roh iblis dalam dirinya, Naruto yang yatim piatu belajar untuk mengendalikan kekuatannya sebagai ninja dalam serial petualangan anime ini.</b></p>
                        <a href="naruto.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<section class="anime" id="anime">
    <h1 class="heading">Anime terpopuler</h1>
    <div class="swiper anime-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/nar.PNG) no-repeat;"></div>
                <div class="content">
                    <h3>Naruto Shippuden</h3>
                    <p>seorang ninja muda dengan impian menjadi Hokage, pemimpin desanya, menghadapi tantangan dan musuh kuat.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.7/10</p>
                    </div>
                    <a href="naruto.html" class="btn">Selengkapnya</a>
                </div>
            
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/onepunchman.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>One-Punch Man</h3>
                    <p>Monkey D. Luffy dan krunya mencari harta karun legendaris agar Luffy menjadi Raja Bajak Laut.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.7/10</p>
                    </div>
                    <a href="onepunchman.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/deathnote.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>DEATH NOTE</h3>
                    <p>menemukan buku catatan supernatural dapat membunuh siapa saja dengan menulis nama.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.9/10</p>
                    </div>
                    <a href="deathnote.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/blackclover.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Black Clover</h3>
                    <p> seorang anak yatim piatu yang lahir tanpa kekuatan sihir di dunia yang penuh dengan sihir, bertekad mempelajari sihir.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>                       
                        <p style="margin: 0; font-size: 1.5rem;">8.2/10</p>
                    </div>
                    <a href="blackclover.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/jujutsuu.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Jujutsu Kaisen</h3>
                    <p>bergabung dengan sekolah jujutsu untuk menguasai seni sihir dan bertarung melawan roh jahat.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.6/10</p>
                    </div>
                    
                    <a href="jujutsu.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/dragonball.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Dragon Ball z</h3>
                    <p>seorang pejuang mengumpulkan Bola Naga untuk memanggil naga yang dapat mengabulkan permintaan.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.8/10</p>
                    </div>
                    <a href="dragonball.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/aot.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Attack On Titan</h3>
                    <p>manusia tinggal dalam kota yang dikelilingi oleh tembok besar untuk melindungi mereka dari Titan.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">9.1/10</p>
                    </div>
                    <a href="aot.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/myhero.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>My Hero Academia</h3>
                    <p>anak tanpa kekuatan super di dunia yang dipenuhi pahlawan super. Bertekad menjadi pahlawan terbesar </p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.3/10</p>
                    </div>
                   
                    <a href="myhero.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/stone.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Dr. Stone</h3>
                    <p>Senku Ishigami menggunakan kecerdasan ilmiahnya untuk menghidupkan kembali peradaban dari nol.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.1/10</p>
                    </div>
                    <a href="stone.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/pokemon.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Pokemon</h3>
                    <p>petualangan Ash Ketchum dan Pikachu dalam perjalanan mereka untuk menjadi Master Pokémon.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">7.5/10</p>
                    </div>
                    <a href="pokemon.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/sword.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Sword Art Online</h3>
                    <p>Kirito yang terjebak dalam permainan realitas virtual yang mematikan. selesaikan game untuk bisa keluar</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">7.5/10</p>
                    </div>
                   
                    <a href="sao.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/demonslayer.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Demon Slayer</h3>
                    <p>Tanjiro Kamado menjadi pembasmi iblis setelah keluarganya dibunuh dan adiknya berubah menjadi iblis.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.6/10</p>
                    </div>
                    
                    <a href="demonslayer.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/tokyorevengers.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Tokyo Revengers</h3>
                    <p>Takemichi Hanagaki melakukan perjalanan waktu ke masa remaja demi menyelamatkan mantan pacarnya.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">7.5/10</p>
                    </div>
                    
                    <a href="tokyorevengers.html" class="btn">Selengkapnya</a>
                </div>
            </div>


        </div>
    </div>
</section>



<section class="action" id="action">
    <h1 class="heading">Action Movies</h1>
    <div class="swiper action-slider">
        <div class="swiper-wrapper">
        
                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/evangelion.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Evangelion : Final</h3>
                        <p> Shinji Ikari dan Eva Unit-01 dalam pertempuran terakhir melawan para malaikat, menjelajahi tema eksistensialisme.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.0/10</p>
                        </div>
                        
                        <a href="evangelion.html" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/seraph.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Seraph of the End</h3>
                        <p>dunia hancur setelah wabah mematikan, Yuichiro bergabung dengan tentara pembasmi vampir untuk membalas dendam.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">7.4/10</p>
                        </div>
                        
                        <a href="seraph.html" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/berserk.png) no-repeat;"></div>
                    <div class="content">
                        <h3>Berserk</h3>
                        <p>prajurit yang berjuang melawan kekuatan jahat dalam dunia yang dipenuhi kekerasan dan kegelapan setelah dikhianati.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.7/10</p>
                        </div>
                       
                        <a href="berserk.html" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/fatezero.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Fate/Zero</h3>
                        <p>Perang Cawan Suci Keempat tujuh penyihir memanggil roh pahlawan dari masa lalu untuk bertarung demi kekuatan.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.2/10</p>
                        </div>
                       
                        <a href="fate.html" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/kaiju.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Kaiju NO.8</h3>
                        <p>Kafka Hibino yang memperoleh kekuatan untuk berubah menjadi kaiju, kekuatan tersebut untuk melawan kaiju .</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.5/10</p>
                        </div>
                        <a href="kaiju.html" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/exoricsm.webp) no-repeat;"></div>
                    <div class="content">
                        <h3>Legend of Exorcism</h3>
                        <p> seorang pemuda dengan kekuatan eksorsisme, bergabung dengan Divisi Eksorsis Kekaisaran Tang melawan roh jahat.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p style="margin: 0; font-size: 1.5rem;">6.9/10</p>
                        </div>
                        
                        <a href="legend.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
</div>
</div>
</section>



<section class="child" id="child">
    <h1 class="heading">Comedy Movies</h1>
    <div class="swiper child-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/beyblade.jpg) no-repeat"></div>
                <div class="content">
                    <h3>Beyblade</h3>
                    <p>berlomba di turnamen dunia untuk menjadi yang terbaik sambil menjalin persahabatan dan menghadapi tantangan.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">6.8/10</p>
                    </div>
                    
                    <a href="beyblade.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/bakugan.jpg) no-repeat"></div>
                <div class="content">
                    <h3>Battle Brawlers</h3>
                    <p>makhluk dari dimensi lain, bertarung dalam permainan strategi menyelamatkan kedua dunia mereka dari ancaman jahat.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">5.8/10</p>
                    </div>
                    <a href="bakugan.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/crayon.PNG) no-repeat"></div>
                <div class="content">
                    <h3>Shinchan The Movie</h3>
                    <p>bocah nakal dan lucu bernama Shinnosuke Nohara, yang sering membuat keonaran konyolnya bersama keluarga dan teman.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p style="margin: 0; font-size: 1.5rem;">6.5/10</p>
                    </div>
                    <a href="shinchan.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/doraemon.jpg) no-repeat"></div>
                <div class="content">
                    <h3>Doraemon</h3>
                    <p> Doraemon, yang datang ke masa kini untuk membantu seorang anak bernama Nobita Nobi dengan alat-alat ajaib.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.4/10</p>
                    </div>
                    <a href="doraemon.html" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(gambar/boy.PNG) no-repeat"></div>
                <div class="content">
                    <h3>Go Astro Boy Go!</h3>
                    <p>Astro Boy, yang diciptakan oleh Dr. Tenma memiliki kekuatan super, berjuang untuk perdamaian antara manusia dan robot.</p>
                    <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p style="margin: 0; font-size: 1.5rem;">8.0/10</p>
                    </div>
                    <a href="astroboy.html" class="btn">Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="family" id="family">
    <h1 class="heading">Family Movies</h1>
    <div class="swiper family-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/stand.webp) no-repeat"></div>
            <div class="content">
                <h3>STAND BY ME 2</h3>
                <p>Doraemon dan Nobita berpetualang melalui waktu, menghadapi tantangan dan emosi terkait keluarga.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p style="margin: 0; font-size: 1.5rem;">7.5/10</p>
                </div>
                <a href="standbyme.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/howl.jpg) no-repeat"></div>
            <div class="content">
                <h3>Moving Castle</h3>
                <p>seorang gadis muda yang berubah menjadi nenek tua oleh kutukan penyihir, menemukan harapan dan cinta dalam petualangannya.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">8.2/10</p>
                </div>
                <a href="hows.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/away.PNG) no-repeat"></div>
            <div class="content">
                <h3>Spirited Away</h3>
                <p>seorang gadis muda yang terjebak di dunia roh saat orang tuanya berubah menjadi babi,harus bekerja di pemandian roh.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">8.6/10</p>
                </div>
                <a href="spirited.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/totoroo.PNG) no-repeat"></div>
            <div class="content">
                <h3>My Neighbor</h3>
                <p>Kisah dua saudara perempuan, Satsuki dan Mei, yang pindah ke pedesaan Jepang dan menemukan keberadaan makhluk magis.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">8.1/10</p>
                </div>
                <a href="totoro.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/kikis.PNG) no-repeat"></div>
            <div class="content">
                <h3>Kiki's Delivery </h3>
                <p>gadis kecil keluarga "Borrowers" tinggal di rumah manusia, ia menjalin persahabatan dengan anak manusia bernama Sho.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">7.8/10</p>
                </div>
                <a href="kikis.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/ponyoo.PNG) no-repeat"></div>
            <div class="content">
                <h3>Ponyo</h3>
                <p>gadis ikan bernama Ponyo yang ingin menjadi manusia setelah berteman dengan seorang anak laki-laki bernama Sosuke.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">7.6/10</p>
                </div>        
                <a href="ponyo.html" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="box" style="background: url(gambar/arierty.PNG) no-repeat"></div>
            <div class="content">
                <h3>Arrietty</h3>
                <p>gadis kecil keluarga "Borrowers" tinggal tersembunyi di rumah manusia, saat bersahabat dengan manusia bernama Sho.</p>
                <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <p style="margin: 0; font-size: 1.5rem;">7.6/10</p>
                </div>
                <a href="arrierty.html" class="btn">Selengkapnya</a>
            </div>
        </div>

    </div>
    </div>
</section>
    <section class="sport" id="sport">
        <h1 class="heading">Sports Movies</h1>
        <div class="swiper sport-slider">
            <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/captain.jpg) no-repeat"></div>
                    <div class="content">
                        <h3>Captain Tsubasa</h3>
                        <p>Ceritanya mengikuti Tsubasa Oozora dan kecintaannya pada sepak bola saat ia bercita-cita menjadi pemain terbaik di dunia.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">7.9/10</p>
                        </div>
                        <a href="tsubasa.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/bluelock.jpg) no-repeat"></div>
                    <div class="content">
                        <h3>BlueLock</h3>
                        <p>mengikuti Yoichi Isagi dan rekan-rekannya saat mereka bersaing dalam lingkungan yang sangat kompetitif.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.2/10</p>
                        </div>                                            
                        <a href="bluelock.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/haikyu.PNG) no-repeat"></div>
                    <div class="content">
                        <h3>Haikyu!!</h3>
                        <p>Hinata Shouyou, terinspirasi oleh jagoan bola voli bertubuh kecil, mengatasi rintangan untuk berkompetisi di bola voli sekolah.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.7/10</p>
                        </div>
                        <a href="haikyu.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="box" style="background: url(gambar/basket.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Kuroko's </h3>
                        <p>pemain bayangan keenam, bekerja sama dengan Kagami untuk membawa tim sekolah mereka menuju kemenangan.</p>
                        <div class="stars" style="display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <p style="margin: 0; font-size: 1.5rem;">8.2/10</p>
                        </div>
                        <a href="kuroko.html" class="btn">Selengkapnya</a>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
<div class="copyright container">
    <a href="#" class="logo"></i>ANIMEFLIX</a>
    <p>&#169; Aqib Teuku Habib Wahyu.</p>

    <a href="https://www.instagram.com/animeflixx_website" target="_blank">
    <i class="fa-brands fa-instagram"></i></a>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js" defer data-deferred="1"></script>  <script src="main.js" defer data-deferred="1">
</script>
<script src="main.js"></script>
<script>
document.querySelector('.menu-button').addEventListener('click', function() {
document.querySelector('.sidebar').classList.toggle('active');
});
document.querySelector('.back-btn').addEventListener('click', function() {
  document.querySelector('.sidebar').classList.toggle('active');
});
    
</script>
</body>
</html>