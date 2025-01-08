## Ditto Music PHP Developer Challenge


### Notes

Run the script with `php src/Output.php`
Can add an parameter for the filename, otherwise default name will be used.

### Assumptions

Functionality could change for when the salaries/bonuses are paid out so they are class with a function so they can easily be changed in the future if needed.

I created a SalaryData class for the rows in the csv. This way we can define what a row looks like and add/remove fields easily. Header could be gotten from the keys for the fields but I did const so we could set nicer field names.

Tests test for functionality of these two classes and there's a some tests to make sure the getters/setters work for the SalaryData class