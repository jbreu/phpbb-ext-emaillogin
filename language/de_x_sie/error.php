<?php

/**
* phpBB Extension - marttiphpbb emaillogin
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
        exit;
}

if (empty($lang) || !is_array($lang))
{
        $lang = [];
}

$lang = array_merge($lang, [
        'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_EMAIL'
                => 'Sie müssen eine Email-Adresse angeben um sich anzumelden.',
        'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_USERNAME_OR_EMAIL'
                => 'Sie müssen einen Benutzernamen oder eine Email-Adresse angeben um sich zunmelden.',
        'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_VALID_EMAIL'
                => 'Die Email-Adresse %1$s ist nicht gültig.',
        'MARTTIPHPBB_EMAILLOGIN_LOGIN_ERROR_EMAIL'
                => 'Die Email-Adresse (%1$s) ist nicht korrekt.
                        Bitte prüfen Sie die Angaben und versuchen Sie es erneut.
                        Falls Sie weiterhin Probleme haben, wenden Sie sich an die
                        %2$sForen-Administratoren%3$s.',
        'MARTTIPHPBB_EMAILLOGIN_ERROR_EMAIL_DUPLICATE'
                => 'Die Email-Adresse %1$s kann nicht verwenden werden,
                da sie mehrfach in der Datenbank eingetragen wurde.
                Bitte wenden Sie sich an die %2$sForen-Administratoren%3$s.',
]);
