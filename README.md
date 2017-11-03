### JavaScrip LAB 1


## Lomakkeen validointi
  * Tee Documents kansioon uusi kansio 'WebPerusteet'
  * Avaa terminaali (cmd + välilyönti, kirjoita terminal)
  * Mene kansioon 'WebPerusteet' `cd Documents/WebPerusteet`
  * Lataa tämä repo `git clone https://github.com/ilkkamtk/WebPer1.git`

## Elementtien valitseminen ja muokkaaminen sekä tapahtumat
  * avaa esimerkki.html
  * opetellaan yhdessä valitsemaan ja muokkaamaan elementtejä sekä lisätään tapahtumia (event)
  * Apuja: 
    * http://www.w3schools.com/jsref/met_document_queryselector.asp
    * http://www.w3schools.com/jsref/prop_html_innerhtml.asp
    * http://www.w3schools.com/jsref/met_element_setattribute.asp
    * http://www.w3schools.com/js/js_htmldom_eventlistener.asp
    * https://medium.com/modern-javascript/javascript-event-handlers-280ed3cc5631


### Tehtävä A 
1. Avaa teht_a.html editorissa
2. Tee lomake, jossa on seuraavat kentät:
  * Etunimi
  * Sukunimi
  * Sähköpostiosoite
  * Puhelinnumero
  * Osoite
  * Postinumero
  * Salasana
  * Lähetä-nappi
3. Tarkasta HTML koodi validaattorilla, ja tee validaattorin mahdollisesti ehdottamat muutokset
4. Tee lomakkeen validointi (tarkistus) HTML5 avulla
  * Etunimi ja sukunimi ovat pakollisia
  * Sähköpostiosoitteen on oltava oikeaa muotoa ja se on pakollinen
  * Puhelinnumeron on oltava muotoa +358401234567
  * Osoite ja postinumero eivät ole pakollisia, mutta postinumeron on oltava tasan 5 numeroa
  * Salasana pitää olla peitetty ja se on pakollinen
  * Apuja
    * http://www.the-art-of-web.com/html/html5-form-validation/
    * http://www.w3schools.com/TAgs/att_input_pattern.asp
    * http://www.regular-expressions.info/tutorial.html
    * https://regex101.com/
  * Tee myös CSS mikäli aikaa riittää (Muokkaa css-kansion main.css -tiedostoa)

### Tehtävä B 
1. Avaa teht_b.html editorissa
2. Kopioi tehtävä A:ssa tekemäsi lomake
3. Lisää form-elementtiin novalidate attribuutti (HTML5 validointi pois päältä)
4. Tee lomakkeen validointi JavaScriptin avulla
  * Tarkistetaan samat ominaisuudet, kuin tehtävässä A
    * `var elementti = document.querySelector()`
    * `var elementit = document.querySelectorAll()`
    * `elementti.addEventListener('submit', funktio)`
    * `elementti.setAttribute('style', 'cssOminaisuus: arvo;')`
  * Jos tarkistus ei mene läpi, lomakkeen lähettäminen estetään
    * `preventDefault()`

## Palautus
1. Kopioi tämä kansio (WebPer1) kotihakemistoosi ja palauta Tuubiin linkki.

