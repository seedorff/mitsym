<h1>Cheatsheet</h1>
Oversigt og forklaring af visse indholdselementer med markup forklaring.
<h2 class="m-t-1">Oversigt over box-typer (cards)</h2>
<p>Disse card-typer vil være dem vi skal kunne oprette og redigere på intranettet generelt.</p>
<p>Det tre-spaltede layout opnås med en container med <strong>.card-columns</strong> classen, som det ses nedenfor.</p>
<p>Denne type kolonner er beregnet til dynamisk at tilpasse sig antallet og størrelsen af kasser.</p>
<p>Antallet af kolonner kan desuden justeres med <strong>.card-columns-x</strong>, hvor X (2-4) er antallet af kolonner.</p>
<div class="card-columns">
  
  <div class="card card-block">
      <h3 class="card-title">Standard farve</h3>
      <p class="card-text">Tekstelementer <strong>p</strong> har .card-text som CSS-class.</p>
      <p class="card-text">Basis HTML-markup for cards ses i denne kasse.</p>
      <p class="card-text">Herudover er en oversigt over de forskellige farve-typer til cards.</p>
  </div>

  <div class="card card-block card-primary card-inverse">
      <h3 class="card-title">.card-primary.card-inverse</h3>
      <p class="card-text"><strong>.card-primary</strong> angiver baggrundsfarven.</p>
      <p class="card-text"><strong>.card-inverse</strong> skifter tekstfarven fra mørk til lys.</p>
      <p class="card-text">De fleste cards med farvede baggrunde vil skulle bruge <strong>.card-inverse</strong>, da de er mørke farver.</p>
  </div>

  <div class="card card-block card-info card-inverse">
      <h3 class="card-title">.card-info.card-inverse</h3>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam saepe tempore debitis nostrum odit, voluptas voluptatibus iste, aut nihil nulla repellendus voluptates delectus accusantium dolor possimus soluta dignissimos cumque temporibus.</p>
  </div>

  <div class="card card-block card-success card-inverse">
      <h3 class="card-title">.card-success.card-inverse</h3>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam saepe tempore debitis nostrum odit, voluptas voluptatibus iste, aut nihil nulla repellendus voluptates delectus accusantium dolor possimus soluta dignissimos cumque temporibus.</p>
  </div>

  <div class="card card-block card-warning card-inverse">
      <h3 class="card-title">.card-warning.card-inverse</h3>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam saepe tempore debitis nostrum odit, voluptas voluptatibus iste, aut nihil nulla repellendus voluptates delectus accusantium dolor possimus soluta dignissimos cumque temporibus.</p>
  </div>

  <div class="card card-block card-danger card-inverse">
      <h3 class="card-title">.card-danger.card-inverse</h3>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam saepe tempore debitis nostrum odit, voluptas voluptatibus iste, aut nihil nulla repellendus voluptates delectus accusantium dolor possimus soluta dignissimos cumque temporibus.</p>
  </div>

</div>
<div class="card-columns">
  <div class="card">
    <img class="card-img-top img-fluid" src="http://placehold.it/380x180" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card med billede</h4>
      <p class="card-text">Denne type card inkluderer et billede som header. Alle responsive billeder har img-fluid css classen.</p>
    </div>
  </div>
</div>
<h2 class="m-t-1">Info/advarselskasse</h2>
<div class="jumbotron" id="alert-765456">
  <h1>Info/advarselskasse</h1>
  <p class="lead">Disse advarselskasser anvender <strong>.jumbotron</strong>.</p>
  <p class="lead">Tekst til denne type kasse anvender <strong>p.lead</strong>, der sikrer styling og layout.</p>
  <p class="lead">Advarselskassen kan med fordel skjules med en knap som denne:</p>
  <button class="btn btn-sm btn-primary" href="" role="button" onclick="$('#alert-765456').hide()">Skjul denne besked</button>
</div>

<h2 class="m-t-1">Statisk kolonne-layout til undersider</h2>
<p>For at opbygge et mere statisk layout anvendes <a href="http://v4-alpha.getbootstrap.com/layout/grid/">bootstraps traditionelle grid</a>.</p>
<p>Nedenstående eksempel er ofte en passende fordeling.</p>
<div class="example">
  <style scoped>
   .example .row>[class^=col-] {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(86,61,124,.15);
        border: 1px solid rgba(86,61,124,.2);
  </style>
  <div class="row">
    <div class="col-xs-12 col-lg-8">.col-lg-8</div>
    <div class="col-xs-6 col-lg-4">.col-lg-4</div>
  </div>

</div>
<h2 class="m-t-2">Bootstrap 4 Docs</h2>
  <p>Øvrig documentation findes her:</p>
  <a href="http://v4-alpha.getbootstrap.com/getting-started/introduction/" class="btn btn-primary" target="_blank">Bootstrap 4 docs</a>
