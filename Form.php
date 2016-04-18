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
     * @param   string|array    $name
     * @param   array           $attr
     * @return  string
     */
    public function open($name = '', $attr = [])
    {
        if(is_array($name)) {
            $form = '<form ';
            if(count($name) > 0) {
                foreach($name as $key => $val)
                $form .= $key . '="' . $val . '" ';
            }
        } else {
            $form = '<form name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $form .= $key . '="' . $val . '" ';
                }
            }            
        }

        $form = trim($form);
        $form .= '>';

        return $form . "\n";
    }

    /**
     * Text input
     * @param   string|array    $name
     * @param   array           $attr
     * @return  string
     */
    public function input($name = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<input ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="text" name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Password input
     * @param   string|array    $name
     * @param   array           $attr
     * @return  string
     */
    public function password($name = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="password" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="password" name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }    
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Hidden input
     * @param   string|array    $name
     * @param   string          $value
     * @return  string
     */
    public function hidden($name = '', $value = '')
    {
        if(is_array($name)) {
            $element = '<input type="hidden" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
            $element = trim($element);
            $element .= '>';
        } else {
            $element = '<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '">';
        }

        return $element . "\n";
    }

    /**
     * File input
     * @param   string|array    $name
     * @param   bool            $multiple
     * @param   array           $attr
     * @return  string
     */
    public function file($name = '', $multiple = false, $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="file" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            if($multiple == true)
                $element = '<input type="file" name="' . $name . '[]" id="' . $name . '[]" multiple="multiple" ';
            else
                $element = '<input type="file" name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Custom input
     * @param   string|array    $type
     * @param   string          $name
     * @param   array           $attr
     * @return  string
     */
    public function custom($type = '', $name = '', $attr = [])
    {
        if(is_array($type)) {
            $element = '<input ';
            if(count($type) > 0) {
                foreach($type as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Textarea
     * @param   string|array    $name
     * @param   string          $text
     * @param   array           $attr
     * @return  string
     */
    public function textarea($name = '', $text = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<textarea ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<textarea name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>' . $text . '</textarea>';

        return $element . "\n";
    }

    /**
     * SelectBox
     * @param   string|array    $name
     * @param   array           $options
     * @param   string          $selected
     * @param   array           $attr
     * @return  string
     */
    public function select($name = '', $options = [], $selected = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<select ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<select name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
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
     * @param   string|array    $name
     * @param   array           $options
     * @param   string          $selected
     * @param   array           $attr
     * @return  string
     */
    public function multiSelect($name = '', $options = [], $selected = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<select multiple="multiple" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<select name="' . $name . '" id="' . $name . '" multiple="multiple" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
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
     * @param   string|array    $name
     * @param   string          $value
     * @param   bool            $checked
     * @param   array           $attr
     * @return  string
     */
    public function checkbox($name = '', $value = '', $checked = false, $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="checkbox" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="checkbox" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }

            if($checked == true)
                $element .= 'checked';
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Radio button
     * @param   string|array    $name
     * @param   string          $value
     * @param   bool            $checked
     * @param   array           $attr
     * @return  string
     */
    public function radio($name = '', $value = '', $checked = false, $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="radio" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="radio" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }

            if($checked == true)
                $element .= 'checked';
        }
        
        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Form submit
     * @param   string|array    $name
     * @param   string          $value
     * @param   array           $attr
     * @return  string
     */
    public function submit($name = '', $value = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="submit" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="submit" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>';

        return $element . "\n";
    }

    /**
     * Form button
     * @param   string|array    $name
     * @param   string          $content
     * @param   array           $attr
     * @return  string
     */
    public function button($name = '', $content = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<button type="button" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<button type="button" name="' . $name . '" id="' . $name . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        }

        $element = trim($element);
        $element .= '>' . $content . '</button>';

        return $element . "\n";
    }

    /**
     * Form reset button
     * @param   string|array    $name
     * @param   string          $value
     * @param   array           $attr
     * @return  string
     */
    public function reset($name = '', $value = '', $attr = [])
    {
        if(is_array($name)) {
            $element = '<input type="reset" ';
            if(count($name) > 0) {
                foreach($name as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
            }
        } else {
            $element = '<input type="reset" name="' . $name . '" id="' . $name . '" value="' . $value . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $element .= $key . '="' . $val . '" ';
                }
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
        if(is_array($for)) {
            $label = '<label ';
            if(count($for) > 0) {
                foreach($for as $key => $val) {
                    $label .= $key . '="' . $val ."' ";
                }
            }
        } else {
            $label = '<label for="' . $for . '" ';

            if(count($attr) > 0) {
                foreach($attr as $key => $val) {
                    $label .= $key . '="' . $val . '" ';
                }
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