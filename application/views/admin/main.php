<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>main</title>
	<base href="<?php echo site_url() ?>"/>
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
		<div id="sidebar">
			<div id="sidebar-top">
				<div id="sidebar-pic">
					<img src="img/profile.jpg" alt="">				
				</div>
				<h3>Volton</h3>
				<p>Pro Photography</p>
			</div>
			<div id="sidebar-bottom">
				<ul id="sidebar-ul">
					<li id="li1"class="a-index"> <i class="fa fa-2x fa-globe"></i>Welcome </li>
					<li id="li2"> <i class="fa  fa-2x fa-pencil"></i>About Me</li>
					<li id="li3"> <i class="fa  fa-2x fa-paperclip"></i>My Gallery</li>
					<li id="li4"> <i class="fa  fa-2x fa-link"></i>Contact Me</li>
				</ul>
			</div>
		</div>
	    <div id="big-banner"class="main">
	    	<div id="banner-text">
	    		<h2>未来 | 为我而来</h2>
	    		<h5>This is a mobile friendly layout with Bootstrap v3.3.1 framework. Maecenas eu ante at nunc posuere fringilla sit amet non dolor. Proin condimentum fermentum nunc.</h5>
	    	</div>
	    </div>	
	    
	    
	    <div id="content" class="main">
	    	<div id="know-me" class="little">
	    		<div id="jianli">
	    		   <h3>Learn about me</h3>                   
                   	<div id="book">
                   		<div id="mybook">
	                   		<div id="book-container">
	                   			<img src="img/book1.jpg" alt="">
	                   			<img src="img/book2.jpg" alt="">
	                   			<img src="img/book3.jpg" alt="">
	                   			<img src="img/book4.jpg" alt="">
	                   			<img src="img/book5.jpg" alt="">
	                   		</div>
	                   	</div>
                   	</div>
                   	
                   <div id="experence">
                     
                    </div>

	    			<div id="skill">
	    			  <span  class="label label-danger"> skill</span>

	    			  <h3 id="h-html">HTML:</h3>
	    			  <div id='skill1' class="skill">
	    			  	<div id="skill1-color"class="skill-color" ></div>
	    			  </div>

	    			   <h3 id="h-css">CSS&nbsp:</h3>
	    			  <div id="skill2"class="skill">
	    			  	<div id="skill2-color"class="skill-color"></div>
	    			  </div>
	    			  
	    			  <h3 id="h-js">JS &nbsp&nbsp:</h3>
	    		      <div id="skill3"class="skill">
	    		      	<div id="skill3-color"class="skill-color"></div>
	    		      </div>

	    		      <h3 id="h-php">PHP&nbsp:</h3>
	    		       <div id="skill4"class="skill">
	    		       	<div id="skill4-color"class="skill-color"></div>
	    		       </div>
	    		    </div>

	    		      
	    			
	    		</div>	    		
	    	</div>
	    	<div id="my-blog" class="little">	    		
	    	   <h3>Article I Like</h3>
	    	  
	    	   <div id="blog-detail-main">
	    	   	<div id="blog-detail">
	    	   		</div>	    	   		    	   			
	    	   	<button id="back-blog">返回博客部落</button>
	    	   </div>
	    	    
	    	   <div id="masonry" class="container-fluid">  
	    	   	<?php
                    foreach ($articles as $article) {
                        ?>
   					<div class="box">
   					  
   						<img src="<?php echo $article->img_src; ?>">
   						<h3><?php echo $article->title; ?> </h3>
   						<p><?php $content=$article->content;echo mb_substr($content,0,100,'UTF-8');  ?> </p>
   						
   						 <input atid="<?php echo $article->article_id; ?>" class="readmore" type="submit" value="Read more" >				
   					
   						
   					</div>  
   					
   					<?php } ?>
   					
	                 </div>  

	    	 
	    	  
	    	 </div>
	    	<div id="contact-me"class="little">
	    		<h4 id="contact-title">Place to talk with me</h4>
                <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                <div id="contact-form" class="row">
                	<form action="admin/welcome/message" method="post" >
                			<fieldset class="col-md-4 col-sm-6 input-little">
                                <input type="text" id="your-name" name="name" placeholder="Your Name...">
                        	</fieldset>

                            <fieldset class="col-md-4 col-sm-6 input-little">
                                <input type="email" id="email" name="eamil"  placeholder="Your Email...">
                            </fieldset>

                            <fieldset class="col-md-4 col-sm-12 input-little">
                                <input type="text" id="your-subject" name="subject" placeholder="Subject...">
                            </fieldset>

                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" name="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>

                            <fieldset class="col-md-12 col-sm-12">
                                <input id="contact-btn"type="submit" class="button big default" value="Send Message">
                            </fieldset>
                	</form>
                </div>
	    	</div>

	    	
	    </div>	
	   

			
			
		   
			
			
	
		
		
	
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>