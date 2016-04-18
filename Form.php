<?php
/**
 * Form Library
 * 
 * PHP version > 5.4
 *
 * @author      Turan Karatuğ <tkaratug@hotmail.com.tr>
 * @license     MIT
 * @version     1.0
 * 
 */

class Form
{

    /**
     * Form open
     * @param   string  $name
     * @param   array   $attr
     * @return  string
     */
    public function open($name = '', $attr = [])
    {
        $form = '<form name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $form .= $key . '="' . $val . '" ';
            }
        }

        $form = trim($form);
        $form .= '>';

        return $form . "\n";
    }

    /**
     * Text input
     * @param   string  $name
     * @param   array   $attr
     * @return  string
     */
    public function input($name = '', $attr = [])
    {
        $element = '<input type="text" name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Password input
     * @param   string  $name
     * @param   array   $attr
     * @return  string
     */
    public function password($name = '', $attr = [])
    {
        $element = '<input type="password" name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Hidden input
     * @param   string  $name
     * @param   string  $value
     * @return  string
     */
    public function hidden($name = '', $value = '')
    {
        $element = '<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '">';
        return $element . "\n";
    }

    /**
     * File input
     * @param   string  $name
     * @param   bool    $multiple
     * @param   array   $attr
     * @return  string
     */
    public function file($name = '', $multiple = false, $attr = [])
    {
        if($multiple == true)
            $element = '<input type="file" name="' . $name . '[]" id="' . $name . '[]" multiple="multiple" ';
        else
            $element = '<input type="file" name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Custom input
     * @param   string  $type
     * @param   string  $name
     * @param   array   $attr
     * @return  string
     */
    public function custom($type = '', $name = '', $attr = [])
    {
        $element = '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Textarea
     * @param   string  $name
     * @param   string  $text
     * @param   array   $attr
     * @return  string
     */
    public function textarea($name = '', $text = '', $attr = [])
    {
        $element = '<textarea name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>' . $text . '</textarea>';

        return $element . "\n";
    }

    /**
     * SelectBox
     * @param   string  $name
     * @param   array   $options
     * @param   string  $selected
     * @param   array   $attr
     * @return  string
     */
    public function select($name = '', $options = [], $selected = '', $attr = [])
    {
        $element = '<select name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element .= '>';

        $dropdown = '';
        if(count($options) > 0) {
            foreach($options as $key => $val) {
                if($selected && $val == $selected)
                    $dropdown .= '<option vaue="' . $val . '" selected>' . $key . '</option>';
                else
                    $dropdown .= '<option vaue="' . $val . '">' . $key . '</option>';
            }
        }

        return $element . "\n" . $dropdown . "\n" . '</select>';
    }

    /**
     * Multiple SelectBox
     * @param   string  $name
     * @param   array   $options
     * @param   string  $selected
     * @param   array   $attr
     * @return  string
     */
    public function multiSelect($name = '', $options = [], $selected = '', $attr = [])
    {
        $element = '<select name="' . $name . '" id="' . $name . '" multiple="multiple" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element .= '>';

        $dropdown = '';
        if(count($options) > 0) {
            foreach($options as $key => $val) {
                if($selected && $val == $selected)
                    $dropdown .= '<option vaue="' . $val . '" selected>' . $key . '</option>';
                else
                    $dropdown .= '<option vaue="' . $val . '">' . $key . '</option>';
            }
        }

        return $element . "\n" . $dropdown . "\n" . '</select>';
    }

    /**
     * Checkbox
     * @param   string  $name
     * @param   string  $value
     * @param   bool    $checked
     * @param   array   $attr
     * @return  string
     */
    public function checkbox($name = '', $value = '', $checked = false, $attr = [])
    {
        $element = '<input type="checkbox" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        if($checked == true)
            $element .= 'checked';

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Radio button
     * @param   string  $name
     * @param   string  $value
     * @param   bool    $checked
     * @param   array   $attr
     * @return  string
     */
    public function radio($name = '', $value = '', $checked = false, $attr = [])
    {
        $element = '<input type="radio" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        if($checked == true)
            $element .= 'checked';

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Form submit
     * @param   string  $name
     * @param   string  $value
     * @param   array   $attr
     * @return  string
     */
    public function submit($name = '', $value = '', $attr = [])
    {
        $element = '<input type="submit" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Form button
     * @param   string  $name
     * @param   string  $content
     * @param   array   $attr
     * @return  string
     */
    public function button($name = '', $content = '', $attr = [])
    {
        $element = '<button type="button" name="' . $name . '" id="' . $name . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>' . $content . '</button>';

        return $element . "\n";
    }

    /**
     * Form reset button
     * @param   string  $name
     * @param   string  $value
     * @param   array   $attr
     * @return  string
     */
    public function reset($name = '', $value = '', $attr = [])
    {
        $element = '<input type="reset" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $element .= $key . '="' . $val . '" ';
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Form label
     * @param   string  $for
     * @param   string  $content
     * @param   array   $attr
     * @return  string
     */
    public function label($for = '', $content = '', $attr = [])
    {
        $label = '<label for="' . $for . '" ';

        if(count($attr) > 0) {
            foreach($attr as $key => $val) {
                $label .= $key . '="' . $val . '" ';
            }
        }

        $label = trim($label);
        $label .= '>' . $content . '</label>';

        return $label . "\n";
    }

    /**
     * Form close
     * @return  string
     */
    public function close()
    {
        return '</form>';
    }

}
