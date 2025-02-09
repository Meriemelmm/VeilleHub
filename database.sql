CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('Etudiant', 'admin') NOT NULL,
    status ENUM('Apprever', 'Rejeter','en attente') DEFAULT 'en attente'
    
);
CREATE TABLE Subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    is_accpted BOOLEAN DEFAULT FALSE,
    created_by INT NOT NULL, 
   
   
    FOREIGN KEY (created_by) REFERENCES Users(id) 
);
CREATE TABLE Presentations (
    presetation_id INT AUTO_INCREMENT PRIMARY KEY,
    subject_id INT NOT NULL,
    student_id INT NOT NULL,
    date DATETIME NOT NULL,
  
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   
    FOREIGN KEY (subject_id) REFERENCES Subjects(subject_id) ,
    FOREIGN KEY (student_id) REFERENCES Users(id) 
);


