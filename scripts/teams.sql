CREATE TABLE `games` (
  `game_id` integer,
  `team1_id` integer,
  `team2_id` integer,
  `team1_score` integer,
  `team2_score` integer
);

CREATE TABLE `teams` (
  `team_id` integer PRIMARY KEY,
  `name` varchar(255),
  `logo` image,
  `country` varchar(255),
  `country_abv` varchar(255),
  `wins` integer,
  `losses` integer,
  `draws` integer,
  `points` integer
);

CREATE TABLE `players` (
  `player_id` integer PRIMARY KEY,
  `team_id` integer,
  `team_name` varchar(255),
  `name` varchar(255),
  `age` integer,
  `picture` image,
  `touchdowns` integer,
  `sacks` integer,
  `tackles` integer,
  `interceptions` integer
);

ALTER TABLE `games` ADD FOREIGN KEY (`team1_id`) REFERENCES `teams` (`team_id`);

ALTER TABLE `teams` ADD FOREIGN KEY (`team_id`) REFERENCES `players` (`team_id`);

ALTER TABLE `games` ADD FOREIGN KEY (`team2_id`) REFERENCES `teams` (`team_id`);
