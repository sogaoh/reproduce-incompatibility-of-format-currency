# reproduce-incompatibility-of-format-currency

## Process to reproduce

```
docker-compose up -d
make run
```

## Console output

```
❯ make run
docker-compose exec new php test.php
string(3) "¥0"
docker-compose exec old php test.php
string(4) "￥0"
```