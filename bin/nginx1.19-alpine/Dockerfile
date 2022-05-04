FROM nginx:1.19-alpine

RUN apk add openssl;

RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=Company, Inc./CN=example.com" -addext "subjectAltName=DNS:example.com" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt;

RUN apk add --no-cache bash