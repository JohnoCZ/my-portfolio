<?php
// Years count
$programing_years = date('Y') - 2017;
if ($programing_years >= 5)
    $year = "let";
else
    $year = "roky";

// Hlavní
$lang['about'] = 'O mně';
$lang['projects'] = 'Projekty';
$lang['gallery'] = 'Galerie';
$lang['social-sites'] = 'Sociální sítě';
$lang['contact'] = 'Kontakt';

// About
$lang['about-text-1'] = 'Zdravím tě! Jmenuji se Johno (samozřejmě je to přezdívka) a mezi moje koníčky patří programování, fotografování a extremní sporty. <br><br> Programování se věnuji již ' . $programing_years . ' ' . $year .'. Začínal jsem na klasickém HTML & CSS, postupně jsem se pak dostal k PHP. V roce 2020 jsem se začal zajímat i o jiné programovací jazyky, jako je C#, Python nebo JavaScript.';

// Projects
$lang['ProjectFuture.cz'] = 'Správa webu na linuxovém serveru s Apache2 systémem';
$lang['Chapes.cz'] = 'Vyvíjení webu pro vzdělávaní a zkoušení znalostí';
$lang['Friday'] = 'Vyvíjení vlastního voice asistenta pro ovládaní chytré domácností';
$lang['TraiderBlocks.eu'] = 'Správa celé sítě TraiderBlocks.eu společně s E-Shopem a vedením teamu';

// Form
$lang['form-name'] = 'Jméno a přijmení';
$lang['form-email'] = 'E-Mail';
$lang['form-text'] = 'Zpráva';
$lang['form-year'] = 'Aktuální rok (antispam)';
$lang['form-send'] = 'Odeslat';

// Form alerts
$lang['form-error-not-fill'] = 'Formulář není správně vyplněný!';
$lang['form-error-send'] = 'Email se nepodařilo odeslat. Omlouváme se za potíže.';
$lang['form-error-success'] = 'Email byl úspěšně odeslán, brzy se vám ozvu.';

// Footer
$lang['copyright'] = 'Všechny práva vyhrazena';
$lang['advertise'] = 'Reklamní zóna';

// Ostatní
$lang['current'] = 'součastnost';
