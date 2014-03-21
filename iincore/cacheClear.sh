echo "Dumping Asstes"
 php app/console assetic:dump

echo "Installing assets"
 php app/console assets:install

echo "clearing cache"
php app/console cache:clear --env=dev



