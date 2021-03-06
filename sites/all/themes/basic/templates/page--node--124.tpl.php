<style type="text/css">
body{
	background:url('/sites/all/themes/basic/images/fireworksanimation-13.gif');
	background-repat:repeat;
}
#header-wrap, #header, #header-intro, #page{
	background: none;
}
#myaccount-button{float: left; background: url("/sites/all/themes/basic/images/button-bg.png") no-repeat scroll -100px -100px #11161C;    border: 1px solid #11161C; color: #A2A8B0; cursor: pointer; font-size: 11px; height: 30px; line-height: 30px; padding: 0 15px; text-transform: uppercase;}
#login-button{float: right; background: url("/sites/all/themes/basic/images/button-bg.png") no-repeat scroll -100px -100px #11161C;    border: 1px solid #11161C; color: #A2A8B0; cursor: pointer; font-size: 11px; height: 30px; line-height: 30px; padding: 0 15px; text-transform: uppercase;margin-right: -18px;margin-top:0px;
}
#myaccount-button:hover{
    background: url("/sites/all/themes/basic/images/button-bg.png") no-repeat scroll left top transparent;
    border: 1px solid #003453;
    color: #FFFFFF;
}
</style>
<div id="header-wrap">
		<span id="page-top-border"></span>
		
		<div id="header">
			
			<!-- BEGIN logo -->
			<div id="logo">
			<?php if ($logo): ?>
			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			  </a>
			<?php endif; ?>
			</div><!-- End logo -->
			
			<div style="display:inline;">
			<!-- Start header social link block-->		   
			<div id="social-links-block" style="margin-right: 234px;">
				<?php if ($page['social_links']): ?>
				<?php print render($page['social_links']); ?>
				<?php endif; ?>
			</div>
			<!-- End header social link block-->				
			<div id="header-search-block" style="margin-top: -10px;margin-right:-337px;">
				<?php if ($page['search']): ?>
				<?php print render($page['search']); ?>
				<?php endif; ?>
			</div><!-- End header search block--><br />
			</div>
			
			<div style="display: inline; float: right; height: 33px; margin-right: -308px; margin-top: 47px; width: 200px;">
			<!-- BEGIN Myaccount -->
			<div id="myaccount-button">
				<?php
				if($user->uid){
				?>
				<a href="/user"><span>My Account </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}else{
				?>
				<a href="/user/register"><span>Register </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}
				?>
			</div>
            <!-- End Myaccount -->					
			<!-- BEGIN login -->
			<div id="login-button">
				<?php
				if($user->uid){
				?>
				<a href="/user/logout"><span>Logout </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}else{
				?>
				<a href="/user/login"><span>Login </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}
				?>
			</div>
           <!-- End login -->
			</div>
			
			<br class="clear">
			
			<!-- BEGIN main menu -->
			<div id="main-menu-container">
			<?php if ($main_menu): ?>
				  <?php print render($page['main_menu']); ?>
			<?php endif; ?>	
			</div><!-- End main menu container -->
			
		</div><!-- End header -->
		<!------ SLIDERS ------>
		<div id="pre-body-inner-area">
            <?php if ($title): ?>
			  <div id="header-intro"> 
              <h1><?php print $title; ?></h1>
			  </div>
            <?php endif; ?>	
		</div><!-- End pre body area -->
</div>
<!---NEWLY ADDED --->
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

   <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <div id="content">
      <div id="content-inner" class="inner column center">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

            <?php //if ($title): ?>
              <!--<h1 class="title"><?php //print $title; ?></h1>-->
            <?php //endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
		<h1 style="text-align: center;color: #FFF;text-shadow: 0.1em 0.1em 0.05em #333;font-weight: bolder;font-style: italic;"><p>
		A Very Happy Diwali </br>
		To You & Your Beautiful Family </br>
		May God Give You All That You </br>
		Want & Need In Your Life Enjoy</br>
		The Festival With Lots Of Light.</br>
		<span style="color: red;">!!! Wish You A HAPPY DIWALI !!!</span>
		</p></h1>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-first -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar second">
        <div id="sidebar-second-inner" class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->
</div> <!-- /page -->
  <!-- ______________________ FOOTER _______________________ -->
<div id="footer-wrap">
  <div id="big-footer">
	  <div class="footer-content col-option3">
		  <?php if ($page['footer_first']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_first']); ?>
			</div> <!-- /footer first-->
		  <?php endif; ?>  
		  <?php if ($page['footer_second']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_second']); ?>
			</div> <!-- /footer second-->
		  <?php endif; ?>  
		  <?php if ($page['footer_third']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_third']); ?>
			</div> <!-- /footer third-->
		  <?php endif; ?>
		  <br class="clear">	
	  </div>
  </div>
  <div id="standard-footer">
  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>
  </div>
</div>