USE CS3620;
GO;

CREATE TABLE TitlesActors
(
  asin          VARCHAR(15) NOT NULL,
  actorID       INT(5) NOT NULL,
  UNIQUE INDEX idx_composite(asin,actorID),
  CONSTRAINT fk_asin FOREIGN KEY(asin) REFERENCES DvdTitles(asin),
  CONSTRAINT fk_actorID FOREIGN KEY(actorID) REFERENCES DvdActors(actorID)
);
GO;