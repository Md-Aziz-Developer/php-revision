## OOPs
    
* OOPs is a programing language that uses objects and class to structure the code in more modular and logical.
* It helps in organizing the code by dividing the responsiblity and reuseablity.

### Key concepts of OOPs :- 
1. Class & Objects:-
    
    * Class - A class is the blueprint for creating an object. It define the properties (attributes) and methods (function) that an object can have.
    * Object - An object is the instance of class. 

    ![code]class_example.php

2. Encapsulation - It restrict the direct access to some componenets of an object. This is acheived using the access modifier `public`, `private` and `protected`.
    * `public` - The properties or methods can acces from anywhere.
    * `private` - The properies or methods can only access within the class itself.
    * `protected` - The propeties or methods can access within the class or by class derrvied from that class.

    ![code] (/encapsulation_example.php)

3. Abstraction - It Involves hiding the complex implementation details and showing only the essentials features of an objects.

    ![code] (/abstraction_example.php)

4. Inheritance - Inheritance allows a class to inherit the properties and methods from another class. This helps reduce code deplicationa and enhance code reuseablilty.
    
    ![code] (/inheritance_example.php)

5. Ploymorphism - Polymorphism allows object to different types to be treated as objects of a common super type. Basically it involves methods overloading (different methods with the same name) and overriding (redefine a methods in a subclass).

    * PHP doesn't directly support method overloading, but method overriding is possible.

    ![code] (/ploymorphism_overriding_example.php)

6. Interface - An interface define a contract (a set of methods) that a class must implement. It ensure that different classes follow a common structure. (In my language a inteface is a set of methods that a class must implements. means a class implement any interface that must have the function which interface have)

    ![code] (/interface_example.php)