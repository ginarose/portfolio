<?php include 'phpheader.php'; ?>

	<!-- Name header -->
	<div id="name">Gina Rose Piscitelli</div>

	<!-- Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="#featuredslider" class="headernavigation">Home</a></li>
			<li><a href="#biographyblock" class="headernavigation">Biography</a></li>
			<li><a href="#galleryblock" class="headernavigation">Gallery</a></li>
			<li><a href="#resumelink" class="headernavigation">Resume</a></li>
			<li><a href="#contact" class="headernavigation">Contact</a></li>
		</ul>
	</div>

	<div id="totop-mobile">
		<a href="#"><i class="fa fa-caret-square-o-up"></i></a>
	</div>

<!-- Slider with featured work -->
<div id="featuredslider">
		<div class="slider">
			<ul>
				<li> <a href="/resolution"><img src="slider/imgs/site1.gif" alt="Resolution: The Ultimate Movie Picker"></a></li>
				<li> <img src="slider/imgs/site2.gif" alt="ArtPAD UCF Mockup"></li>
				<li> <a href="/trportfolio"><img src="slider/imgs/site3.gif" alt="First draft portfolio"></a></li>				
				<li> <a href="http://www.twinklefarts.com"><img src="slider/imgs/site4.gif" alt="Twinklefarts, my personal blog about beauty and tech"></a></li>
			</ul>
		</div>

		<div id="slider-nav">
			<button data-dir="prev"><i class="fa fa-chevron-left"></i></button>
			<button data-dir="next"><i class="fa fa-chevron-right"></i></button>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="slider/slider.js"></script>
</div>

<!-- Biography -->
<div id="biographyblock">
	<div id="biography">
		<h1>A little about me...</h1>
	<div id="bio_paragraph"><img src="imgs/me.png" width="200">
	<p>Hi! My name is Gina Piscitelli, or Gina Rose for short. I see you've stumbled upon my portfolio page. Welcome! Here you'll find a visual representation of my work as a digital media connoisseur. I enjoy fiddling with code as well as dabbling in design work. The examples you'll find around my portfolio showcase my latest works, as well as the portfolio itself. </p>
<p>Fun fact: I hand-coded the entirety of this website, with the help of a handy little library called jQuery. It's also responsive, which means it's optimized for mobile viewing. Feel free to play around!</div>
		<div id="bio_blocks">
			<div id="bio_experience"><h1>Experience</h1>
				<p class="bio_blocks_content">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle fa-stack-3x fa-inverse whiteicon"></i>
				  <i class="fa fa-briefcase fa-stack-2x orangeicon"></i>
				</span>
				<ul>
					<li>Front-end developer ninja</li>
					<li>Master of Adobe Photoshop</li>
					<li>Photographer extraordinaire</li>
				</ul>
				</p>
			</div>
			<div id="bio_hobbies"><h1>Hobbies</h1>
				<p class="bio_blocks_content">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle fa-stack-3x fa-inverse whiteicon"></i>
				  <i class="fa fa-lightbulb-o fa-stack-2x orangeicon"></i>
				</span>
				<ul>
					<li>Reading fiction books</li>
					<li>DIY craft-hacking with thrift finds</li>
					<li>Adventuring around the country</li>
				</ul>
				</p>
			</div>
			<div id="bio_interests"><h1>Interests</h1>
				<p class="bio_blocks_content">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle fa-stack-3x fa-inverse whiteicon"></i>
				  <i class="fa fa-book fa-stack-2x orangeicon"></i>
				</span>
				<ul>
					<li>Cameras and gadgets</li>
					<li>Learning new languages</li>
					<li>Experimenting with electronics</li>
				</ul>
				</p>
			</div>
		</div>
		<h1>Find me around the web! 
			<a href="https://www.flickr.com/photos/tinfoil-hearts"><i class="fa fa-flickr alignright"></i></a>
			<a href="https://vimeo.com/ginarose"><i class="fa fa-vimeo-square alignright"></i></a>
			<a href="http://www.linkedin.com/pub/gina-piscitelli/5a/9b1/266/"><i class="fa fa-linkedin-square alignright"></i></a>
			<a href="http://www.google.com/+GinaPiscitelli"><i class="fa fa-google-plus-square alignright"></i></a>
		</h1>
	</div>
		
	
</div>

<!-- Gallery -->
<div id="galleryblock">
	<div id="gallery">
		<h1>Some of my work</h1>
		<script src="lightbox.js"></script>
		<a href="slider/imgs/site1.gif" data-description="This is a new idea of mine that I made into a functioning web application. The ultimate decision-maker for those movie buffs that just can't pick. <a href='/resolution'>Want to try?</a>" class="lightbox_trigger"><img src="slider/imgs/site1.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site2.gif" data-description="For this design concept, I was enlisted to help create a storefront for UCF students to sell their artwork in a professional, yet exciting platform. This is what came of that prompt." class="lightbox_trigger"><img src="slider/imgs/site2.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site3.gif" data-description="This was a last-minute portfolio I put together in one day that aimed to show off my simplistic design skills while still keeping the audience interested. You can find a live example <a href='/trportfolio'>here.</a>" class="lightbox_trigger"><img src="slider/imgs/site3.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site4.gif" data-description="The homepage of my musings as a student, beauty lover and technology addict, my blog serves as an example of both my design and personal skills. You can view my blog <a href='http://www.twinklefarts.com'>here</a> if you so wish." class="lightbox_trigger"><img src="slider/imgs/site4.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site5.gif" data-description="This website was a class project for a digital design class where I needed to create a retro badge and a storefront for an imaginary retro toy company. My company was Rosie's." class="lightbox_trigger"><img src="slider/imgs/site5.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site6.gif" data-description="A simple example of my designs on printed work. Made for a self-owned and operated painting contractor." class="lightbox_trigger"><img src="slider/imgs/site6.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site7.gif" data-description="Event flyers for Extended Tech Time" class="lightbox_trigger"><img src="slider/imgs/site7.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site8.gif" data-description="Event flyers for Extended Tech Time" class="lightbox_trigger"><img src="slider/imgs/site8.gif" class="gallerythumb"></a>
		<a href="slider/imgs/site9.gif" data-description="Event flyers for Extended Tech Time" class="lightbox_trigger"><img src="slider/imgs/site9.gif" class="gallerythumb"></a>		
	</div>
</div>

<!-- Resume-->
<div id="resumelink">
	<a href="GinaPiscitelliResume.pdf" id="resumelink">/* View Resume */</a>
<!-- <div id="resume"><?php include 'resume.php'; ?></div> --></div>

<!-- Contact -->
<div id="contactblock">
	<div id="contact">
	<h1><i class="fa fa-comments"></i> Let's talk</h1>
		<p>I'm looking forward to hearing from you! <a href="mailto:ginapiscitelli@gmail.com">Send me an email</a></p>
		</div>
</div>

<?php include 'phpfooter.php'; ?>