DROP TABLE IF EXISTS `stadium`;

CREATE TABLE stadium(
	id int UNSIGNED NOT NULL AUTO_INCREMENT,
	visit_date date NOT NULL,
	people int UNSIGNED NOT NULL,
	PRIMARY KEY(id, visit_date)
);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(1, '2021-06-01', 150);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(2, '2021-06-02', 15);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(3, '2021-06-03', 90);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(4, '2021-06-04', 154);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(5, '2021-06-05', 198);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(6, '2021-06-06', 123);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(7, '2021-06-09', 312);

INSERT INTO
	`stadium` (`id`, `visit_date`, `people`)
VALUES
	(8, '2021-06-10', 151);