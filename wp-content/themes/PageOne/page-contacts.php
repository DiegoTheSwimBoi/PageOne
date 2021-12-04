<?php
/*
Template Name: Contact-Form
*/
?>

<?php
get_header();
?>
<div class="content-wrap">
<section id="main">
<section id="contact" class="clearfix">

        <h1>Get in touch.</h1>

        <div class="primary">

            <p class="intro">
            In hac habitasse platea risus dictumst. Suspendisse enim arcu. Aliquam erat volutpat.
            Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Sed commodo ligula blandit risus. Pellentesque magna mi,
            iaculis pharetra eu, fermentum ullamcorper nisi. Integer fringilla magna ut quam vulputate erat.
            </p>

            <form method="post" action="contact.php" id="contactform">

                <div>
                <p>Send me a message</p>
                </div>

                <div>
                <label>Name <span class="required">*</span></label>
                <input name="name" type="text" id="name" value="" />
                </div>

                <div>
                <label>Email <span class="required">*</span></label>
                <input name="email" type="text" id="email" value="" />
                </div>

                <div>
                <label>Website</label>
                <input name="website" type="text" id="website" value="" />
                </div>

                <div>
                <label>Subject</label>
                <input name="subject" type="text" id="subject"  value="" />
                </div>

                <div>
                <label>Message <span class="required">*</span></label>
                <textarea name="message" rows="20" cols="50"  id="message" ></textarea><br /><br />
                </div>

                <div>
                <input type="submit"  value="Submit" class="button">
                 <input type="reset" value="Reset" class="button">
                </div>


            </form>

        </div>

        <aside>

                <h2>Contact Information</h2>


                <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                acus duis in dictumst non integer.</p>

                <p>
                PageOne Studio <br />
                Anystreet Avenue 012 <br />
                State, Anytown
                </p>

                <p>
                Phone: 0 123 456 789 0 <br />
                Email: info [@] pageone.com
                </p>


                <h2>Follow Us</h2>

                <ul class="link-list social">
                    <li class="facebook"><a href="/">Facebook</a></li>
                    <li class="googleplus"><a href="/">Google+</a></li>
                    <li class="twitter"><a href="/">Twitter</a></li>
                    <li class="dribble"><a href="/">Dribble</a></li>
                    <li class="linkedin"><a href="/">Linkedin</a></li>
                    <li class="delicious"><a href="/">Delicious</a></li>
                    <li class="flickr"><a href="/">Flickr</a></li>
                </ul>

                <div class="ads">

                    <h2>Get Hosting</h2>

                    <p>Host this template on
                    <strong><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" title="Dreamhost">Dreamhost</a></strong>.
                    Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                Get <strong>$50 off</strong> when you sign up with the promocode <strong>styleshout</strong>. 

                    <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="sign-up-btn">Sign Up Now</a>
                    </p>

                </div>

        </aside>

        <a class="back-to-top" href="/">Back to Top</a>

 </section>
 </section>
</div>
<?php
get_footer();
?>