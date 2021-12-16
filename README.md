# jQuery QueryBuilder Parser
PHP package for parsing the output of [jQuery QueryBuilder](https://querybuilder.js.org/) and converting it into SQL statements.

This package requires a driver for the backend it should parse the JSON for. 
I have implemented a [driver for PostgreSQL](https://github.com/programster/package-query-builder-pgsql-driver), 
but you can create your own by creating a class that implements the 
[InterfaceParserDriver interface](https://github.com/programster/package-query-builder-parser/blob/main/src/InterfaceParserDriver.php).
