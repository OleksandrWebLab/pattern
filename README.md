### Install

    composer require popcornphp/pattern


## Patterns

### Registry

    use PopcornPHP\Pattern\Registry\Product;

    Product::set('name', 'First product');
    
    var_dump(Product::get('name'));

### Object Pool

    use PopcornPHP\Pattern\ObjectPool\Factory;
    use PopcornPHP\Pattern\ObjectPool\Product;

    Factory::pushProduct(new Product('first'));
    Factory::pushProduct(new Product('second'));

    var_dump(Factory::getProduct('first')->getId());
    var_dump(Factory::getProduct('second')->getId());
    
### Singleton

    use PopcornPHP\Pattern\Singleton\Product;
    
    $firstProduct = Product::getInstance();
    $secondProduct = Product::getInstance();
    
    $firstProduct->a = 1;
    $secondProduct->a = 2;
    
    var_dump($firstProduct->a);
    var_dump($secondProduct->a);
    
### Simple Multi-ton

    use PopcornPHP\Pattern\Multiton\One\FirstProduct;
    use PopcornPHP\Pattern\Multiton\One\SecondProduct;

    FirstProduct::getInstance()->a[] = 1;
    SecondProduct::getInstance()->a[] = 2;
    
    FirstProduct::getInstance()->a[] = 3;
    SecondProduct::getInstance()->a[] = 4;
    
    var_dump(FirstProduct::getInstance()->a);
    var_dump(SecondProduct::getInstance()->a);
    
### Complex Multi-ton

    use PopcornPHP\Pattern\Multiton\Two\FirstFactory;
    use PopcornPHP\Pattern\Multiton\Two\SecondFactory;
    
    FirstFactory::getInstance('FirstProduct')->a[] = 1;
    FirstFactory::getInstance('SecondProduct')->a[] = 2;
    SecondFactory::getInstance('FirstProduct')->a[] = 3;
    SecondFactory::getInstance('SecondProduct')->a[] = 4;
    FirstFactory::getInstance('FirstProduct')->a[] = 5;
    FirstFactory::getInstance('SecondProduct')->a[] = 6;
    SecondFactory::getInstance('FirstProduct')->a[] = 7;
    SecondFactory::getInstance('SecondProduct')->a[] = 8;
    
    var_dump(FirstFactory::getInstance('FirstProduct')->a);
    var_dump(FirstFactory::getInstance('SecondProduct')->a);
    var_dump(SecondFactory::getInstance('FirstProduct')->a);
    var_dump(SecondFactory::getInstance('SecondProduct')->a);
    
### Factory Method

    use PopcornPHP\Pattern\FactoryMethod\FirstFactory;
    use PopcornPHP\Pattern\FactoryMethod\SecondFactory;

    $factory = new FirstFactory();
    $firstProduct = $factory->getProduct();
    
    $factory = new SecondFactory();
    $secondProduct = $factory->getProduct();
    
    var_dump($firstProduct->getName());
    var_dump($secondProduct->getName());
    
### Abstract Factory

    use PopcornPHP\Pattern\AbstractFactory\AbstractFactory;
    use PopcornPHP\Pattern\AbstractFactory\Config;

    $firstProduct = AbstractFactory::getFactory()->getProduct();
    Config::$factory = 2;
    $secondProduct = AbstractFactory::getFactory()->getProduct();
    
    var_dump($firstProduct->getName());
    var_dump($secondProduct->getName());
    
### Lazy Initialization

    use PopcornPHP\Pattern\LazyInitialization\Factory;

    $factory = new Factory();
    
    var_dump($factory->getFirstProduct()->getName());
    var_dump($factory->getSecondProduct()->getName());
    var_dump($factory->getFirstProduct()->getName());
    
### Prototype

    use PopcornPHP\Pattern\Prototype\Factory;
    use PopcornPHP\Pattern\Prototype\Product;
    
    $prototypeFactory = new Factory(new Product());
    
    $firstProduct = $prototypeFactory->getProduct();
    $firstProduct->name = 'The first product';
    
    $secondProduct = $prototypeFactory->getProduct();
    $secondProduct->name = 'Second product';
    
    var_dump($firstProduct->name);
    var_dump($secondProduct->name);
    
### Builder

    use PopcornPHP\Pattern\Builder\Factory;
    use PopcornPHP\Pattern\Builder\FirstBuilder;
    use PopcornPHP\Pattern\Builder\SecondBuilder;
    
    $firstDirector = new Factory(new FirstBuilder());
    $secondDirector = new Factory(new SecondBuilder());
    
    var_dump($firstDirector->getProduct()->getName());
    var_dump($secondDirector->getProduct()->getName());