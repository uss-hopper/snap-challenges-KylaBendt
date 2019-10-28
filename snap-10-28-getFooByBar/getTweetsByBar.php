<?php

/**
 * gets tweets by tweet date
 *
 * @param \PDO $pdo PDO connection object
 * @returns \SplFixedArray of tweets found or null if not found
 * @throws \PDOException when SQL related errors occur
 * @throws \TypeError when variables are not of the correct type
 * */
