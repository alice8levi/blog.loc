<?php
class Validator
{
    protected $errors = [];
    
    //список существующих валидаторов. названия одлжны совпадать с именами функций
    protected $data_items;
    protected $validators_list = ['required', 'min', 'max', 'email', 'match'];
    protected $messages = [
        'required' => 'The :fieldname: field is required',
        'min' => 'The :fieldname: field must be a minimun :rulevalue: characters',
        'max' => 'The :fieldname: field must be a maximum :rulevalue: characters',
        'email' => 'Not valid email',
        'match' => 'The :fieldname: field must match :rulevalue: field',
    ];
    public function validate($data = [], $rules = [])
    {
        $this->data_items = $data;
        foreach ($data as $fieldname => $value) {
            //если это поле нужно валидировать(если оно есть в массиве правил rules)
            if (in_array($fieldname, array_keys($rules))) {
               // dump($fieldname);
                //проверяем есть ли такой валидатор
                $this->checkValidator([
                    'fieldname' => $fieldname, //название поля
                    'value' => $value,//данные поля
                    'rules' => $rules[$fieldname], //массив правил для этого поля
                ]);
            }
        }
        return $this;
    }
    protected function checkValidator($field)
    {
       //dump($field);
        foreach ($field['rules'] as $rule => $rule_value) {
            //если правило есть в существующих валидаторах
            if (in_array($rule, $this->validators_list)) {
                if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value])) {
                    $this->addError(
                        $field['fieldname'],
                        str_replace(
                            [':fieldname:', ':rulevalue:'],
                            [$field['fieldname'], $rule_value],
                            $this->messages[$rule]
                        )
                    );
                }
            }
        }
    }
    protected function addError($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function hasErrors()
    {
        return !empty($this->errors);
    }
    protected function required($value, $rule_value)
    {
        return !empty(trim($value));
    }
    protected function min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }
    protected function max($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }

    protected function email($value, $rule_value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    protected function match($value, $rule_value)
    {
        return $value === $this->data_items[$rule_value];
    }

    public function listErrors($fieldname)
    {
        $errors_list = '';
        if (isset($this->errors[$fieldname])) {
            $errors_list .= "<div class='invalid-feedback d-block'><ul class='list-unstyled'>";
            foreach ($this->errors[$fieldname] as $error) {
                $errors_list .= "<li>{$error}</li>";
            }
            $errors_list .= "</ul></div>";
        }
        return $errors_list;
    }
}