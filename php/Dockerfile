FROM reg.ntl.nc/proxy/library/debian:12

ENV  DEBIAN_FRONTEND=noninteractive



RUN apt-get update && \
    apt-get install -y  --no-install-recommends \
    	curl \
    	apache2 \
        php8.2 \
        iputils-ping \
        libapache2-mod-php8.2 && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

RUN rm /var/www/html/index.html

COPY app/ /var/www/html/

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]
