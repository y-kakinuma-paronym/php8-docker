# Dockerを使用したPHP8の実行

## 前提

- dockerがインストールされていること

## dockerコマンド

```bash
$ docker run --rm -v `pwd`:/app -w /app php:8.0-rc php {実行したいPHPファイル}
```

## 実行

dockerコマンドでも実行可能ですが、シェルスクリプトからでも実行可能。

```
$ ././exec_php.sh {実行したいPHPファイル}
```