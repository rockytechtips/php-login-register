# php-login-register
I have created Basic PHP Login System with Profile Page For Beginners

[Site Demo](https://tinny-armories.000webhostapp.com/)
#### USER LOGIN
##### username: `demouser`
##### password: `123456`

### SETUP DATABASE
#### Database: `loginsystem`
#### Table structure for table `users`

CREATE TABLE `users` (
  `usersId` int(11) AUTO_INCREMENT, PRIMARY KEY, NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


Run the site using [XAMPP](https://www.apachefriends.org/)
