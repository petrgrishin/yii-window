<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Window;


use PetrGrishin\Widget\BaseWidget;

class WindowWidget extends BaseWidget {
    public $title;

    public function run() {
        $this->render('window', array(
            'title' => $this->title,
        ));
    }
}
