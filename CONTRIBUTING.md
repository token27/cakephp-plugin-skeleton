# CONTRIBUTING

Contributions are welcome, and are accepted via pull requests.
Please review these guidelines before submitting any pull requests.

## Process

1. Fork the project
1. Create a new branch
1. Code, test, commit and push
1. Open a pull request detailing your changes. Make sure to follow the [template](.github/PULL_REQUEST_TEMPLATE.md)

## Guidelines

* Please check the coding style running `composer check`.
* Please analyze the code by running `composer analyze`.
* Make sure all tests passes by running `composer test`.
* Send a coherent commit history, making sure each individual commit in your pull request is meaningful.
* You may need to [rebase](https://git-scm.com/book/en/v2/Git-Branching-Rebasing) to avoid merge conflicts.
* Please remember that we follow [SemVer](http://semver.org/).

## Setup

Clone your fork, then install the dev dependencies:
```bash
composer install
```

## Coding Standard

Check coding standard of your code:
```bash
composer check
```

Above command will fix and check the code, if you want to run individually:

- Automatically fix your code using [CakePHP Codesniffer](https://github.com/cakephp/cakephp-codesniffer):
```bash
composer cs-fix
```

- Finally check the remaining coding standard error(s) using [CakePHP Codesniffer](https://github.com/cakephp/cakephp-codesniffer):
```bash
composer cs-check
```

## Static Analysis

Run static analysis using [phpstan](https://phpstan.org/):
```bash
composer analyze
```

## Tests

Run all tests using phpunit:
```bash
composer test
```
