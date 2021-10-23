# Item
Item table.

```sql
CREATE TABLE item (
	id INT NOT NULL AUTO_INCREMENT,
	company_code varchar(30) NULL,
    item_group_id INT NOT NULL,
    item_code VARCHAR(255) NULL,
    item_name VARCHAR(255) NULL,
   	status INT NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT(11) NULL,
	updated_by INT(11) NULL,
	PRIMARY KEY (id)
);
```

