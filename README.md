user2015.github.io
==================

UseR! 2015 Web Pages

Publish
==================
rsync --archive --compress --partial --progress --exclude '.git' --exclude '*~' ./ [username]@[server]:/web/user2015.math.aau.dk/http

rsync -rltzv --progress --exclude '.git' --exclude '*~' ./ [shortusername]@math.aau.dk@freja.math.aau.dk:/web/user2015.math.aau.dk/http
