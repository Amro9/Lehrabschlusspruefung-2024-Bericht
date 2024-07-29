# Erfahrungsbericht zur Lehrabschlussprüfung (LAP)

Hi und herzlich Willkommen!

Nun ist meine LAP geschafft – zum Glück mit ausgezeichnetem Erfolg! Ich möchte hier meine Erfahrungen teilen und beschreiben, wie ich mich vorbereitet habe und wie die Prüfung verlaufen ist.

>[!NOTE]
>Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.

>[!NOTE] 
>Ihr könnt außerdem eurer Berichte nach der LAP in ein Repository schrieben und den Link in diesem Readme am Ende hinzufügen. So können die nächsten Schüler alle Berichte an einem Ort haben.

## Vor der Prüfung

Zu Beginn der Lernphase hat man oft noch viel Zeit und möchte alles ausführlich lernen. Man hat aber noch keinen Überblick und weiß nicht genau, wo man anfangen soll. Wenn du noch über einen Monat Zeit hast, kannst du dich in Ruhe einarbeiten. Sobald jedoch nur noch drei Wochen übrig sind, brauchst du einen genauen Plan. Hier ist, wie ich meine Zeit aufgeteilt habe:

- Ich habe einige Male eine Datenbank inkl. ER-Diagramm erstellt, z.B. für ein Bibliothekssystem oder ein Verleihsystem. Ein paar Daten hinzugefügt und dazu Queries inkl. Aggregation und Joins geschrieben.
- Die Website habe ich ein paar Mal erstellt. Einfach die Datenbanken dafür nehmen und CRUD (Create, Read, Update, Delete) + Login machen. So bist du bestens vorbereitet.
- Die Theorie hauptsächlich das Fragenkatalog

## Am Tag der Prüfung

### Praxis

Sowhol für den Vormittag als auch den Nachmittag, gibt es 3,5 Stunden Zeit. Generell muss man sowohl am Vormittag als auch am Nachmittag die Arbeitsschritte mitdokumentieren. Einfach und in wenigen Sätzen, mit Überschriften gegliedert

- Kurze Einleitung: dieses Dokument dient der Protokollierung der Arbeitsschritte der Übung … der LAP für Applikationsentwickler
- Benötigte Tools
- Arbeitsschritte
    - ER-Diagramm
    - Mein Code
    - etc..

Ein paar Screenshots zwischendrin kommen sehr gut an

---

## Ablauf

### Vormittag (Datenbanken)

- Am Vormittag hat man viel Zeit für die Datenbank. Wenn man in der Schule die Übungen mitgemacht und verstanden hat, dürfte dieser Teil leicht fallen.
- Zuerst bekommt man eine Problemstellung und die Aufgabe ist, dafür eine Datenbank zu erstellen.
    - Wichtig: Denke nicht zu kompliziert. Die Prüfer wissen, dass man nicht viel Zeit hat und erwarten dementsprechend nicht zu viel. Halte dich an das KISS-Prinzip (Keep It Simple, Stupid).
    - Unsere Aufgabe war eine DB für eine EinkaufslisteApp mit Listen, Kategorien, Produkten, User, Shops

---

- Die zweite Aufgabe ist, für eine vorhandene, vorbefüllte Datenbank 2-3 Abfragen zu schreiben. Maximales Wissen dafür umfasst: Richtige Joins (meistens Inner Join oder Left Join), Aggregation, Group By und Having.
- Unsere Aufgabe war ein Reservierungssystem für Tennisplätze und Tennispaddel
    - Tabelle Platz: id, description, preisProStunde
    - Tabelle Reservierung: id, reservierterPlatz, User, DatumAnfang, DatumEnde, Dauer, GesamtPreise, ExtrareservierungsId
    - Tabelle ExtraReservierung: id, produkt
    - Tabelle Produkt (Für Tennisbälle, -paddles, die extra zur Platzreservierung kommen können)

- Der Vormittag zusammengefasst: man hat 3,5 Stunden Zeit für eine Arbeit, die nicht länger 2,5 bis 3 Stunden braucht.

---

