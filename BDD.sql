CREATE TABLE Clients (
    IdClient INT PRIMARY KEY,
	IdConseiller INT,
    Nom VARCHAR(50),
    Prénom VARCHAR(50),
    Adresse VARCHAR(100),
    Situation_F VARCHAR(20),
	FOREIGN KEY (IdConseiller) REFERENCES Conseillers(IdConseiller)
);

CREATE TABLE CompteBancaires (
    IdCompte INT PRIMARY KEY,
    TypeCompte VARCHAR(50),
    Solde DECIMAL(10, 2),
    IdClient INT,
    IdConseiller INT,
    FOREIGN KEY (IdAgence) REFERENCES Agences(IdAgence),
    FOREIGN KEY (IdClient) REFERENCES Clients(IdClient)
);

CREATE TABLE LignesComptes (
    IdLigneCompte INT PRIMARY KEY,
    Description TEXT,
    Montant DECIMAL(10, 2),
    IdCompte INT,
    FOREIGN KEY (IdCompte) REFERENCES Comptes(IdCompte)
);

CREATE TABLE BanqueAgence (
    IdAgence INT PRIMARY KEY,
    NomAgence VARCHAR(100),
    Adresse VARCHAR(150),
);

CREATE TABLE Conseillers (
    IdConseiller INT PRIMARY KEY,
    Nom VARCHAR(50),
    Prénom VARCHAR(50),
    IdAgence INT,
    FOREIGN KEY (IdAgence) REFERENCES Agences(IdAgence)
);


INSERT INTO Clients (IdClient,ID_Conseiller, Nom, Prénom, Adresse, Situation_F)
VALUES 
    (11, 111, 'Taylor', 'Christopher', '456 Pine St', 'Single'),
    (12, 112, 'Jones', 'Ava', '789 Cedar St', 'Married'),
    (13, 113, 'Clark', 'Logan', '234 Elm St', 'Single'),
    (14, 114, 'Moore', 'Grace', '567 Birch St', 'Divorced'),
    (15, 115, 'Walker', 'Chloe', '890 Oak St', 'Married'),
    (16, 116, 'Anderson', 'Jacob', '123 Maple St', 'Single'),
    (17, 117, 'White', 'Madison', '456 Cedar St', 'Married'),
    (18, 118, 'Hill', 'Ryan', '789 Pine St', 'Single'),
    (19, 119, 'Young', 'Zoe', '234 Birch St', 'Married'),
    (20, 120, 'Adams', 'William', '567 Elm St', 'Single');


INSERT INTO Comptes (IdCompte, TypeCompte, Solde, IdClient, IdConseiller)
VALUES
    (1, 'Épargne', 5000.00, 1, 101),
    (2, 'Chèques', 1500.50, 2, 102),
    (3, 'Épargne', 10000.75, 3, 103),
    (4, 'Chèques', 200.20, 4, 104),
    (5, 'Épargne', 7500.90, 5, 105),
    (6, 'Chèques', 3000.25, 6, 106),
    (7, 'Épargne', 600.00, 7, 107),
    (8, 'Chèques', 4500.80, 8, 108),
    (9, 'Épargne', 12000.30, 9, 109),
    (10, 'Chèques', 800.50, 10, 110);



INSERT INTO Lignes_Comptes (IdLigneCompte, Description, Montant, IdCompte)
VALUES
    (1, 'Dépôt initial', 5000.00, 1),
    (2, 'Achat alimentaire', -150.50, 2),
    (3, 'Intérêts mensuels', 25.75, 3),
    (4, 'Retrait au distributeur', -50.20, 4),
    (5, 'Transfert vers épargne', -500.90, 5),
    (6, 'Paiement de facture', -150.25, 6),
    (7, 'Intérêts crédités', 10.00, 7),
    (8, 'Achat en ligne', -200.80, 8),
    (9, 'Versement salaire', 3000.30, 9),
    (10, 'Remboursement prêt', -200.50, 10);


INSERT INTO Agences (IdAgence, NomAgence, Adresse)
VALUES
    (1, 'Agence Centrale', '123 Central Street'),
    (2, 'Agence Nord', '456 North Avenue'),
    (3, 'Agence Sud', '789 South Road'),
    (4, 'Agence Est', '234 East Lane'),
    (5, 'Agence Ouest', '567 West Boulevard'),
    (6, 'Agence Métropolitaine', '890 Metropolitan Square'),
    (7, 'Agence Côtière', '123 Coastal Drive'),
    (8, 'Agence Montagnarde', '456 Mountain View'),
    (9, 'Agence Rivière', '789 Riverbank Street'),
    (10, 'Agence Champêtre', '234 Countryside Lane');

INSERT INTO Conseillers (IdConseiller, Nom, Prénom, IdAgence)
VALUES
    (101, 'Johnson', 'Michael', 1),
    (102, 'Davis', 'Jennifer', 2),
    (103, 'Smith', 'Christopher', 3),
    (104, 'Miller', 'Emily', 4),
    (105, 'Anderson', 'Jessica', 5),
    (106, 'Brown', 'Daniel', 6),
    (107, 'Taylor', 'Olivia', 7),
    (108, 'Moore', 'William', 8),
    (109, 'Garcia', 'Sophia', 9),
    (110, 'Clark', 'Matthew', 10);
