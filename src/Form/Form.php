<?php


namespace App\Form;


use NeutronStars\Form\FormElement;

class Form extends \NeutronStars\Form\Form
{
    protected array $defaultValues;

    public function __construct(array $values = [], array $defaultValues = [], string $action = '', string $method = 'POST', $secureXSRF = true)
    {
        parent::__construct($values, $action, $method, $secureXSRF);
        $this->defaultValues = $defaultValues;
    }

    public function add(FormElement $element): self
    {
        if ($this->isSubmit()) {
            if (isset($this->values[$element->getKey()])) {
                $element->setValue($this->values[$element->getKey()]);
            }
            $element->validate();
        } else {
            if(isset($this->defaultValues[$element->getKey()])){
                $element->setValue($this->defaultValues[$element->getKey()]);
            }
        }
        $this->elements[$element->getKey()] = $element;
        return $this;
    }
}