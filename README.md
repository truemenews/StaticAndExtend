1 Introduction
----------------
This example will explain to how to PHP use static in extends


2 Directory Struct
-----------------------

    Root
    |
    |__ParentClass.php -> using static property
    |
    |__ChildClassOne.php => don't use singeton
    |__ChildClassTwo.php => don't use singeton
    |
    |__ChildClassThree.php => using singeton
    |__ChildClassFour.php => using singeton
    |__ChildClassFive.php => using singeton
    |
    |__index.php run for test

3 Explain code
-----------------------
    ParentClass.php
    ```
        class ParentClass
        {
            //This is static property, therefore when child class 
            extends will only use same this property
            private static $instance;

            private function ini()
            {
                return self::$instance;
            }

            public static function __callStatic($method, $args)
            {
                self::$instance = (@$args[0] && $args[0] === 'singleton' && self::$instance)
                                    ? self::$instance : new static;

                return self::$instance->$method(...$args);
            }
        }
    ```


4 Step by step do it
-----------------------

    3.1 Clone/download StaticAndExtend folder to your computer

    3.2 Goto StaticAndExtend folder > D:\YourFolder\StaticAndExtend

-----------------------

5 Config virtual host
-----------------------

    5.1 Add Virtual host for you project
        + example You're using XAMPP: D:\Xampp\apache\conf\extra\httpd-vhosts.conf
        ```
            <VirtualHost captcha.local:80>
                DocumentRoot "D:/YourFolder/StaticAndExtend"
                ServerName static.local
                
                 <Directory D:/YourFolder/StaticAndExtend>
                     #AllowOverride none
                 AllowOverride All
                     Require all granted
                     DirectoryIndex index.php
                     Order allow,deny
                     Allow from all
                 </Directory>
            </VirtualHost> 
        ```

        + Restart apache

    
    5.2 Run test
            http://static.local

    5.3 View result
        ```
            D:\Projects\test\StaticAndExtend\index.php:12:
            object(ChildClassOne)[1]
              protected 'one' => null
            D:\Projects\test\StaticAndExtend\index.php:12:
            object(ChildClassTwo)[2]
              protected 'two' => null

            ------------
            D:\Projects\test\StaticAndExtend\index.php:20:
            object(ChildClassTwo)[2]
              protected 'two' => null
            D:\Projects\test\StaticAndExtend\index.php:20:
            object(ChildClassTwo)[2]
              protected 'two' => null
            D:\Projects\test\StaticAndExtend\index.php:20:
            object(ChildClassTwo)[2]
              protected 'two' => null
        ```


6 Search Google:
--------------
    > Lazada TrueMe
    > Youtube TrueMe
    > Tiktok TrueMe 
    > Sendo TrueMe

Sites:
--------------
> https://www.youtube.com/@TrueMeNews
> https://www.tiktok.com/@truemenews
> https://www.lazada.vn/shop/suatruemilk
> https://github.com/truemenews
> https://www.sendo.vn/shop/truemilk

Tags:
--------------
#TrueMe #trueme #true_me #SendoTrueMe #sendo_trueme #sendo_true_me
#TrueMeNews #truemenews #true_me_news #TrueMilk #truemilk #true_milk #YoutubeTrueme #youtube_trueme #youtubetrueme #LazadaTrueme #lazada_trueme #lazadatrueme 
#TiktokTrueme #tiktok_trueme #tiktoktrueme #tet #visa #mastercard #thetindung #tragop #tragop0% 