--For tweet w/ hexified id: 0536faef082b454e9d444cdbe7887d7a
--get tweet content & profileAtHandle of all users who liked the Tweet

SELECT tweet.tweetContent profile.profileAtHandle FROM 'like'
INNER JOIN tweet ON tweet.tweetId = like.likeTweetId
INNER JOIN profile.profileId = like.likeProfileId
WHERE tweet.tweetId = unhex(0536faef082b454e9d444cdbe7887d7a);

