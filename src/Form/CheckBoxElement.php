<?php


namespace App\Form;


use NeutronStars\Form\FormElement;

class CheckBoxElement implements FormElement
{

    protected string $key;
    protected ?string $label;
    protected ?string $id;
    protected ?string $error = null;
    protected ?string $value = '0';


    public function __construct(?string $label, string $key, ?string $id = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->id = $id;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function isValid(): bool
    {
        return empty($this->error);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setValue($value): void
    {
        $this->value = $value === 'on' || $value === '1' ? '1' : '0';
    }

    public function validate(): void
    {

    }

    public function toHTML(): string
    {
        $html = '<div class="form-group">';

        if (!empty($this->error)) {
            $html .= '<span class="form-error">'.$this->error.'</span>';
        }
        $html .='<input class="form-input-inline" type="checkbox" name="'.$this->key.'" '
            .(!empty($this->id) ? 'id="'.$this->id.'"' : '').' ' .($this->value === '1' ? 'checked' : '').'>';
        if(!empty($this->label)) {
            $html .= '<label class="form-label-inline"'.(!empty($this->id) ? ' id="'.$this->id.'"' : '').'>'
                .$this->label.'</label>';
        }
        return $html.'</div>';
    }
}