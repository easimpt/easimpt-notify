### Intro: 
 
Thank you for choosing to use our platform.

This API is very basic, you can just use to send pretty quickly.
  
###How to add to your project? 

Just create a Library folder in your root folder. Then place the easimpt-notifyme folder. 
That will look like below.

`rootfolter/library/easimpt-notify`
 
### How to run test: 

just run this command in the root folder of the api 
1. `php -S localhost:8000` and that will serve as php server for your testing 
2. visit http://localhost:8000/basic.php to trigger your first email test


### How to add in your Laravel project

1. Just head to your `composer.json` file

2. Add this line of code to your autoload 

```
 "autoload": {
    "psr-4": {
        .... 
    },
    "files": [
        "library/easimpt-notify/autoloader.php"
    ]
},
```

then just run the `composer du` and that's it!



### How to add in your native PHP Project 

1. just include the `autoloader.php` to your php file. Just like this `require_once 'autoloader.php';`

2. That's it! you can now send an email! 