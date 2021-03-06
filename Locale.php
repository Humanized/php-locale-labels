<?php

namespace humanized\localehelpers;

use Locale as NativeLocale;
use ResourceBundle;

class Locale
{

    const lookupPrefix = '';

    use LocaleHelperTrait;

    const labelFn = 'getDisplayLanguage';

    public function static _filterSystemLocale($locale)
    {
        return true;
    }

}
