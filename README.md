# PHP foreach loop with unset() unexpected behavior
This repository demonstrates an uncommon bug in PHP related to the unexpected behavior of the `unset()` function when used within a `foreach` loop that iterates over array keys.  The issue arises because modifying the array's structure within the loop can lead to elements being skipped.

The `bug.php` file showcases the problem, while `bugSolution.php` provides a workaround.