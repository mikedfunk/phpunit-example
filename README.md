## Setup
* [get composer](http://getcomposer.org)
* `composer install`
* `vendor/bin/phpunit --bootstrap vendor/autoload.php tests` to run tests
 * _NOTE: a `phpunit.xml` config file is intentionally omitted in this example for a quick setup. This could be added to reduce the above command to `vendor/bin/phpunit`. Here is a [simple example](https://github.com/mikedfunk/programming-tests/blob/master/deep-array-search/phpunit.xml)._

## Adding phpunit to another project
* `composer require --dev phpunit/phpunit`
* create a test in `tests` e.g. `tests/MyClassTest.php`. The file must end in `Test.php`.
* create a new class in that test that extends `PHPUnit_Framework_TestCase`.
  This class can have any namespace. _pneumonic: underscores are like zend
  framework 1 style namespace simulation. Think of them like backslashes._
* write a new test method such as `testMyMethod`. It will be considered a test
  if it's prepended with `test` but you can also specify a test with the
  `@test` docblock. This makes it easier to write a test to look like a spec.
 * use `$this->assertEquals($expected, $actual);` or other asserts from the
   [phpunit documentation](https://phpunit.de/manual/current/en/index.html) to
   test the expected result of calling a function.
 * you can set up mocks [via the phpunit
   api](https://phpunit.de/manual/current/en/test-doubles.html) or via the
   [mockery](https://github.com/padraic/mockery) package for an easier api.
 * you can use the `setUp()` and `tearDown()` methods as
   constructors/destructors for each test. This is useful for defining shared
   mocks and the instance of the class under test to use.
* `vendor/bin/phpunit --bootstrap vendor/autoload.php tests` to run. It should
  error out because the class has not been created yet. You now have a failing
  test.
* create the class and method under test and write just enough code for the
  test to pass
* ensure the namespace to that class is autoloaded via the composer autoloader
* `vendor/bin/phpunit --bootstrap vendor/autoload.php tests` again. The test
  should now pass! Now it's time to refactor. (red -> green -> refactor)


