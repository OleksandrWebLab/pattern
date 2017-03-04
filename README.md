### Registry

    use PopcornPHP\Pattern\Registry\Product;

    Product::set('name', 'First product');
    
    echo var_dump(Product::get('name'));

### Object Pool

    use PopcornPHP\Pattern\ObjectPool\Factory;
    use PopcornPHP\Pattern\ObjectPool\Product;

    Factory::pushProduct(new Product('first'));
    Factory::pushProduct(new Product('second'));

    echo var_dump(Factory::getProduct('first')->getId());
    echo var_dump(Factory::getProduct('second')->getId());
    
### Singleton

    use PopcornPHP\Pattern\Singleton\Product;
    
    $firstProduct = Product::getInstance();
    $secondProduct = Product::getInstance();
    
    $firstProduct->a = 1;
    $secondProduct->a = 2;
    
    echo var_dump($firstProduct->a);
    echo var_dump($secondProduct->a);
    
### Simple Multi-ton

    use PopcornPHP\Pattern\Multiton\One\FirstProduct;
    use PopcornPHP\Pattern\Multiton\One\SecondProduct;

    FirstProduct::getInstance()->a[] = 1;
    SecondProduct::getInstance()->a[] = 2;
    
    FirstProduct::getInstance()->a[] = 3;
    SecondProduct::getInstance()->a[] = 4;
    
    echo var_dump(FirstProduct::getInstance()->a);
    echo var_dump(SecondProduct::getInstance()->a);
    
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
    
    echo var_dump(FirstFactory::getInstance('FirstProduct')->a);
    echo var_dump(FirstFactory::getInstance('SecondProduct')->a);
    echo var_dump(SecondFactory::getInstance('FirstProduct')->a);
    echo var_dump(SecondFactory::getInstance('SecondProduct')->a);
    
### Factory Method

    use PopcornPHP\Pattern\FactoryMethod\FirstFactory;
    use PopcornPHP\Pattern\FactoryMethod\SecondFactory;

    $factory = new FirstFactory();
    $firstProduct = $factory->getProduct();
    
    $factory = new SecondFactory();
    $secondProduct = $factory->getProduct();
    
    echo var_dump($firstProduct->getName());
    echo var_dump($secondProduct->getName());
    
### Abstract Factory

    use PopcornPHP\Pattern\AbstractFactory\AbstractFactory;
    use PopcornPHP\Pattern\AbstractFactory\Config;

    $firstProduct = AbstractFactory::getFactory()->getProduct();
    Config::$factory = 2;
    $secondProduct = AbstractFactory::getFactory()->getProduct();
    
    echo var_dump($firstProduct->getName());
    echo var_dump($secondProduct->getName());
    
### Lazy Initialization

    use PopcornPHP\Pattern\LazyInitialization\Factory;

    $factory = new Factory();
    
    echo var_dump($factory->getFirstProduct()->getName());
    echo var_dump($factory->getSecondProduct()->getName());
    echo var_dump($factory->getFirstProduct()->getName());
    
### Prototype

    use PopcornPHP\Pattern\Prototype\Factory;
    use PopcornPHP\Pattern\Prototype\Product;
    
    $prototypeFactory = new Factory(new Product());
    
    $firstProduct = $prototypeFactory->getProduct();
    $firstProduct->name = 'The first product';
    
    $secondProduct = $prototypeFactory->getProduct();
    $secondProduct->name = 'Second product';
    
    echo var_dump($firstProduct->name);
    echo var_dump($secondProduct->name);
    
### Builder

    use PopcornPHP\Pattern\Builder\Factory;
    use PopcornPHP\Pattern\Builder\FirstBuilder;
    use PopcornPHP\Pattern\Builder\SecondBuilder;
    
    $firstDirector = new Factory(new FirstBuilder());
    $secondDirector = new Factory(new SecondBuilder());
    
    echo var_dump($firstDirector->getProduct()->getName());
    echo var_dump($secondDirector->getProduct()->getName());