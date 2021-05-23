<?php

namespace ContainerLTlW6kd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder154da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4ebc7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties57817 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getConnection', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getMetadataFactory', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getExpressionBuilder', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'beginTransaction', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getCache', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'transactional', array('func' => $func), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->transactional($func);
    }

    public function commit()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'commit', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->commit();
    }

    public function rollback()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'rollback', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getClassMetadata', array('className' => $className), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'createQuery', array('dql' => $dql), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'createNamedQuery', array('name' => $name), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'createQueryBuilder', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'flush', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'clear', array('entityName' => $entityName), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->clear($entityName);
    }

    public function close()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'close', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->close();
    }

    public function persist($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'persist', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'remove', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'refresh', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'detach', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'merge', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'contains', array('entity' => $entity), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getEventManager', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getConfiguration', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'isOpen', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getUnitOfWork', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getProxyFactory', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'initializeObject', array('obj' => $obj), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'getFilters', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'isFiltersStateClean', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'hasFilters', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return $this->valueHolder154da->hasFilters();
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

        $instance->initializer4ebc7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder154da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder154da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder154da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__get', ['name' => $name], $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        if (isset(self::$publicProperties57817[$name])) {
            return $this->valueHolder154da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder154da;

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

        $targetObject = $this->valueHolder154da;
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
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder154da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder154da;
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
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__isset', array('name' => $name), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder154da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder154da;
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
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__unset', array('name' => $name), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder154da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder154da;
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
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__clone', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        $this->valueHolder154da = clone $this->valueHolder154da;
    }

    public function __sleep()
    {
        $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, '__sleep', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;

        return array('valueHolder154da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ebc7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ebc7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4ebc7 && ($this->initializer4ebc7->__invoke($valueHolder154da, $this, 'initializeProxy', array(), $this->initializer4ebc7) || 1) && $this->valueHolder154da = $valueHolder154da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder154da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder154da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
