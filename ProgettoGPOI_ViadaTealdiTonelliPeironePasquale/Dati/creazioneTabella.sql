USE archivioalunni;

CREATE TABLE diplomato(
    nome VARCHAR(50),			--OBBLIGATORIO
    cognome VARCHAR(50),			--OBBLIGATORIO
    coficeFiscale VARCHAR(20) NOT NULL PRIMARY KEY,    --chiave primaria OBBLIGATORIO
    sezione VARCHAR(10),			--OBBLIGATORIO
    indirizzo VARCHAR(20),			--OBBLIGATORIO
    annoDiploma INTEGER,			--OBBLIGATORIO
    votoDiploma INTEGER,			--OBBLIGATORIO
    consenso BOOLEAN,			--OBBLIGATORIO
    primoLavoro VARCHAR(50),			--OPZIONALE
    primoStipendio VARCHAR(50),			--OPZIONALE
    lavoroAttuale VARCHAR(50),			--OPZIONALE
    attualeStipendio VARCHAR(50),			--OPZIONALE
    note VARCHAR(50),			--OPZIONALE
    biografia VARCHAR(50)			--OPZIONALE

)