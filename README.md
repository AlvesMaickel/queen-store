## About Queen Store

Queen Store is a basic system model as example to insert, update, show and delete data e how this datas can relate between itselfs.
The system consists to in a user control access with authentication. Was used Laravel to development o the system.

## Composer

After clone the project will be need to install composer. Enter to a project folder cloned and execute.
```
composer install
```

### Configuration

It's necessary alter the file .env.example, changing his name only to .env.
The content of this file need change the database data and email data.

#### Dabatase Config
Change this sctructure following your database config.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASE_NAME
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD
```

#### Email Config
Change this sctructure following your e-mail provider config.
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=email.address
MAIL_PASSWORD="email.passwrod
MAIL_ENCRYPTION=TLS
MAIL_FROM_ADDRESS="${MAIL_USERNAME}"
MAIL_FROM_NAME="${APP_NAME}"
```

#### Database
Laravel uses his a way of migrate all database config, to use this config execute:
```
php artisan migrate
```

#### Get Start
After did all this, execute 
```
php artisan serve
```
to run the server go to your browser and use http://localhost:8000/ to use the system.
