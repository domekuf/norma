<form method="post" id="dati_anagrafici" action="http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale">
<div class="form-group row">
	<label for="nome" class="col-sm-2 form-control-label">Nome</label>
	<div class="col-sm-10">
		<input type="text" name="Nome" class="form-control" id="nome" placeholder="Nome">
	</div>
</div>
<div class="form-group row">
	<label for="cognome" class="col-sm-2 form-control-label">Cognome</label>
	<div class="col-sm-10">
		<input type="text" name="Cognome" class="form-control" id="cognome" placeholder="Cognome">
	</div>
</div>
<div class="form-group row">
	<label for="data" class="col-sm-2 form-control-label">Data Nascita</label>
	<div class="col-sm-10">
		<input type="text" name="DataNascita" class="form-control" id="data" placeholder="26/04/1991">
	</div>
</div>
<div class="form-group row">
	<label for="comune" class="col-sm-2 form-control-label">Comune Nascita</label>
	<div class="col-sm-10">
		<input type="text" name="ComuneNascita" class="form-control" id="comune" placeholder="Castel San Giovanni">
	</div>
</div>
<div class="form-group row">
	<label for="sesso" class="col-sm-2 form-control-label">Sesso</label>
	<div class="col-sm-10">
		<input type="text" name="Sesso" class="form-control" id="sesso" placeholder="M">
	</div>
</div>
<div class="form-group row">
	<label for="nome" class="col-sm-2 form-control-label">Email</label>
	<div class="col-sm-10">
		<input type="email" class="form-control" id="email" placeholder="Email">
	</div>
</div>
<div class="form-group row">
	<label for="codicefiscale" class="col-sm-2 form-control-label">Codice Fiscale</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="codicefiscale" placeholder="Codice Fiscale">
	</div>
</div>
<div class="form-group row">
   <div class="col-sm-offset-2 col-sm-10">
      <button  type="button" onclick="CalcolaCodiceFiscale('dati_anagrafici','codicefiscale')" id="cf" class="btn btn-secondary">Calcola Codice Fiscale</button>
   </div>
</div>

<div class="form-group row">
   <div class="col-sm-offset-2 col-sm-10">
      <button  type="submit" id="cf2" class="btn btn-secondary">Calcola Codice Fiscale</button>
   </div>
</div>
<a href="Menu/Registrati.php"  onmouseover="ajax_setup()" dest="cont2" meth="GET"> asdasd</a>
<div id="cont2">
</div>
</form>

<script>
function funz(){
alert('kjh');
cfUrl='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale';
uploadButton=$('#cf');
form=$('#dati_anagrafici');
console.log(form);
}
//form $//Nome=string&Cognome=string&ComuneNascita=string&DataNascita=string&Sesso=string
</script>
<?
for($i=0;$i<100000;$i++){
	$j=$i*$i;
}
?>