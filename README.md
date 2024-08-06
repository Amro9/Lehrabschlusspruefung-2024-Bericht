# Erfahrungsbericht zur Lehrabschlussprüfung (LAP)

Hallo und herzlich willkommen!

Meine LAP ist nun vorbei Ich möchte hier meine Erfahrungen weitergeben und beschreiben, wie ich mich vorbereitet habe und wie die Prüfung abgelaufen ist.
Als Richtewert für dich beim Lesen: ich habe zum Glück mit Auszeichnung abgeschlossen.

> [!NOTE]
Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.
> 

> [!NOTE]
Ihr könnt eure Berichte auch nach der LAP in ein Repository schreiben und den Link in dieser Readme am Ende anfügen. So haben die nächsten Lehrlinge möglichst viele Berichte an einem Ort.
> 

# Die Praxis

## Einleitung

Für den Vormittag und den Nachmittag stehen jeweils 3,5 Stunden zur Verfügung. In der Regel musst du sowohl am Vormittag als auch am Nachmittag deine Arbeitsschritte dokumentieren. Einfach und in wenigen Sätzen, gegliedert durch Überschriften

- Kurze Einleitung: Dieses Dokument dient zur Dokumentation der Arbeitsschritte der Übung ... der LAP für Applikationsentwickler/innen.
- Benötigte Werkzeuge
- Arbeitsschritte
    - ER-Diagramm
    - Mein Code
    - usw.

Ein paar Screenshots zwischendurch kommen gut an.

---
## Vormittag: Datenbanken

- Der Vormittag ist der Datenbank gewidmet. Wenn man die Übungen in der Schule gemacht und verstanden hat, sollte dieser Teil leicht sein.
- Zuerst bekommst du eine Problemstellung und die Aufgabe ist, eine Datenbank dazu zu erstellen.

> [!CAUTION]
> Nicht zu kompliziert denken. Die Prüfer wissen, dass du nicht viel Zeit hast und erwarten deshalb nicht zu viel. Halte dich an das KISS-Prinzip (Keep It Simple, >Stupid).
> - Unsere Aufgabe war eine DB für eine Einkaufslisten-App mit Listen, Kategorien, Produkten, Benutzern, Shops

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
>Wichtig ist, dass die Seite und der Code nicht perfekt sein müssen. Konzentriere dich auf das Wesentliche. Bei mir sind z.B. zwei Spalten beim Hinzufügen leer geblieben. Die Aufgabe wurde trotzdem als erfüllt gewertet, da das Einfügen an sich funktionierte. Wichtig z.b. auch die Eingabe-Validierung (prepared stmts, xss-Angriffe) 
---
> [!NOTE]  
> Wenn man fertig ist, gibt es ein Gespräch mit dem Prüfer. Das Gespräch hilft, die Note zu verbessern. Wenn du etwas nicht ganz geschafft oder nicht richtig umgesetzt hast, kannst du erklären, wie du es sonst gemacht hättest und dafür Punkte bekommen. Also: Konzentriere dich auf das Wesentliche, und wenn du Zeit hast, kannst du die Dinge verbessern.

---

### Testen

