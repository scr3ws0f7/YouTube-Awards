{include file="header.tpl"}

{{if $pas == 1}}
	<div>
		<p>Du-te în setările contului tău şi adaugă în descrierea contului tău key-ul {$key}.</p>
	</div>
	<form method="POST" action="autentificare.php">
		<input name="submit" value="Activează" id="submit" type="submit">
		<input name="yt" value="{$yt}" type="hidden">
	</form>
{{/if}}


{{if $pas == 2}}
	{{if $eroare === true}}
		<div>
			<p>Cheia introdusă în descrierea contului tău este invalidă.</p>
		</div>
	{{else}}
		<div>
			<p>Contul a fost activat cu succes!</p>
		</div>
	{{/if}}
{{/if}}







{include file="footer.tpl"}