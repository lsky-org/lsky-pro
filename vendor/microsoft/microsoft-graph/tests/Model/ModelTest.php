<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Model;
use Microsoft\Graph\Core\Enum;

class ModelTest extends TestCase
{
    private $entities;
    private $enums;
    private $complexTypes;

    public function setUp(): void
    {
        $this->entities = array();
        $this->enums = array();
        $this->complexTypes = array();

        $dir = new DirectoryIterator('src/Model');
        foreach ($dir as $fileInfo)
        {
            $filename = $fileInfo->getFileName();
            $classname = explode(".", $filename)[0];
            if ($classname != null) {
                $class = "Microsoft\\Graph\\Model\\" . explode(".", $fileInfo->getFileName())[0];
                switch(get_parent_class($class)) {
                    case Model\Entity::class:
                        $this->entities[] = $class;
                        break;
                    case Enum::class:
                        $this->enums[] = $class;
                        break;
                    default:
                        $this->complexTypes[] = $class;
                        break;
                }
            }
        }
    }

    public function testBaseEntity()
    {
        $entity = new Model\Entity();
        $this->assertInstanceOf(Model\Entity::class, $entity);
    }

    public function testEntity()
    {
        foreach ($this->entities as $entityClass) {
            $entity = new $entityClass();
            $this->assertInstanceOf($entityClass, $entity);
            $this->assertTrue(is_array($entity->getProperties()));
        }
    }

    public function testComplexTypes()
    {
        foreach ($this->complexTypes as $complexTypeClass) {
            $complexEntity = new $complexTypeClass();
            $this->assertInstanceOf($complexTypeClass, $complexEntity);
        }
    }

    public function testInvalidEnum()
    {
        $this->expectException(Microsoft\Graph\Exception\GraphException::class);

        $enum = new TestEnum("test");
    }

    public function testValidEnum()
    {
        $enum = new TestEnum("0");

        $this->assertFalse($enum->is("1"));
        $this->assertEquals("0", $enum->value());
    }

    public function testSetObject()
    {
        $drive = new Model\Drive();
        $drive->setRoot(new Model\DriveItem());
        $results = $drive->getRoot();
        $results2 = $drive->getRoot();
        $this->assertInstanceOf(Model\DriveItem::class, $results);
        $this->assertInstanceOf(Model\DriveItem::class, $results2);
        $this->assertEquals($results, $results2);
    }
}

class TestEnum extends Enum {

    const TEST = "0";
    const TEST1 = "1";
}