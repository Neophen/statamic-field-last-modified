<?php

namespace Statamic\Addons\LastModified;

use Statamic\API\Config;
use Statamic\Extend\Modifier;
use \Carbon\Carbon;

class LastModifiedModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($timestamp)
    {
        $locale = Config::getFullLocale();
        $format = '%d %B %G';
        setlocale(LC_ALL, $locale);
        $formated = Carbon::createFromTimestamp($timestamp)->formatLocalized($format);
        return $formated;
    }
}
