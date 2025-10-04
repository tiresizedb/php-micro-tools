# PHP CLI Progress Bar

A simple PHP script to display an ASCII progress bar in the command line.

This script contains the `getProgressBar()` function, which takes a number from 0 to 100 and returns a string with a progress bar that can be displayed in the console.

---

## Installation

Simply download the `php-cli-progressbar.php` file and include it in your PHP script:

```php
require_once 'php-cli-progressbar.php';
```

## Usage
```php
require_once 'php-cli-progressbar.php';

// Example: progress bar from 0% to 100%
for ($i = 0; $i <= 100; $i += 10) {
    echo getProgressBar($i) . PHP_EOL;
    usleep(200000); // 0.2 seconds for demonstration
}

// Output:
░░░░░░░░░░░░░░░░░░░░   0%
█████░░░░░░░░░░░░░░  25%
██████████░░░░░░░░░░  50%
███████████████░░░░░  75%
████████████████████ 100%
```

# Sponsor

Support the project: [https://devtinytools.com](https://devtinytools.com)
