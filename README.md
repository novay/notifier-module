# Laravel Exception Notifier

 Laravel exception notifier will send an email of the error along with the stack trace to the chosen recipients.

[![Total Downloads](https://poser.pugx.org/novay/notifier-module/d/total.svg)](https://packagist.org/packages/novay/notifier-module)
[![StyleCI](https://github.styleci.io/repos/91833181/shield?branch=master)](https://github.styleci.io/repos/91833181)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Table of contents:
- [About](#about)
- [Requirements](#requirements)
- [Installation Instructions](#installation-instructions)
- [Screenshots](#screenshots)
- [License](#license)

## About
[This Package](https://packagist.org/packages/novay/notifier-module) includes all necessary traits, views, configs, and Mailers for email notifications upon your applications exceptions. You can customize who send to, cc to, bcc to, enable/disable, and custom subject or default subject based on environment. Built for Laravel 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8 or 6+.

Get the errors and fix them before the client even reports them, that's why this exists!

## Requirements
* [Laravel 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 6+](https://laravel.com/docs/installation)
* [Modules by nwidart](https://github.com/nwidart/laravel-modules)
* [Modules Installer by joshbrw](https://github.com/joshbrw/laravel-module-installer)

## Installation Instructions
1. Install Package Via Composer

```
composer require novay/notifier-module
```

2. Done

> Make sure you have configured your [Laravel Mail](https://laravel.com/docs/master/mail) correctly to see this magic happen.

3. Configuration (Next Step)

> This file config can be found on `Module\Config\config.php`. You can enable/disable this module from there or to specify the e-mail address that will receive notifications.

## Screenshots
![Email Notification](https://raw.githubusercontent.com/novay/novay-gallery/master/notifier-module.png)

## License
Notifier Modules is licensed under the MIT license and originaly owned by [Jeremy Kenedy](https://github.com/jeremykenedy) for both personal and commercial products. Enjoy!

##### For package version, you can find [here](https://github.com/novay/laravel-exception-notifier)
##### Running smoothly on Laravel 6+
