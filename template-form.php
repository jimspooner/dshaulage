<?php /* Template Name: form Template */ get_header('test'); ?>

	<main role="main">

    <section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh">
			<div class="uk-flex" uk-grid>
					<div class="uk-width-1-1" style="width:100%;">
							<h2><?php the_title(); ?></h2>


						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							


                        <div class="ajax-form">
  <div class="container">
    <div class=row>
      <div class="col-md-6 col-md-offset-3 form-box">
       <form action="" method="post" class="ajax" 
enctype="multipart/form-data">

         <h1>Ajax Form</h1>

         <label><b>Name</b></label>

          <input type="text" placeholder="Enter Your Name" name="name" 
required class="name">

         <label><b>Email</b></label>

         <input type="email" placeholder="Enter your Email" name="email" 
required class="email">

         <label><b>Message</b></label>

          <input type="textarea" placeholder="Message" name="message" 
required class="message"><hr>

            <div id="msg"></div>

              <input type = "submit" class="submitbtn" value="submit">

<div class="success_msg" style="display: none">Message 
Sent Successfully</div>

                  <div class="error_msg" style="display: none">Message 
Not Sent, There is some error.</div>

    </form>

   </div>

 </div>

</div>


						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>
  

	</main>

<?php get_footer(); ?>
