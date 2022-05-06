# PoC Matomo Server with custom plugins and widgets

## Start Matomo server in development mode
---
### Start MySQL database with docker
- The command below create a docker database, we need to use the same credentials in the matomo preconfiguration
  - User: matomo
  - Password: C0P43UR0P3
  ```bash
  $ docker run --name matomo -e MYSQL_ROOT_PASSWORD=copaeurope -e MYSQL_USER=matomo -e MYSQL_PASSWORD=C0P43UR0P3 -e MYSQL_DATABASE=matomo -d -p 3306:3306 mysql
  ```

### Enabled development mode

- Running the command below will add some lines in config/config.ini.php file to enable the 
  ```bash
  ./console development:enable
  ```

### Add localhost:8000 like trusted host in file config/config.ini.php
- By default the config file has localhost only like trusted host, but we need to include the port to access to matomo control pannel with no errors.
  ```php
  [General]
  salt = "8945b72eb2bcbbd0563fb4bd091d3438"
  trusted_hosts[] = "localhost:8000"
  ```

### Start Matomo server
- We can start matomo server with the command below:
  ```bash
  php -S 127.0.0.1:8000
  ```

  > **IMPORTANT NOTE**: Not change your local IP by localhost because nodejs request translate localhost to 127.0.0.1 and can't connect with the server

