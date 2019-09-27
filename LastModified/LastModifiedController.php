<?php

namespace Statamic\Addons\LastModified;

use Statamic\API\Entry;
use Statamic\Extend\Controller;

class LastModifiedController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function getValue()
    {
        $timestamp = Entry::find(request('id'))->lastModified()->getTimestamp();
        $format = $this->getConfig('format', 'D M d Y H:i:s');
        $formated = \Carbon\Carbon::createFromTimestamp($timestamp)->format($format);
        return $formated;
    }
}
