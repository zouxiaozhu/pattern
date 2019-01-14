<?php
/**
 * Created by PhpStorm.
 * User: zhanglong
 * Date: 2019/1/13
 * Time: 10:07 PM
 */

namespace Observer;

use SplSubject;

class SplObserverExampleTwo implements \SplObserver
{
    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        echo 22;
    }
}