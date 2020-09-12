FROM archlinux:20200908

RUN pacman -Syyu --noconfirm php \
    && groupadd -g 1000 php \
    && useradd -u 1000 -g 1000 -m php
