<?php
    session_start();
    require_once "../php/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BestPicture</title>
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link href="../assets/styles/footer.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: acumin-pro, sans-serif;
        position: absolute;
        margin: 0px;
    }

    section{
        padding: 100px;
        text-align: center;
    }
</style>

<body>
<header>
    <div class="wr">
        <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
        <nav>
            <a href="../index.php">Home</a>
            <?php echo ((get_signed_in_user_id()!==-1) ? '<a href="../login/abmelden.html">Abmelden</a>' : '<a href="../login/login.php">Anmelden</a>'); ?>
            <a href="../upload/index.php">Upload</a>
            <a href="../profil/index.php"> <img class="user" src="../assets/images/user.png" alt="user">
            </a>
        </nav>
    </div>
</header>
<section>
    <h1 class="adsimple-121400314">Impressum</h1>
    <p class="adsimple-121400314">Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63
        Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.</p>
    <p class="adsimple-121400314">
    <p>NAME TODO</p>
    <p class="adsimple-121400314">Wien, <br/>Österreich</p>
    <p class="adsimple-121400314">
        <strong>E-Mail:</strong> <a decorated="" href="mailto:TODO">TODO</a>
    </p>
    <p style="margin-top:15px">Quelle: Erstellt mit dem Impressum Generator von <a decorated=""
                                                                                   href="https://www.adsimple.at/webdesign/"
                                                                                   title="AdSimple® Online Marketing und Webdesign"
                                                                                   rel="follow noopener noreferrer"
                                                                                   target="_blank">AdSimple®
        Webdesign</a>
        in Kooperation mit <a decorated="" href="https://www.aboutbusiness.at/" target="_blank"
                              rel="follow noopener noreferrer">aboutbusiness.at</a>
    </p>
    <h2 id="eu-streitschlichtung" class="adsimple-121400314">EU-Streitschlichtung</h2>
    <p>Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten wir Sie über
        die
        Online-Streitbeilegungsplattform (OS-Plattform) informieren.<br/>
        Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europäischen
        Kommission
        unter <a decorated="" class="adsimple-121400314"
                 href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE" target="_blank"
                 rel="noopener noreferrer">http://ec.europa.eu/odr?tid=121400314</a> zu richten. Die dafür notwendigen
        Kontaktdaten finden Sie oberhalb in unserem Impressum.</p>
    <p>Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an
        Streitbeilegungsverfahren
        vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
    <h2 id="haftung-fuer-inhalte-dieser-webseite" class="adsimple-121400314">Haftung für Inhalte dieser Webseite</h2>
    <p>Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle Informationen
        bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Webseite
        übernehmen,
        speziell für jene die seitens Dritter bereitgestellt wurden.</p>
    <p>Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitten wir Sie uns umgehend zu kontaktieren,
        Sie
        finden die Kontaktdaten im Impressum.</p>
    <h2 id="haftung-links-webseite" class="adsimple-121400314">Haftung für Links auf dieser Webseite</h2>
    <p>Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind. Haftung für
        verlinkte Websites besteht laut <a decorated="" class="adsimple-121400314"
                                           href="https://www.ris.bka.gv.at/Dokument.wxe?Abfrage=Bundesnormen&Dokumentnummer=NOR40025813&tid=121400314"
                                           target="_blank" rel="noopener noreferrer">§ 17 ECG</a> für uns nicht, da wir
        keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht
        aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten bekannt werden.</p>
    <p>Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitten wir Sie uns zu kontaktieren, Sie finden die
        Kontaktdaten im Impressum.</p>
    <h1 class="adsimple-121400314">Datenschutzerklärung</h1>
    <h2 id="datenschutz" class="adsimple-121400314">Datenschutz</h2>
    <p>Wir haben diese Datenschutzerklärung (Fassung 01.01.1970-121400314) verfasst, um Ihnen gemäß der Vorgaben der <a
            decorated="" class="adsimple-121400314"
            href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121400314" target="_blank"
            rel="noopener noreferrer">Datenschutz-Grundverordnung (EU) 2016/679</a> zu erklären, welche Informationen
        wir
        sammeln, wie wir Daten verwenden und welche Entscheidungsmöglichkeiten Sie als Besucher dieser Webseite haben.
    </p>
    <p>Leider liegt es in der Natur der Sache, dass diese Erklärungen sehr technisch klingen, wir haben uns bei der
        Erstellung jedoch bemüht die wichtigsten Dinge so einfach und klar wie möglich zu beschreiben.</p>
    <h2 id="automatische-datenspeicherung" class="adsimple-121400314">Automatische Datenspeicherung</h2>
    <p>Wenn Sie heutzutage Webseiten besuchen, werden gewisse Informationen automatisch erstellt und gespeichert, so
        auch
        auf dieser Webseite.</p>
    <p>Wenn Sie unsere Webseite so wie jetzt gerade besuchen, speichert unser Webserver (Computer auf dem diese Webseite
        gespeichert ist) automatisch Daten wie</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">die Adresse (URL) der aufgerufenen Webseite</li>
        <li class="adsimple-121400314">Browser und Browserversion</li>
        <li class="adsimple-121400314">das verwendete Betriebssystem</li>
        <li class="adsimple-121400314">die Adresse (URL) der zuvor besuchten Seite (Referrer URL)</li>
        <li class="adsimple-121400314">den Hostname und die IP-Adresse des Geräts von welchem aus zugegriffen wird</li>
        <li class="adsimple-121400314">Datum und Uhrzeit</li>
    </ul>
    <p>in Dateien (Webserver-Logfiles).</p>
    <p>In der Regel werden Webserver-Logfiles zwei Wochen gespeichert und danach automatisch gelöscht. Wir geben diese
        Daten
        nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim Vorliegen von rechtswidrigem Verhalten
        eingesehen werden.</p>
    <h2 id="cookies" class="adsimple-121400314">Cookies</h2>
    <p>Unsere Webseite verwendet HTTP-Cookies, um nutzerspezifische Daten zu speichern.<br/>
        Im Folgenden erklären wir, was Cookies sind und warum Sie genutzt werden, damit Sie die folgende
        Datenschutzerklärung besser verstehen.</p>
    <h3 class="adsimple-121400314">Was genau sind Cookies?</h3>
    <p>Immer wenn Sie durch das Internet surfen, verwenden Sie einen Browser. Bekannte Browser sind beispielsweise
        Chrome,
        Safari, Firefox, Internet Explorer und Microsoft Edge. Die meisten Webseiten speichern kleine Text-Dateien in
        Ihrem
        Browser. Diese Dateien nennt man Cookies.</p>
    <p>Eines ist nicht von der Hand zu weisen: Cookies sind echt nützliche Helferlein. Fast alle Webseiten verwenden
        Cookies. Genauer gesprochen sind es HTTP-Cookies, da es auch noch andere Cookies für andere Anwendungsbereiche
        gibt.
        HTTP-Cookies sind kleine Dateien, die von unserer Webseite auf Ihrem Computer gespeichert werden. Diese
        Cookie-Dateien werden automatisch im Cookie-Ordner, quasi dem “Hirn” Ihres Browsers, untergebracht. Ein Cookie
        besteht aus einem Namen und einem Wert. Bei der Definition eines Cookies müssen zusätzlich ein oder mehrere
        Attribute angegeben werden.</p>
    <p>Cookies speichern gewisse Nutzerdaten von Ihnen, wie beispielsweise Sprache oder persönliche Seiteneinstellungen.
        Wenn Sie unsere Seite wieder aufrufen, übermittelt Ihr Browser die „userbezogenen“ Informationen an unsere Seite
        zurück. Dank der Cookies weiß unsere Webseite, wer Sie sind und bietet Ihnen die Einstellung, die Sie gewohnt
        sind.
        In einigen Browsern hat jedes Cookie eine eigene Datei, in anderen wie beispielsweise Firefox sind alle Cookies
        in
        einer einzigen Datei gespeichert.</p>
    <p>Es gibt sowohl Erstanbieter Cookies als auch Drittanbieter-Cookies. Erstanbieter-Cookies werden direkt von
        unserer
        Seite erstellt, Drittanbieter-Cookies werden von Partner-Webseiten (z.B. Google Analytics) erstellt. Jedes
        Cookie
        ist individuell zu bewerten, da jedes Cookie andere Daten speichert. Auch die Ablaufzeit eines Cookies variiert
        von
        ein paar Minuten bis hin zu ein paar Jahren. Cookies sind keine Software-Programme und enthalten keine Viren,
        Trojaner oder andere „Schädlinge“. Cookies können auch nicht auf Informationen Ihres PCs zugreifen.</p>
    <p>So können zum Beispiel Cookie-Daten aussehen:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> _ga<br/>
        <strong class="adsimple-121400314">Wert:</strong> GA1.2.1326744211.152121400314-9<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Unterscheidung der Webseitenbesucher<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>Diese Mindestgrößen sollte ein Browser unterstützen können:</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Mindestens 4096 Bytes pro Cookie</li>
        <li class="adsimple-121400314">Mindestens 50 Cookies pro Domain</li>
        <li class="adsimple-121400314">Mindestens 3000 Cookies insgesamt</li>
    </ul>
    <h3 class="adsimple-121400314">Welche Arten von Cookies gibt es?</h3>
    <p>Die Frage welche Cookies wir im Speziellen verwenden, hängt von den verwendeten Diensten ab und wird in den
        folgenden
        Abschnitten der Datenschutzerklärung geklärt. An dieser Stelle möchten wir kurz auf die verschiedenen Arten von
        HTTP-Cookies eingehen.</p>
    <p>Man kann 4 Arten von Cookies unterscheiden:</p>
    <p>
        <strong class="adsimple-121400314">Unerlässliche Cookies<br/>
        </strong>Diese Cookies sind nötig, um grundlegende Funktionen der Webseite sicherzustellen. Zum Beispiel braucht
        es
        diese Cookies, wenn ein User ein Produkt in den Warenkorb legt, dann auf anderen Seiten weitersurft und später
        erst
        zur Kasse geht. Durch diese Cookies wird der Warenkorb nicht gelöscht, selbst wenn der User sein Browserfenster
        schließt.</p>
    <p>
        <strong class="adsimple-121400314">Zweckmäßige Cookies<br/>
        </strong>Diese Cookies sammeln Infos über das Userverhalten und ob der User etwaige Fehlermeldungen bekommt.
        Zudem
        werden mithilfe dieser Cookies auch die Ladezeit und das Verhalten der Webseite bei verschiedenen Browsern
        gemessen.
    </p>
    <p>
        <strong class="adsimple-121400314">Zielorientierte Cookies<br/>
        </strong>Diese Cookies sorgen für eine bessere Nutzerfreundlichkeit. Beispielsweise werden eingegebene
        Standorte,
        Schriftgrößen oder Formulardaten gespeichert.</p>
    <p>
        <strong class="adsimple-121400314">Werbe-Cookies<br/>
        </strong>Diese Cookies werden auch Targeting-Cookies genannt. Sie dienen dazu dem User individuell angepasste
        Werbung zu liefern. Das kann sehr praktisch, aber auch sehr nervig sein.</p>
    <p>Üblicherweise werden Sie beim erstmaligen Besuch einer Webseite gefragt, welche dieser Cookiearten Sie zulassen
        möchten. Und natürlich wird diese Entscheidung auch in einem Cookie gespeichert.</p>
    <h3 class="adsimple-121400314">Wie kann ich Cookies löschen?</h3>
    <p>Wie und ob Sie Cookies verwenden wollen, entscheiden Sie selbst. Unabhängig von welchem Service oder welcher
        Webseite
        die Cookies stammen, haben Sie immer die Möglichkeit Cookies zu löschen, zu deaktivieren oder nur teilweise
        zuzulassen. Zum Beispiel können Sie Cookies von Drittanbietern blockieren, aber alle anderen Cookies
        zulassen.</p>
    <p>Wenn Sie feststellen möchten, welche Cookies in Ihrem Browser gespeichert wurden, wenn Sie Cookie-Einstellungen
        ändern oder löschen wollen, können Sie dies in Ihren Browser-Einstellungen finden:</p>
    <p>
        <a decorated="" class="adsimple-121400314" href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer
        informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie
        das
        Cookie erlauben oder nicht. Die Vorgangsweise ist je nach Browser verschieden. Am besten Sie suchen die
        Anleitung in
        Google mit dem Suchbegriff “Cookies löschen Chrome” oder “Cookies deaktivieren Chrome” im Falle eines Chrome
        Browsers.</p>
    <h3 class="adsimple-121400314">Wie sieht es mit meinem Datenschutz aus?</h3>
    <p>Seit 2009 gibt es die sogenannten „Cookie-Richtlinien“. Darin ist festgehalten, dass das Speichern von Cookies
        eine
        Einwilligung von Ihnen verlangt. Innerhalb der EU-Länder gibt es allerdings noch sehr unterschiedliche
        Reaktionen
        auf diese Richtlinien. In Österreich erfolgte aber die Umsetzung dieser Richtlinie in § 96 Abs. 3 des
        Telekommunikationsgesetzes (TKG).</p>
    <p>Wenn Sie mehr über Cookies wissen möchten und technische Dokumentationen nicht scheuen, empfehlen wir <a
            decorated=""
            class="adsimple-121400314"
            href="https://tools.ietf.org/html/rfc6265"
            target="_blank"
            rel="nofollow noopener noreferrer">https://tools.ietf.org/html/rfc6265</a>,
        dem Request for Comments der Internet Engineering Task Force (IETF) namens “HTTP State Management Mechanism”.
    </p>
    <h2 id="speicherung-persoenlicher-daten" class="adsimple-121400314">Speicherung persönlicher Daten</h2>
    <p>Persönliche Daten, die Sie uns auf dieser Website elektronisch übermitteln, wie zum Beispiel Name,
        E-Mail-Adresse,
        Adresse oder andere persönlichen Angaben im Rahmen der Übermittlung eines Formulars oder Kommentaren im Blog,
        werden
        von uns gemeinsam mit dem Zeitpunkt und der IP-Adresse nur zum jeweils angegebenen Zweck verwendet, sicher
        verwahrt
        und nicht an Dritte weitergegeben.</p>
    <p>Wir nutzen Ihre persönlichen Daten somit nur für die Kommunikation mit jenen Besuchern, die Kontakt ausdrücklich
        wünschen und für die Abwicklung der auf dieser Webseite angebotenen Dienstleistungen und Produkte. Wir geben
        Ihre
        persönlichen Daten ohne Zustimmung nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim
        Vorliegen
        von rechtswidrigem Verhalten eingesehen werden.</p>
    <p>Wenn Sie uns persönliche Daten per E-Mail schicken – somit abseits dieser Webseite – können wir keine sichere
        Übertragung und den Schutz Ihrer Daten garantieren. Wir empfehlen Ihnen, vertrauliche Daten niemals
        unverschlüsselt
        per E-Mail zu übermitteln.</p>
    <h2 id="rechte-dsgvo" class="adsimple-121400314">Rechte laut Datenschutzgrundverordnung</h2>
    <p>Ihnen stehen laut den Bestimmungen der DSGVO und des österreichischen <a decorated="" class="adsimple-121400314"
                                                                                href="https://www.ris.bka.gv.at/GeltendeFassung.wxe?Abfrage=Bundesnormen&Gesetzesnummer=10001597&tid=121400314"
                                                                                target="_blank"
                                                                                rel="noopener noreferrer">Datenschutzgesetzes
        (DSG)</a> grundsätzlich die folgende Rechte zu:</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Recht auf Berichtigung (Artikel 16 DSGVO)</li>
        <li class="adsimple-121400314">Recht auf Löschung („Recht auf Vergessenwerden“) (Artikel 17 DSGVO)</li>
        <li class="adsimple-121400314">Recht auf Einschränkung der Verarbeitung (Artikel 18 DSGVO)</li>
        <li class="adsimple-121400314">Recht auf Benachrichtigung – Mitteilungspflicht im Zusammenhang mit der
            Berichtigung
            oder Löschung personenbezogener Daten oder der Einschränkung der Verarbeitung (Artikel 19 DSGVO)
        </li>
        <li class="adsimple-121400314">Recht auf Datenübertragbarkeit (Artikel 20 DSGVO)</li>
        <li class="adsimple-121400314">Widerspruchsrecht (Artikel 21 DSGVO)</li>
        <li class="adsimple-121400314">Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung —
            einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden (Artikel 22 DSGVO)
        </li>
    </ul>
    <p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre
        datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie sich bei der
        Aufsichtsbehörde
        beschweren, welche in Österreich die Datenschutzbehörde ist, deren Webseite Sie unter <a decorated=""
                                                                                                 class="adsimple-121400314"
                                                                                                 href="https://www.dsb.gv.at/?tid=121400314">https://www.dsb.gv.at/</a>
        finden.</p>
    <h2 id="auswertung-des-besucherverhaltens" class="adsimple-121400314">Auswertung des Besucherverhaltens</h2>
    <p>In der folgenden Datenschutzerklärung informieren wir Sie darüber, ob und wie wir Daten Ihres Besuchs dieser
        Website
        auswerten. Die Auswertung der gesammelten Daten erfolgt in der Regel anonym und wir können von Ihrem Verhalten
        auf
        dieser Website nicht auf Ihre Person schließen.</p>
    <p>Mehr über Möglichkeiten dieser Auswertung der Besuchsdaten zu widersprechen erfahren Sie in der folgenden
        Datenschutzerklärung.</p>
    <h2 id="tls-verschluesselung-https" class="adsimple-121400314">TLS-Verschlüsselung mit https</h2>
    <p>Wir verwenden https um Daten abhörsicher im Internet zu übertragen (Datenschutz durch Technikgestaltung <a
            decorated="" class="adsimple-121400314"
            href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&from=DE&tid=121400314"
            target="_blank" rel="noopener noreferrer">Artikel 25 Absatz 1 DSGVO</a>). Durch den Einsatz von TLS
        (Transport
        Layer Security), einem Verschlüsselungsprotokoll zur sicheren Datenübertragung im Internet können wir den Schutz
        vertraulicher Daten sicherstellen. Sie erkennen die Benutzung dieser Absicherung der Datenübertragung am kleinen
        Schlosssymbol links oben im Browser und der Verwendung des Schemas https (anstatt http) als Teil unserer
        Internetadresse.</p>
    <h2 id="google-analytics-datenschutzerklaerung" class="adsimple-121400314">Google Analytics
        Datenschutzerklärung</h2>
    <p>Wir verwenden auf unserer Website das Analyse-Tracking Tool Google Analytics (GA) des amerikanischen Unternehmens
        Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street
        Dublin
        4, Irland) für alle Google-Dienste verantwortlich. Google Analytics sammelt Daten über Ihre Handlungen auf
        unserer
        Website. Wenn Sie beispielsweise einen Link anklicken, wird diese Aktion in einem Cookie gespeichert und an
        Google
        Analytics versandt. Mithilfe der Berichte, die wir von Google Analytics erhalten, können wir unsere Website und
        unser Service besser an Ihre Wünsche anpassen. Im Folgenden gehen wir näher auf das Tracking Tool ein und
        informieren Sie vor allem darüber, welche Daten gespeichert werden und wie Sie das verhindern können.</p>
    <h3 class="adsimple-121400314">Was ist Google Analytics?</h3>
    <p>Google Analytics ist ein Trackingtool, das der Datenverkehrsanalyse unserer Website dient. Damit Google Analytics
        funktioniert, wird ein Tracking-Code in den Code unserer Website eingebaut. Wenn Sie unsere Website besuchen,
        zeichnet dieser Code verschiedene Handlungen auf, die Sie auf unserer Website ausführen. Sobald Sie unsere
        Website
        verlassen, werden diese Daten an die Google-Analytics-Server gesendet und dort gespeichert.</p>
    <p>Google verarbeitet die Daten und wir bekommen Berichte über Ihr Userverhalten. Dabei kann es sich unter anderem
        um
        folgende Berichte handeln:</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Zielgruppenberichte: Über Zielgruppenberichte lernen wir unsere User besser
            kennen
            und wissen genauer, wer sich für unser Service interessiert.
        </li>
        <li class="adsimple-121400314">Anzeigeberichte: Durch Anzeigeberichte können wir unsere Onlinewerbung leichter
            analysieren und verbessern.
        </li>
        <li class="adsimple-121400314">Akquisitionsberichte: Akquisitionsberichte geben uns hilfreiche Informationen
            darüber, wie wir mehr Menschen für unser Service begeistern können.
        </li>
        <li class="adsimple-121400314">Verhaltensberichte: Hier erfahren wir, wie Sie mit unserer Website interagieren.
            Wir
            können nachvollziehen welchen Weg Sie auf unserer Seite zurücklegen und welche Links Sie anklicken.
        </li>
        <li class="adsimple-121400314">Conversionsberichte: Conversion nennt man einen Vorgang, bei dem Sie aufgrund
            einer
            Marketing-Botschaft eine gewünschte Handlung ausführen. Zum Beispiel, wenn Sie von einem reinen
            Websitebesucher
            zu einem Käufer oder Newsletter-Abonnent werden. Mithilfe dieser Berichte erfahren wir mehr darüber, wie
            unsere
            Marketing-Maßnahmen bei Ihnen ankommen. So wollen wir unsere Conversionrate steigern.
        </li>
        <li class="adsimple-121400314">Echtzeitberichte: Hier erfahren wir immer sofort, was gerade auf unserer Website
            passiert. Zum Beispiel sehen wir wie viele User gerade diesen Text lesen.
        </li>
    </ul>
    <h3 class="adsimple-121400314">Warum verwenden wir Google Analytics auf unserer Webseite?</h3>
    <p>Unser Ziel mit dieser Website ist klar: Wir wollen Ihnen das bestmögliche Service bieten. Die Statistiken und
        Daten
        von Google Analytics helfen uns dieses Ziel zu erreichen.</p>
    <p>Die statistisch ausgewerteten Daten zeigen uns ein klares Bild von den Stärken und Schwächen unserer Website.
        Einerseits können wir unsere Seite so optimieren, dass sie von interessierten Menschen auf Google leichter
        gefunden
        wird. Andererseits helfen uns die Daten, Sie als Besucher besser zu verstehen. Wir wissen somit sehr genau, was
        wir
        an unserer Website verbessern müssen, um Ihnen das bestmögliche Service zu bieten. Die Daten dienen uns auch,
        unsere
        Werbe- und Marketing-Maßnahmen individueller und kostengünstiger durchzuführen. Schließlich macht es nur Sinn,
        unsere Produkte und Dienstleistungen Menschen zu zeigen, die sich dafür interessieren.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von Google Analytics gespeichert?</h3>
    <p>Google Analytics erstellt mithilfe eines Tracking-Codes eine zufällige, eindeutige ID, die mit Ihrem
        Browser-Cookie
        verbunden ist. So erkennt Sie Google Analytics als neuen User. Wenn Sie das nächste Mal unsere Seite besuchen,
        werden Sie als „wiederkehrender“ User erkannt. Alle gesammelten Daten werden gemeinsam mit dieser User-ID
        gespeichert. So ist es überhaupt erst möglich pseudonyme Userprofile auszuwerten.</p>
    <p>Durch Kennzeichnungen wie Cookies und App-Instanz-IDs werden Ihre Interaktionen auf unserer Website gemessen.
        Interaktionen sind alle Arten von Handlungen, die Sie auf unserer Website ausführen. Wenn Sie auch andere
        Google-Systeme (wie z.B. ein Google-Konto) nützen, können über Google Analytics generierte Daten mit
        Drittanbieter-Cookies verknüpft werden. Google gibt keine Google Analytics-Daten weiter, außer wir als
        Websitebetreiber genehmigen das. Zu Ausnahmen kann es kommen, wenn es gesetzlich erforderlich ist.</p>
    <p>Folgende Cookies werden von Google Analytics verwendet:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> _ga<br/>
        <strong class="adsimple-121400314">Wert: </strong>2.1326744211.152121400314-5<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Standardmäßig verwendet analytics.js das Cookie
        _ga,
        um die User-ID zu speichern. Grundsätzlich dient es zur Unterscheidung der Webseitenbesucher.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> _gid<br/>
        <strong class="adsimple-121400314">Wert: </strong>2.1687193234.152121400314-1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie dient auch zur Unterscheidung der
        Webseitenbesucher<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 24 Stunden</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> _gat_gtag_UA_
        <br/>
            <strong class="adsimple-121400314">Wert:</strong> 1<br/>
            <strong class="adsimple-121400314">Verwendungszweck:</strong> Wird zum Senken der Anforderungsrate
            verwendet.
            Wenn Google Analytics über den Google Tag Manager bereitgestellt wird, erhält dieser Cookie den Namen
            _dc_gtm_
            .<br/>
                <strong class="adsimple-121400314">Ablaufdatum: </strong>nach 1 Minute
    </p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> AMP_TOKEN<br/>
        <strong class="adsimple-121400314">Wert:</strong> keine Angaben<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie hat einen Token, mit dem eine User ID
        vom
        AMP-Client-ID-Dienst abgerufen werden kann. Andere mögliche Werte weisen auf eine Abmeldung, eine Anfrage oder
        einen
        Fehler hin.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 30 Sekunden bis zu einem Jahr</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utma<br/>
        <strong class="adsimple-121400314">Wert: </strong>1564498958.1564498958.1564498958.1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Mit diesem Cookie kann man Ihr Verhalten auf der
        Website verfolgen und die Leistung messen. Das Cookie wird jedes Mal aktualisiert, wenn Informationen an Google
        Analytics gesendet werden.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utmt<br/>
        <strong class="adsimple-121400314">Wert:</strong> 1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie wird wie _gat_gtag_UA_
        zum Drosseln der Anforderungsrate verwendet.<br/>
            <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 10 Minuten
    </p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utmb<br/>
        <strong class="adsimple-121400314">Wert: </strong>3.10.1564498958<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um neue Sitzungen zu
        bestimmen. Es wird jedes Mal aktualisiert, wenn neue Daten bzw. Infos an Google Analytics gesendet werden.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 30 Minuten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utmc<br/>
        <strong class="adsimple-121400314">Wert:</strong> 167421564<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um neue Sitzungen
        für
        wiederkehrende Besucher festzulegen. Dabei handelt es sich um ein Session-Cookie und wird nur solange
        gespeichert,
        bis Sie den Browser wieder schließen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> Nach Schließung des Browsers</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utmz<br/>
        <strong class="adsimple-121400314">Wert:</strong> m|utmccn=(referral)|utmcmd=referral|utmcct=/<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie wird verwendet, um die Quelle des
        Besucheraufkommens auf unserer Website zu identifizieren. Das heißt, das Cookie speichert, von wo Sie auf unsere
        Website gekommen sind. Das kann eine andere Seite bzw. eine Werbeschaltung gewesen sein.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 6 Monaten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __utmv<br/>
        <strong class="adsimple-121400314">Wert:</strong> keine Angabe<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie wird verwendet, um benutzerdefinierte
        Userdaten zu speichern. Es wird immer aktualisiert, wenn Informationen an Google Analytics gesendet werden.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Anmerkung:</strong> Diese Aufzählung kann keinen Anspruch auf Vollständigkeit
        erheben, da Google die Wahl ihrer Cookies immer wieder auch verändert.</p>
    <p>Hier zeigen wir Ihnen einen Überblick über die wichtigsten Daten, die mit Google Analytics erhoben werden:</p>
    <p>
        <strong class="adsimple-121400314">Heatmaps:</strong> Google legt sogenannte Heatmaps an. Über Heatmaps sieht
        man
        genau jene Bereiche, die Sie anklicken. So bekommen wir Informationen, wo Sie auf unserer Seite „unterwegs“
        sind.
    </p>
    <p>
        <strong class="adsimple-121400314">Sitzungsdauer:</strong> Als Sitzungsdauer bezeichnet Google die Zeit, die Sie
        auf
        unserer Seite verbringen, ohne die Seite zu verlassen. Wenn Sie 20 Minuten inaktiv waren, endet die Sitzung
        automatisch.</p>
    <p>
        <strong class="adsimple-121400314">Absprungrate</strong> (engl. Bouncerate): Von einem Absprung ist die Rede,
        wenn
        Sie auf unserer Website nur eine Seite ansehen und dann unsere Website wieder verlassen.</p>
    <p>
        <strong class="adsimple-121400314">Kontoerstellung:</strong> Wenn Sie auf unserer Website ein Konto erstellen
        bzw.
        eine Bestellung machen, erhebt Google Analytics diese Daten.</p>
    <p>
        <strong class="adsimple-121400314">IP-Adresse:</strong> Die IP-Adresse wird nur in gekürzter Form dargestellt,
        damit
        keine eindeutige Zuordnung möglich ist.</p>
    <p>
        <strong class="adsimple-121400314">Standort:</strong> Über die IP-Adresse kann das Land und Ihr ungefährer
        Standort
        bestimmt werden. Diesen Vorgang bezeichnet man auch als IP- Standortbestimmung.</p>
    <p>
        <strong class="adsimple-121400314">Technische Informationen:</strong> Zu den technischen Informationen zählen
        unter
        anderem Ihr Browsertyp, Ihr Internetanbieter oder Ihre Bildschirmauflösung.</p>
    <p>
        <strong class="adsimple-121400314">Herkunftsquelle:</strong> Google Analytics beziehungsweise uns interessiert
        natürlich auch über welche Website oder welche Werbung Sie auf unsere Seite gekommen sind.</p>
    <p>Weitere Daten sind Kontaktdaten, etwaige Bewertungen, das Abspielen von Medien (z.B., wenn Sie ein Video über
        unsere
        Seite abspielen), das Teilen von Inhalten über Social Media oder das Hinzufügen zu Ihren Favoriten. Die
        Aufzählung
        hat keinen Vollständigkeitsanspruch und dient nur zu einer allgemeinen Orientierung der Datenspeicherung durch
        Google Analytics.</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Google hat Ihre Server auf der ganzen Welt verteilt. Die meisten Server befinden sich in Amerika und folglich
        werden
        Ihre Daten meist auf amerikanischen Servern gespeichert. Hier können Sie genau nachlesen wo sich die
        Google-Rechenzentren befinden: <a decorated="" class="adsimple-121400314"
                                          href="https://www.google.com/about/datacenters/inside/locations/?hl=de"
                                          target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a>
    </p>
    <p>Ihre Daten werden auf verschiedenen physischen Datenträgern verteilt. Das hat den Vorteil, dass die Daten
        schneller
        abrufbar sind und vor Manipulation besser geschützt sind. In jedem Google-Rechenzentrum gibt es entsprechende
        Notfallprogramme für Ihre Daten. Wenn beispielsweise die Hardware bei Google ausfällt oder Naturkatastrophen
        Server
        lahmlegen, bleibt das Risiko einer Dienstunterbrechung bei Google dennoch gering.</p>
    <p>Standardisiert ist bei Google Analytics eine Aufbewahrungsdauer Ihrer Userdaten von 26 Monaten eingestellt. Dann
        werden Ihre Userdaten gelöscht. Allerdings haben wir die Möglichkeit, die Aufbewahrungsdauer von Nutzdaten
        selbst zu
        wählen. Dafür stehen uns fünf Varianten zur Verfügung:</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Löschung nach 14 Monaten</li>
        <li class="adsimple-121400314">Löschung nach 26 Monaten</li>
        <li class="adsimple-121400314">Löschung nach 38 Monaten</li>
        <li class="adsimple-121400314">Löschung nach 50 Monaten</li>
        <li class="adsimple-121400314">Keine automatische Löschung</li>
    </ul>
    <p>Wenn der festgelegte Zeitraum abgelaufen ist, werden einmal im Monat die Daten gelöscht. Diese Aufbewahrungsdauer
        gilt für Ihre Daten, die mit Cookies, Usererkennung und Werbe-IDs (z.B. Cookies der DoubleClick-Domain)
        verknüpft
        sind. Berichtergebnisse basieren auf aggregierten Daten und werden unabhängig von Nutzerdaten gespeichert.
        Aggregierte Daten sind eine Zusammenschmelzung von Einzeldaten zu einer größeren Einheit.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Nach dem Datenschutzrecht der Europäischen Union haben Sie das Recht, Auskunft über Ihre Daten zu erhalten, sie
        zu
        aktualisieren, zu löschen oder einzuschränken. Mithilfe des Browser-Add-ons zur Deaktivierung von Google
        Analytics-JavaScript (ga.js, analytics.js, dc.js) verhindern Sie, dass Google Analytics Ihre Daten verwendet.
        Das
        Browser-Add-on können Sie unter <a decorated="" class="adsimple-121400314"
                                           href="https://tools.google.com/dlpage/gaoptout?hl=de" target="_blank"
                                           rel="noopener noreferrer">https://tools.google.com/dlpage/gaoptout?hl=de</a>
        runterladen und installieren. Beachten Sie bitte, dass durch dieses Add-on nur die Datenerhebung durch Google
        Analytics deaktiviert wird.</p>
    <p>Falls Sie grundsätzlich Cookies (unabhängig von Google Analytics) deaktivieren, löschen oder verwalten wollen,
        gibt
        es für jeden Browser eine eigene Anleitung:</p>
    <p>
        <a decorated="" class="adsimple-121400314" href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Google Analytics ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere
        Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a decorated=""
                                                                                                  class="adsimple-121400314"
                                                                                                  href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI"
                                                                                                  target="_blank"
                                                                                                  rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&tid=121400314</a>.
        Wir hoffen wir konnten Ihnen die wichtigsten Informationen rund um die Datenverarbeitung von Google Analytics
        näherbringen. Wenn Sie mehr über den Tracking-Dienst erfahren wollen, empfehlen wir diese beiden Links: <a
                decorated="" class="adsimple-121400314" href="http://www.google.com/analytics/terms/de.html"
                target="_blank"
                rel="noopener noreferrer">http://www.google.com/analytics/terms/de.html</a> und <a decorated=""
                                                                                                   class="adsimple-121400314"
                                                                                                   href="https://support.google.com/analytics/answer/6004245?hl=de"
                                                                                                   target="_blank"
                                                                                                   rel="noopener noreferrer">https://support.google.com/analytics/answer/6004245?hl=de</a>.
    </p>
    <h2 id="eingebettete-social-media-elemente-datenschutzerklaerung" class="adsimple-121400314">Eingebettete Social
        Media
        Elemente Datenschutzerklärung</h2>
    <p>Wir binden auf unserer Webseite Elemente von Social Media Diensten ein um Bilder, Videos und Texte
        anzuzeigen.<br/>
        Durch den Besuch von Seiten die diese Elemente darstellen, werden Daten von Ihrem Browser zum jeweiligen Social
        Media Dienst übertragen und dort gespeichert. Wir haben keinen Zugriff auf diese Daten.<br/>
        Die folgenden Links führen Sie zu den Seiten der jeweiligen Social Media Dienste wo erklärt wird, wie diese mit
        Ihren Daten umgehen:</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Instagram-Datenschutzrichtlinie: <a decorated="" class="adsimple-121400314"
                                                                           href="https://help.instagram.com/519522125107875?tid=121400314"
                                                                           target="_blank" rel="noopener noreferrer">https://help.instagram.com/519522125107875</a>
        </li>
        <li class="adsimple-121400314">Für YouTube gilt die Google Datenschutzerklärung: <a decorated=""
                                                                                            class="adsimple-121400314"
                                                                                            href="https://policies.google.com/privacy?hl=de&tid=121400314"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer">https://policies.google.com/privacy?hl=de</a>
        </li>
        <li class="adsimple-121400314">Facebook-Datenrichtline: <a decorated="" class="adsimple-121400314"
                                                                   href="https://www.facebook.com/about/privacy?tid=121400314"
                                                                   target="_blank" rel="noopener noreferrer">https://www.facebook.com/about/privacy</a>
        </li>
        <li class="adsimple-121400314">Twitter Datenschutzrichtlinie: <a decorated="" class="adsimple-121400314"
                                                                         href="https://twitter.com/de/privacy?tid=121400314"
                                                                         target="_blank" rel="noopener noreferrer">https://twitter.com/de/privacy</a>
        </li>
    </ul>
    <h2 id="gravatar-datenschutzerklaerung" class="adsimple-121400314">Gravatar Datenschutzerklärung</h2>
    <p>Wir haben auf unserer Website das Gravatar-Plug-in der Firma Automattic Inc. (60 29th Street #343, San Francisco,
        CA
        94110, USA) eingebunden. Gravatar ist unter anderem bei allen WordPress-Websites automatisch aktiviert. Die
        Funktion
        ermöglicht, Userbilder (Avatars) bei veröffentlichten Beiträgen oder Kommentaren anzuzeigen, sofern die
        entsprechende E-Mail-Adresse bei <a decorated="" class="adsimple-121400314"
                                            href="https://de.gravatar.com/?tid=121400314" target="_blank"
                                            rel="follow noopener noreferrer">www.gravatar.com</a> registriert ist.</p>
    <p>Durch diese Funktion werden Daten an die Firma Gravatar bzw. Automattic Inc. versandt, gespeichert und dort
        verarbeitet. In dieser Datenschutzerklärung wollen wir Sie informieren, um welche Daten es sich handelt, wie das
        Netzwerk diese Daten verwendet und wie Sie die Datenspeicherung verwalten bzw. unterbinden können.</p>
    <h3 class="adsimple-121400314">Was ist Gravatar?</h3>
    <p>Gravatar steht grundsätzlich für „Globally Recognized Avatar“ und damit ist ein global verfügbarer Avatar (ein
        Benutzerbild) gemeint, der mit der E-Mail-Adresse verbunden ist. Das Unternehmen Gravatar ist der weltweit
        führende
        Dienstleister für dieses Service. Sobald ein User auf einer Website die E-Mail-Adresse angibt, die auch bei der
        Firma Gravatar unter <a decorated="" class="adsimple-121400314" href="https://de.gravatar.com/?tid=121400314"
                                target="_blank" rel="follow noopener noreferrer">www.gravatar.com</a> registriert ist,
        wird
        automatisch ein zuvor hinterlegtes Bild gemeinsam mit einem veröffentlichten Beitrag oder Kommentar angezeigt.
    </p>
    <h3 class="adsimple-121400314">Warum verwenden wir Gravatar auf unserer Webseite?</h3>
    <p>Es wird oft über die Anonymität im Internet gesprochen. Durch einen Avatar bekommen User ein Gesicht zu den
        kommentierenden Personen. Zudem wird man grundsätzlich im Netz leichter erkannt und kann sich so einen gewissen
        Bekanntheitsgrad aufbauen. Viele User genießen die Vorzüge eines solchen Benutzerbildes und wollen auch im Netz
        persönlich und authentisch auftreten. Wir wollen Ihnen selbstverständlich die Möglichkeit bieten, dass Sie Ihren
        Gravatar auch auf unserer Website anzeigen können. Zudem sehen auch wir gerne Gesichter zu unseren
        kommentierenden
        Usern. Mit der aktivierten Gravatar-Funktion erweitern auch wir unser Service auf unserer Website. Wir wollen
        schließlich, dass Sie sich auf unserer Website wohl fühlen und ein umfangreiches und interessantes Angebot
        bekommen.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von Gravatar gespeichert?</h3>
    <p>Sobald Sie beispielsweise einen Kommentar zu einem Blogbeitrag veröffentlichen, der eine E-Mailadresse erfordert,
        prüft WordPress, ob die E-Mail-Adresse mit einem Avatar bei Gravatar verknüpft ist. Für diese Anfrage wird Ihre
        E-Mail-Adresse in verschlüsselter bzw. gehashter Form samt IP-Adresse und unserer URL an die Server von Gravatar
        bzw. Automattic gesendet. So wird überprüft, ob diese E-Mail-Adresse bei Gravatar registriert ist.</p>
    <p>Ist das der Fall, wird das dort hinterlegte Bild (Gravatar) gemeinsam mit dem veröffentlichten Kommentar
        angezeigt.
        Wenn Sie eine E-Mail-Adresse bei Gravatar registriert haben und auf unserer Website kommentieren, werden weitere
        Daten an Gravatar übertragen, gespeichert und verarbeitet. Dabei handelt es sich neben IP-Adresse und Daten zum
        Userverhalten zum Beispiel um Browsertyp, eindeutige Gerätkennung, bevorzugte Sprache, Daten und Uhrzeit des
        Seiteneintritts, Betriebssystem und Informationen zum mobilen Netzwerk. Gravatar nutzt diese Informationen, um
        die
        eigenen Services und Angebote zu verbessern und bessere Einblicke zur Nutzung des eigenen Service zu
        erhalten.</p>
    <p>Folgende Cookies werden von Automattic gesetzt, wenn ein User für einen Kommentar eine E-Mail-Adresse verwendet,
        die
        bei Gravatar registriert ist:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> gravatar<br/>
        <strong class="adsimple-121400314">Wert:</strong> 16b3191024acc05a238209d51ffcb92bdd710bd19121400314-7<br/>
        <strong class="adsimple-121400314">Verwendungszweck: </strong>Wir konnten keine genauen Informationen über das
        Cookie in Erfahrung bringen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum: </strong>nach 50 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> is-logged-in<br/>
        <strong class="adsimple-121400314">Wert: </strong>1121400314-1<br/>
        <strong class="adsimple-121400314">Verwendungszweck: </strong>Dieses Cookie speichert die Information, dass der
        User
        über die registrierte E-Mail-Adresse angemeldet ist.<br/>
        <strong class="adsimple-121400314">Ablaufdatum: </strong>nach 50 Jahren</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Automattic löscht die gesammelten Daten, wenn diese für die eigenen Dienste nicht mehr verwendet werden und das
        Unternehmen nicht gesetzlich dazu verpflichtet ist, die Daten aufzubewahren. Webserverprotokolle wie IP-Adresse,
        Browsertyp und Betriebssystem werden nach etwa 30 Tagen gelöscht. Solange verwendet Automattic die Daten, um den
        Verkehr auf den eigenen Webseiten (zum Beispiel alle WordPress-Seiten) zu analysieren und mögliche Probleme zu
        beheben. Die Daten werden auch auf amerikanischen Servern von Automattic gespeichert.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Wenn Sie sich
        bei
        Gravatar mit einer E-Mail-Adresse registriert haben, können Sie dort Ihr Konto bzw. die E-Mail-Adresse jederzeit
        wieder löschen.</p>
    <p>Da nur beim Einsatz einer bei Gravatar registrierten E-Mail-Adresse ein Bild angezeigt wird und somit Daten zu
        Gravatar übertragen werden, können Sie die Übertragung Ihrer Daten zu Gravatar auch verhindern, indem Sie mit
        einer
        bei Gravatar nicht registrierten E-Mail-Adresse auf unserer Website kommentieren oder Beiträge verfassen.</p>
    <p>Mögliche Cookies, die während dem Kommentieren gesetzt werden, können Sie in Ihrem Browser verwalten,
        deaktivieren
        oder löschen. Nehmen Sie bitte nur zur Kenntnis, dass dann etwaige Kommentarfunktionen nicht mehr im vollen
        Ausmaß
        zur Verfügung stehen. Je nachdem, welchen Browser Sie benutzen, funktioniert die Verwaltung der Cookies ein
        bisschen
        anders. Die Anleitungen der gängigsten Browser finden Sie hier:</p>
    <p>
        <a decorated="" class="adsimple-121400314" href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Automattic ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework wodurch der korrekte und sichere
        Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a decorated=""
                                                                                                  class="adsimple-121400314"
                                                                                                  href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC"
                                                                                                  target="_blank"
                                                                                                  rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC</a>
        .<br/>
        Mehr Details zur Datenschutzrichtlinie und welche Daten auf welche Art durch Gravatar erfasst werden finden Sie
        auf
        <a decorated="" class="adsimple-121400314" href="https://automattic.com/privacy/?tid=121400314" target="_blank"
           rel="noopener noreferrer">https://automattic.com/privacy/</a>, allgemeine Informationen zu Gravatar auf <a
                decorated="" class="adsimple-121400314" href="http://de.gravatar.com/" target="_blank"
                rel="noopener noreferrer">http://de.gravatar.com/</a>.</p>
    <h2 id="youtube-datenschutzerklaerung" class="adsimple-121400314">YouTube Datenschutzerklärung</h2>
    <p>Wir haben auf unserer Website YouTube-Videos eingebaut. So können wir Ihnen interessante Videos direkt auf
        unserer
        Seite präsentieren. YouTube ist ein Videoportal, das seit 2006 eine Tochterfirma von Google ist. Betrieben wird
        das
        Videoportal durch YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. Wenn Sie auf unserer Website eine
        Seite
        aufrufen, die ein YouTube-Video eingebettet hat, verbindet sich Ihr Browser automatisch mit den Servern von
        YouTube
        bzw. Google. Dabei werden (je nach Einstellungen) verschiedene Daten übertragen. Für die gesamte
        Datenverarbeitung
        im europäischen Raum ist Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland)
        verantwortlich.</p>
    <p>Im Folgenden wollen wir Ihnen genauer erklären, welche Daten verarbeitet werden, warum wir YouTube-Videos
        eingebunden
        haben und wie Sie Ihre Daten verwalten oder löschen können.</p>
    <h3 class="adsimple-121400314">Was ist YouTube?</h3>
    <p>Auf YouTube können die User kostenlos Videos ansehen, bewerten, kommentieren und selbst hochladen. Über die
        letzten
        Jahre wurde YouTube zu einem der wichtigsten Social-Media-Kanäle weltweit. Damit wir Videos auf unserer Webseite
        anzeigen können, stellt YouTube einen Codeausschnitt zur Verfügung, den wir auf unserer Seite eingebaut
        haben.</p>
    <h3 class="adsimple-121400314">Warum verwenden wir YouTube-Videos auf unserer Webseite?</h3>
    <p>YouTube ist die Videoplattform mit den meisten Besuchern und dem besten Content. Wir sind bemüht, Ihnen die
        bestmögliche User-Erfahrung auf unserer Webseite zu bieten. Und natürlich dürfen interessante Videos dabei nicht
        fehlen. Mithilfe unserer eingebetteten Videos stellen wir Ihnen neben unseren Texten und Bildern weiteren
        hilfreichen Content zur Verfügung. Zudem wird unsere Webseite auf der Google-Suchmaschine durch die
        eingebetteten
        Videos leichter gefunden. Auch wenn wir über Google Ads Werbeanzeigen schalten, kann Google – dank der
        gesammelten
        Daten – diese Anzeigen wirklich nur Menschen zeigen, die sich für unsere Angebote interessieren.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von YouTube gespeichert?</h3>
    <p>Sobald Sie eine unserer Seiten besuchen, die ein YouTube-Video eingebaut hat, setzt YouTube zumindest ein Cookie,
        das
        Ihre IP-Adresse und unsere URL speichert. Wenn Sie in Ihrem YouTube-Konto eingeloggt sind, kann YouTube Ihre
        Interaktionen auf unserer Webseite meist mithilfe von Cookies Ihrem Profil zuordnen. Dazu zählen Daten wie
        Sitzungsdauer, Absprungrate, ungefährer Standort, technische Informationen wie Browsertyp, Bildschirmauflösung
        oder
        Ihr Internetanbieter. Weitere Daten können Kontaktdaten, etwaige Bewertungen, das Teilen von Inhalten über
        Social
        Media oder das Hinzufügen zu Ihren Favoriten auf YouTube sein.</p>
    <p>Wenn Sie nicht in einem Google-Konto oder einem Youtube-Konto angemeldet sind, speichert Google Daten mit einer
        eindeutigen Kennung, die mit Ihrem Gerät, Browser oder App verknüpft sind. So bleibt beispielsweise Ihre
        bevorzugte
        Spracheinstellung beibehalten. Aber viele Interaktionsdaten können nicht gespeichert werden, da weniger Cookies
        gesetzt werden.</p>
    <p>In der folgenden Liste zeigen wir Cookies, die in einem Test im Browser gesetzt wurden. Wir zeigen einerseits
        Cookies, die ohne angemeldetes YouTube-Konto gesetzt werden. Andererseits zeigen wir Cookies, die mit
        angemeldetem
        Account gesetzt werden. Die Liste kann keinen Vollständigkeitsanspruch erheben, weil die Userdaten immer von den
        Interaktionen auf YouTube abhängen.</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> YSC<br/>
        <strong class="adsimple-121400314">Wert:</strong> b9-CV6ojI5Y121400314-1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert eine eindeutige ID, um
        Statistiken des gesehenen Videos zu speichern.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach Sitzungsende</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> PREF<br/>
        <strong class="adsimple-121400314">Wert:</strong> f1=50000000<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert ebenfalls Ihre
        eindeutige
        ID. Google bekommt über PREF Statistiken, wie Sie YouTube-Videos auf unserer Webseite verwenden.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 8 Monaten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> GPS<br/>
        <strong class="adsimple-121400314">Wert:</strong> 1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert Ihre eindeutige ID auf
        mobilen Geräten, um den GPS-Standort zu tracken.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 30 Minuten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> VISITOR_INFO1_LIVE<br/>
        <strong class="adsimple-121400314">Wert:</strong> 95Chz8bagyU<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie versucht die Bandbreite des Users
        auf
        unseren Webseiten (mit eingebautem YouTube-Video) zu schätzen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 8 Monaten</p>
    <p>Weitere Cookies, die gesetzt werden, wenn Sie mit Ihrem YouTube-Konto angemeldet sind:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> APISID<br/>
        <strong class="adsimple-121400314">Wert:</strong> zILlvClZSkqGsSwI/AU1aZI6HY7121400314-<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um ein Profil über
        Ihre
        Interessen zu erstellen. Genützt werden die Daten für personalisierte Werbeanzeigen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> CONSENT<br/>
        <strong class="adsimple-121400314">Wert:</strong> YES+AT.de+20150628-20-0<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie speichert den Status der Zustimmung
        eines
        Users zur Nutzung unterschiedlicher Services von Google. CONSENT dient auch der Sicherheit, um User zu
        überprüfen
        und Userdaten vor unbefugten Angriffen zu schützen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum: </strong>nach 19 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> HSID<br/>
        <strong class="adsimple-121400314">Wert:</strong> AcRwpgUik9Dveht0I<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um ein Profil über
        Ihre
        Interessen zu erstellen. Diese Daten helfen personalisierte Werbung anzeigen zu können.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> LOGIN_INFO<br/>
        <strong class="adsimple-121400314">Wert:</strong> AFmmF2swRQIhALl6aL…<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> In diesem Cookie werden Informationen über Ihre
        Login-Daten gespeichert.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> SAPISID<br/>
        <strong class="adsimple-121400314">Wert:</strong> 7oaPxoG-pZsJuuF5/AnUdDUIsJ9iJz2vdM<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie funktioniert, indem es Ihren Browser
        und
        Ihr Gerät eindeutig identifiziert. Es wird verwendet, um ein Profil über Ihre Interessen zu erstellen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> SID<br/>
        <strong class="adsimple-121400314">Wert:</strong> oQfNKjAsI121400314-<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Google-Konto-ID und
        Ihren
        letzten Anmeldezeitpunkt in digital signierter und verschlüsselter Form.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> SIDCC<br/>
        <strong class="adsimple-121400314">Wert:</strong> AN0-TYuqub2JOcDTyL<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie speichert Informationen, wie Sie die
        Webseite nutzen und welche Werbung Sie vor dem Besuch auf unserer Seite möglicherweise gesehen haben.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 3 Monaten</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Die Daten, die YouTube von Ihnen erhält und verarbeitet werden auf den Google-Servern gespeichert. Die meisten
        dieser
        Server befinden sich in Amerika. Unter <a decorated="" class="adsimple-121400314"
                                                  href="https://www.google.com/about/datacenters/inside/locations/?hl=de"
                                                  target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a>
        sehen Sie genau wo sich die Google-Rechenzentren befinden. Ihre Daten sind auf den Servern verteilt. So sind die
        Daten schneller abrufbar und vor Manipulation besser geschützt.</p>
    <p>Die erhobenen Daten speichert Google unterschiedlich lang. Manche Daten können Sie jederzeit löschen, andere
        werden
        automatisch nach einer begrenzten Zeit gelöscht und wieder andere werden von Google über längere Zeit
        gespeichert.
        Einige Daten (wie Elemente aus „Meine Aktivität“, Fotos oder Dokumente, Produkte), die in Ihrem Google-Konto
        gespeichert sind, bleiben so lange gespeichert, bis Sie sie löschen. Auch wenn Sie nicht in einem Google-Konto
        angemeldet sind, können Sie einige Daten, die mit Ihrem Gerät, Browser oder App verknüpft sind, löschen.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Grundsätzlich können Sie Daten im Google Konto manuell löschen. Mit der 2019 eingeführten automatischen
        Löschfunktion
        von Standort- und Aktivitätsdaten werden Informationen abhängig von Ihrer Entscheidung – entweder 3 oder 18
        Monate
        gespeichert und dann gelöscht.</p>
    <p>Unabhängig, ob Sie ein Google-Konto haben oder nicht, können Sie Ihren Browser so konfigurieren, dass Cookies von
        Google gelöscht bzw. deaktiviert werden. Je nachdem welchen Browser Sie verwenden, funktioniert dies auf
        unterschiedliche Art und Weise. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser
        verwalten:</p>
    <p>
        <a decorated="" class="adsimple-121400314" href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer
        informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie es
        erlauben oder nicht. Da YouTube ein Tochterunternehmen von Google ist, gibt es eine gemeinsame
        Datenschutzerklärung.
        Wenn Sie mehr über den Umgang mit Ihren Daten erfahren wollen, empfehlen wir Ihnen die Datenschutzerklärung
        unter <a
                decorated="" class="adsimple-121400314" href="https://policies.google.com/privacy?hl=de" target="_blank"
                rel="noopener noreferrer">https://policies.google.com/privacy?hl=de.</a>
    </p>
    <h2 id="youtube-abonnieren-button" class="adsimple-121400314">YouTube Abonnieren Button Datenschutzerklärung</h2>
    <p>Wir haben auf unserer Webseite den YouTube Abonnieren Button (engl. „Subscribe-Button“) eingebaut. Sie erkennen
        den
        Button meist am klassischen YouTube-Logo. Das Logo zeigt vor rotem Hintergrund in weißer Schrift die Wörter
        „Abonnieren“ oder „YouTube“ und links davon das weiße „Play-Symbol“. Der Button kann aber auch in einem anderen
        Design dargestellt sein.</p>
    <p>Unser YouTube-Kanal bietet Ihnen immer wieder lustige, interessante oder spannende Videos. Mit dem eingebauten
        „Abonnieren-Button“ können Sie unseren Kanal direkt von unserer Webseite aus abonnieren und müssen nicht eigens
        die
        YouTube-Webseite aufrufen. Wir wollen Ihnen somit den Zugang zu unserem umfassenden Content so einfach wie
        möglich
        machen. Bitte beachten Sie, dass YouTube dadurch Daten von Ihnen speichern und verarbeiten kann.</p>
    <p>Wenn Sie auf unserer Seite einen eingebauten Abo-Button sehen, setzt YouTube – laut Google – mindestens ein
        Cookie.
        Dieses Cookie speichert Ihre IP-Adresse und unsere URL. Auch Informationen über Ihren Browser, Ihren ungefähren
        Standort und Ihre voreingestellte Sprache kann YouTube so erfahren. Bei unserem Test wurden folgende vier
        Cookies
        gesetzt, ohne bei YouTube angemeldet zu sein:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> YSC<br/>
        <strong class="adsimple-121400314">Wert:</strong> b9-CV6ojI5121400314Y<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert eine eindeutige ID, um
        Statistiken des gesehenen Videos zu speichern.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach Sitzungsende</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> PREF<br/>
        <strong class="adsimple-121400314">Wert:</strong> f1=50000000<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert ebenfalls Ihre
        eindeutige
        ID. Google bekommt über PREF Statistiken, wie Sie YouTube-Videos auf unserer Webseite verwenden.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 8 Monate</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> GPS<br/>
        <strong class="adsimple-121400314">Wert:</strong> 1<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie registriert Ihre eindeutige ID auf
        mobilen Geräten, um den GPS-Standort zu tracken.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 30 Minuten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> VISITOR_INFO1_LIVE<br/>
        <strong class="adsimple-121400314">Wert:</strong> 12140031495Chz8bagyU<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie versucht die Bandbreite des Users
        auf
        unseren Webseiten (mit eingebautem YouTube-Video) zu schätzen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 8 Monaten</p>
    <p>
        <strong class="adsimple-121400314">Anmerkung:</strong> Diese Cookies wurden nach einem Test gesetzt und können
        nicht
        den Anspruch auf Vollständigkeit erheben.</p>
    <p>Wenn Sie in Ihrem YouTube-Konto angemeldet sind, kann YouTube viele Ihrer Handlungen/Interaktionen auf unserer
        Webseite mit Hilfe von Cookies speichern und Ihrem YouTube-Konto zuordnen. YouTube bekommt dadurch zum Beispiel
        Informationen wie lange Sie auf unserer Seite surfen, welchen Browsertyp Sie verwenden, welche
        Bildschirmauflösung
        Sie bevorzugen oder welche Handlungen Sie ausführen.</p>
    <p>YouTube verwendet diese Daten zum einen um die eigenen Dienstleistungen und Angebote zu verbessern, zum anderen
        um
        Analysen und Statistiken für Werbetreibende (die Google Ads verwenden) bereitzustellen.</p>
    <h2 id="adsimple-cookie-manager-datenschutzerklaerung" class="adsimple-121400314">AdSimple Cookie Manager
        Datenschutzerklärung</h2>
    <p>Wir verwenden auf unserer Website den AdSimple Cookie Manager des Softwareentwicklungs- und Online-Marketing
        Unternehmens AdSimple GmbH, Fabriksgasse 20, 2230 Gänserndorf. Der AdSimple Cookie Manager bietet uns unter
        anderem
        die Möglichkeit, Ihnen einen umfangreichen und datenschutzkonformen Cookie-Hinweis zu liefern, damit Sie selbst
        entscheiden können, welche Cookies Sie zulassen und welche nicht. Durch die Verwendung dieser Software werden
        Daten
        von Ihnen an AdSimple gesendet und gespeichert. In dieser Datenschutzerklärung informieren wir Sie, warum wir
        den
        AdSimple Cookie Manager verwenden, welche Daten übertragen und gespeichert werden und wie Sie diese
        Datenübertragung
        verhindern können.</p>
    <h3 class="adsimple-121400314">Was ist der AdSimple Cookie Manager?</h3>
    <p>Der AdSimple Cookie Manager ist eine Software, die unsere Website scannt und alle vorhandenen Cookies
        identifiziert
        und kategorisiert. Zudem werden Sie als Websitebesucher über ein Cookie Hinweis Script über die Verwendung von
        Cookies informiert und entscheiden selbst welche Cookies Sie zulassen und welche nicht.</p>
    <h3 class="adsimple-121400314">Warum verwenden wir den AdSimple Cookie Manager auf unserer Website?</h3>
    <p>Wir wollen Ihnen maximale Transparenz im Bereich Datenschutz bieten. Um das zu gewährleisten, müssen wir zuerst
        genau
        wissen, welche Cookies im Laufe der Zeit auf unserer Website gelandet sind. Dadurch, dass der Cookie Manager von
        AdSimple regelmäßig unsere Website scannt und alle Cookies ausfindig macht, haben wir die volle Kontrolle über
        diese
        Cookies und können so DSGVO-konform handeln. Wir können Sie dadurch über die Nutzung der Cookies auf unserer
        Website
        genau informieren. Weiters bekommen Sie stets einen aktuellen und datenschutzkonformen Cookie-Hinweis und
        entscheiden per Checkbox-System selbst, welche Cookies Sie akzeptieren bzw. blockieren.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von dem AdSimple Cookie Manager gespeichert?</h3>
    <p>Wenn Sie Cookies auf unserer Website zustimmen, wird folgendes Cookie von dem AdSimple Cookie Manager
        gesetzt:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> acm_status<br/>
        <strong class="adsimple-121400314">Wert:</strong>
        “:true,”statistik”:true,”marketing”:true,”socialmedia”:true,”einstellungen”:true}<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> In diesem Cookie wird Ihr Zustimmungsstatus,
        gespeichert. Dadurch kann unsere Website auch bei zukünftigen Besuchen den aktuellen Status lesen und
        befolgen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach einem Jahr</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Alle Daten, die durch den AdSimple Cookie Manager erhoben werden, werden ausschließlich innerhalb der
        Europäischen
        Union übertragen und gespeichert. Die erhobenen Daten werden auf den Servern von AdSimple bei der Hetzner GmbH
        in
        Deutschland gespeichert. Zugriff auf diese Daten hat ausschließlich die AdSimple GmbH und die Hetzner GmbH.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Die
        Datenerfassung und Speicherung können Sie beispielsweise verhindern, indem Sie über das Cookie-Hinweis-Script
        die
        Verwendung von Cookies ablehnen. Eine weitere Möglichkeit die Datenverarbeitung zu unterbinden bzw. nach Ihren
        Wünschen zu verwalten, bietet Ihr Browser. Je nach Browser funktioniert die Cookie-Verwaltung etwas anders. Hier
        finden Sie die Anleitungen zu den momentan bekanntesten Browsern:</p>
    <p>
        <a decorated="" class="adsimple-121400314" href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a decorated="" class="adsimple-121400314"
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Wir hoffen, wir haben Ihnen einen guten Überblick über den Datenverkehr und die Datenverarbeitung durch den
        AdSimple
        Cookie Manager geliefert. Wenn Sie mehr über dieses Tool erfahren wollen, empfehlen wir Ihnen die
        Beschreibungsseite
        auf <a decorated="" class="adsimple-121400314"
               href="https://www.adsimple.at/adsimple-cookie-manager/?tid=121400314"
               target="_blank" rel="noopener noreferrer">https://www.adsimple.at/adsimple-cookie-manager/.</a>
    </p>
    <h2 id="google-recaptcha-datenschutzerklaerung" class="adsimple-121400314">Google reCAPTCHA
        Datenschutzerklärung</h2>
    <p>Unser oberstes Ziel ist es, unsere Webseite für Sie und für uns bestmöglich zu sichern und zu schützen. Um das zu
        gewährleisten, verwenden wir Google reCAPTCHA der Firma Google Inc. Für den europäischen Raum ist das
        Unternehmen
        Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich.
        Mit
        reCAPTCHA können wir feststellen, ob Sie auch wirklich ein Mensch aus Fleisch und Blut sind und kein Roboter
        oder
        eine andere Spam-Software. Unter Spam verstehen wir jede, auf elektronischen Weg, unerwünschte Information, die
        uns
        ungefragter Weise zukommt. Bei den klassischen CAPTCHAS mussten Sie zur Überprüfung meist Text- oder Bildrätsel
        lösen. Mit reCAPTCHA von Google müssen wir Sie meist nicht mit solchen Rätseln belästigen. Hier reicht es in den
        meisten Fällen, wenn Sie einfach ein Häkchen setzen und so bestätigen, dass Sie kein Bot sind. Mit der neuen
        Invisible reCAPTCHA Version müssen Sie nicht mal mehr ein Häkchen setzen. Wie das genau funktioniert und vor
        allem
        welche Daten dafür verwendet werden, erfahren Sie im Verlauf dieser Datenschutzerklärung.</p>
    <h3 class="adsimple-121400314">Was ist reCAPTCHA?</h3>
    <p>reCAPTCHA ist ein freier Captcha-Dienst von Google, der Webseiten vor Spam-Software und den Missbrauch durch
        nicht-menschliche Besucher schützt. Am häufigsten wird dieser Dienst verwendet, wenn Sie Formulare im Internet
        ausfüllen. Ein Captcha-Dienst ist eine Art automatischer Turing-Test, der sicherstellen soll, dass eine Handlung
        im
        Internet von einem Menschen und nicht von einem Bot vorgenommen wird. Im klassischen Turing-Test (benannt nach
        dem
        Informatiker Alan Turing) stellt ein Mensch die Unterscheidung zwischen Bot und Mensch fest. Bei Captchas
        übernimmt
        das auch der Computer bzw. ein Softwareprogramm. Klassische Captchas arbeiten mit kleinen Aufgaben, die für
        Menschen
        leicht zu lösen sind, doch für Maschinen erhebliche Schwierigkeiten aufweisen. Bei reCAPTCHA müssen Sie aktiv
        keine
        Rätsel mehr lösen. Das Tool verwendet moderne Risikotechniken, um Menschen von Bots zu unterscheiden. Hier
        müssen
        Sie nur noch das Textfeld „Ich bin kein Roboter“ ankreuzen bzw. bei Invisible reCAPTCHA ist selbst das nicht
        mehr
        nötig. Bei reCAPTCHA wird ein JavaScript-Element in den Quelltext eingebunden und dann läuft das Tool im
        Hintergrund
        und analysiert Ihr Benutzerverhalten. Aus diesen Useraktionen berechnet die Software einen sogenannten
        Captcha-Score. Google berechnet mit diesem Score schon vor der Captcha-Eingabe wie hoch die Wahrscheinlichkeit
        ist,
        dass Sie ein Mensch sind. reCAPTCHA bzw. Captchas im Allgemeinen kommen immer dann zum Einsatz, wenn Bots
        gewisse
        Aktionen (wie z.B. Registrierungen, Umfragen usw.) manipulieren oder missbrauchen könnten.</p>
    <h3 class="adsimple-121400314">Warum verwenden wir reCAPTCHA auf unserer Webseite?</h3>
    <p>Wir wollen nur Menschen aus Fleisch und Blut auf unserer Seite begrüßen. Bots oder Spam-Software
        unterschiedlichster
        Art dürfen getrost zuhause bleiben. Darum setzen wir alle Hebel in Bewegung, uns zu schützen und die
        bestmögliche
        Benutzerfreundlichkeit für Sie anzubieten. Aus diesem Grund verwenden wir Google reCAPTCHA der Firma Google. So
        können wir uns ziemlich sicher sein, dass wir eine „botfreie“ Webseite bleiben. Durch die Verwendung von
        reCAPTCHA
        werden Daten an Google übermittelt, um festzustellen, ob Sie auch wirklich ein Mensch sind. reCAPTCHA dient also
        der
        Sicherheit unserer Webseite und in weiterer Folge damit auch Ihrer Sicherheit. Zum Beispiel könnte es ohne
        reCAPTCHA
        passieren, dass bei einer Registrierung ein Bot möglichst viele E-Mail-Adressen registriert, um im Anschluss
        Foren
        oder Blogs mit unerwünschten Werbeinhalten „zuzuspamen“. Mit reCAPTCHA können wir solche Botangriffe
        vermeiden.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von reCAPTCHA gespeichert?</h3>
    <p>reCAPTCHA sammelt personenbezogene Daten von Usern, um festzustellen, ob die Handlungen auf unserer Webseite auch
        wirklich von Menschen stammen. Es kann also die IP-Adresse und andere Daten, die Google für den reCAPTCHA-Dienst
        benötigt, an Google versendet werden. IP-Adressen werden innerhalb der Mitgliedstaaten der EU oder anderer
        Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum fast immer zuvor gekürzt, bevor die Daten
        auf
        einem Server in den USA landen. Die IP-Adresse wird nicht mit anderen Daten von Google kombiniert, sofern Sie
        nicht
        während der Verwendung von reCAPTCHA mit Ihrem Google-Konto angemeldet sind. Zuerst prüft der
        reCAPTCHA-Algorithmus,
        ob auf Ihrem Browser schon Google-Cookies von anderen Google-Diensten (YouTube. Gmail usw.) platziert sind.
        Anschließend setzt reCAPTCHA ein zusätzliches Cookie in Ihrem Browser und erfasst einen Schnappschuss Ihres
        Browserfensters.</p>
    <p>Die folgende Liste von gesammelten Browser- und Userdaten, hat nicht den Anspruch auf Vollständigkeit. Vielmehr
        sind
        es Beispiele von Daten, die nach unserer Erkenntnis, von Google verarbeitet werden.</p>
    <ul class="adsimple-121400314">
        <li class="adsimple-121400314">Referrer URL (die Adresse der Seite von der der Besucher kommt)</li>
        <li class="adsimple-121400314">IP-Adresse (z.B. 256.123.123.1)</li>
        <li class="adsimple-121400314">Infos über das Betriebssystem (die Software, die den Betrieb Ihres Computers
            ermöglicht. Bekannte Betriebssysteme sind Windows, Mac OS X oder Linux)
        </li>
        <li class="adsimple-121400314">Cookies (kleine Textdateien, die Daten in Ihrem Browser speichern)</li>
        <li class="adsimple-121400314">Maus- und Keyboardverhalten (jede Aktion, die Sie mit der Maus oder der Tastatur
            ausführen wird gespeichert)
        </li>
        <li class="adsimple-121400314">Datum und Spracheinstellungen (welche Sprache bzw. welches Datum Sie auf Ihrem PC
            voreingestellt haben wird gespeichert)
        </li>
        <li class="adsimple-121400314">Alle Javascript-Objekte (JavaScript ist eine Programmiersprache, die Webseiten
            ermöglicht, sich an den User anzupassen. JavaScript-Objekte können alle möglichen Daten unter einem Namen
            sammeln)
        </li>
        <li class="adsimple-121400314">Bildschirmauflösung (zeigt an aus wie vielen Pixeln die Bilddarstellung
            besteht)
        </li>
    </ul>
    <p>Unumstritten ist, dass Google diese Daten verwendet und analysiert noch bevor Sie auf das Häkchen „Ich bin kein
        Roboter“ klicken. Bei der Invisible reCAPTCHA-Version fällt sogar das Ankreuzen weg und der ganze
        Erkennungsprozess
        läuft im Hintergrund ab. Wie viel und welche Daten Google genau speichert, erfährt man von Google nicht im
        Detail.</p>
    <p>Folgende Cookies werden von reCAPTCHA verwendet: Hierbei beziehen wir uns auf die reCAPTCHA Demo-Version von
        Google
        unter <a decorated="" class="adsimple-121400314" href="https://www.google.com/recaptcha/api2/demo"
                 target="_blank"
                 rel="noopener noreferrer">https://www.google.com/recaptcha/api2/demo</a>. All diese Cookies benötigen
        zu
        Trackingzwecken eine eindeutige Kennung. Hier ist eine Liste an Cookies, die Google reCAPTCHA auf der
        Demo-Version
        gesetzt hat:</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> IDE<br/>
        <strong class="adsimple-121400314">Wert:</strong> WqTUmlnmv_qXyi_DGNPLESKnRNrpgXoy1K-pAZtAkMbHI-121400314-8<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie wird von der Firma DoubleClick
        (gehört
        auch Google) gesetzt, um die Aktionen eines Users auf der Webseite im Umgang mit Werbeanzeigen zu registrieren
        und
        zu melden. So kann die Werbewirksamkeit gemessen und entsprechende Optimierungsmaßnahmen getroffen werden. IDE
        wird
        in Browsern unter der Domain doubleclick.net gespeichert.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach einem Jahr</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> 1P_JAR<br/>
        <strong class="adsimple-121400314">Wert:</strong> 2019-5-14-12<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Dieses Cookie sammelt Statistiken zur
        Webseite-Nutzung
        und misst Conversions. Eine Conversion entsteht z.B., wenn ein User zu einem Käufer wird. Das Cookie wird auch
        verwendet, um Usern relevante Werbeanzeigen einzublenden. Weiters kann man mit dem Cookie vermeiden, dass ein
        User
        dieselbe Anzeige mehr als einmal zu Gesicht bekommt.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach einem Monat</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> ANID<br/>
        <strong class="adsimple-121400314">Wert:</strong> U7j1v3dZa1214003140xgZFmiqWppRWKOr<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Viele Infos konnten wir über dieses Cookie nicht
        in
        Erfahrung bringen. In der Datenschutzerklärung von Google wird das Cookie im Zusammenhang mit „Werbecookies“ wie
        z.
        B. “DSID”, “FLC”, “AID”, “TAID” erwähnt. ANID wird unter Domain google.com gespeichert.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 9 Monaten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> CONSENT<br/>
        <strong class="adsimple-121400314">Wert: </strong>YES+AT.de+20150628-20-0<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Das Cookie speichert den Status der Zustimmung
        eines
        Users zur Nutzung unterschiedlicher Services von Google. CONSENT dient auch der Sicherheit, um User zu
        überprüfen,
        Betrügereien von Anmeldeinformationen zu verhindern und Userdaten vor unbefugten Angriffen zu schützen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 19 Jahren</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> NID<br/>
        <strong class="adsimple-121400314">Wert:</strong> 0WmuWqy121400314zILzqV_nmt3sDXwPeM5Q<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> NID wird von Google verwendet, um Werbeanzeigen an
        Ihre Google-Suche anzupassen. Mit Hilfe des Cookies „erinnert“ sich Google an Ihre meist eingegebenen
        Suchanfragen
        oder Ihre frühere Interaktion mit Anzeigen. So bekommen Sie immer maßgeschneiderte Werbeanzeigen. Das Cookie
        enthält
        eine einzigartige ID, um persönliche Einstellungen des Users für Werbezwecke zu sammeln.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 6 Monaten</p>
    <p>
        <strong class="adsimple-121400314">Name:</strong> DV<br/>
        <strong class="adsimple-121400314">Wert:</strong> gEAABBCjJMXcI0dSAAAANbqc121400314-4<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Sobald Sie das „Ich bin kein Roboter“-Häkchen
        angekreuzt haben, wird dieses Cookie gesetzt. Das Cookie wird von Google Analytics für personalisierte Werbung
        verwendet. DV sammelt Informationen in anonymisierter Form und wird weiters benutzt, um User-Unterscheidungen zu
        treffen.<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach 10 Minuten</p>
    <p>
        <strong class="adsimple-121400314">Anmerkung: </strong>Diese Aufzählung kann keinen Anspruch auf Vollständigkeit
        erheben, da Google erfahrungsgemäß die Wahl ihrer Cookies immer wieder auch verändert.</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Durch das Einfügen von reCAPTCHA werden Daten von Ihnen auf den Google-Server übertragen. Wo genau diese Daten
        gespeichert werden, stellt Google, selbst nach wiederholtem Nachfragen, nicht klar dar. Ohne eine Bestätigung
        von
        Google erhalten zu haben, ist davon auszugehen, dass Daten wie Mausinteraktion, Verweildauer auf der Webseite
        oder
        Spracheinstellungen auf den europäischen oder amerikanischen Google-Servern gespeichert werden. Die IP-Adresse,
        die
        Ihr Browser an Google übermittelt, wird grundsätzlich nicht mit anderen Google-Daten aus weiteren
        Google-Diensten
        zusammengeführt. Wenn Sie allerdings während der Nutzung des reCAPTCHA-Plug-ins bei Ihrem Google-Konto
        angemeldet
        sind, werden die Daten zusammengeführt.<strong class="adsimple-121400314"> </strong>Dafür gelten die
        abweichenden
        Datenschutzbestimmungen der Firma Google.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Wenn Sie wollen, dass über Sie und über Ihr Verhalten keine Daten an Google übermittelt werden, müssen Sie sich,
        bevor Sie unsere Webseite besuchen bzw. die reCAPTCHA-Software verwenden, bei Google vollkommen ausloggen und
        alle
        Google-Cookies löschen. Grundsätzlich werden die Daten sobald Sie unsere Seite aufrufen automatisch an Google
        übermittelt. Um diese Daten wieder zu löschen, müssen Sie den Google-Support auf <a decorated=""
                                                                                            class="adsimple-121400314"
                                                                                            href="https://support.google.com/?hl=de&tid=121400314"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer">https://support.google.com/?hl=de&tid=121400314</a>
        kontaktieren.</p>
    <p>Wenn Sie also unsere Webseite verwenden, erklären Sie sich einverstanden, dass Google LLC und deren Vertreter
        automatisch Daten erheben, bearbeiten und nutzen.</p>
    <p>Etwas mehr über reCAPTCHA erfahren Sie auf der Webentwickler-Seite von Google auf <a decorated=""
                                                                                            class="adsimple-121400314"
                                                                                            href="https://developers.google.com/recaptcha/"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer">https://developers.google.com/recaptcha/</a>.
        Google geht hier zwar auf die technische Entwicklung der reCAPTCHA näher ein, doch genaue Informationen über
        Datenspeicherung und datenschutzrelevanten Themen sucht man auch dort vergeblich. Eine gute Übersicht über die
        grundsätzliche Verwendung von Daten bei Google finden Sie in der hauseigenen Datenschutzerklärung auf <a
                decorated="" class="adsimple-121400314" href="https://policies.google.com/privacy?hl=de&tid=121400314"
                target="_blank" rel="noopener noreferrer">https://www.google.com/intl/de/policies/privacy/</a>.</p>
    <h2 id="jquery-cdn-datenschutzerklaerung" class="adsimple-121400314">jQuery CDN Datenschutzerklärung</h2>
    <p>Um Ihnen unsere Website bzw. all unsere einzelnen Unterseiten (Webseiten) auf unterschiedlichen Geräten schnell
        und
        problemlos auszuliefern, nutzen wir Dienste von jQuery CDN des Unternehmens jQuery Foundation. jQuery wird über
        das
        Content Delivery Network (CDN) des amerikanischen Software-Unternehmens StackPath (LCC 2012 McKinney Ave. Suite
        1100, Dallas, TX 75201, USA) verteilt. Durch diesen Dienst werden personenbezogene Daten von Ihnen gespeichert,
        verwaltet und verarbeitet.</p>
    <p>Ein Content Delivery Network (CDN) ist ein Netzwerk regional verteilter Server, die über das Internet miteinander
        verbunden sind. Durch dieses Netzwerk können Inhalte, speziell sehr große Dateien, auch bei großen Lastspitzen
        schnell ausgeliefert werden.</p>
    <p>jQuery nutzt JavaScript-Bibliotheken, um unsere Website-Inhalte zügig ausliefern zu können. Dafür lädt ein
        CDN-Server
        die nötigen Dateien. Sobald eine Verbindung zum CDN-Server aufgebaut ist, wird Ihre IP-Adresse erfasst und
        gespeichert. Das geschieht nur, wenn diese Daten nicht schon durch einen vergangenen Websitebesuch in Ihrem
        Browser
        gespeichert sind.</p>
    <p>In den Datenschutz-Richtlinien von StackPath wird ausdrücklich erwähnt, dass StackPath aggregierte und
        anonymisierte
        Daten von diversen Diensten (wie eben auch jQuery) für die Erweiterung der Sicherheit und für eigene Dienste
        benutzen. Diese Daten können Sie als Person allerdings nicht identifizieren.</p>
    <p>Wenn Sie nicht wollen, dass es zu dieser Datenübertragung kommt, haben Sie immer auch die Möglichkeit
        Java-Scriptblocker wie beispielsweise <a decorated="" class="adsimple-121400314"
                                                 href="https://www.ghostery.com/de/"
                                                 target="_blank" rel="follow noopener noreferrer">ghostery.com</a> oder
        <a
                decorated="" class="adsimple-121400314" href="https://noscript.net/" target="_blank"
                rel="follow noopener noreferrer">noscript.net</a> zu installieren. Sie können aber auch einfach in Ihrem
        Browser die Ausführung von JavaScript-Codes deaktivieren. Wenn Sie sich für die Deaktivierung von
        JavaScript-Codes
        entscheiden, verändern sich auch die gewohnten Funktionen. So wird beispielsweise eine Website nicht mehr so
        schnell
        geladen.</p>
    <p>StackPath ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere
        Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a decorated=""
                                                                                                  class="adsimple-121400314"
                                                                                                  href="https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&status=Active"
                                                                                                  target="_blank"
                                                                                                  rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&status=Active</a>.<br/>
        Mehr Informationen zum Datenschutz bei StackPath finden Sie unter <a decorated="" class="adsimple-121400314"
                                                                             href="https://www.stackpath.com/legal/privacy-statement/?tid=121400314"
                                                                             target="_blank" rel="noopener noreferrer">https://www.stackpath.com/legal/privacy-statement/</a>
        und zu jQuery unter <a decorated="" class="adsimple-121400314"
                               href="https://openjsf.org/wp-content/uploads/sites/84/2019/11/OpenJS-Foundation-Privacy-Policy-2019-11-15.pdf"
                               target="_blank" rel="follow noopener noreferrer">https://openjsf.org/wp-content/uploads/sites/84/2019/11/OpenJS-Foundation-Privacy-Policy-2019-11-15.pdf</a>.
    </p>
    <h2 id="cloudflare-datenschutzerklaerung" class="adsimple-121400314">Cloudflare Datenschutzerklärung</h2>
    <p>Wir verwenden auf dieser Webseite Cloudflare der Firma Cloudflare, Inc. (101 Townsend St., San Francisco, CA
        94107,
        USA), um unsere Webseite schneller und sicherer zu machen. Dabei verwendet Cloudflare Cookies und verarbeitet
        User-Daten. Cloudflare, Inc. ist eine amerikanische Firma, die ein Content Delivery Network und diverse
        Sicherheitsdienste anbietet. Diese Dienste befinden sich zwischen dem User und unserem Hosting-Anbieter. Was das
        alles genau bedeutet, versuchen wir im Folgenden genauer zu erläutern.</p>
    <h3 class="adsimple-121400314">Was ist Cloudflare?</h3>
    <p>Ein Content Delivery Network (CDN), wie es die Firma Cloudflare bereitstellt, ist nichts anderes als ein Netzwerk
        aus
        verbundenen Servern. Cloudflare hat auf der ganzen Welt solche Server verteilt, um Webseiten schneller auf Ihren
        Bildschirm zu bringen. Ganz einfach gesagt, legt Cloudflare Kopien unserer Webseite an und platziert sie auf
        ihren
        eigenen Servern. Wenn Sie jetzt unsere Webseite besuchen, stellt ein System der Lastenverteilung sicher, dass
        die
        größten Teile unserer Webseite von jenem Server ausgeliefert werden, der Ihnen unsere Webseite am schnellsten
        anzeigen kann. Die Strecke der Datenübertragung zu Ihrem Browser wird durch ein CDN deutlich verkürzt. Somit
        wird
        Ihnen der Content unserer Webseite durch Cloudflare nicht nur von unserem Hosting-Server geliefert, sondern von
        Servern aus der ganzen Welt. Besonders hilfreich wird der Einsatz von Cloudflare für User aus dem Ausland, da
        hier
        die Seite von einem Server in der Nähe ausgeliefert werden kann. Neben dem schnellen Ausliefern von Webseiten
        bietet
        Cloudflare auch diverse Sicherheitsdienste, wie den DDoS-Schutz oder die Web Application Firewall an.</p>
    <h3 class="adsimple-121400314">Warum wir Cloudflare auf unserer Webseite verwenden?</h3>
    <p>Natürlich wollen wir Ihnen mit unserer Webseite das bestmögliche Service bieten. Cloudflare hilft uns dabei,
        unsere
        Webseite schneller und sicherer zu machen. Cloudflare bietet uns sowohl Web-Optimierungen als auch
        Sicherheitsdienste, wie DDoS-Schutz und Web-Firewall, an. Dazu gehören auch ein <a decorated=""
                                                                                           class="adsimple-121400314"
                                                                                           href="https://de.wikipedia.org/wiki/Reverse_Proxy"
                                                                                           target="_blank"
                                                                                           rel="noopener noreferrer">Reverse-Proxy</a>
        und das Content-Verteilungsnetzwerk (CDN). Cloudflare blockiert Bedrohungen und begrenzt missbräuchliche Bots
        und
        Crawler, die unsere Bandbreite und Serverressourcen verschwenden. Durch das Speichern unserer Webseite auf
        lokalen
        Datenzentren und das Blockieren von Spam-Software ermöglicht Cloudflare, unsere Bandbreitnutzung etwa um 60% zu
        reduzieren. Das Bereitstellen von Inhalten über ein Datenzentrum in Ihrer Nähe und einiger dort durchgeführten
        Web-Optimierungen reduziert die durchschnittliche Ladezeit einer Webseite etwa um die Hälfte. Durch die
        Einstellung
        „I´m Under Attack Mode“ („Ich werde angegriffen“-Modus) können laut Cloudflare weitere Angriffe abgeschwächt
        werden,
        indem eine JavaScript-Rechenaufgabe angezeigt wird, die man lösen muss, bevor ein User auf eine Webseite
        zugreifen
        kann. Insgesamt wird dadurch unsere Webseite deutlich leistungsstärker und weniger anfällig auf Spam oder andere
        Angriffe.</p>
    <h3 class="adsimple-121400314">Welche Daten werden von Cloudflare gespeichert?</h3>
    <p>Cloudflare leitet im Allgemeinen nur jene Daten weiter, die von Webseitenbetreibern gesteuert werden. Die Inhalte
        werden also nicht von Cloudflare bestimmt, sondern immer vom Webseitenbetreiber selbst. Zudem erfasst Cloudflare
        unter Umständen bestimmte Informationen zur Nutzung unserer Webseite und verarbeitet Daten, die von uns
        versendet
        werden oder für die Cloudflare entsprechende Anweisungen erhalten hat. In den meisten Fällen erhält Cloudflare
        Daten
        wie IP-Adresse, Kontakt- und Protokollinfos, Sicherheitsfingerabdrücke und Leistungsdaten für Webseiten.
        Protokolldaten helfen Cloudflare beispielsweise dabei, neue Bedrohungen zu erkennen. So kann Cloudflare einen
        hohen
        Sicherheitsschutz für unsere Webseite gewährleisten. Cloudflare verarbeitet diese Daten im Rahmen der Services
        unter
        Einhaltung der geltenden Gesetze. Dazu zählt natürlich auch die Datenschutzgrundverordnung (DSGVO).</p>
    <p>Aus Sicherheitsgründen verwendet Cloudflare auch ein Cookie. Das Cookie (__cfduid) wird eingesetzt, um einzelne
        User
        hinter einer gemeinsam genutzten IP-Adresse zu identifizieren und Sicherheitseinstellungen für jeden einzelnen
        User
        anzuwenden. Sehr nützlich wird dieses Cookie beispielsweise, wenn Sie unsere Webseite aus einem Lokal benutzen,
        in
        dem sich eine Reihe infizierter Computer befinden. Wenn aber Ihr Computer vertrauenswürdig ist, können wir dies
        anhand des Cookies erkennen. So können Sie, trotz infizierter PCs in Ihrem Umfeld, ungehindert und sorgenfrei
        durch
        unsere Webseite surfen. Wichtig zu wissen ist auch noch, dass dieses Cookie keine personenbezogenen Daten
        speichert.
        Dieses Cookie ist für die Cloudflare-Sicherheitsfunktionen unbedingt erforderlich und kann nicht deaktiviert
        werden.</p>
    <h3 class="adsimple-121400314">Cookies von Cloudflare</h3>
    <p>
        <strong class="adsimple-121400314">Name:</strong> __cfduid<br/>
        <strong class="adsimple-121400314">Wert:</strong> d798bf7df9c1ad5b7583eda5cc5e78121400314-3<br/>
        <strong class="adsimple-121400314">Verwendungszweck:</strong> Sicherheitseinstellungen für jeden einzelnen
        Besucher<br/>
        <strong class="adsimple-121400314">Ablaufdatum:</strong> nach einem Jahr</p>
    <p>Cloudflare arbeitet auch mit Drittanbietern zusammen. Diese dürfen personenbezogene Daten nur unter Anweisung der
        Firma Cloudflare und in Übereinstimmung mit den Datenschutzrichtlinien und anderer Vertraulichkeits- und
        Sicherheitsmaßnahmen verarbeiten. Ohne explizite Einwilligung von uns gibt Cloudflare keine personenbezogenen
        Daten
        weiter.</p>
    <h3 class="adsimple-121400314">Wie lange und wo werden die Daten gespeichert?</h3>
    <p>Cloudflare speichert Ihre Informationen hauptsächlich in den USA und im Europäischen Wirtschaftsraum. Cloudflare
        kann
        die oben beschriebenen Informationen aus der ganzen Welt übertragen und darauf zugreifen. Im Allgemeinen
        speichert
        Cloudflare Daten auf User-Ebene für Domains in den Versionen Free, Pro und Business für weniger als 24 Stunden.
        Für
        Enterprise Domains, die Cloudflare Logs (früher Enterprise LogShare oder ELS) aktiviert haben, können die Daten
        bis
        zu 7 Tage gespeichert werden. Wenn allerdings IP-Adressen bei Cloudflare Sicherheitswarnungen auslösen, kann es
        zu
        Ausnahmen der oben angeführten Speicherungsdauer kommen.</p>
    <h3 class="adsimple-121400314">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
    <p>Cloudflare bewahrt Daten-Protokolle nur solange wie nötig auf und diese Daten werden auch in den meisten Fällen
        innerhalb von 24 Stunden wieder gelöscht. Cloudflare speichert auch keine personenbezogenen Daten, wie
        beispielsweise Ihre IP-Adresse. Es gibt allerdings Informationen, die Cloudflare als Teil seiner permanenten
        Protokolle auf unbestimmte Zeit speichert, um so die Gesamtleistung von Cloudflare Resolver zu verbessern und
        etwaige Sicherheitsrisiken zu erkennen. Welche permanenten Protokolle genau gespeichert werden, können Sie auf
        <a
                decorated="" class="adsimple-121400314" href="https://www.cloudflare.com/application/privacypolicy/">https://www.cloudflare.com/application/privacypolicy/</a>
        nachlesen. Alle Daten, die Cloudflare sammelt (temporär oder permanent), werden von allen personenbezogenen
        Daten
        bereinigt. Alle permanenten Protokolle werden zudem von Cloudflare anonymisiert.</p>
    <p>Cloudflare geht in ihrer Datenschutzerklärung darauf ein, dass sie für die Inhalte, die sie erhalten nicht
        verantwortlich sind. Wenn Sie beispielsweise bei Cloudflare anfragen, ob sie Ihre Inhalte aktualisieren oder
        löschen
        können, verweist Cloudflare grundsätzlich auf uns als Webseitenbetreiber. Sie können auch die gesamte Erfassung
        und
        Verarbeitung Ihrer Daten durch Cloudflare komplett unterbinden, indem Sie die Ausführung von Script-Code in
        Ihrem
        Browser deaktivieren oder einen Script-Blocker in Ihren Browser einbinden.</p>
    <p>Cloudflare ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere
        Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a decorated=""
                                                                                                  class="adsimple-121400314"
                                                                                                  href="https://www.privacyshield.gov/participant?id=a2zt0000000GnZKAA0&tid=121400314"
                                                                                                  target="_blank"
                                                                                                  rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000GnZKAA0</a>.<br/>
        Mehr Informationen zum Datenschutz bei Cloudflare finden Sie auf <a decorated="" class="adsimple-121400314"
                                                                            href="https://www.cloudflare.com/de-de/privacypolicy/?tid=121400314"
                                                                            target="_blank" rel="noopener noreferrer">https://www.cloudflare.com/de-de/privacypolicy/</a>
    </p>
    <h2 id="bootstrapcdn-datenschutzerklaerung" class="adsimple-121400314">BootstrapCDN Datenschutzerklärung</h2>
    <p>Um Ihnen all unsere einzelnen Webseiten (Unterseiten unserer Website) auf allen Geräten schnell und sicher
        ausliefern
        zu können, nutzen wir das Content Delivery Network (CDN) BootstrapCDN des amerikanischen Software-Unternehmens
        StackPath, LLC 2012 McKinney Ave. Suite 1100, Dallas, TX 75201, USA.</p>
    <p>Ein Content Delivery Network (CDN) ist ein Netzwerk regional verteilter Server, die über das Internet miteinander
        verbunden sind. Durch dieses Netzwerk können Inhalte, speziell sehr große Dateien, auch bei großen Lastspitzen
        schnell ausgeliefert werden.</p>
    <p>BootstrapCDN funktioniert so, dass sogenannte JavaScript-Bibliotheken an Ihren Browser ausgeliefert werden. Lädt
        nun
        Ihr Browser eine Datei vom BootstrapCDN herunter, wird Ihre IP-Adresse während der Verbindung zum
        Bootstrap-CDN-Server an das Unternehmen StockPath übermittelt.</p>
    <p>StackPath erwähnt auch in der hauseigenen Datenschutzerklärung, dass das Unternehmen aggregierte und
        anonymisierte
        Daten von diversen Diensten (wie BootstrapCDN) für die Erweiterung der Sicherung und für andere
        StackPath-Dienste
        und Clients verwenden. All diese Daten können aber keine Person identifizieren.</p>
    <p>Wenn Sie diese Datenübertragung unterbinden wollen, können Sie einen JavaScript-Blocker (siehe beispielsweise <a
            decorated="" class="adsimple-121400314" href="https://noscript.net/" target="_blank"
            rel="noopener noreferrer">https://noscript.net/</a>)
        installieren oder in Ihrem Browser die Ausführung von JavaScript-Codes deaktivieren. Bitte beachten Sie aber,
        dass
        dadurch die Website nicht mehr das gewohnte Service (wie etwa schnelle Ladegeschwindigkeit) bieten kann.</p>
    <p>StackPath ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere
        Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a decorated=""
                                                                                                  class="adsimple-121400314"
                                                                                                  href="https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&status=Active"
                                                                                                  target="_blank"
                                                                                                  rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&status=Active</a>.<br/>
        Mehr Informationen zum Datenschutz bei StackPath bzw. BootstrapCDN finden Sie auf <a decorated=""
                                                                                             class="adsimple-121400314"
                                                                                             href="https://www.bootstrapcdn.com/privacy-policy/?tid=121400314"
                                                                                             target="_blank"
                                                                                             rel="noopener noreferrer">https://www.bootstrapcdn.com/privacy-policy/</a>.
    </p>
    <p style="margin-top:15px">Quelle: Erstellt mit dem Datenschutz Generator von <a decorated=""
                                                                                     href="https://www.adsimple.at/online-marketing/"
                                                                                     title="AdSimple® Online Marketing und Webdesign"
                                                                                     rel="follow noopener noreferrer"
                                                                                     target="_blank">AdSimple® Online
        Marketing</a> in Kooperation mit <a decorated="" href="https://www.schoenheitsmagazin.at/" target="_blank"
                                            rel="follow noopener noreferrer">schoenheitsmagazin.at</a>
    </p>
</section>

<footer>
    <p id="contact">Contact</p><br>
    <div class="emails">
        <p><a href="mailto:7046@htl.rennweg.at">Dietrich Kops</a></p>
        <p>●</p>
        <p><a href="mailto:7047@htl.rennweg.at">Johanna Kronfuß</a></p>
        <p>●</p>
        <p><a href="mailto:7055@htl.rennweg.at">Nils Schneider-Sturm</a></p>
        <p>●</p>
        <p><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Sartori</a></p>
    </div>
    <img class="logofooter" src="../assets/images/Logo.png" alt="logo"><br>
</footer>

</body>
</html>