### Tipps:
> [!TIP]
> 
>- Begrenze dich nicht nur auf die Fragestellung. Überlege, ob etwas absichtlich nicht geschrieben wurde. Bei mir gab es z.B. einen Punkt dafür, dass ich die E-Mail-Adresse in >der User-Tabelle als einzigartig markiert habe, obwohl das nicht in der Fragestellung stand.
>- Es gab einen Punkt für die Indexierung einer Tabelle. Man musste einen Index für die Kategorie-Tabelle erstellen, der auf die Bezeichnung-Spalte zeigte. Wenn kein Index >gefordert wird, erstelle trotzdem irgendwo einen und dokumentiere diesen.
>- Beim Insert von Daten denke nicht ob die Daten Sinn machen. Max Mustermann, Test 1, Test 2 reichen vollkommen.
>- Du musst die Insert-Statements nicht selber schreiben. Du kannst in der Oberfläche von Workbench direkt die Daten in die Tabelle eingeben und vor dem Ausführen das Insert->Skript kopieren. Das spart viel Zeit.
>- Achte auf Datentypen und Längen. Bei Passwort z.B. VARCHAR(255). Du wirst gefragt, warum so lange? (Um vorbereitet auf alle Arten von Hashes zu sein.)

---

### Nachmittag (Website)

Für eine bereitgestellte Datenbank (das Reservierungssystem vom Vormittag) muss man eine Oberfläche mit PHP und HTML erstellen. Hier muss ich sagen, es wurde wirklich viel verlangt. Wir mussten Daten tabellarisch aus der Datenbank anzeigen und diese nach Suchbox und/oder Dropdown-Wahl filtern. Zusätzlich eine zweite Seite, um neue Reservierungen hinzuzufügen.

Sehr wichtig zu wissen ist, dass die Seite nicht perfekt sein muss. Konzentriere dich auf die Fragestellung. Bei mir blieben z.B. zwei Spalten beim Hinzufügen leer. Die Aufgabe wurde trotzdem als erfüllt bewertet, da das Einfügen an sich funktionierte.

---

Wenn man fertig ist gibt es ein Gespräch mit dem Prüfer. Das Gespräch trägt zur Verbesserung der Note bei. Wenn du etwas nicht ganz geschafft oder nicht richtig implementiert hast, kannst du erklären, wie du es sonst gemacht hättest, und dafür Punkte bekommen. Also: Konzentriere dich auf das Wesentliche und wenn du Zeit hast, kannst du Sachen verbessern.

---

### Testen

