#### Sample code for shurjoPay integration use case scenerion ####
How shurjoPay can be accessible is written in this repository using PHP and HTML. shurjoPay has now state XM L post 
request to get access to the payment page. Payment option page has multiple PGW with each separate buton with relevent logo.
Customer can pay by choosing any butoon as s/he desire.

### Basic requirments for run the script/reposoroty ####
A web server probably Apache or Nginx. PHP running on the machine. No database required.

### For smooth running web server need the following pre-requisites ###
	1.PHP running 5.6 or higher
	2. For shurjoPay payment response decrytion " allow_url_fopen " need to set "on". To this go to your
		php.ini file and search for "allow_url_fopen" and set it on if it is not.
	3. For response handling XML persing ( simplexml_load_string ) method need to use. Be sure of its working.

### *** FOR NOW ALL GATEWAYS ARE REALTIME. FOR TESTING NEED SMALL AMOUNT (i.e 2 TK ) TO PAY ###

### File containing this repository ##
	1. index.php ( Form with amount field )
	2. sp.php ( Configuration and request process )
	3. return.php ( Response propagation file )
	4. Assets files ( logo, stylesheets )