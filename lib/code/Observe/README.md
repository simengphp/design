ObserveAbleOne
ObserveAbleTwo
这两个是观察者

我们要注册到事件触发的实例下

然后监听事件的改变，如果有改变，那么就会触发



use lib\code\Observe;
$event = new Observe\EventRealize();
$one = new Observe\ObserveAbleOne();
$two = new Observe\ObserveAbleTwo();

$event->register($one);
$event->register($two);
$event->trigger();

