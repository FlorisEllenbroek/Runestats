DROP DATABASE if EXISTS `runestats`;

CREATE DATABASE `runestats`;
USE `runestats`;
CREATE TABLE players (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE player_progress (
    player_id INT NOT NULL,
    attack INT NOT NULL DEFAULT 0,
    defence INT NOT NULL DEFAULT 0,
    strength INT NOT NULL DEFAULT 0,
    hitpoints INT NOT NULL DEFAULT 0,
    ranged INT NOT NULL DEFAULT 0,
    magic INT NOT NULL DEFAULT 0,
    prayer INT NOT NULL DEFAULT 0,
    cooking INT NOT NULL DEFAULT 0,
    woodcutting INT NOT NULL DEFAULT 0,
    hunter INT NOT NULL DEFAULT 0,
    fletching INT NOT NULL DEFAULT 0,
    fishing INT NOT NULL DEFAULT 0,
    firemaking INT NOT NULL DEFAULT 0,
    crafting INT NOT NULL DEFAULT 0,
    smithing INT NOT NULL DEFAULT 0,
    mining INT NOT NULL DEFAULT 0,
    herblore INT NOT NULL DEFAULT 0,
    agility INT NOT NULL DEFAULT 0,
    thieving INT NOT NULL DEFAULT 0,
    slayer INT NOT NULL DEFAULT 0,
    farming INT NOT NULL DEFAULT 0,
    runecrafting INT NOT NULL DEFAULT 0,
    construction INT NOT NULL DEFAULT 0,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (player_id) REFERENCES players(id) ON DELETE CASCADE
);