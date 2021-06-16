# SQL code exercise #2

A sales company asked you to create for them a track for their daily revenues
and provide them with a query they can use to find their revenues every 3 days weekly revenue and the overall revenue.

- Create the table schema that you'll use according to what you know about data types given that

  - The company working days are 5 days weekly Sunday to Thursday.
  - The average cost of the company's service is 3400 EGP.
  - The cost range is 1000-15000 EGP.

Given the following data set (revenues aren't strict)

| sales_id |    day    | revenue |
| :------: | :-------: | :-----: |
|    1     |  sunday   |  1704   |
|    2     |  monday   |  8340   |
|    3     |  tuesday  |  13450  |
|    4     | wednesday |  7297   |
|    5     | thursday  |  3841   |

The output should be something like that

| sales_id |    day    | revenue | 3 days revenue | Weekly Revenue | Total Revenue |
| :------: | :-------: | :-----: | :------------: | :------------: | :-----------: |
|    1     |  sunday   |  1704   |      1704      |      1704      |     34632     |
|    2     |  monday   |  8340   |      5022      |      5022      |     34632     |
|    3     |  tuesday  |  13450  |      7831      |      7831      |     34632     |
|    4     | wednesday |  7297   |      9695      |      7697      |     34632     |
|    5     | thursday  |  3841   |      8196      |      6926      |     34632     |
