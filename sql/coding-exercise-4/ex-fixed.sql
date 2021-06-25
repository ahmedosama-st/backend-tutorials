SELECT
	id,
	visit_date,
	people
FROM
	(
		SELECT
			id,
			visit_date,
			people,
			lead(people, 1) over (
				ORDER BY
					visit_date
			) AS two,
			lead(people, 2) over (
				ORDER BY
					visit_date
			) AS three,
			lag(people, 1) over (
				ORDER BY
					visit_date
			) AS four,
			lag(people, 2) over (
				ORDER BY
					visit_date
			) AS five
		FROM
			stadium
	) a
WHERE
	(
		a.people >= 100
		AND a.two >= 100
		AND a.three >= 100
	)
	OR (
		a.people >= 100
		AND a.four >= 100
		AND a.five >= 100
	)
	OR (
		a.people >= 100
		AND a.two >= 100
		AND a.four >= 100
	);