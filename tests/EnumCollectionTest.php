<?php

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Collection;
use Stephanbouman\Enumcollection\HasCollection;

enum TestEnum {
    use HasCollection;

    case Foo;
    case Bar;
}

class EnumCollectionTest extends TestCase {

    public function test_if_it_returns_a_collection()
    {
        $collection = TestEnum::asCollection();

        $this->assertEquals(get_class($collection), Collection::class);
    }

    public function test_the_collection_contains_all_cases()
    {
        $collection = TestEnum::asCollection();

        $this->assertTrue($collection->contains(TestEnum::Foo));
        $this->assertTrue($collection->contains(TestEnum::Bar));
    }
}