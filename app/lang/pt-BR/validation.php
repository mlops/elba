<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"         => "The :atributo deve ser aceito.",
    "active_url"       => "The :atributo não é uma URL válida.",
    "after"            => "The :atributo deve ser uma data após :date.",
    "alpha"            => "The :atributo só pode conter letras.",
    "alpha_dash"       => "The :atributo só pode conter letras, números e traços.",
    "alpha_num"        => "The :atributo só pode conter letras e números.",
    "array"            => "The :atributo deve ser um array.",
    "before"           => "The :atributo deve ser uma data anterior :date.",
    "between"          => array(
        "numeric" => "The :atributo deve estar entre :min e :max.",
        "file"    => "The :atributo deve estar entre :min e :max kilobytes.",
        "string"  => "The :atributo deve estar entre :min e :max characters.",
        "array"   => "The :atributo deve ter entre :min e :max items.",
    ),
    "confirmed"        => "The :confirmação atributo não corresponde.",
    "date"             => "The :atributo não é uma data válida.",
    "date_format"      => "The :atributo não corresponder ao formato :format.",
    "different"        => "The :atributo e :other deve ser diferente.",
    "digits"           => "The :atributo deve ser :digits digits.",
    "digits_between"   => "The :atributo deve estar entre :min e :max digits.",
    "email"            => "The :atributo formato é inválido.",
    "exists"           => "o selecionado :attribute é inválido.",
    "image"            => "O :attribute deve ser uma imagem.",
    "in"               => "O selected :attribute é inválido..",
    "integer"          => "O :attribute deve ser um número inteiro.",
    "ip"               => "O :attribute deve ser um endereço IP válido.",
    "max"              => array(
        "numeric" => "O :attribute não pode ser superior a :max.",
        "file"    => "O :attribute não pode ser superior a :max kilobytes.",
        "string"  => "O :attribute não pode ser superior a :max character.",
        "array"   => "O :attribute não pode ter mais de :max itens.",
    ),
    "mimes"            => "O :attribute deve ser um arquivo de type: :values.",
    "min"              => array(
        "numeric" => "O :attribute deve ser pelo menos :min.",
        "file"    => "O :attribute deve ser pelo menos :min kilobytes.",
        "string"  => "O :attribute deve ser pelo menos :min character.",
        "array"   => "O :attribute deve ter pelo menos :min itens.",
    ),
    "not_in"           => "O selecionado :attribute é inválido.",
    "numeric"          => "O :attribute deve ser um número.",
    "regex"            => "O :attribute formato é inválido.",
    "required"         => "O :attribute campo é obrigatório.",
    "required_if"      => "O :attribute campo é obrigatório quando :other e :value.",
    "required_with"    => "O :attribute campo é obrigatório quando :values é presente.",
    "required_without" => "O :attribute campo é obrigatório quando :values não está presente.",
    "same"             => "O :attribute e :other deve combinar.",
    "size"             => array(
        "numeric" => "O :attribute devemos ser :size.",
        "file"    => "O :attribute devemos ser :size kilobytes.",
        "string"  => "O :attribute devemos ser :size characters.",
        "array"   => "O :attribute deve conter :size itens.",
    ),
    "unique"           => "O :attribute já foi requerido.",
    "url"              => "O :attribute formato é inválido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
