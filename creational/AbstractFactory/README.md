# Abstract Factory

The Abstract Factory pattern is a creational design pattern that provides an interface for creating families of related or dependent objects without specifying their concrete classes.

This pattern is useful when the system needs to be independent of how its objects are created, composed, and represented, allowing you to create a flexible structure that can be adapted to various implementations.


## Structure of Design Patter Abstract Factory

### AbstractFactory

    Declares an interface for creating related abstract products.
    

    - AbstractFactory

### ConcreteFactory

    Implements the AbstractFactory interface and creates concrete product objects.

### AbstractFactory

    Declares an interface for a type of product.

### ConcreteProduct

    Implements the interface of an abstract product.

### Client

    Only uses the interfaces declared by AbstractFactory and AbstractProduct.