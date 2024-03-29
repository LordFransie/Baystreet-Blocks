<?php blocks_header($page);?>

    <div id="heading_wrapper">
      <div id="heading_wrapper_after">
   	    <div class="row">
          <div class="twelve columns">
            <h2 class="page_heading_text"><?php print $title; ?></h2>
            <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
          </div>
        </div>
      </div> 
    </div>   
    
    <div class="row">
		  <div class="twelve columns">
		    <div id="google_map">
		      <iframe width="1080" height="370" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=900+Bagby+St+Houston,+TX+77002&amp;sll=33.687,-117.774252&amp;sspn=0.324522,0.682526&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=900+Bagby+St,+Houston,+Harris,+Texas+77002&amp;ll=29.761779,-95.370008&amp;spn=0.003725,0.012864&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />      
		    </div>
		  </div>
		</div> 
       
    <div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title">Get In Touch</div>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="four columns">
        <blockquote>
          <strong>Lorem Ipsum, Inc.</strong><br>
					900 Bagby St<br>
					Houston, TX, 77002<br>
					P: (123) 456-7890<br>
        </blockquote>
      </div>
      
      <div class="eight columns">
        <?php print render($page['contact_template']); ?>
      </div> 
      
    </div>
    
<?php blocks_footer($page);?>