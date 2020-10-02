Bootstrap needs a js an css file, a downloaded the simple distribution
wp_enqueue_script ('name','path',dependencies, ver, true) // load before body tag in wp_footer
bootstrap col-sm-x is for all device col-x for small deevice

0210 
News : 
functions.php uses hooks to modify pages without modify pages directly 
The pages are located in /woocommerce/ these files replace native woocommerce 

Also I implemented modularity: 
 with a require in functions.php => then the code is wrapped in a function => and is trigered in "wp" hook

 The process is to modify all the pages of our theme : 
 By now : Single Product / Shop /Checkout / Cart are being modified