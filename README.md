# design
PHP的几种设计模式

测试文件：  index.php

一、单例模式：  Instance.php

introduce by simengphp :

特点：

      1)包含一个私有的构造方法，不能呗实例化

      2）包含一个受保护的静态的变量

      3）包含一个静态获取实例的方法

      4）禁止克隆的方法

单例的理解：将对象赋值给一个静态的变量，实例化一次通过静态变量调用永久复用

适用场景：数据库类文件






二、工厂模式：  Factory.php

特点：

      1）包含一个静态的方法

工厂的理解：加工类的一个工厂，生产类的实例

适用场景：1）当一个类文件需要被多个文件实例化的时候，那么这个就可以使用工厂的模式实例化一次对象，然后调用，比如数据库的实例 2）计算器的多个逻辑处理类，然后根据不同的类文件实例化不同的类


三、注册树模式：Register.php

特点：

      1）包含一个注册实例的方法

      2）包含一个获取注册实例的的方法

      3）包含一个销毁注册实例的方法

注册树的理解：把一些类的实例注册到一个数组里面（树上面），然后通过数组的键值进行获取，这个文件需要初始化，也就是需要执行把相关的实例注册到树上的方法

适用场景：注册数据库的实例，注册功能逻辑类实例





四、适配器模式：Match.php

特点：

      1）是一个接口类

      2）定义了一些通用的方法体

适配器的理解：通用多个类文件

适用场景：当一个项目中你需要连接多种的数据库，然后你可以使用这个设计模式，定义mysql,mysqli,pdo等几种方式





五、策略模式：  Tactics.php

特点：

      1）是一个接口类

      2）定义了一些通用的方法体

策略模式的理解：将一些函数和算法封装在一个类文件，以适应上下文的逻辑

使用场景：一个电商网站针对男女展示不同的商品和不同的广告位

以下是code：

class Page
{
    protected $obj;
    public function index(){
        $this->obj->showGoods();
        $this->obj->showAdvert();
    }
    public function set($obj){
        $this->obj = $obj;
    }
}
$page = new Page();
if(isset($_GET['state'])){

    if($_GET['state'] == "man"){
        $man = new \lib\code\ManShow();
        $page->set($man);
    }else{
        $man = new \lib\code\MemShow();
        $page->set($man);
    }

}
$page->index();


六、观察者模式：Observe.php

七、原型模式：  Prototype.php

八、装饰模式：  Adorn.php

九、迭代器模式：Iterator.php

十、代理模式：  Agency.php



