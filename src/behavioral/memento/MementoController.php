<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:02 AM
 */

namespace src\behavioral\memento;


use src\BaseController;

class MementoController extends BaseController
{

    public function index()
    {
        $editor = new Editor();

        // Type some stuff
        $editor->type('This is the first sentence.');
        $editor->type('This is second.');

        // Save the state to restore to : This is the first sentence. This is second.
        $saved = $editor->save();

        // Type some more
        $editor->type('And this is third.');

        // Output: Content before Saving
        echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

        // Restoring to last saved state
        $editor->restore($saved);

        echo '<br />';
        echo $editor->getContent(); // This is the first sentence. This is second.
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}