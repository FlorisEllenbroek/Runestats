# Runestats

Runestats is een webapplicatie waarmee je de statistieken van spelers in Old School RuneScape kunt ophalen en opslaan. Met deze applicatie kun je de progressie van een speler over tijd bijhouden door meerdere snapshots van hun statistieken in de database op te slaan en te vergelijken.

## Inhoudsopgave

- [Features](#features)
- [Vereisten](#vereisten)
- [Installatie](#installatie)
- [Uitvoering](#uitvoering)

## Features

- **Spelerregistratie**: Voeg spelers toe door hun naam in te voeren, waarna de applicatie hun statistieken via de Wise Old Man API ophaalt.
- **Statistieken opslaan**: Elke keer dat een speler opnieuw geregistreerd wordt, worden de nieuwe statistieken in de database opgeslagen.
- **Progressie bijhouden**: Bekijk de voortgang van een speler over tijd door eerdere en nieuwe statistieken te vergelijken.
- **Duidelijke weergave**: Statistieken en voortgang worden visueel gepresenteerd.

## Vereisten

Zorg ervoor dat je de volgende software geïnstalleerd hebt voordat je de applicatie uitvoert:

- PHP 7.4 of hoger
- Composer (voor het beheren van afhankelijkheden)
- Een webserver zoals Apache of Nginx
- MySQL of MariaDB

## Installatie

1. **Clone de repository:**

   ```bash
   git clone https://github.com/jouwgebruikersnaam/runestats.git
