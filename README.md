There is no intention to provide wrong details to establish the database connection, but you should still make sure, your DB server is on
and details like db name, username and password are correct for you.
It is crucial to have a database world with table countries from previous days!


@TODO no.1
Return JSON instead of dumped data
- inspect select.php and try to visit the page from your browser
- make sure you can see the data
- edit the code that you return JSON

---well, I'm certainly under the impression this works


@TODO No.2
Let users filter the data
- as you can see in the code there are variables trying to get the filter data from query parameters (variables $name, $continent and $population)
- in case there is any of expected parameters you should adjust the query and if you use value substitution,
  you should also push the value to $queryParams
- for name and continent use LIKE and search for everything starting with passed values
- for population use > to select only countries with greater population than passed value

examples:
- if you go to select.php?name=a&population=12000000 you should see only 5 countries (depends on your data, but it must be everything with name starting with "a" and population over 12000000)
- if you go to select.php you should still see all the countries from db




@TODO No.3
Fix the bugs
- there is also select_broken.php which is broken :)
- there are exactly three bugs and if you can fix all of them, you should get the JSON of all countries
