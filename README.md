# Erfahrungsbericht zur Lehrabschlussprüfung (LAP)

Hallo und herzlich willkommen!

Meine LAP ist nun vorbei - zum Glück mit ausgezeichnetem Erfolg! Ich möchte hier meine Erfahrungen weitergeben und beschreiben, wie ich mich vorbereitet habe und wie die Prüfung abgelaufen ist.

>[!NOTE]
>Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.

>[!NOTE] 
>Ihr könnt eure Berichte auch nach der LAP in ein Repository schreiben und den Link in dieser Readme am Ende anfügen. So haben die nächsten Studierenden alle Berichte an einem Ort.

## Vor der Prüfung

Am Anfang der Lernphase hat man oft noch viel Zeit und möchte alles gründlich lernen. Du hast aber noch keinen Überblick und weißt nicht genau, wo du anfangen sollst. Wenn du noch mehr als einen Monat Zeit hast, kannst du dich in Ruhe einarbeiten. Wenn du aber nur noch drei Wochen Zeit hast, brauchst du einen genauen Plan. So habe ich mir die Zeit eingeteilt:

- Ich habe ein paar Mal eine Datenbank inkl. ER-Diagramm erstellt, z.B. für ein Bibliothekssystem oder ein Ausleihsystem. Ich habe einige Daten hinzugefügt und Queries inkl. Aggregation und Joins geschrieben.
- Ich habe ein paar Mal die Website erstellt. Einfach die Datenbanken dafür nehmen und CRUD (Create, Read, Update, Delete) + Login machen. Dann ist man gut vorbereitet.
- Die Theorie hauptsächlich der Fragenkatalog

## Am Tag der Prüfung

### Die Praxis

Für den Vormittag und den Nachmittag stehen jeweils 3,5 Stunden zur Verfügung. In der Regel musst du sowohl am Vormittag als auch am Nachmittag deine Arbeitsschritte dokumentieren. Einfach und in wenigen Sätzen, gegliedert durch Überschriften

- Kurze Einleitung: Dieses Dokument dient zur Dokumentation der Arbeitsschritte der Übung ... der LAP für Anwendungsentwickler/innen.
- Benötigte Werkzeuge
- Arbeitsschritte
    - ER-Diagramm
    - Mein Code
    - usw.

Ein paar Screenshots zwischendurch sind ganz nett.

---

## Ablauf

### Vormittag (Datenbanken)

- Der Vormittag ist der Datenbank gewidmet. Wenn man die Übungen in der Schule gemacht und verstanden hat, sollte dieser Teil leicht sein.
- Zuerst bekommst du eine Problemstellung und die Aufgabe ist, eine Datenbank dazu zu erstellen.
> ACHTUNG]  
> Nicht zu kompliziert denken. Die Prüfer wissen, dass du nicht viel Zeit hast und erwarten deshalb nicht zu viel. Halte dich an das KISS-Prinzip (Keep It Simple, >Stupid).
    - Unsere Aufgabe war eine DB für eine Einkaufslisten-App mit Listen, Kategorien, Produkten, Benutzern, Shops


---

- Die zweite Aufgabe ist das Schreiben von 2-3 Abfragen für eine existierende Datenbank. Maximales Wissen dafür: Korrekte Joins (meist Inner Join oder Left Join), Aggregation, Group By und Having.
- Unsere Aufgabe war ein Reservierungssystem für Tennisplätze und Tennisschläger
    - Tabelle Platz: id, Beschreibung, Preis pro Stunde
    - Tabelle Reservierung: id, reservierterPlatz, Benutzer, DatumBeginn, DatumEnde, Dauer, GesamtPreis, ExtraReservierungId
    - Tabelle ExtraReservierung: id, produkt
    - Tabelle Produkt (für Tennisbälle, Schläger, die zusätzlich zur Platzreservierung gebucht werden können)

