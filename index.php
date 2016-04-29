<?PHP
/*
Contact Form from HTML Form Guide
This program is free software published under the
terms of the GNU Lesser General Public License.
See this page for more info:
http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");
$formproc = new FGContactForm();
//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('sinner019@gmail.com'); //<<---Put your email address here
//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');
if(isset($_POST['submitted']))
{
if($formproc->ProcessForm())
{
echo "<script> alert('thank you') </script>";
}
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuvo Paul | Front End Developer</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div data-sticky-container>
        <div class="top-bar" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">
          <div class="top-bar-title">
            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            </span>
            <strong><a href="http://shuvopaul.com/"><img src="img/logo.png" alt="">Shuvo Paul</a></strong>
          </div>
          <div class="top-bar-title float-right show-for-small-only">
            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
              <button class="menu-icon" type="button" data-toggle></button>
            </span>
          </div>
          <div id="responsive-menu">
            <div class="top-bar-right">
              <ul class="menu">
                <li><a href="#intro">Intro</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#contact">Contact me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="intro" class="text-center ">
      <div class="row">
        <div class="medium-12 columns">
          <h1>Front-End Web Developer</h1>
          <p>I'm a freelance front-end web developer based in
            Bangladesh. I develop responsive, high-performance websites using HTML5,
          CSS, and JavaScript.</p>
          <a href="#portfolio">View Portfolio</a>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="work one text-center">
        <div class="row">
          <div class="medium-12 columns">
            <h3>ZYGYgatekeeper</h3>
            <p>HMTL5, css3, javascript, Bootstrap website</p>
            <a target="_blank" href="http://www.zygy.com/">Live View</a>
            <div class="preview center">
              <img src="img/zygy.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="work tow text-center">
        <div class="row">
          <div class="medium-12 columns">
            <h3>SELECTED</h3>
            <p>Converted from PSD using bootstrap framework</p>
            <a target="_blank" href="http://www.selected.co.il/">Live View</a>
            <div class="preview center">
              <img src="img/selected.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="work three text-center">
        <div class="row">
          <div class="medium-12 columns">
            <h3>KidzType</h3>
            <p>Responive Website Development with zurb foundation</p>
            <a target="_blank" href="http://www.kidztype.com/">Live View</a>
            <div class="preview center">
              <img src="img/kidztype.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="work four text-center">
        <div class="row">
          <div class="medium-12 columns">
            <h3>nervesis</h3>
            <p>PSD to HTML: used bootstrap and jquery plugin</p>
            <a target="_blank" href="http://www.nervesis.com.my/">Live View</a>
            <div class="preview center">
              <img src="img/nervesis.png" alt="">
            </div>
          </div>
        </div>
      </div>
      </section> <!--end portfolio-->
      <section id="testimonial" class="text-center">
        <h2>Testimonial</h2>
        <p>What clients say about me</p>
        <div class="row">
          <div class="medium-12 columns">
          <blockquote>"Shuvo is a rock star front end coder, trustworthy and reliable."<strong class="text-left"><img src="img/fi.png" alt="">Kathy</strong></blockquote>
        <blockquote>"Excellent service and great person to collaborate with. I highly recommend to anyone."<strong class="text-left"><img src="img/fi.png" alt="">Marius - thetraveller</strong></blockquote>
        <blockquote>"Excellent Service - Completed the work as
          per instructions and delivered in amazing time frame. Will certainly be
          using this service again. Also, great communicator with very fast
        response time to answer questions."<strong class="text-left"><img src="img/fi.png" alt="">Davidb</strong></blockquote>
      <blockquote>"I was absolutely amazed with the results in such a short time. Fantastic job. Very grateful."<strong class="text-left"><img src="img/fi.png" alt="">Mikej</strong></blockquote>
    </div>
  </div>
  </section> <!--end testimonial-->
  <section id="contact">
    <div class="text-center">
      <h2>Contact Me</h2>
      <p>I'm available for freelance contracts, so get in touch</p>
    </div>
    
    <div class="row">
      <div class="medium-6 columns">
        <address>
          <p><strong>Phone:</strong> 01816731369</p>
          <p><strong>skype:</strong> iam_shuvo</p>
          <p><strong>mail:</strong> iam_shuvo@yahoo.com</p>
        </address>
        <ul class="menu">
          <li><a target="_blank" href="https://www.fiverr.com/iam_shuvo"><img src="img/fiverr.png" alt=""></a></li>
          <li><a target="_blank" href="https://www.upwork.com/freelancers/%7E01398990a92002871d?viewMode=1"><img src="img/up.png" alt=""></a></li>
        </ul>
      </div>
      <div class="medium-6 columns">
        <!-- <form id="contactus" action="/portfolio/index.php" method="post" accept-charset="UTF-8">
          <fieldset>
            <input name="submitted" id="submitted" value="1" type="hidden">
            <input name="idaec762cee60f6823d761" value="c24bfd559cbb9d7549cb17d578ee4fd8" type="hidden">
            <input class="spmhidip" name="spfe80c6bfb5dc1f2566088b2724f480a6" type="text">
            <div><span class="error"></span></div>
            <div class="container">
              <input name="name" id="name" placeholder="Your Name" maxlength="50" type="text">
              <span id="contactus_name_errorloc" class="error"></span>
            </div>
            <div class="container">
              <input name="email" id="email" placeholder="Email Address" maxlength="50" type="text">
              <span id="contactus_email_errorloc" class="error"></span>
            </div>
            <div class="container">
              <span id="contactus_message_errorloc" class="error"></span>
              <textarea rows="5" cols="50" name="message" id="message" placeholder="Message"></textarea>
            </div>
            <div class="container text-right">
              <input name="Submit" value="Send" class="send" type="submit">
            </div>
          </fieldset>
        </form> -->
        <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
          <fieldset >
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
            <div class='container'>
              <input type='text' name='name' id='name' placeholder="Your Name" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
              <span id='contactus_name_errorloc' class='error'></span>
            </div>
            <div class='container'>
              <input type='text' name='email' id='email' placeholder="Email Address"  value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class='container'>
              <span id='contactus_message_errorloc' class='error'></span>
              <textarea rows="5" cols="50" name='message' id='message' placeholder="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
            </div>
            <div class='container'>
              <input type='submit' name='Submit' value='Submit' />
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    </section> <!--end contact me-->
    <footer>
      <div class="row">
        <div class="medium-12 columns">
          <p class="float-left">© 2016 Shuvo Paul</p>
          <ul class="menu float-right">
            <li><a target="_blank" href="https://github.com/shuvo-paul"><i class="fa fa-github-alt fa-lg"></i>
            </a></li>
            <li><a target="_blank" href="https://www.facebook.com/sinner019"><i class="fa fa-facebook-square fa-lg"></i>
            </a></li>
            <li><a target="_blank" href="https://twitter.com/iam_shuvo"><i class="fa fa-twitter-square fa-lg"></i>
            </a></li>
          </ul>
        </div>
      </div>
    </footer>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>