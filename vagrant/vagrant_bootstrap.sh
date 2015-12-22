echo "deb http://apt.postgresql.org/pub/repos/apt/ precise-pgdg main" > /etc/apt/sources.list.d/pgdg.list
wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add -

apt-get update

# Postgres installation
apt-get install -y -q postgresql-9.3 postgresql-server-dev-9.3 postgresql-client-9.3

# Python installation
apt-get install -y -q build-essential git python-dev python-pip
pip install psycopg2 pytz jsonrpclib

# Apache installation
apt-get install -y -q apache2 php5 php5-pgsql

# sendmail installation
apt-get install -y -q sendmail

# utilities
apt-get install -y -q curl

# opencarpool database setup
su postgres <<EOSU
  psql --command "CREATE USER opencarpool WITH PASSWORD 'opencarpool';" &&\
  createdb -O opencarpool opencarpool &&\
  psql --command "CREATE USER web WITH PASSWORD 'web';" &&\
  psql --command "GRANT ALL PRIVILEGES ON DATABASE opencarpool TO web;"
EOSU

# install opencarpool
adduser opencarpool --disabled-password --disabled-login --gecos ""
su opencarpool <<EOSU

  cd ~

  # get the sources
  git clone https://github.com/open-carpool/open-carpool.git dev.opencarpool.org

  # get Smarty lib
  # wget http://www.smarty.net/files/Smarty-3.1.21.tar.gz
  # tar xfz Smarty-3.1.21.tar.gz
  # mkdir -p dev.opencarpool.org/website/lib/smarty
  # cp -r Smarty-3.1.21/libs dev.opencarpool.org/website/lib/smarty

  cd ~/dev.opencarpool.org

  # fix access rights
  chmod a+x service/init-script.sh
  chmod a+x service/src/jsonrpc_webservice
  chmod a+w website/tmp/templates_c

  # create configuration files
  cp service/ocp_webservice_dev.cfg.example service/ocp_webservice_dev.cfg
  cp website/functions/config.php.example website/functions/config.php

  # import schema
  psql opencarpool opencarpool < service/src/schema_dump_live_20141230.sql

EOSU

# start the webservice
# ./service/init-script.sh start
ln -s /home/opencarpool/dev.opencarpool.org/service/init-script.sh /etc/init.d/opencarpool_jsonrpc
update-rc.d opencarpool_jsonrpc defaults
service opencarpool_jsonrpc start

# Apache config
mv ~vagrant/opencarpool-apache.conf /etc/apache2/sites-available/001-opencarpool.conf
a2ensite 001-opencarpool.conf
service apache2 reload