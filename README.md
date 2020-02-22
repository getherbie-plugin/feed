# Herbie Feed Plugin

`Feed` ist ein [Herbie](http://github.com/getherbie/herbie) Plugin, das aus deinen Seiten und Blogposts automatisch
einen RSS- und einen Atom-Feed im XML-Format generiert und als Seiten bereit stellt.


## Installation

Das Plugin installierst du via Composer.

	$ composer require getherbie/plugin-feed

Danach aktivierst du das Plugin in der Konfigurationsdatei.

    plugins:
        enable:
            - feed


## Konfiguration

Unter *plugins.config.feed* stehen dir die folgenden Optionen zur Verfügung:

    # if set no pages will be included (you do it manually)
    no_page: false

    # the [required] settings for your feeds
    channel:
        title: "The title of your feed"
        link: "http://www.example.org"
        description: "The description of your feed."
        language: "de"
        copyright: "Your name"


## Eigene Seite

Falls du mit `plugins.config.feed.no_page` das automatische Hinzufügen der Seiten deaktiviert hast, kannst
du eigene Seiten hinzufügen. Wie eine solche Seite aufgebaut sein sollte, siehst du dir am Besten im Feed-Plugin an. 


## Demo

<https://herbie.tebe.ch/rss.xml>  
<https://herbie.tebe.ch/atom.xml>
