<form id="dati_anagrafici">
<div class="form-group row">
	<label for="nome" class="col-sm-2 form-control-label">Nome</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="nome" placeholder="Nome">
	</div>
</div>
<div class="form-group row">
	<label for="nome" class="col-sm-2 form-control-label">Cognome</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="nome" placeholder="Cognome">
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
      <button  type="button" onclick="alert('asd')" id="cf" class="btn btn-secondary">Calcola Codice Fiscale</button>
   </div>
</div>
<a href="Menu/Registrati.php"  onmouseover="ajax_setup()"dest="cont2" meth="GET"> asdasd</a>
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