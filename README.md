#

This projects holds functionalities of a Customer Service SYSTEM

## Technologies used

* html

* css

* javascript

* ajax

* bootstrap

* php (PDO)

* mysql

## Database tips

### 1. Database creation

Make sure you are logged into mysql then use the following command to create your database

```bash
CREATE DATABASE IF NOT EXISTS web_design_iv;
```

Hit `enter` key to run the command

### 2. Database restoration

Open the folder named db
Look for the file named `db.sql`
copy its path location, then go back to mysql shell and type the following commands

```bash
mysql -u [user] -p [database_name] < [path/to/your/db].sql;
```

or

```bash
 USE web_design_iv;
```

```bash
SOURCE path/to/your/db.sql;
```

Hit `enter` key to run the command

For those who are not able to restore the database check [How To Backup & Restore A MySQL Database](https://phoenixnap.com/kb/how-to-backup-restore-a-mysql-database)

## Login tips

username = "admin" and the password is "admin"

## Congratuations!!!!!! You can now enjoy the System
