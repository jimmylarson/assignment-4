USE CS3620;
GO;

CREATE TABLE dvdtitles
(
  asin          VARCHAR(15) NOT NULL PRIMARY KEY,
  title         VARCHAR(100) NULL,
  price         DOUBLE(5,2) NOT NULL
);
GO;
