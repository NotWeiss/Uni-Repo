SQL
CREATE TABLE `Users` (
    `userID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(64) NOT NULL,
    `password` VARCHAR(64) NOT NULL
);

CREATE TABLE `Countries` (
    `countryID` INT UNSIGNED NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `demonym` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`countryID`)
);

CREATE TABLE `Surveys` (
    `surveyID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `userID` INT UNSIGNED NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    CONSTRAINT `surveys_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `Users` (`userID`)

);

CREATE TABLE `Responses` (
    `responseID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `surveyID` INT UNSIGNED NOT NULL,
    `name` VARCHAR(64) NOT NULL,
    CONSTRAINT `responses_surveyid_foreign` FOREIGN KEY (`surveyID`) REFERENCES `Surveys` (`surveyID`)
);

CREATE TABLE `Questions` (
    `questionID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `surveyID` INT UNSIGNED NOT NULL,
    `position` INT UNSIGNED NOT NULL,
    `prompt` TEXT NOT NULL,
    `type` ENUM('text', 'country', 'radio_button', 'check_box') NOT NULL,
    CONSTRAINT `questions_surveyid_foreign` FOREIGN KEY (`surveyID`) REFERENCES `Surveys` (`surveyID`)
);

CREATE TABLE `Choices` (
    `choiceID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `questionID` INT UNSIGNED NOT NULL,
    `text` VARCHAR(64) NOT NULL,
    `is_other` BOOLEAN NOT NULL DEFAULT '0',
    CONSTRAINT `choices_questionid_foreign` FOREIGN KEY (`questionID`) REFERENCES `Questions` (`questionID`)
);

CREATE TABLE `Answers` (
    `answerID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `responseID` INT UNSIGNED NOT NULL,
    `questionID` INT UNSIGNED NOT NULL,
    `choiceID` INT UNSIGNED NULL,
    `countryID` INT UNSIGNED NULL,
    `answer` TEXT NULL,
    CONSTRAINT `answers_responseid_foreign` FOREIGN KEY (`responseID`) REFERENCES `Responses` (`responseID`),
    CONSTRAINT `answers_questionid_foreign` FOREIGN KEY (`questionID`) REFERENCES `Questions` (`questionID`),
    CONSTRAINT `answers_choiceid_foreign` FOREIGN KEY (`choiceID`) REFERENCES `Choices` (`choiceID`),
    CONSTRAINT `answers_countryid_foreign` FOREIGN KEY (`countryID`) REFERENCES `Countries` (`countryID`)
);