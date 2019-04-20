<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 12:32 PM
 */

namespace src\state;


use src\BaseController;

class StateController extends BaseController
{

    public function index()
    {
        $editor = new TextEditor(new DefaultText());

        $editor->type('First line');
        echo '<br />';
        $editor->setState(new UpperCase());

        $editor->type('Second line');
        echo '<br />';

        $editor->type('Third line');
        echo '<br />';

        $editor->setState(new LowerCase());

        $editor->type('Fourth line');
        echo '<br />';

        $editor->type('Fifth line');

        // Output:
        // First line
        // SECOND LINE
        // THIRD LINE
        // fourth line
        // fifth line
    }
}