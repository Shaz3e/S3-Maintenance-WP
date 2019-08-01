# S3-Maintenance-WP
Create custom maintenance page for WordPress

[![S3Framework](http://img.shields.io/badge/S3Framework-Stable-blue.svg)](http://www.shaz3e.com)
[![Version](http://img.shields.io/badge/Version-1.0-green.svg)](http://www.shaz3e.com)
[![Build Status](https://travis-ci.org/Shaz3e/S3-Wordpress.svg)](https://travis-ci.org/Shaz3e/S3-Wordpress)

### What does S3 Maintenance for WordPress
The S3 Maintenance for WordPress has built for custom maintaince mood and it will be enabled automatically when wordpress goes to maintaince mode while updating core WordPress or any plugin. and it will keep checking wordpress site after each 60 seconds and your website will be back to normal when the updating has finished.

You can put your website on maintenance mode to check if S3 Maintenance works for your wordpress site
 - Create a file with the name of .maintenance
 - Open it in any text editor
 - Copy paste this code inside the file we have created `<?php $upgrading = time(); ?>`

### How to use
1. Download the file [here](https://github.com/Shaz3e/S3-Maintenance-WP/archive/master.zip)
2. Upload it inside /wp-content/ directory
3. Extract it
4. You are done.

### How to customize the text and logo
 - Update your logo /wp-content/maintenance/logo.png
 - Open maintenance.php in text editor
 - On line # 12 you will see some variables and their description
 - That's it

### Download, Fork, Commit.
If you think you can make this better, please Download, Fork, & Commit. I'd love to see your ideas.
 
### License

The S3 Maintenance is opensource software released under the [MIT](https://github.com/Shaz3e/S3-Maintenance-WP/blob/master/LICENSE).

[Shaz3e's Website](http://www.shaz3e.com) | [@Shaz3e](https://www.twitter.com/Shaz3e) | [Fan Page](https://www.facebook.com/Shaz3e)