> [!NOTE]  
> Zusammenfassung des Vormittags: Sie haben 3,5 Stunden Zeit für eine Arbeit, die nicht mehr als 2,5 bis 3 Stunden in Anspruch nimmt.
---
> [!TIP]
> 
>- Beschränke dich nicht nur auf die Fragestellung. Überlege, ob etwas absichtlich nicht geschrieben wurde. Bei mir gab es z.B. einen Punkt dafür, dass ich die E-Mail-Adresse in >der User-Tabelle als einzigartig markiert habe, obwohl das nicht in der Fragestellung stand.
>- Es gab einen Punkt für die Indexierung einer Tabelle. Man musste einen Index für die Kategorie-Tabelle erstellen, der auf die Bezeichnung-Spalte zeigte. Wenn kein Index >gefordert wird, erstelle trotzdem irgendwo einen und dokumentiere diesen.
>- Beim Insert von Daten denke nicht ob die Daten Sinn machen. Max Mustermann, Test 1, Test 2 reichen vollkommen.
>- Du musst die Insert-Statements nicht selber schreiben. Du kannst in der Oberfläche von Workbench direkt die Daten in die Tabelle eingeben und vor dem Ausführen das Insert->Skript kopieren. Das spart viel Zeit.
>- Achte auf Datentypen und Längen. Bei Passwort z.B. VARCHAR(255). Du wirst gefragt, warum so lange? (Um vorbereitet auf alle Arten von Hashes zu sein.)

---

### Nachmittag (Website)

Für eine zur Verfügung gestellte Datenbank (das Reservierungssystem vom Vormittag) muss eine Schnittstelle mit PHP und HTML erstellt werden. Hier muss ich sagen, dass wirklich viel verlangt wurde. Wir mussten Daten aus der Datenbank tabellarisch anzeigen und diese nach Suchbox und/oder Dropdown-Auswahl filtern. Außerdem eine zweite Seite, um neue Reservierungen hinzuzufügen.

> [!CAUTION]  
>Wichtig ist, dass die Seite nicht perfekt sein muss. Konzentriere dich auf das Wesentliche. Bei mir sind z.B. zwei Spalten beim Hinzufügen leer geblieben. Die >Aufgabe wurde trotzdem als erfüllt gewertet, da das Einfügen an sich funktionierte.
---
> [!NOTE]  
> Wenn man fertig ist, gibt es ein Gespräch mit dem Prüfer. Das Gespräch hilft, die Note zu verbessern. Wenn du etwas nicht ganz geschafft oder nicht richtig umgesetzt hast, kannst du erklären, wie du es sonst gemacht hättest und dafür Punkte bekommen. Also: Konzentriere dich auf das Wesentliche, und wenn du Zeit hast, kannst du die Dinge verbessern.

---

### Testen

