<!DOCTYPE html>
<html lang="en">
<head>

<title>Contact Us- Content Code</title>
  <meta name="description" content="Fastest way to create marketable content for blogs, coaches, entrepreneurs, business online" />
  <meta name="keywords" content="Content, resume, copywriting, social media, proofreading" />
  <link rel="canonical" href="http://contentcode.in/contact/" />
  <meta property="og:title" content="Contact Us- Content Code" />
  <meta property="og:description" content="Contact Us: Fastest way to create marketable content for blogs, coaches, entrepreneurs, business online" />
  <meta property="og:url" content="http://contentcode.in/contact/" />
  <meta property="og:site_name" content="Contact Us- Content Code" />
 
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Contact Us: Fastest way to create marketable content for blogs, coaches, entrepreneurs, business online" />
  <meta name="twitter:title" content="Contact Us- Content Code" />

  <meta name="twitter:url" content="http://contentcode.in/contact/" />
  <meta name="twitter:site" content="Contact Us- Content Code" />
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/head.php'); ?>

<!--

Contact Us

https://templatemo.com/tm-538-digital-trend

--> 
    
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/head.php'); ?>

</head>
<body>

     <!-- MENU BAR -->
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                      <p>or email us at <a href="mailto:contact@contentcode.in">contact@contentcode.in</a></p>
                      <p>or call us at <a href="mailto:contact@contentcode.in">+91 8777678374</a></p>
                      
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea id="message" class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button onsubmit="sendEmail()" type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                          </div>
                          <div class="col-lg-5 mx-auto col-7">
                            <p style="color: green" id="success"></p>
                            <p style="color: green" id="fail"></p>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
     <div class="google-map" data-aos="zoom-in">
 
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48129412968!2d77.06889969035102!3d28.52728034389636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1620824125900!5m2!1sen!2sin" width="1920" height="600"" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>

     

<script>
    function sendEmail(e) {
      e.preventDefault()
        var body = { name, email, "sender": "contentcode", "subject": "Subject", message };
        // API for get requests
        let fetchRes = fetch(
            "https://droidtechknow-mail-box.herokuapp.com/send-query", {
            "headers": {
                "accept": "application/json, text/plain, */*",
                "content-type": "application/json"
            },
            body: JSON.stringify(body),
            "method": "POST"
        });

        // fetchRes is the promise to resolve
        // it by using.then() method
        document.getElementById("success").innerHTML = '';
        document.getElementById("fail").innerHTML = '';
        fetchRes.then(res =>
            res.json()).then(d => {
                console.log(d);
                document.getElementById("success").innerHTML = 'Email sent successfully. We will contact you soon. Thanks!';
            }, (e) => {
                console.log(e);
                document.getElementById("fail").innerHTML = 'Error while sending the email. Please try again later.';
            });
        }
      </script>
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</body>
</html>