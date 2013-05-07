# [insert cool name here]
A simple blog based on Laravel 4.  Using markdown static files to generate content.

* Laravel 4
* Disqus for comments
* Google Analytics

## To Install
1. Clone this repository
1. Install [Composer](http://getcomposer.org) if not already installed
1. Run ```php composer.phar install```
1. In ```app/config/app.php``` change ```url``` to the url of your blog.
1. In ```app/config/app.php``` change ```timezone``` to the timezone you wish to use.  _See [PHP Manual](http://us3.php.net/manual/en/timezones.php) for details_.
1. Run ```php artisan key:generate``` to generate a unique application key
1. Edit ```app/config/blog.php``` according to your own personal preferences

## To Use


## Change Log

**2013-05-07**

* Stubbed out base application _(commit - 7c6239b)_
* Initial Commit of Base Laravel 4 install. _(commit - 909aefd)_