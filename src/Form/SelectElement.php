<?php


namespace App\Form;


use NeutronStars\Form\FormElement;

class SelectElement implements FormElement
{
    protected string $key;
    protected ?string $label;
    protected ?string $id;
    protected ?string $error = null;
    protected ?string $value = null;
    protected array $values;

    public function __construct(?string $label, string $key, array $values,?string $id = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->id = $id;
        $this->values = $values;
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
        $this->value = $value;
    }

    public function validate(): void
    {
        if (empty($this->value) && ($this->filters['required'] ?? true)) {
            $this->error = 'Champ obligatoire';
            return;
        }
        if(!empty($this->value)){
            if(empty($this->values[$this->value])){
                $this->error = 'Ce champ n\'est pas valide';
            }
        }
    }

    public function toHTML(): string
    {
        $html = '<div class="form-group">';
        if(!empty($this->label)) {
            $html .= '<label class="form-label"'.(!empty($this->id) ? ' id="'.$this->id.'"' : '').'>'
                .$this->label.'</label>';
        }
        if (!empty($this->error)) {
            $html .= '<span class="form-error">'.$this->error.'</span>';
        }
        $html .= '<select class="form-input" name="'.$this->key.'" '.(!empty($this->id) ? 'id="'.$this->id.'"' : '').'>';
        foreach ($this->values as $key=>$value){
            $html .= '<option value="'.$key.'" '.($key===$this->value ? 'selected' : '').'>'.$value.'</option>';
        }
        $html .= '</select>';
        return $html.'</div>';
    }
}