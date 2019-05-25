<?php
//spl,stand PHP libary,php标准库
//栈,先进后出
$stack = new SplStack;
$stack->push("stack1");
$stack->push("stack2");
echo $stack->pop(), '</br>';
echo $stack->pop(), '</br>';

//队列,先进先出,后进后出
$queue = new SplQueue;
$queue->enqueue("queue1");
$queue->enqueue("queue2");
echo $queue->dequeue(), '</br>';
echo $queue->dequeue(), '</br>';

//堆,最小堆
$heap = new SplMinHeap;
$heap->insert("heap1");
$heap->insert("heap2");
echo $heap->extract(), '</br>';
echo $heap->extract(), '</br>';

//固定尺寸的数组
$fixedArr = new SplFixedArray(5);
$fixedArr[0] = 'Apple';
$fixedArr[4] = 'Google';
var_dump($fixedArr);


/*
作业盒子面试题:
0.PHP基础/基本功:超全局变量/缓存/phpunit/X-debug    etc.
1.redis数据结构
2.mysql分库分表(水平,垂直),主从复制,乐观锁/悲观锁,sql优化,mysql索引
3.php魔术方法->设计模式,基本算法,sql_autoload,PSR,依赖注入,反射->IoC容器,ORM优点
4.array数据结构(排序,相关函数)
5.并发处理,大文件分割处理
6.php生命周期,性能差的原因(swoole的优点)
如何分析日志(linux)
7.如何排查线上API的bug(web)
8.如何共享session
9.linux查看硬件状态/网络状态(df,dd,ip)
10.php传值与传引用,abstract类与interface的区别与联系(使用场景),array/object/resource,网络编程/unix socket/异步IO/常驻内存

*/

//php魔术方法
//1.__get/__set 将对象的属性进行接管
//2.__call/__callStatic 控制php对象的方法调用/控制类的静态方法
//3.__toString 将一个php对象转换成一个string
//4.__invoke 将一个php对象当成一个函数来执行时会回调

//php 3种基础设计模式
/* 1.工厂模式 //工厂方法或类直接生成对象,替换在代码中new (解决的问题: 如果在多个php文件中都用到本需要new的对象,而这个对象改变[名称/配置/属性]),只需在工厂类中进行修改而不需修改每个php文件
 * 2.单例模式 //使某个类的对象仅被创建一次,[关键:把这个类的__construct变为private] (解决的问题: 比如DB连接类只需创建一次,避免浪费,即可在多个文件使用)
 * 3.注册模式 //全局共享及交换对象 (解决的问题: 解决了单例/工厂必须去调用类,实质是创建好对象然后取该对象)
 * */
/* 4.适配器模式 //将截然不同的函数接口封装成统一的API (解决的问题: 如:将mysql,mysqli,pdo 3中操作数据库的方式统一成一致力.如cache:将memcache,redis,file,apc等不同缓存函数统一成一致)
 *
 * 5.策略模式 //将一组特定的行为和算法封装成类以适用于某些特定的上下文环境 (例如,电商网站根据男女性用户跳转到不同的页面同时推荐不同的广告,避免硬编码中过多if/else,若增加一种新类型之间增一种策略即可.more important:可以实现依赖倒置,控制反转,IoC)
 *
 * 6.数据对象映射模式 //将对象和数据存储映射起来,对一个对象的操作会映射为对数据存储的操作 (例如,ORM类,将复杂的sql映射成对象属性的操作)
 *
 * 7.观察者模式observer //当一个对象状态发生改变时,依赖它的对象全部都会收到通知并自动更新.例如: 当一个事件发生改变后,要执行一连串更新操作.传统的编程方式,是在事件的代码之后直接加入处理逻辑.当更新的逻辑增多之后,代码会变得难以维护.这种方式是耦合的,侵入式的,增加的逻辑需要修改事件主体的代码 (解决的问题: 实现了低耦合,非侵入式的通知和更新机制)
 *
 * 8.原型模式 //与工厂模式类似都是用来创建对象,原型模式需先创建好一个原型对象,然后通过clone原型对象来创建新的对象.(解决的问题: 避免了类创建时重复的初始化操作.)原型模式适用于大对象的创建,创建一个大对象需要很大的开销,如果每次new会消耗很大,原型模式仅需内存拷贝即可.
 *
 * 9.装饰器模式decorator,可以动态地添加修改类的功能.一个类提供了一个功能,如果要修改并添加额外的功能,传统编程模式,需要写一个子类继承它,并重新实现类的方法.使用装饰器模式,仅需在运行时添加一个装饰器对象即可,可以实现最大的灵活性.
 *
 * 10.迭代器模式,在不需要了借内部实现的前提下,遍历一个聚合对象的内部元素.相对于传统编程模式,迭代器模式可以隐藏遍历元素的所需的操作
 *
 * 11.代理模式,在客户端与实体之间建立一个代理对象(proxy),客户端对实体进行操作全部委派给代理对象,隐藏实体的具体实现细节.解决的问题: proxy还可以与业务代码分离,部署到另外的服务器,业务代码中通过RPC来委派任务.例如: mysql的主从结构.
 *
 * OOP编程基本原则:
1.单一职责: 一个类,只需做好一件事情
2.开放封闭: 一个类,应该是可扩展的,而不可修改
3.依赖倒置: 一个类,不应强依赖另一个类,每个类对于另一个类都是可替换的.例如,A类依赖B类,不应该在A类中直接调用B类,而应该使用依赖注入,通过注将B类的对象注入给A类,这样B类对于A类就可替换
4.配置化,尽可能地使用配置,而不是硬编码
5.面向接口编程,只需关心接口,不需关心实现.所有的代码只需关心某个类提供了哪些接口,而不需关心这个类的具体实现
 */