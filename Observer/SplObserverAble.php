<?php
/**
 * Created by PhpStorm.
 * User: zhanglong
 * Date: 2019/1/13
 * Time: 10:02 PM
 */

namespace Observer;

use SplObserver;

class SplObserverAble implements \SplSubject
{
    private $_message = 'init';
    /**
     * 观察者们
     * @var array
     */
    private $_storage;

    public function __construct()
    {
        $this->_storage = new \SplObjectStorage();
    }
    /**
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->_storage->attach($observer);
    }

    /**
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->_storage->attach($observer);
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->_storage as $observer) {
            $observer->update($this);
        }
    }

    public function getMessage()
    {
        return $this->_message;
    }
}