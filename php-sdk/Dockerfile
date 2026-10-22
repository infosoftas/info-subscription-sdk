ARG PHP_VERSION=8.4
FROM mcr.microsoft.com/devcontainers/php:4.1.5-${PHP_VERSION}-bookworm

ENV XDEBUG_MODE=off

RUN if ! command -v zip >/dev/null 2>&1; then \
        apt-get update && \
        apt-get install -y --no-install-recommends zip && \
        rm -rf /var/lib/apt/lists/*; \
    fi

WORKDIR /workspace
