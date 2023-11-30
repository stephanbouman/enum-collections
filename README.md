# EnumCollection

This package adds a `asCollection()` method to your enums. Now you don't need to wrap your `Enum::cases()` in a collection. 
## How to implement
```php
use Stephanbouman\Enumcollection\HasCollection;

enum TestEnum {
    use HasCollection; // use the HasCollection trait

    case Foo;
    case Bar;
}
```

## How to use
```php
// instead of
collect(Fruits::cases())->filter(...)

// use 
Fruits::asCollection()->filter(...)
```