- Eine der Aufgaben am Nachmittag ist, die Oberfläche der Website zu testen und die Ergebnisse zu dokumentieren. Ich habe eine [Testprotokoll-Vorlage](https://de.parasoft.com/blog/how-to-write-test-cases-for-software-examples-tutorial/) gegoogelt und Dinge wie: Test-ID (1,2,3 ..) , erwartete Ergebnisse, tatsächliche Ergebnisse (inkl. Screenshot), Test bestanden/nicht bestanden (Ja/Nein) übernommen. Das kam sehr gut an.
- Verbringe aber nicht viel Zeit damit. Einfach das Verhalten eines Buttons testen oder eine Eingabe/Ausgabe überprüfen und fertig.

---
# Theorie:

Einige machen sich Sorgen vor dem Fachgespräch. Ich hatte das Gefühl es ging mir dabei leichter als der Nachmittag in der Praxis.

Es gibt drei Prüfer. Jeder stellt 3-4 Fragen.

- Zuerst fragen sie dich, was du im Betrieb gemacht hast. Auf diese Frage musst du gut vorbereitet sein. Erzähle so viel, dass sie genug Fragen haben, aber so wenig, dass du weißt, was du sagst.
- Der erste Prüfer stellte mir Fragen zu OOP: Was ist Vererbung? Was ist der Unterschied zwischen Interface und abstrakten Klassen? Wie testet man? Was ist Unit Test, Integration Test, White Box und Black Box Test? Warum ist Sicherheit beim White-Box-Test so wichtig? (Weil der Tester Zugriff auf den Quellcode hat).
- Der zweite Tester stellte einige Fragen zur Datenbank: ein allgemeines Verständnis von Normalisierung (NF), ACID, DBMS, technische Begriffe (Relationen, Tupel, Entity, Column etc.), wie werden Daten gespeichert? Dann ging es um APIs, HTTP, was ist eine REST-API?
- Der dritte Prüfer stellte nur Fragen aus dem Katalog, er blätterte durch und stellte Fragen.

---
> **Note**
> 
>Nachdem nur ein Prüfer den Katalog durchgeblättert hat, würde ich sagen, wenn man nur die Fragen aus dem Katalog beantwortet, bekommt man nur ein Drittel der Note. Der Rest verteilt sich auf den gesunden Menschenverstand und das, worauf man sich während der Ausbildung spezialisiert hat. Letztendlich deckt der Themenkatalog fast alle Bereiche ab. Um die volle Punktzahl zu erreichen, muss man also mehr als nur die Fragen aus dem Katalog beantworten. Für “nur” bestanden reicht der Themenkatalog völlig aus.

Insgesamt fand ich das Fachgespräch nicht schwer. Ich habe versucht, nicht zu viele Fachbegriffe zu verwenden und nur genau auf die Frage zu antworten. Die Prüfer lassen einem Zeit, alles zu sagen, was man möchte. Ich habe immer wieder gefragt: „Habe ich jetzt die Frage beantwortet oder soll ich weiterreden?“ und meistens war die Antwort: „Das reicht“.

> **Zusammenfassung:**
> Alles in allem kann man sagen, dass 3-4 Wochen Vorbereitung ausreichen. Für die letzten 3 Wochen braucht man aber unbedingt einen Plan mit 3-4 Stunden am Tag.
---
# Ein Lernplan als Vorschlag

## Für die Praxis
- Mehrfaches Entwerfen einer Datenbank inkl. ERD. Dabei Daten hinzufügen und Queries inkl. Aggregations und Joins schreiben. Arbeitschritte dokumentieren.
- Diese Datenbanken für eine Website mit HTML + PHP nutzen. Implementiere folgendes:
    - CRUD (Create, Read, Update, Delete)
    - Login implementieren
    - Exceptions verwenden und sinnvolle Benutzer-Meldungen anzeigen
    - Arbeitschritte dokumentieren
- Beispiele: Bibliothekssystem, Ausleihsystem, Fahrplan-App (Haltestelle Anfang, Ende, Passagier, Preis (Float!!), bezahlt etc.)
- Beispiel für eine Doku der Arbeitsschritte ist im Repo -> [Link](https://github.com/Amro9/LAP-2024/blob/main/Beispiel%20einer%20Dokumentation.docx)
---

## Für die Theorie
- Den Katalog durchgehen und auf die Frage „Was haben Sie in der Firma gemacht?“ vorbereitet sein. Wenn noch Zeit bleibt, ein bisschen in den Schulunterlagen blättern und mehr lesen (Firewall, Backups, Verschlüsselung, ...).
- Ich habe mir Flashcards zu den Fragen aus dem Katalog erstellt und die meisten Fragen mit ChatGPT beantwortet. Flashcards lassen sich leicht mit Canva erstellen. Ich habe die Flashcards in drei Teile mit jeweils ca. 100 Flashcards aufgeteilt und jeden Tag ein bis zwei Teile beantwortet. Egal ob im Zug, bei der Arbeit oder vor dem Schlafengehen. Ein paar Tage später fängt man an, sie auswendig zu beantworten, ohne bei der Antwort in Panik zu geraten.
- Als ich mit dem Großteil der Fragen vertraut war, habe ich für die Frage "Was haben Sie in der Firma gemacht" recherchiert. Ich hatte in der Firma mit Datenbanken und einer API zu tun. Neben Datenbanken habe ich mich also auch mit Internet, Übertragungsprotokollen, REST-API, SOAP usw. beschäftigt.
- So erstellst du Flashcards in Canva:
1. Bei ungerader Seitenzahl die Fragen schreiben:
![1](https://github.com/user-attachments/assets/a5fb89da-eddf-4a95-a523-4b3d077b3208)
3. Bei gerader Seitenzahl die Antworten schreiben
![2](https://github.com/user-attachments/assets/d90de565-21ec-4c60-861d-09bd6b87578f)
1. Das Dokument als PDF herunterladen und beidseitig ausdrucken, dann die Karten ausschneiden.

Hier sind [meine](https://www.canva.com/design/DAGKCm-7rm0/hPSm0hGXBZK3NBwh8VjbXg/view?utm_content=DAGKCm-7rm0&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink&mode=preview), jeder darf sie verwenden.

---

## Beiträge von anderen AbsolventInnen

[(Repo vom Reiter Leon)](https://github.com/ReiterLeon/LAP2024)

[(Repo vom Diendorfer Leon)](https://github.com/LeonDiendorfer/LAP_Coding_Theorie?tab=readme-ov-file)

[(Repo vom Diendorfer Leon)](https://github.com/SenselessCoding)


## Sonstige Ressourcen:

- Ich habe beide Vorbereitungskurse besucht, sowohl an der LBS4 als auch am WIFI. Ich würde sagen, sie haben sich gegenseitig ergänzt. An der LBS4 ging es mehr um die Theorie und beim WIFI ging es mehr um die Praxis. Ich würde daher empfehlen, beide zu besuchen.

---

> [!NOTE]
Wer noch Fragen hat gerne in die Discussions posten.
> 

> [!NOTE]
>Wie bereits erwähnt. Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.


Mit ein bisschen Ehrgeiz und Fleiß schafft man das schon und einem tollen Erfolg kann nichts im Wege stehen.
Alles Gute!
