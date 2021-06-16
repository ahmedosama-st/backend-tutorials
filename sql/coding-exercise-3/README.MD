# SQL code exercise #4

## Human traffic of a stadium

## Note: use sub queries only to solve this problem

Table: `Stadium`

| Column name | Type |
| :---------: | :--: |
|     id      | int  |
| visit_date  | date |
|   people    | int  |

`id` is the primary key of our table.

Each row of this table is meant to hold number of people that entered the stadium to watch a match.

Write an SQL query to display the records with three or more rows with consecutive `id's`, and the number of people is greater than or equal to 100 for each.

Return the result table ordered by `visit_date` in ascending order.

Example

Stadium table:

| id  | visit_date | people |
| :-: | :--------: | :----: |
|  1  | 2017-01-01 |   10   |
|  2  | 2017-01-02 |  188   |
|  3  | 2017-01-03 |  105   |
|  4  | 2017-01-04 |   99   |
|  5  | 2017-01-05 |  110   |
|  6  | 2017-01-06 |  165   |
|  7  | 2017-01-07 |  212   |
|  8  | 2017-01-09 |  305   |

Result table:

| id  | visit_date | people |
| :-: | :--------: | :----: |
|  5  | 2017-01-05 |  110   |
|  6  | 2017-01-06 |  165   |
|  7  | 2017-01-07 |  212   |
|  8  | 2017-01-09 |  305   |

The four rows with ids 5, 6, 7, and 8 have consecutive ids and each of them has >= 100 people attended. Note that row 8 was included even though the visit_date was not the next day after row 7.
The rows with ids 2 and 3 are not included because we need at least three consecutive ids.
