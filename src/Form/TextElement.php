<?php


namespace App\Form;


class TextElement extends \NeutronStars\Form\TextElement
{
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
        $html .= '<input class="form-input" type="'.$this->type.'" name="'.$this->key.'" placeholder="" value="'
            .$this->value.'"'
            .(!empty($this->id) ? ' id="'.$this->id.'"' : '').'/>';
        return $html.'</div>';
    }
    public function validate(): void
    {
        if (empty($this->value) && ($this->filters['required'] ?? true)) {
            $this->error = 'Ce champ est requis.';
            return;
        }
        if(!empty($this->value)) {
            if (isset($this->filters['min'])) {
                if(strlen($this->value) < $this->filters['min']) {
                    $this->error = 'Il n\'y a pas assez de caractères';
                    return;
                }
            }
            if (isset($this->filters['max'])) {
                if(strlen($this->value) > $this->filters['max']) {
                    $this->error = 'Il y a trop de caractères.';
                    return;
                }
            }
            if (isset($this->filters['matches'])) {
                if (!preg_match($this->filters['matches'], $this->value)) {
                    $this->error = 'Une erreur est survenue';
                    return;
                }
            }
        }
    }
}