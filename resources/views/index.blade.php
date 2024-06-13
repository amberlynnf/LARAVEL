<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/portofolio.css">
    <title>portofolio</title>
</head>

<body>
    <header>
        <div class="hero" style="background-image: url()">
            <nav>
                <h2 class="logo">porto<span>folio</span></h2>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Contact</a></li>
                </ul>
                <a href="#more"><div class="btn">info</div></a>
            </nav>
    </header>
    <!-- article satu -->
    <main>
    <article id="Home">
        <div class="content">
            <h4>Hellooo My Name Is</h4>
            <h1>Amber <span>Lynn F.</span></h1>
            <h3>This is my Portofolio</h3>
            <div class="news">
                <form action="">
                    <input type="email" name="email" placeholder="Input Your Email" id="mail">
                    <input type="submit" value="Let's Go Start" name="submit">
                </form>
            </div>
        </div>
        </div>
    </article>
    <!-- artikel dua -->
    <article id="about">
        <div class="about">
            <div class="main">
                <aside>
                    <img src="{{ asset('img/lynnn.jpg') }}" alt="">
                </aside>
                <div class="about-text">
                    <h2>About</h2>
                    <h5>Student<span> In Wikrama</span></h5>
                    <p>I'm a student at Wikrama Vocational Highschool and I took PPLG major. I am also a 10th grader</p>
                    <a href="#more"><button type="button">Let's Talk</button></a>
    </article>
    </div>
    </div>
    </div>
    <div id="service">
        <div class="title">
            <h2>Click!</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-regular fa-user"></i>
                <h5>Amber's Profile</h5>
                <div class="pra">
                    <p>Stuff About Amber</p>
                    <p style="text-align: center;"></p>
                    <a href="#more" class="button">Read More</a>
                </div>
            </div>
            <div class="card">
                <i class="fa-regular fa-desktop"></i>
                <h5>Contact</h5>
                <div class="pra">
                    <p>Where to be in touch with Amber</p>
                    <p style="text-align: center;"></p>
                    <a href="#Contact-Me" class="button">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div id="Contact-Me">
        <p>See more about me</p>
        <a href="#cont" class="button-dua">Contact Me</a>
    </div>
     <!-- artikel tiga -->
     <main>
     <article id="more">
        <div class="main">
        <div class="more">
    <aside>
        <img src="{{ asset('img/lynnn.jpg') }}" alt="">
    </aside>
    <div class="More-Text" id="more">
        <h1>More<span> Info </span></h1>
        <p> - I'm 15 yrs old, my birthday is at  13 september. i was born in USA Houston 2008.</p>
        <p> - My Hobbies are listening to music, sleeping, and anything else that i cant really think of. </p>
        <p> - My favortie color is mostly purple! but i like other colors too. for example Beidge, Ruby, Amber,Verdigris Green
, ect.</p>
        <p> - I looooveeee CATS! and i love cows aswell, im talking about highland cows.</p>
        <p> - My daily activity? i usually help my mom at home, rest, study, or go out to play with my friends/family or even just go shopping! ofcourse on weekdays, or when i get home from school.</p>
        </div>
    </article>
</main>

    <footer id="cont">
        <p>Amber Lynn Floyd</p>
        <p>To Know More About Me Contact :</p>
        <div class="social">
            <a href="https://www.instagram.com/luvsliqq/">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <p class="end">CopyRight@ AmberLynnF.com</p>
    </footer>
</body>

</html>