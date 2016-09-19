# Contao Erweiterung Change Contrast

## Frontend-Modul

Beschreibung
-----------------------

Mit der Contao Erweiterung "mwk-change-contrast" (Frontend-Modul) können Website Schriftfarben und Hintergründe von einzelnen Bereichen überschrieben werden. Durch Eingabefelder können folgende Button definiert und zusätzlich konfiguriert werden:

* Kontrat Button // Beschriftung kann bestimmt werden
* Reset Button  // Beschriftung kann bestimmt werden

Die Button Formatierung übernimmt das Bootstrap 3 Framework. In der Button Konfiguration wurde die CSS Klasse .btn-custom hinzugefügt um seinen eigenen Button Style zu definieren.

Die CSS Custom Klasse wird wie folgt angesprochen:

```
.mod_mwk_change_contrast .btn-custom {
    color: #fff;
    background-color: #333;
    border-color: #010101;
}

.mod_mwk_change_contrast .btn-custom:hover,
.mod_mwk_change_contrast .btn-custom:focus,
.mod_mwk_change_contrast .btn-custom.focus,
.mod_mwk_change_contrast .btn-custom:active,
.mod_mwk_change_contrast .btn-custom.active {
    color: #fff;
    background-color: #212121;
    border-color: #010101;
}

.mod_mwk_change_contrast .btn-custom:active,
.mod_mwk_change_contrast .btn-custom.active {
    background-image: none;
}
```

In der Change-Contrast Konfiguration können eizelne HTML-Tag Bereiche definiert werden wie z.B. (body,div,a,h1,h2,h3,h4,h5,h6), die Bereiche werden durch ein Komma ohne Leerzeichen getrennt. "#" und "." für Selektoren und Klassen dürfen nicht eingegeben werden. Schriftfarbe und Hintergrundfarbe können definiert werden, die Eingabe der jeweiligen Farbcodes ist wird derzeit über den Hex-Code bestimmt, die "#" davor muss weggelassen werden.

Nach speichern des Frontend-Moduls und einbinden in das Seitenlayout erscheinen 2 Buttons auf der Website. Die Positionierung der Buttons kann über CSS frei bestimmt werden.

CSS Klassen:

```
.mod_mwk_change_contrast #reset-mwk42 // Reset-Button
.mod_mwk_change_contrast #contrast-mwk42   // Kontrast-Button

```

ACHTUNG:
Die Zahl 42 in diesem Beispiel wird durch einen Ramdon-Key generiert und ist nicht gleich.


Wenn die Buttons angeklickt werden, wird über jQuery in den einzelnen HTML-Tag Bereichen ein style="" hinzugefügt um die Werte zu überschreiben. Damit die Werte aber auch auf den Folgeseiten gespeichert bleiben wurde ein Cookie JS Framework eingesetzt. Nach klicken auf den Reset Button werden die HTML-Tag Bereiche wieder zurückgesetzt.


System Vorraussetzungen
-----------------------

 * Contao 3.2.x
 * Contao 3.3.x
 * Contao 3.4.x

Wichtig
--------

Für diese Erweiterung muss die Erweiterung _mwk-core installiert werden!


Installation
------------

Durch das Contao repository oder den Modul Ordner nach system/modules kopieren. Im Menüpunkt Erweiterungen verwalten
die Datenbank Aktualisierung ausführen.

Lizenz:
-------

Eine Lizenz kann über http://medienworx.eu oder über unser ServiceDesk unter https://project.medienworx.eu erworben werden.

License: Commercial license
