FROM archlinux:20200908

RUN pacman -Syyu --noconfirm php unzip \
    && groupadd -g 1000 composer \
    && useradd -u 1000 -g 1000 -m composer \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --filename composer --install-dir /usr/bin \
    && php -r "unlink('composer-setup.php');"
