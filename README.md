# oopcalc
A learning exercise for myself to improve my understanding of PHP's object oriented principles.

Installation:  clone and access via web browser.

Make sure composer is installed; install dependencies via `php composer.phar install`

Nothing fancy here.  Project consists of a Calculator class and OperationInterface interface.  Basic calculator operators implement OperationInterface, which are set in the Calculator class and used to perform very basic calculations.

Principles covered: class autoloading, dependency injection, interfaces, method chaining, variable/class visibility, static methods, type hinting, getters/setters
