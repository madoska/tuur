<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <title>Tuur</title>
  </head>
  <body>
    <div class="nav-container">
      <div class="wrapper">
        <nav>
          <div class="logo">
            <a href="#"
              ><img class="logo-img" src="images\logo-small.svg" alt="logo"
            /></a>
          </div>

          <div class="links">
            <ul class="nav-items">
              <li><a href="#tuur">Tuur</a></li>

              <li><a href="#product">Product</a></li>

              <li><a href="#faq">FAQ</a></li>

              <li><a href="#contact">Contact</a></li>

              <div class="dash">
                <a href="https://login.salesforce.com/?locale=nl">Dashboard</a>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div class="hero">
      <div class="hero-img">
        <div><img class="hero-logo" src="images\logo-big.png" alt="" /></div>
        <div class="hero-txt"><p>Een tedere vriend.</p></div>
      </div>
    </div>

    <div class="video-container" id="tuur">
      <div class="video">
        <video width="640" height="360" controls autoplay muted>
          <source src="images\Tuur_promo.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="tuur-txt">
        <p>
          Tuur is een een robot poes speciaal ontwikkelt voor ouderen. Zijn
          zachte vacht brengt troost en wekt warme gevoelens op, net als een
          echt huisdier. Aai hem zacht en hij kwispelt niet alleen zijn
          staartje; ondertussen meet hij ook jouw hartslag. Dit is wat Tuur zo uniek maakt; 
          de combinatie van <b>psychisch en fysisch welzijn</b>. 
          <br></br>Hij biedt ouderen 
          <b>troost</b>, en met onze <b>“Connected Patient”</b> functionaliteit kunnen verzorgers nauwkeurig de medische gegevens van hun oudere monitoren via het Dashboard.

          Met Tuur willen wij zowel eenzame ouderen als de mensen die voor hen zorgen een oplossing bieden.
        </p>
        <div class="line-container"><div class="tuur-line"><img src="images\line-horizontal.svg" alt=""></div>
        <p class="tuur-special">"Tuur is er voor jou."</p></div>
      </div>
    </div>

      <div class="cat-blue">
        <img class="cat-blue-img" src="images\cat-blue.svg" />
      </div>
      
    <div class="newsletter-container">
      <p class="newsletter-title">Meld je aan voor onze nieuwsbrief!</p>
      <p class="newsletter-sub">
        Ontvang mails met informatie, updates en meer.
      </p>
      <p class="newsletter-success">Succesvol ingeschreven!</p>
      <div class="form" id="newsletter">
        <form action="" method="post">
          <input type="text" name="email" id="email" placeholder="email" />
          <input type="submit" id="submit" value="Schrijf je in" />
        </form>
      </div>
    </div>

    <div class="product-box" id="product">
      <div class="product">
        <img class="box-img" src="images\tuur-fur.png" alt="" />
        <p class="box-txt">Aai zijn zachte vacht <br>en praat tegen Tuur.</p>
      </div>
      <div class="product">
        <img src="images\tuur-tail.png" alt="" class="box-img" />
        <p class="box-txt">Zijn staart beweegt <br>wanneer je hem streelt.</p>
      </div>
      <div class="product">
        <img src="images\tuur-connectedpatient.png" alt="" class="box-img" />
        <p class="box-txt">Tuur meet je vitale data <br>en visualiseert ze.</p>
      </div>
    </div>

  <div class="product-container1">
    <div class="product-img">
      <img class="product-tuur" src="images/tuur-body.png" alt="" />
    </div>

    <div class="product-txt">
      <h2 class="product-heading">Een tedere vriend</h2>
      <div class="txt1">
        <p>
          In tegenstelling tot echte husidieren heeft Tuur geen verzorging
          nodig; meer nog, hij zorgt voor jou! Dit maakt hem een perfect
          alternatief voor ouderen die niet langer in staat zijn een eigen
          huisdier te houden.
        </p>
      </div>
      <div class="txt2">
        <p>
          Tuur is ontwikkelt door IMD-studentes Annelies Deroy en Medina Dadurgova als project
          voor het vak Lab 2. Het idee is ontstaan uit het concept Smart Elderly
          Care. Uit ons research hebben wij geleerd dat eenzaamheid een groot
          probleem is bij ouderen dat vaak onopgemerkt blijft en daarnaast ook
          een negatieve impact heeft op de algemene gezondheid. Wij stelden ons
          de vraag: “Hoe kunnen wij technologie gebruiken om ouderen troost te
          bieden en hun gezondheid te monitoren?”. Zo is Tuur ontstaan.
        </p>
      </div>
    </div>
  </div>

  <div class="product-container2">
    <div class="product-txt2">
      <h2 class="product-heading">Tuur zorgt voor jou</h2>
      <div class="txt3">
        <p>
          Tuur's hartslagmeter is wat hem zo uniek maakt. Hij heeft geen zorg nodig, maar wil juist zorgen voor jou.
        </p>
      </div>
      <div class="txt4">
        <p>
          Wij zijn gepartnerd met Salesforce, een bedrijf gespecialiseerd in onder andere het beheer van medische gegevens. Hierdoor kunnen we een zeer betrouwbaar systeem aanbieden dat verzorgers toestaat de gezondheid van hun ouderen in één oogopslag te monitoren.
        </p>
      </div>
      <div class="txt-extra">
        <p>
          Heb je Tuur al?
        </p>
        <div class="txt-dash">
          <a href="https://login.salesforce.com/?locale=nl">Ga naar jouw dashboard</a>
        </div>
      </div>
    </div>

    <div class="product-img2">
      <img class="product-salesforce" src="images/salesforce.png" alt="" />
    </div>
  </div>



    <div class="faq" id="faq">
      <div class="faq1">
        <p class="q">Waar kan ik Tuur aankopen?</p>
        <p class="a">
          Tuur is een project voor het vak Lab 2 van de Thomas More Hoge School
          bachelor Interactieve Multimedia Design en (nog) niet beschikbaar voor
          aankoop. Om op de hoogte te blijven van eventuele updates raden wij u aan 
          zich aan te melden voor onze nieuwsbrief. U kan ook gerust contact met ons opnemen 
          via onderstaand contactformulier.
        </p>
      </div>
      <div class="faq2">
        <p class="q">Waarvoor dient Tuur?</p>
        <p class="a">
          Tuur is een robot huisdier voor ouderen die niet langer in staat zijn
          echte huisdieren te houden. Met Tuur hopen wij eenzaamheid bij ouderen
          tegen te gaan en tegelijkertijd ook hun verzorgers helpen met het monitoren van de gezondheid.
        </p>
      </div>
      <div class="faq3">
        <p class="q">Helpt een robot huisdier echt?</p>
        <p class="a">
          Studies tonen aan dat robot huisdieren positieve emoties kunnen
          opwekken bij ouderen. Niet alleen worden ze gelukkiger van zijn snoezig zacht uiterlijk, 
          maar het is bewezen dat ouderen ook socialer worden.
        </p>
      </div>
    </div>

    <div class="cat-pink">
      <img class="cat-pink-img" src="images\cat-pink.png" />
    </div>

    <div class="contact-container" id="contact">
      <p class="mail-title">Geen antwoord gevonden op uw vraag?</p>
      <p class="mail-sub">
        Aarzel niet om contact op te nemen met ons.
      </p>
      <p class="mail-success">Wij hebben uw vraag goed ontvangen.</p>
      <div class="form">
        <form action="" method="post" class="contact-form">
          <input type="text" name="email" id="contact-email" placeholder="email" />
            <textarea name="contact" id="contact-txt" placeholder="Uw vraag hier..." cols="100" rows="10"></textarea>
          <input type="verzend" id="verzend" value="Verzend" />
        </form>
      </div>
    </div>

    <div class="info">
      <div class="logo-black">
        <img src="images\logo-black.png" alt="" class="logo-info">
      </div>

      <div class="items">
        <div class="links-info">
          <ul class="info-items">
            <li><a href="#tuur">Over Tuur</a></li>
    
            <li><a href="#product">Product</a></li>
    
            <li><a href="#faq">FAQ</a></li>
    
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
    
        <div class="info-contact">
          <ul class="contact-items">
            <li><b class="info-bold">Contact</b></li>
            <li>015 36 91 00</li>
    
            <li><a href="mailto:tuurcare@gmail.com">tuurcare@gmail.com</a></li>
          </ul>
        </div>
    
        <div class="info-location">
          <ul class="location-items">
            <li><b class="info-bold">IMD</b></li>
            <li>Thomas More Hoge School</li>
            <li>Zandpoortvest 60</li>
            <li>2800 Mechelen</li>
          </ul>
        </div>
      </div>
    </div>

    <footer>
      <img src="images\line-horizontal.png" alt="" class="footer">
      <p class="cr">© Annelies Deroy, Medina Dadurgova — 2020</p>
    </footer>

    <script>
        Array.from(document.querySelectorAll("#submit")).forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let email = e.target.parentNode.querySelector('#email').value;

                console.info(email);

                const formData = new FormData();

                formData.append('email', email);

                fetch('savemail.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(result => {
                        document.querySelector('.newsletter-sub').style.display="none";
                        document.querySelector('.newsletter-success').style.display="block";
                        document.querySelector('#newsletter').style.display="none";
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        Array.from(document.querySelectorAll("#verzend")).forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let email = e.target.parentNode.querySelector('#contact-email').value;
                let message = e.target.parentNode.querySelector('#contact-txt').value;

                console.info(email, message);

                const formData = new FormData();

                formData.append('email', email);
                formData.append('message', message);

                fetch('sendmail.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(result => {
                        document.querySelector('#contact-email').style.display="none";
                        document.querySelector('.mail-success').style.display="block";
                        document.querySelector('#contact-txt').style.display="none";
                        document.querySelector('#verzend').style.display="none";
                        document.querySelector('.mail-sub').style.display="none";
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
  </body>
</html>
