.PHONY: add-migration
add-migration:
	./vendor/bin/phinx create

.PHONY: migrate
migrate:
	./vendor/bin/phinx migrate

.PHONY: rollback
rollback:
	./vendor/bin/phinx rollback
