<?php
class Movies {
  public $titolo;
  public $regista;

  public function __construct($_titolo, $_regista)
  {
    $this->titolo = $_titolo;
    $this->regista = $_regista;
  }

  public function tempoPassato($annoDiUscita)
  {
    $this->annoDiUscita = $annoDiUscita;
    return $this->tempoPassato = 2021 - $annoDiUscita;
  }

  public function classificazione($incassi)
  {
    $this->incassi = $incassi;
    if ($incassi > 100000000) {
      return $this->classificaIncassi = 'Incassi molto alti';
    } else {
      return $this->classificaIncassi = 'Incassi non molto alti';
    }
  }
}

$titanic = new Movies('Titanic', 'James Francis Cameron');
$titanic->tempoPassato(1997);
$titanic->classificazione(187000000);

$sigAnelli = new Movies('Il Signore degli Anelli', 'Peter Jackson');
$sigAnelli->tempoPassato(2001);
$sigAnelli->classificazione(871530324);

$cadoNubi = new Movies('Cado dalle nubi', 'Gennaro Nunziante');
$cadoNubi->tempoPassato(2009);
$cadoNubi->classificazione(14073000);

var_dump($titanic);
var_dump($sigAnelli);
var_dump($cadoNubi);