- Eine der Aufgaben am Nachmittag ist, die Oberfläche der Website zu testen und die Ergebnisse zu dokumentieren. Ich habe eine [Testprotokoll-Vorlage](https://de.parasoft.com/blog/how-to-write-test-cases-for-software-examples-tutorial/) gegoogelt und Dinge wie: Test-ID (1,2,3 ..) , erwartete Ergebnisse, tatsächliche Ergebnisse (inkl. Screenshot), Test bestanden/nicht bestanden (Ja/Nein) übernommen. Das kam sehr gut an.
- Verbringe aber nicht viel Zeit damit. Einfach das Verhalten eines Buttons testen oder eine Eingabe/Ausgabe überprüfen und fertig.

---

### Theorie:

Viele machen sich Sorgen vor dem Fachgespräch. Mir ging es dabei leichter als der Nachmittag in der Praxis

### Ablauf:

Es sind drei Prüfer. Jeder stellt 3-4 Fragen.

- Am Anfang fragen sie, was du in der Firma gemacht hast. Auf diese Frage musst du sehr gut vorbereitet sein. So viel erzählen, dass sie genug zu fragen haben, aber so wenig, dass du dich gut auskennst mit dem, was du sagst.
- Verfügbare Ressourcen: der offizielle WKO-Themenkatalog, Google, ChatGPT.
    - Ich habe mir Flashcards für die Fragen aus dem Katalog erstellt und diese überwiegend mit ChatGPT beantwortet. Flashcards erstellen geht einfach mit Canva. Ich habe die Karteien in drei Teile aufgeteilt, je ca. 100 Karteien, und jeden Tag ein bis zwei Teile beantwortet. Egal ob im Zug, bei der Arbeit oder vor dem Schlafen gehen. Ein paar Tage später fängt man an, sie auswendig zu beantworten, ohne auf die Antwort flippen zu müssen.
    - Als ich mit dem Großteil vertraut war, habe ich für die Frage "Was haben Sie in der Firma gemacht?" recherchiert. Ich hatte mit Datenbanken und einer API zu tun. Daher habe ich neben Datenbanken tief in die Themen Internet, Transferprotokolle, REST-API, SOAP etc. recherchiert.
- Der erste Prüfer hat mir Fragen zur OOP gestellt: Was ist Vererbung? Unterschied zwischen Interface und abstrakten Klassen? Wie testet man: Was ist Unit-Test, Integrationstest, White-Box und Black-Box-Test? Warum spielt Sicherheit bei White-Box eine große Rolle? (Weil der Tester Zugriff auf den Source-Code hat.)
- Der zweite Prüfer hat einiges zur Datenbank gefragt: ein allgemeines Verständnis zur Normalisierung (NF), ACID, DBMS, Fachausdrücke (Relationen, Tupel, Entität, Spalte etc.), wie werden Daten gespeichert? Dann ging es um APIs, HTTP, was macht eine REST-API aus?
- Der dritte Prüfer hat nur Fragen aus dem Katalog gestellt, er blätterte durch und stellte Fragen.

---

### Bemerkungen

- Nachdem nur ein Prüfer den Katalog geblättert hat, würde ich sagen, dass, wenn man nur die Fragen im Katalog beantwortet, man nur ein Drittel der Note bekommt. Die restlichen Punkte verteilen sich auf Hausverstand und das, womit man während der Lehre spezialisiert war. Am Ende deckt der Themenkatalog fast alle Bereiche ab. Um alle Punkte zu bekommen muss man also mehr als nur die Fragen aus dem Katalog beantworten. Für “nur” Bestanden reicht der Themenkatalog völlig aus.

Insgesamt fand ich das Fachgespräch nicht schwer und leicht zu meistern. Ich habe versucht, nicht zu viele Fachausdrücke zu verwenden und genau nur auf die Frage zu antworten. Die Prüfer lassen einem Zeit, alles zu sagen, was man will. Ich habe immer wieder gefragt: „Habe ich jetzt die Frage somit beantwortet oder soll ich weiterreden?“ und meistens war die Antwort: „Das ist genug.“

---

## Zusammenfassung:

Alles in allem lässt sich sagen, 3-4 Wochen Vorbereitung reichen.

- Für die Praxis: ein paar Mal DB, HTML und PHP durchüben und die Fehler dabei verstehen und beheben.
- Für die Theorie: den Katalog durchlernen und auf die Frage „Was haben Sie in der Firma gemacht?“ vorbereitet sein. Wenn Zeit übrig ist, ein bisschen durch die Schulunterlagen blättern und ausführlicher lesen (Firewall, Backups, Verschlüsselung, ...).

Mit ein bisschen Ehrgeiz und Fleiß schafft man es locker, und einem ausgezeichneten Erfolg steht nichts im Weg.

---

## Meine Ressourcen:

### Übungen für die Praxis:

- Erstelle eine Datenbank inkl. ER-Diagramm und ein paar Inserts. Zeig die Daten in einer Tabelle, füge neue Daten ein, lösche Daten und bearbeite sie.
- Implementiere ein Login system mit Sessions
- Zeig dem User sinnvolle Meldungen
- Verwende Exceptions um Absturtz zu vermeiden

### Beispiele:

- Fahrplan-App (Haltestelle Anfang, Ende, Passagier, Preis (Float!!), bezahlt. Z
- Einkaufsliste
- Bibliothek-Verleihsystem

---

## Dokumentation

Ein Beispiel, wie die Dokumentation im praktischen Teil aussehen könnte: [Beispiel für die Doku bei der praktischen Prüfung](https://www.notion.so/fa75eeff434042889d7f52b2532ad8fe?pvs=21)

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

(folgt noch)

---

## Sonstige Ressourcen:

- Ich habe beide Vorbereitungskurse besucht, sowohl an der LBS4 als auch am WIFI. Ich würde sagen, sie haben sich gegenseitig ergänzt. An der LBS4 ging es mehr um die Theorie und beim WIFI ging es mehr um die Praxis. Ich würde daher empfehlen, beide zu besuchen.

---

>[!NOTE] 
>Wer noch Fragen hat gerne in die Discussions posten.

>[!NOTE] 
>Wie bereits erwähnt. Wer Vorschläge zum Inhalt hat, bitte ein Issue erstellen.


Alles Gute!
