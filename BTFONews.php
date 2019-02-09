<!DOCTYPE html>
<html lang="en">
<?php include("PHP_Includes/Header.php") ?>

      <!-- Body Intro -->

  <body>
      <div class="headings non-home text-center bg-danger">
        <img class="banner" src="Images/BTFBanner.jpg" alt="Build the flock banner">
        <h1>Welcome to Build the Flock Online</h1>
        <h4 class="headings-bottom">An Online Network of University of Louisville Athletics Fans and Supporters</h4>
      </div>

      <div>
        <p class="intro-text text-center">The time is approaching. Below is a countdown to this year's regular season U of L baseball schedule.</p>

    <div class="countdown">
        <table class="center">
          <tr>
            <td colspan="4" class="countdown-title" style="text-align:center">Countdown to U of L baseball season opener.</td>
          </tr>
          <tr>
            <td id="days" class="cd-item"></td>
            <td id="hours" class="cd-item"></td>
            <td id="minutes" class="cd-item"></td>
            <td id="seconds" class="cd-item"></td>
          </tr>
          <tr>
            <td class="cd-item">Days</td>
            <td class="cd-item">Hours</td>
            <td class="cd-item">Minutes</td>
            <td class="cd-item">Seconds</td>
          </tr>
        </table>
      </div>
      <script type="text/javascript">

        function countdown(){
          var now = new Date();
          var eventDate = new Date(2019, 01, 15, 18)

          var currentTime = now.getTime();
          var eventTime = eventDate.getTime();

          var remTime = eventTime - currentTime;

          var s = Math.floor(remTime / 1000);
          var m = Math.floor(s / 60);
          var h = Math.floor(m / 60);
          var d = Math.floor(h / 24);

          h %= 24;
          m %= 60;
          s %= 60;

          h = (h < 10) ? "0" + h : h;
          m = (m < 10) ? "0" + m : m;
          s = (s < 10) ? "0" + s : s;

          document.getElementById("days").textContent = d;
          document.getElementById("days").intterText = d;

          document.getElementById("hours").textContent = h;
          document.getElementById("minutes").textContent = m;
          document.getElementById("seconds").textContent = s;

          setTimeout(countdown, 1000);
        }

        countdown();
      </script>

      <div class="mid-section">
        <div class="BTFlogo2transform">
          <img class="BTFlogo2" src="Images/FlyingWithLogo.jpg" alt="grey background flying bird logo">
          <p class="intro-text">Greetings Cards fans! I finally got around to doing an update of the site in 2019. For those who may not know I built a twitter list that has been very popular with #BTF participants which can be found <a href="https://twitter.com/BuildTheFlockUL/lists/btf" target="_blank"> here.</a> This list includes a members section where you can see who does and doesn't follow you from #BTF and allows you to one click add straight from the list. </p>

          <!-- <p class="intro-text"> <a class="twitter-timeline tw-align-center" data-width="75%" data-height="500" href="https://twitter.com/BuildTheFlockUL/lists/btf">A Twitter List by BuildTheFlockUL</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </p> -->

          <p class="intro-text"> I'm also in the planning stages of creating a #BTF presence for Instagram. It's always been part of my vision to expand this project beyond twitter and into other social media realms. It looks like Instagram may be next. I'm still ironing out how this will all work but it's my goal to launch some form of campaign in late February or early March so keep your eyes peeled and if you want to follow and be followed by more Cards Fans on Instagram feel free to let me know. </p>        

          <p class="intro-text">I want this to be a place where Louisville fans can share their passion, pride, and compassion. I look at my hand written notes where I've collected hundreds of twitter handles over a series of years and wonder what I'm doing? Then I think about the people I've met and what they've meant to me and it all seems worth it. So let's get together at tailgates and bars as we celebrate what brought us all together. Let's use the internet as a tool to let the country and the world know U of L and it's fanbase are as passionate as any in the country. Go Cards and let's get to building the flock.</p>
        </div>
      </div>

<?php include("PHP_Includes/Footer.php") ?>
