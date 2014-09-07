Memcached Browser
=================

Browse, edit, flush and manage your Memcache key contents using this super easy to use tool within your web browser.

 
Requirements
============
 
* PHP >= 5.2
* memcached PHP extension
 
Installation
============
 
    composer require buonzz/mcbrowser:dev-master
 
Save the project somewhere accessible in your web server. then edit the config.php:

    $servers = array(
		        'local'=> array(
			     'hostname'=>'localhost', 'port'=> '11211'
			      )
	  );

The default value contains a single server pointing to your locahost in the port 11211. You can however add as many servers as you want.

Once done, just fire it up in your browser and your done!
 
 
Usage
=====
 
On the sidebar, this will list all the keys. Just click the Key you wanted to see and it will dump the contents in the page. From there, there are buttons for commonly used operations, like Delete, Edit, Set Expiry time, increment, decrement etc.
The options though may vary depending on the value of the key.
 
 
Credits
=======
 
* Memcached docs - http://php.net/manual/en/intro.memcached.php
* Memcache Software - http://memcached.org/
* Twitter Bootstrap  - http://getbootstrap.com/
