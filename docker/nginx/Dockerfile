FROM nginx:1.25.3-alpine

COPY ./docker/nginx/default.conf /etc/nginx/conf.d

RUN apk add openssl

RUN openssl req -x509 -nodes -days 365 \
	-subj "/C=CA/ST=QC/O=Sonepar, Inc./CN=docker" \
	-addext "subjectAltName=DNS:192.168.50.224:8001" \
	-newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt;