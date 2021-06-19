SELECT DISTINCT
	s1.id,
	s1.visit_date,
	s1.people 
FROM
	( SELECT * FROM stadium WHERE people >= 100 ) s1,
	( SELECT * FROM stadium WHERE people >= 100 ) s2,
	( SELECT * FROM stadium WHERE people >= 100 ) s3 
WHERE
	s1.id = s2.id - 1 
	AND s2.id = s3.id - 1 
	OR s2.id = s1.id - 1 
	AND s1.id = s3.id - 1 
	OR s3.id = s2.id - 1 
	AND s2.id = s1.id - 1 
ORDER BY
	s1.visit_date;
