<?php
/**
 * Created by PhpStorm.
 * User: zhanglong
 * Date: 2019/1/13
 * Time: 10:02 PM
 */

namespace Observer;

use SplObserver;

class ObserverAble implements \SplSubject
{
    /**
     * 观察者们
     * @var array
     */
    private $_observers = [];

    private $_message = "通知消息";

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
        $this->appendObserver($observer);
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
        foreach ($this->_observers as $k => $v) {
            if ($v === $observer) {
                unset($this->_observers[$k]);
            }
        }
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    protected function appendObserver(SplObserver $observer)
    {
        $this->_observers[] = $observer;
    }

    public function getMessage()
    {
        return $this->_message;
    }
}