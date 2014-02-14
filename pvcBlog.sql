CREATE TABLE blog_user (userId int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
						uName varchar(25) NOT NULL,
						name varchar(25) NOT NULL,
						lName varchar(25) NOT NULL,
						email varchar(25) NOT NULL,
						password varchar(8) NOT NULL,
						rPassword varchar(8) NOt NULL);

CREATE TABLE blog(postId int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
				  postTitle varchar(25) NOT NULL,
                  post varchar(250) NOT NULL,
                  postDate date NOT NULL,
                  userId int(10),
                  FOREIGN KEY(userId) REFERENCES blog_user(userId)
 				  );