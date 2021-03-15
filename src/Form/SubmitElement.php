<?php


namespace App\Form;


class SubmitElement extends \NeutronStars\Form\SubmitElement
{
    public function toHTML(): string
    {
        return '<input class="btn" type="submit" name="'.$this->getKey().'" value="'.$this->getValue().'" />';
    }
}