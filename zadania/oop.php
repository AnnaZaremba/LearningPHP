<div>
    <?php

    class Pokaz
    {
        public static function getDiv($tekst)
        {
            return "<div>" . $tekst . "</div>";
        }
    }

    class Zwierze
    {
        private $imie;

        function __construct($imieZwierzecia)
        {
            $this->imie = $imieZwierzecia;
        }

        public function getImie()
        {
            return Pokaz::getDiv($this->imie);
        }
    }

    class Pies extends Zwierze
    {
        public function szczekaj()
        {
            return Pokaz::getDiv("Hau! hau!");
        }
    }

    class ZlyPies extends Pies
    {
        public function ugryz()
        {
            return Pokaz::getDiv("Haps!");
        }
    }

    $zwierze = new Zwierze("Animal");
    echo $zwierze->getImie();

    $pies = new Pies("Pikus");
    echo $pies->getImie();
    echo $pies->szczekaj();

    $zlyPies = new ZlyPies("Reks");
    echo $zlyPies->getImie();
    echo $zlyPies->szczekaj();
    echo $zlyPies->ugryz();
    ?>
</div>