- Eine der Aufgaben am Nachmittag ist, die Oberfläche der Website zu testen und die Ergebnisse zu dokumentieren. Ich habe eine [Testprotokoll-Vorlage](https://de.parasoft.com/blog/how-to-write-test-cases-for-software-examples-tutorial/) gegoogelt und Dinge wie: Test-ID (1,2,3 ..) , erwartete Ergebnisse, tatsächliche Ergebnisse (inkl. Screenshot), Test bestanden/nicht bestanden (Ja/Nein) übernommen. Das kam sehr gut an.
- Verbringe aber nicht viel Zeit damit. Einfach das Verhalten eines Buttons testen oder eine Eingabe/Ausgabe überprüfen und fertig.

---

### Theorie:

Viele machen sich Sorgen vor dem Fachgespräch. Mir ging es dabei leichter als der Nachmittag in der Praxis

### Ablauf:


Es gibt drei Prüfer. Jeder stellt 3-4 Fragen.

- Zuerst fragen sie dich, was du im Betrieb gemacht hast. Auf diese Frage musst du gut vorbereitet sein. Erzähle so viel, dass sie genug Fragen haben, aber so wenig, dass du weißt, was du sagst.
- Verfügbare Ressourcen: Offizieller Themenkatalog der WKO, Google, ChatGPT.
    - Ich habe mir Flashcards zu den Fragen aus dem Katalog erstellt und die meisten Fragen mit ChatGPT beantwortet. Flashcards lassen sich leicht mit Canva erstellen. Ich habe die Flashcards in drei Teile mit jeweils ca. 100 Flashcards aufgeteilt und jeden Tag ein bis zwei Teile beantwortet. Egal ob im Zug, bei der Arbeit oder vor dem Schlafengehen. Ein paar Tage später fängt man an, sie auswendig zu beantworten, ohne bei der Antwort in Panik zu geraten.
    - Als ich mit dem Großteil vertraut war, habe ich für die Frage "Was haben Sie in der Firma gemacht" recherchiert. Ich hatte mit Datenbanken und einer API zu tun. Neben Datenbanken habe ich mich also auch mit Internet, Übertragungsprotokollen, REST-API, SOAP usw. beschäftigt.
- Der erste Prüfer stellte mir Fragen zu OOP: Was ist Vererbung? Was ist der Unterschied zwischen Interface und abstrakten Klassen? Wie testet man? Was ist Unit Test, Integration Test, White Box und Black Box Test? Warum ist Sicherheit beim White-Box-Test so wichtig? (Weil der Tester Zugriff auf den Quellcode hat).
- Der zweite Tester stellte einige Fragen zur Datenbank: ein allgemeines Verständnis von Normalisierung (NF), ACID, DBMS, technische Begriffe (Relationen, Tupel, Entity, Column etc.), wie werden Daten gespeichert? Dann ging es um APIs, HTTP, was ist eine REST-API?
- Der dritte Prüfer stellte nur Fragen aus dem Katalog, er blätterte durch und stellte Fragen.

---

### Bemerkungen

- Nachdem nur ein Prüfer den Katalog durchgeblättert hat, würde ich sagen, wenn man nur die Fragen aus dem Katalog beantwortet, bekommt man nur ein Drittel der Note. Der Rest verteilt sich auf den gesunden Menschenverstand und das, worauf man sich während der Ausbildung spezialisiert hat. Letztendlich deckt der Themenkatalog fast alle Bereiche ab. Um die volle Punktzahl zu erreichen, muss man also mehr als nur die Fragen aus dem Katalog beantworten. Für “nur” bestanden reicht der Themenkatalog völlig aus.

Insgesamt fand ich das Fachgespräch nicht schwer und gut zu bewältigen. Ich habe versucht, nicht zu viele Fachbegriffe zu verwenden und nur genau auf die Frage zu antworten. Die Prüfer lassen einem Zeit, alles zu sagen, was man möchte. Ich habe immer wieder gefragt: „Habe ich jetzt die Frage beantwortet oder soll ich weiterreden?“ und meistens war die Antwort: „Das reicht“.

---

## Zusammenfassung:

Alles in allem kann man sagen, dass 3-4 Wochen Vorbereitung ausreichen.

- Für die Praxis: ein paar Mal DB, HTML und PHP üben und die Fehler verstehen und beheben.
- Für die Theorie: den Katalog durchgehen und auf die Frage „Was haben Sie in der Firma gemacht?“ vorbereitet sein. Wenn noch Zeit bleibt, ein bisschen in den Schulunterlagen blättern und mehr lesen (Firewall, Backups, Verschlüsselung, ...).

Mit ein bisschen Ehrgeiz und Fleiß schafft man das schon und einem tollen Erfolg steht nichts im Wege.

---

## Meine Ressourcen:

### Übungen für die Praxis:

- Erstelle eine Datenbank mit einem ER-Diagramm und einigen Inserts. Zeige die Daten in einer Tabelle an, füge neue Daten hinzu, lösche Daten und editiere Daten.
- Implementiere ein Login-System mit Sessions.
- Zeig dem Benutzer sinnvolle Meldungen
- Verwende Exceptions, um Abstürze zu vermeiden.

### Beispiele:

- Fahrplan-App (Haltestelle Anfang, Ende, Passagier, Preis (Float!!), bezahlt. Z
- Einkaufsliste
- Bibliothek-Verleihsystem

---

## Dokumentation

Ein Beispiel, wie die Dokumentation im praktischen Teil aussehen könnte: 
# Einleitung

In diesem Dokument werden die Arbeitsschritte während der LAP Prüfung für Applikationsentwickler mitdokumentiert.

# Benötigte Tools:

- Xampp version ..
- mysql workbench version ..

# ER-Diagramm

![ERD](https://github.com/user-attachments/assets/52fff6e8-e939-4c47-b7f8-508a609a43f4)


# Besondere Überlegungen

## Kundentabelle

Besonderheiten: es wurde darauf verzichtet, den straßennamen in eine eigene Tabelle auszulagern, somit blieb ich möglichst praxisnah.

Bei strikter Einhaltung der 3. NF würde es eine Straßentabelle mit ortsId als FK geben und die StraßenId würde in der Usertabelle stehen. So kann über die StraßenId auf den Ort verwiesen werden.

## Fahrten

In der Tabelle Fahrten

ist die Tarifbezeichnung eine Beschreibung, die Buchstaben oder Zahlen enthalten kann.

Der maximale, verständlichere Preis wäre dann 500 €. Dies liegt über dem Maximalwert des Datentyps tinyint, daher wurde smallint gewählt.

Bei Fahrtbeginn wird das Datum zu dieser Zeit berücksichtigt, da eine Fahrt bis zum nächsten Tag dauern kann.

# Insert Stmts

## Tabelle Ort

insert into ort (plz, ortsname)

values (5500, 'Bischofshofen'),

(5020, 'Salzburg'),

(8020, 'Graz')

## Tabelle: Kunde

use fahrplan;

insert into fahrten(Kunde_id,HaltestelleStart,HaltestelleEnde,Fahrtbezahlt,tarifbezeichnung,preis,fahrtantritt,fahrtende)

values (4,1,2,1,"tariftest",2.5, '2024-12-23 08:54:22',  '2024-12-23 09:54:22'),

(2,2,3,0,'tariftest2',3.5,'2023-12-12 07:43:22',  '2024-12-23 12:54:22'),

(3,3,2,1,'tariftest3',3.5,'2022-12-11 09:53:23','2022-12-11 10:23:23');

SELECT * FROM fahrplan.fahrten;

## Tabelle: Haltestellen

insert into haltestelle(name) values ('hans'),("testhaltestelle"), ("test3")
---

### Theorie:

- Ich habe für die Theorie hauptsächlich mit Flashcards gelernt.

Beispiel Vorderseite (Fragen)
![2](https://github.com/user-attachments/assets/d90de565-21ec-4c60-861d-09bd6b87578f)



Beispiel Hinterseite (Antworten)
![1](https://github.com/user-attachments/assets/a5fb89da-eddf-4a95-a523-4b3d077b3208)

Die Falshcards habe ich mit Canva erstellt. Einfach als PDF herunterladen und beidseitig ausdrucken, dann die Karten ausschneiden.

Hier sind [meine](https://www.canva.com/design/DAGKCm-7rm0/2y27_bHHbQ8nKQkMzm-v5A/view?utm_content=DAGKCm-7rm0&utm_campaign=designshare&utm_medium=link&utm_source=editor), jeder darf sie verwenden.

---

---

## Beiträge von anderen AbsolventInnen

[(Repo vom Reiter Leon)](https://github.com/ReiterLeon/LAP2024)
[(Repo vom Diendorfer Leon)](https://github.com/LeonDiendorfer/LAP_Coding_Theorie?tab=readme-ov-file)
[(Repo vom Diendorfer Leon)](https://github.com/SenselessCoding)
---

## Sonstige Ressourcen:

- Ich habe beide Vorbereitungskurse besucht, sowohl an der LBS4 als auch am WIFI. Ich würde sagen, sie haben sich gegenseitig ergänzt. An der LBS4 ging es mehr um die Theorie und beim WIFI ging es mehr um die Praxis. Ich würde daher empfehlen, beide zu besuchen.

---

>[!NOTE] 
>Wer noch Fragen hat gerne in die Discussions posten.

>[!NOTE] 
>Wie bereits erwähnt. Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.


Alles Gute!
