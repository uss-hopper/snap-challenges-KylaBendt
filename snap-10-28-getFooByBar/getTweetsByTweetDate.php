<?php

/**
 * gets tweets by tweet date
 *
 * @param \PDO $pdo PDO connection object
 * @param \DateTime $tweetDate
 * @returns \SplFixedArray of tweets found or null if not found
 * @throws \PDOException when SQL related errors occur
 * @throws \TypeError when variables are not of the correct type
 * */

public static function getTweetsByTweetDate(DateTime $tweetDate, \PDO $pdo) : \SplFixedArray {
	//filter input
	try {
		$tweetDate = ValidateDate($tweetDate);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}

	//create query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE DATE(tweetDate) = DATE(:tweetDate)";
	$statement = $pdo->prepare($query);

	//bind the tweet date to the placeholder
	$parameters = ["tweetDate" => $tweetDate];

	//execute query
	$statement->execute($parameters);

	//build an array of tweets
	$tweets = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
			$tweets[$tweets->key()] = $tweet;
			$tweets->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($tweets);

}
