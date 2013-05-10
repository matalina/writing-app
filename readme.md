# [insert cool name here]
A simple blog based on Laravel 4.  Using markdown static files to generate content.  Uses a SQLite database to keep track of posts and pages.

* [Laravel](http://laravel.com) 4
* SQLite 3
* [Disqus](http://disqus.com/) for comments
* Google Analytics
* [Epic Editor](http://epiceditor.com/)

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

**2013-05-10**

* Stubbed out Admin Controller

**2013-05-09**

* Added Epic Editor and SQLite support for tracking users & page/post publishing _(commit - 1f30ef3)_

**2013-05-07**

* Started working on ```blog:publish``` _(commit - 38cdd96)_
* Stubbed out base application _(commit - 7c6239b)_
* Initial Commit of Base Laravel 4 install. _(commit - 909aefd)_