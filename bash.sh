#!/bin/sh
echo "Today is 08.07"
/usr/bin/php /home/u771985207/domains/reviews4china.com/reviews4china/artisan schedule:run 1>> /dev/null 2>&1
/usr/bin/php /home/u771985207/domains/reviews4china.com/reviews4china/artisan queue:work --queue=high,default
