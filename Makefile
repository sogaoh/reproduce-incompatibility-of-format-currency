.PHONY:

help:
	cat Makefile

run_old:
	docker-compose exec old php test.php
run_new:
	docker-compose exec new php test.php

run: run_new run_old
