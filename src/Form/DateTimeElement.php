<?php


namespace App\Form;


use NeutronStars\Form\FormElement;

class DateTimeElement extends TextElement
{
    protected string $type = 'datetime-local'; //pour creer un nouveau champ datetime

    public function validate(): void
    {
        if (empty($this->value) && ($this->filters['required'] ?? true)) {
            $this->error = 'Ce champ est requis.';
            return;
        }
        if(!empty($this->value)) {
            try{
                $dateTime = new \DateTime($this->value);
            }catch(\Throwable $throwable){
                $this->error = 'Ce champ n\'est pas une date valide';
            }
        }
    }
}
