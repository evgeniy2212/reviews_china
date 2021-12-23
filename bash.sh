#!/bin/sh
/usr/bin/php /home/u771985207/domains/reviews4china.com/reviews4china/artisan schedule:run >> /dev/null 2>&1
/usr/bin/php /home/u771985207/domains/reviews4china.com/reviews4china/artisan queue:listen
