<?php

namespace ContainerF5A8xHc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder977ad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera6fd6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0921c = [
        
    ];

    public function getConnection()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getConnection', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getMetadataFactory', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getExpressionBuilder', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'beginTransaction', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getCache', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getCache();
    }

    public function transactional($func)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'transactional', array('func' => $func), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->transactional($func);
    }

    public function commit()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'commit', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->commit();
    }

    public function rollback()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'rollback', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getClassMetadata', array('className' => $className), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'createQuery', array('dql' => $dql), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'createNamedQuery', array('name' => $name), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'createQueryBuilder', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'flush', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'clear', array('entityName' => $entityName), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->clear($entityName);
    }

    public function close()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'close', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->close();
    }

    public function persist($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'persist', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'remove', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'refresh', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'detach', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'merge', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getRepository', array('entityName' => $entityName), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'contains', array('entity' => $entity), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getEventManager', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getConfiguration', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'isOpen', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getUnitOfWork', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getProxyFactory', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'initializeObject', array('obj' => $obj), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'getFilters', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'isFiltersStateClean', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'hasFilters', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return $this->valueHolder977ad->hasFilters();
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

        $instance->initializera6fd6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder977ad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder977ad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder977ad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__get', ['name' => $name], $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        if (isset(self::$publicProperties0921c[$name])) {
            return $this->valueHolder977ad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder977ad;

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

        $targetObject = $this->valueHolder977ad;
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
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder977ad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder977ad;
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
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__isset', array('name' => $name), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder977ad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder977ad;
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
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__unset', array('name' => $name), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder977ad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder977ad;
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
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__clone', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        $this->valueHolder977ad = clone $this->valueHolder977ad;
    }

    public function __sleep()
    {
        $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, '__sleep', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;

        return array('valueHolder977ad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera6fd6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera6fd6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera6fd6 && ($this->initializera6fd6->__invoke($valueHolder977ad, $this, 'initializeProxy', array(), $this->initializera6fd6) || 1) && $this->valueHolder977ad = $valueHolder977ad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder977ad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder977ad;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
