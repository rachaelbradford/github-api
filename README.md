# github-api-helper-php

This is a quick helper to access the GitHub API to perform a code search. More functionality can be built on this as needed.

You'll need to create a `.env` file with your GitHub `AUTH_TOKEN` in order to properly authenticate with GitHub if you are trying to access private repositories.

Usage:

```php
    php search.php "org:myorg mysearchstring" "myfilename"
```

The first argument is the search string, multiple terms/searches should be separated by a space. The second argument is the filename where results should be saved.

There are some limitations to the composer package used to access the GitHub API - see the `CodeSearch` class constructor for details.
