
# WordPress REST Login Pluggin

I have a made a pluggin which allows you to login to WordPress through email & password.

## wp_authenticate Hook

```PHP
 wp_authenticate($Username, $Password);

```


## Puggin Info


This Pluggin allows you Login through Email & Password via WordPress REST API




## How to use it ?

In order to login from email you need to request from a REST URL.

#Endpoint : {SiteURL}/wp-json/wl/users?username={YOUR_EMAIL}&password={YOUR_PASSWORD}

## Example :

curl - ``` https://example.com/wp-json/wl/users?username=admin&password=password```
