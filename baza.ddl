
CREATE TABLE Admin
(
	Korisnicko_ime       CHAR(18) NOT NULL,
	Password             CHAR(18) NULL
);

ALTER TABLE Admin
ADD CONSTRAINT XPKAdmin PRIMARY KEY (Korisnicko_ime);

CREATE TABLE Moderator
(
	Korisnicko_ime_mod   CHAR(18) NOT NULL,
	Password             CHAR(18) NULL
);

ALTER TABLE Moderator
ADD CONSTRAINT XPKModerator PRIMARY KEY (Korisnicko_ime_mod);

CREATE TABLE Ostavljena_za
(
	idRec                INTEGER NOT NULL,
	idR                  INTEGER NOT NULL,
	Korisnicko_ime       CHAR(18) NOT NULL
);

ALTER TABLE Ostavljena_za
ADD CONSTRAINT XPKOstavljena_za PRIMARY KEY (idRec,idR,Korisnicko_ime);

CREATE TABLE Poseceni_restorani
(
	idR                  INTEGER NOT NULL,
	Korisnicko_ime       CHAR(18) NOT NULL
);

ALTER TABLE Poseceni_restorani
ADD CONSTRAINT XPKPoseceni_restorani PRIMARY KEY (idR,Korisnicko_ime);

CREATE TABLE Radno_vreme
(
	idRV                 CHAR(18) NOT NULL,
	idR                  INTEGER NOT NULL,
	Ponedeljak           CHAR(18) NULL,
	Utorak               CHAR(18) NULL,
	Sreda                CHAR(18) NULL,
	Cetvrtak             CHAR(18) NULL,
	Petak                CHAR(18) NULL,
	Subota               CHAR(18) NULL,
	Nedelja              CHAR(18) NULL
);

ALTER TABLE Radno_vreme
ADD CONSTRAINT XPKRadno_vreme PRIMARY KEY (idRV);

CREATE TABLE Recenzija
(
	idRec                INTEGER NOT NULL,
	Korisnicko_ime_mod   CHAR(18) NULL,
	idR                  INTEGER NOT NULL,
	Tekst                TEXT NULL,
	Ocena                INTEGER NULL
);

ALTER TABLE Recenzija
ADD CONSTRAINT XPKRecenzija PRIMARY KEY (idRec);

CREATE TABLE Registrovan_korisnik
(
	Korisnicko_ime       CHAR(18) NOT NULL,
	Password             CHAR(18) NULL,
	Ime                  CHAR(18) NULL,
	Prezime              CHAR(18) NULL
);

ALTER TABLE Registrovan_korisnik
ADD CONSTRAINT XPKRegistrovan_korisnik PRIMARY KEY (Korisnicko_ime);

CREATE TABLE Restoran
(
	idR                  INTEGER NOT NULL,
	Ime                  CHAR(18) NULL,
	Broj_telefona        CHAR(18) NULL,
	Adresa               CHAR(18) NULL,
	Sajt                 CHAR(18) NULL,
	Vrsta_hrane          CHAR(18) NULL,
	Cenovni_rang         CHAR(18) NULL,
	Prosecna_ocena       CHAR(18) NULL,
	idSl                 CHAR(18) NULL,
	Opis                 TEXT NULL
);

ALTER TABLE Restoran
ADD CONSTRAINT XPKRestoran PRIMARY KEY (idR);

CREATE TABLE Slika
(
	idSl                 CHAR(18) NOT NULL,
	Opis                 TEXT NULL,
	Slika                LONGBLOB NULL,
	idRec                INTEGER NULL
);

ALTER TABLE Slika
ADD CONSTRAINT XPKSlika PRIMARY KEY (idSl);

ALTER TABLE Ostavljena_za
ADD CONSTRAINT R_17 FOREIGN KEY (idRec) REFERENCES Recenzija (idRec);

ALTER TABLE Ostavljena_za
ADD CONSTRAINT R_18 FOREIGN KEY (idR, Korisnicko_ime) REFERENCES Poseceni_restorani (idR, Korisnicko_ime);

ALTER TABLE Poseceni_restorani
ADD CONSTRAINT R_15 FOREIGN KEY (idR) REFERENCES Restoran (idR);

ALTER TABLE Poseceni_restorani
ADD CONSTRAINT R_16 FOREIGN KEY (Korisnicko_ime) REFERENCES Registrovan_korisnik (Korisnicko_ime);

ALTER TABLE Radno_vreme
ADD CONSTRAINT R_9 FOREIGN KEY (idR) REFERENCES Restoran (idR);

ALTER TABLE Recenzija
ADD CONSTRAINT R_7 FOREIGN KEY (idR) REFERENCES Restoran (idR);

ALTER TABLE Recenzija
ADD CONSTRAINT R_19 FOREIGN KEY (Korisnicko_ime_mod) REFERENCES Moderator (Korisnicko_ime_mod);

ALTER TABLE Restoran
ADD CONSTRAINT R_20 FOREIGN KEY (idSl) REFERENCES Slika (idSl);

ALTER TABLE Slika
ADD CONSTRAINT R_11 FOREIGN KEY (idRec) REFERENCES Recenzija (idRec);
