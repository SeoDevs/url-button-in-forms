<?php

namespace Seoegypt\UrlButtonInForms;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class UrlButtonInForms extends Field
{
    use SupportsDependentFields;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'url-button-in-forms';

    public $url = "";

    public function url($url)
    {
        $this->url = $url;
        return $this;
    }

    public function urlGenerate($url)
    {
         $this->withMeta(['url' => $url]);
         return $this;
    }

    public function urlLabel($label="Download"){
        $this->withMeta(['label' => $label]);
        return $this;
    }

    public function urlTarget($target="_self"){
        $this->withMeta(['target' => $target]);
        return $this;
    }

    public function disable()
    {
         $this->withMeta(['disabled' => true]);
         return $this;
    }

    public function enable()
    {
         $this->withMeta(['disabled' => false]);
         return $this;
    }
}
