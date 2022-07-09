<style>
.error{
   color: red;
}
</style>
      <section class="exp-itanaries feedback-banner">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="adv-title-sec">
                     <h1 class="heading">We value your feedback</h1>                     
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <section class="breadcrumb">
         <div class="container">
            <ul class="br-list">
               <li><a href="#">Home</a></li>
               <li>></li>
               <li>Feedback</li>
            </ul>
         </div>
      </section>

      <section class="careers-section feedback-sec">
         <div class="container">
            <div class="row">              
               <div class="col-md-12">
                  <div class="advent-form">
                     <div class="paratext">
                        <p class="para">
                           Hi There, We value your feedback and take actions on all feedback and comments we receive!
                        </p>
                        <p class="para">
                           Do drop in a word for us and we will look in to it right away… Anything you want to tell us, Go ahead filling in the below details and hit the submit button
                        </p>
                     </div>
                    <form id="submitfeedback">                        
                        <div class="advent-input">
                           <label>Your Name <span>*</span></label>
                              <input type="text" class="form-control" placeholder="Name*" name="username">
                           <!-- <input type="text" name="name" id="name" required="required" class="form-control"> -->
                        </div>
                        <div class="advent-input">
                           <label>Your Email <span>*</span></label>
                           <input type="email" class="form-control" placeholder="Email*" name="email">
                           <!-- <input type="text" name="email" id="email" required="required" class="form-control"> -->
                        </div>
                        <div class="advent-input">
                           <label>Subject <span>*</span></label>
                           <input type="tel" class="form-control" placeholder="Subject" name="subject">
                           <!-- <input type="text" name="subject" id="subject" required="required" class="form-control"> -->
                        </div>
                        <div class="advent-input">
                           <label>Details <span>*</span></label>                  
                           <textarea class="form-control" rows="3" placeholder="Details" name="desc"></textarea>
                           <!-- <textarea name="message" id="message" required="required" class="form-control"></textarea> -->
                        </div>

                        <div class="advent-input">
                           <button type="button" class="btn btn-submit" id="submitfeed">Submit</button>
                           <!-- <button type="submit" class="btn btn-submit">Submit</button> -->
                        </div>
                        

                        <div class="col-sm-12">
                           <div class="alert alert-danger margin-top-10px footertravelerror" style="display:none">
                              <strong>Failure!</strong> Please enter valid details.
                           </div>
                           <div class="alert alert-success margin-top-10px footertravelsuccess" style="display:none">
                              <strong>Success!</strong> Thank you, we will review your Details and get back to you soon.
                           </div>
                        </div> 

                     </form>
                  </div>  
               </div>
            </div>
         </div>
      </section>

      
      <div class="advent-sidebar">
         <div class="adven-brand">
            <a href="#">
               <img src="<?= base_url(); ?>assets/images/adventourist-logo.png" alt="Adventourist logo">
            </a>
            <div class="advent-close">&#10005;</div>
         </div>
         <div class="advent-form ds-none m-ds-block widget">
            <h3 class="heading">Menu</h3>
            <ul class="m-menu">
               <li><a href="#">Home</a></li>
               <li><a href="#">Travel itineraies</a></li>
               <li><a href="#">Travel stories</a></li>
               <li><a href="#">Things to do</a></li>
               <li><a href="#">Destination guide</a></li>               
            </ul>
         </div>
         <div class="latest-itanaries">
            <h2 class="heading-2">Latest itineraries</h2>
            <div class="itn-list">
               <a href="#" class="itn-box">
                  <div class="itn-img">
                     <img src="<?= base_url(); ?>assets/images/itineraries/img-1.jpg">
                  </div>
                  <div class="itn-ttl">
                     The Ski Resort Destination - Auli 5 Nights and 6 Days
                  </div>
               </a>
               <a href="#" class="itn-box">
                  <div class="itn-img">
                     <img src="<?= base_url(); ?>assets/images/itineraries/img-2.jpg">
                  </div>
                  <div class="itn-ttl">
                     The Ski Resort Destination - Auli 5 Nights and 6 Days
                  </div>
               </a>
               <a href="#" class="itn-box">
                  <div class="itn-img">
                     <img src="<?= base_url(); ?>assets/images/itineraries/img-3.jpg">
                  </div>
                  <div class="itn-ttl">
                     The Ski Resort Destination - Auli 5 Nights and 6 Days
                  </div>
               </a>
            </div>
         </div>
         <!-- <div class="advent-form">
            <form>
               <div class="advent-input">
                  <label>Your Name <span>*</span></label>
                  <input type="text" name="name" id="name" required="required" class="form-control">
               </div>
               <div class="advent-input">
                  <label>Your Email <span>*</span></label>
                  <input type="text" name="email" id="email" required="required" class="form-control">
               </div>
               <div class="advent-input">
                  <label>Subject <span>*</span></label>
                  <input type="text" name="subject" id="subject" required="required" class="form-control">
               </div>
               <div class="advent-input">
                  <label>Your Message <span>*</span></label>                  
                  <textarea name="message" id="message" required="required" class="form-control"></textarea>
               </div>

               <div class="advent-input">
                  <button type="submit" class="btn btn-submit">Call me back</button>
               </div>
            </form>
         </div> -->
         <div class="widget mks_social_widget mrt50">
            <h5 class="widget-title">Connect with us</h5>
            <p>Travel Stories &amp; Inspirations</p>
            <ul class="mks_social_widget_ul">
               <li><a href="https://www.facebook.com/adventourist.in" title="Facebook" class="social sprite-icon socicon-facebook" target="_blank"></a></li>
               <li><a href="https://twitter.com/adventourist.in" title="Twitter" class="social sprite-icon socicon-twitter" target="_blank"></a></li>
               <li><a href="https://www.instagram.com/adventourist.in/" title="Instagram" class="social sprite-icon socicon-instagram" target="_blank"></a></li>
               <li><a href="" title="Linkedin" class="social sprite-icon socicon-linkedin" target="_blank"></a></li>
            </ul>
         </div>         
      </div>
      <div class="advent-action-overlay"></div>