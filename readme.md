RabbitMQ s Nette Sandbox
========================

[https://filip-prochazka.com/blog/kdyby-rabbitmq-aneb-asynchronni-kdyby-events]

RabbitMQ je nainstalovany v system jako balik.

Zapnuti RabbitMQ managmentu `rabbitmq-plugins enable rabbitmq_management`

Rabbit MQ managment bezi na: [http://localhost:15672/], pristupy: guest:guest


Pridani message je v homepage presenteru [http://localhost/rabbitmq/www/]

Spusteni Consumera v consoli

    php /var/www/rabbitmq/www/index.php rabbitmq:consumer facebookNotifications


!!! Aby vse fungovalo musim se po vygenorovani tmp a cache nastavit prava na 777


Postup instalace:
-----------------

  1. stahnout do slozky /var/www/rabbitmq
  2. composer install
  3. http://localhost/rabbitmq/www/
  4. chmod 777 -R /var/www/rabbitmq/temp/cache
  5. php /var/www/rabbitmq/www/index.php rabbitmq:consumer facebookNotifications
