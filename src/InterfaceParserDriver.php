<?php

/*
 * A parser that will convert the provided rules into an SQL statement.
 */

namespace Programster\QueryBuilderParser;

interface InterfaceParserDriver
{
    /**
     * Return the SQL statement to select from the specified table.
     * @param string $tableName - the name of the table we wish to select from.
     * @param string $queryBuilderJsonOutputString - the query builder JSON output string that we wish to convert.
     * @return string - the SQL.
     */
    public function getSelectStatement(string $tableName, string $queryBuilderJsonOutputString) : string;


    /**
     * Return the SQL representation of the JSON structure from query builder.
     * This would return the SQL that would form the condition of a WHERE clause.
     * E.g. "name = 'programster' AND age = 3"
     * @param string $queryBuilderJsonOutputString - the query builder JSON output string that we wish to convert.
     * @return string - the SQL.
     */
    public function getSql(string $queryBuilderJsonOutputString) : string;
}
