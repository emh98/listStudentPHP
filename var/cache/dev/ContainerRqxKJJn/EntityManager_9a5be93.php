<?php

namespace ContainerRqxKJJn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28fa7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba7c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese36b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getConnection', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getMetadataFactory', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getExpressionBuilder', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'beginTransaction', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getCache', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'transactional', array('func' => $func), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'commit', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->commit();
    }

    public function rollback()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'rollback', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getClassMetadata', array('className' => $className), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'createQuery', array('dql' => $dql), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'createNamedQuery', array('name' => $name), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'createQueryBuilder', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'flush', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'clear', array('entityName' => $entityName), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->clear($entityName);
    }

    public function close()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'close', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->close();
    }

    public function persist($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'persist', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'remove', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'refresh', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'detach', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'merge', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'contains', array('entity' => $entity), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getEventManager', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getConfiguration', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'isOpen', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getUnitOfWork', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getProxyFactory', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'initializeObject', array('obj' => $obj), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'getFilters', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'isFiltersStateClean', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'hasFilters', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return $this->valueHolder28fa7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerba7c2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28fa7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28fa7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28fa7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__get', ['name' => $name], $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        if (isset(self::$publicPropertiese36b5[$name])) {
            return $this->valueHolder28fa7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28fa7;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28fa7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28fa7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28fa7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__isset', array('name' => $name), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28fa7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28fa7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__unset', array('name' => $name), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28fa7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28fa7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__clone', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        $this->valueHolder28fa7 = clone $this->valueHolder28fa7;
    }

    public function __sleep()
    {
        $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, '__sleep', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;

        return array('valueHolder28fa7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba7c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba7c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba7c2 && ($this->initializerba7c2->__invoke($valueHolder28fa7, $this, 'initializeProxy', array(), $this->initializerba7c2) || 1) && $this->valueHolder28fa7 = $valueHolder28fa7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28fa7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28fa7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
