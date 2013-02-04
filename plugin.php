<?php
/*
Template Name: Verve SSL 
*/
get_header(); ?>

<div id="container">
  <div id="cert-content" role="main">

    <?php the_post(); ?>
    <h1 class="entry-title" id="cert-header">
      Verve SSL - WordPress Plugin
    </h1>
    <div id="plugin-header">
    <img src="https://www.kevinverver.com/blog/wp-content/uploads/2013/01/Verve-SSL-Banner.png" />
    </div>
      <br/>
      <br/>
    <div id="plugin-content">
        <p>
            I created my first Wordpress Plugin called Verve SSL. It is based off of the code in this post <a href="https://www.kevinverver.com/blog/wordpress-ssl-administration-and-login/">WordPress SSL Administration and Login</a>.  It is a plugin that sets the login page and administration area to use HTTPS(SSL) and then after logging off it reverts back to HTTP.  You can download the plugin <a href="http://downloads.wordpress.org/plugin/verve-ssl.zip">here</a>.<br/><br/> To Install the plugin:<br/><h3 id="plugin-header">Automatic Install</h3>Install from the <em>Plugins\Add New</em> section by searching <em>Verve SSL</em> when logged in to the administration area of a WordPress site.<br/><br/><h3 id="plugin-header">Manual Install</h3>
            <a href="http://downloads.wordpress.org/plugin/verve-ssl.zip">Download</a> the plugin. <br/>Extract the zip file and upload into your <em>wp-content/plugins</em> directory.<br/>Active the Verve SSL plugin under Plugins in the WordPress dashboard.
            <br></br>The plugin can also be downloaded from the <a href="http://wordpress.org/extend/plugins/verve-ssl/" target="_blank">Verve SSL Wordpress Plugin Directory Page</a>.<br/><br/>
        </p>
      <div id="changelog-content">
      <h3 id="changelog-header">Changelog</h3>
        <h3 id="change-version">1.0</h3><br/>
        
          <ul id="change-log">
          <li id="change-log">Initial Release</li><br/><br/>
              <h3 id="change-version">1.1</h3><br/>
          <li id="change-log">Fixed issue with directory name that broke the plugin.</li> <br/><br/>
              <h3 id="change-version">1.2</h3><br/>
          <li id="change-log">Fixed issue with not keeping SSL when browsing blog while logged in.</li><br/><br/>
              <h3 id="change-version">1.3</h3><br/>
          <li id="change-log">Fixed issue with RSS feeds.</li><br/>
          <li id="change-log">Fixed activation error message.</li><br/><br/>
              <h3 id="change-version">1.4</h3><br/>
          <li id="change-log">Moved the JavaScript files to the header for fast loading.</li><br/><br/>
              <h3 id="change-version">1.4.1</h3><br/>
          <li id="change-log">Optimized code for better and faster processing.</li><br/><br/>
              <h3 id="change-version">1.4.2</h3>
              <br/>
              <li id="change-log">Updated plugin to be URL case insensitive.</li><br/><br/>
                            <h3 id="change-version">1.4.3</h3>
              <br/>
              <li id="change-log">Optimized code for better and faster URL case processing.</li>
              <br/>
                                          <h3 id="change-version">1.4.4</h3>
              <br/>
              <li id="change-log">Updated code to bypass plugin and display message if JavaScript is disabled.</li>  
              <br>
                                                        <h3 id="change-version">1.4.5</h3>
              <br/>
              <li id="change-log">Updated doctype for better compatibility with Internet Explorer.</li>  
                            <br>
                                                        <h3 id="change-version">2.0</h3>
              <br/>
              <li id="change-log">Completely redesigned the plugin using only PHP code and no JavaScript for better compatibility and performance.</li>     
                                          <br>
                                                        <h3 id="change-version">2.0.1</h3>
              <br/>
              <li id="change-log">Performed general code maintenance to improve performance and updated code to convert uppercase URLs to lowercase.</li>    
          </ul>
      </div>
          <br/><br/>          
        If you like my plugin and feel like donating to help its further development please click on the PayPal button below to donate. Thank You.<br/><br/><br/><form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal-donate">
          <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
          <br/><br/>


    </div>
  </div>
  <!-- #cert-content -->
</div>
<!-- #container -->
<?php get_footer(); ?>