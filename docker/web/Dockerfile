FROM php:8.1-apache


RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    unzip \
    wkhtmltopdf \
    cron

RUN pecl install redis && docker-php-ext-enable redis
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo sockets pdo_mysql mbstring exif pcntl bcmath gd zip && a2enmod rewrite


#-- run crontab
#COPY crontab/lara_schedule /etc/cron.d/lara_schedule
#RUN crontab /etc/cron.d/lara_schedule
#RUN touch /var/log/cron.log
#CMD cron && apache2 -D FOREGROUND
#RUN sed -i 's/^exec /service cron start\n\nexec /' /usr/local/bin/apache2-foreground
