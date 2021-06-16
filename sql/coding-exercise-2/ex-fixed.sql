CREATE DATABASE IF NOT EXISTS sales_company CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE sales_company;

CREATE TABLE IF NOT EXISTS sales(
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	DAY enum(
		'sunday',
		'monday',
		'tuesday',
		'wednesday',
		'thursday'
	) NOT NULL,
	revenue smallint UNSIGNED NOT NULL,
	created_at datetime DEFAULT CURRENT_TIMESTAMP,
	updated_at datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
);

-- Adding a check for revenue to match the range of company's cost range
ALTER TABLE
	sales
ADD
	CONSTRAINT CK_revenue_range CHECK (
		revenue >= 1000
		AND revenue <= 15000
	);

-- Querying against the database
INSERT INTO
	sales (DAY, revenue)
VALUES
	('sunday', 1704),
	('monday', 8340),
	('tuesday', 13450),
	('wednesday', 7297),
	('thursday', 3841);

SELECT
	id,
	DAY,
	revenue,
	FLOOR(AVG(revenue) OVER(ROWS 2 PRECEDING)) "3 Days Revenue",
	FLOOR(AVG(revenue) OVER(ROWS 6 PRECEDING)) "Weekly revenue",
	SUM(revenue) OVER() total_revenue
FROM
	sales;