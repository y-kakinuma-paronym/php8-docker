#!/bin/sh

docker run --rm -v `pwd`:/app -w /app php:8.0-rc php $1
