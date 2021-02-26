<?php
namespace PK;

require '../config/database.php';

class DB {
    /**
     * @var mixed $stmt
     */
    private static $stmt;

    private static \mysqli $DB;

    /**
     * Creates an instance of mysqli class
     * You can change default config in config/database.php in DB_CREDENTIALS array
     * @return \mysqli
     */

    public static function connect() : \mysqli {
        if (isset(self::$DB))
            return self::$DB;

        self::$DB = new \mysqli(...DB_CREDENTIALS);
        self::$DB->set_charset('utf8');
        return self::$DB;
    }

    /**
     * @param string $query
     * @param string|null $className
     * @param int $stmtResult
     * @param string|null $bindParams
     * @param mixed ...$values
     * @return array|bool|int|mixed|\mysqli_result|\mysqli_stmt
     */

    public static function prepare(string $query, ?string $className = null, int $stmtResult = 0, ?string $bindParams = null, ...$values) {
        self::$stmt = self::connect()->prepare($query);
        if ($stmtResult == 1)
            return self::$stmt;
        if (!is_null($bindParams)) {
            self::$stmt->bind_param($bindParams, ...$values);
        }
        $execute = self::$stmt->execute();
        if ($stmtResult == 3)
            return $execute;
        if ($stmtResult == 4)
            return self::$stmt->affected_rows;
        $result = self::$stmt->get_result();
        if ($stmtResult == 5)
            return self::$stmt->insert_id;
        if ($stmtResult == 2)
            return $result;
        if ($stmtResult == 6)
            return $result->num_rows;
        if ($result->num_rows) {
            if (!is_null($className))
                while ($item = $result->fetch_object($className))
                    $return[] = $item;
            else
                $return = $result->fetch_all(MYSQLI_ASSOC);
            return $return ?? [];
        }
        return [];
    }
}