## SmartFarm Info

[Smart Farm](https://smartfarm.polindra.ac.id) merupakan aplikasi yang dapat mengelola dan memantau data lahan pertanian padi.

### Authentication
email: farmer@mail.com\
password: password

## Getting Started
- Clone the repo
- Create a database locally
- [Download composer](https://getcomposer.org/download/)
- ```cp .env.example .env``` and modify the .env
- Run ```composer install```
- Run ```php artisan key:generate``` 
- Run ```php artisan migrate:fresh --seed```
- Run ```php artisan serve```

## MQTT Info
protocol: mqtts\
host: smartfarm.polindra.ac.id\
port: 443

protocol: wss\
host: smartfarm.mushonnip.tech\
port: 443

### Authentication
username: mush\
password: mush


## Server Info
Dikarenakan server hanya membuka port 443 dan 80, maka untuk mqtt broker menggunakan [sslh](https://github.com/yrutschle/sslh) untuk berbagi port.
### SSLH Config
```
verbose: false;
foreground: false;
inetd: false;
numeric: false;
transparent: false;
timeout: 2;
user: "root";

listen:
(
    { host: "0.0.0.0"; port: "443"; }
);

protocols:
(
    { name: "ssh"; host: "127.0.0.1"; port: "22"; service: "ssh"; keepalive: true; log_level: 0;},
    { name: "tls"; host: "127.0.0.1"; port: "4443"; sni_hostnames: [ "smartfarm.polindra.ac.id" ]; tfo_ok: true log_level: 0; },
    { name: "tls"; host: "127.0.0.1"; port: "8091"; sni_hostnames: [ "smartfarm.mushonnip.tech" ]; tfo_ok: true log_level: 0; },
    { name: "regex"; host: "127.0.0.1"; port: "8885"; regex_patterns: [ "^\x10.\00\x06MQIsdp" ]; tfo_ok: true log_level: 0; }
);
```

### Mosquitto Config
```bash
# [MQTT Secure]
listener 8885 127.0.0.1
certfile /root/.acme.sh/smartfarm.polindra.ac.id/fullchain.cer
keyfile /root/.acme.sh/smartfarm.polindra.ac.id/smartfarm.polindra.ac.id.key

# [MQTT over Websocket Secure]
listener 8091 127.0.0.1
protocol websockets

certfile /root/.acme.sh/smartfarm.mushonnip.tech/fullchain.cer
keyfile /root/.acme.sh/smartfarm.mushonnip.tech/smartfarm.mushonnip.tech.key

socket_domain ipv4
allow_anonymous false
password_file /etc/mosquitto/passwd
```
