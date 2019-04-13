# simplebase62
In 2014 I found a snippet of PHP code on the internet that handled base62 conversion in a very simple way. Unfortunately, it was undocumented and did not have any information about a license or an author.

simplebase62 is a remake of the snippet into a PHP class that performs similar mathematical steps, but is fully commented and has meaningful variable names.

## Requirements
simplebase62 requires PHP's GNU Multiple Precision library: https://www.php.net/manual/en/book.gmp.php

## Why base62?
Converting a string to base62 ensures that it is URL-friendly.

## Who is simplebase62 for?
Use simplebase62 if you just want to copy & paste a simple class into your project, or you are concerned about the licensing implications of other simple PHP base62 solutions on the internet. If you're looking for a more robust library that handles edge-cases elegantly or you cannot use GMP in your project, there are better solutions out there for you.

## License
simplebase62 is licensed under The Unlicense. Essentially, it releases simplebase62 to the public domain while having a liability clause.

See the attached license file for a full explanation of your rights.
