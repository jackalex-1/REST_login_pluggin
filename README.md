
# WordPress REST Login Pluggin

I have a made a pluggin which allows you to login to WordPress through email & password.

## wp_authenticate Hook

I have used the [wp_authenticate](https://developer.wordpress.org/reference/functions/wp_authenticate/) Hook to make the plugin 

```PHP
 wp_authenticate($Username, $Password);

```


## Puggin Info


This Pluggin allows you Login through Email & Password via WordPress REST API, This Request will provide you the User ID as a response & you will use the [Retrive User](https://developer.wordpress.org/rest-api/reference/users/#retrieve-a-user) API to retrieve the user Info 


## How to use it ?

In order to login from email you need to request from a REST URL.

**Endpoint** : ```{SiteURL}/wp-json/wl/users?username={YOUR_EMAIL}&password={YOUR_PASSWORD}```
**Method** : GET

## Example :

curl - ``` https://example.com/wp-json/wl/users?username=admin@gmail.com&password=password```

Response 

```
{
   "data": {
         "ID": "4",
         "user_login": "rohan",
         "user_pass": "$P$BmLFGfL0uNgjdVyZCoaVvEQOrUcEvb.",
         "user_nicename": "rohan",
         "user_email": "arnaldInfo@gmail.com",
         "user_url": "",
         "user_registered": "2022-03-02 13:03:56",
         "user_activation_key": "",
         "user_status": "0",
         "display_name": "rohan das"
   },
   "ID": 4,
   "caps": {
      "customer": true
    },
    "cap_key": "wp_capabilities",
    "roles": [
        "customer"
     ],
     "allcaps": {
        "read": true,
        "customer": true
     },
     "filter": null
}
```

## [Support me on Patreon](https://www.patreon.com/Mohammad_Omer)

Username : Mohammad Omer
URL : https://www.patreon.com/Mohammad_Omer
