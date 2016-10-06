<?php
/**
 * Created by PhpStorm.
 * User: paolo
 * Date: 04/10/16
 * Time: 14:36
 */

namespace AppBundle\Route;

use Sonata\AdminBundle\Builder\RouteBuilderInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Route\PathInfoBuilder;
use Sonata\AdminBundle\Route\RouteCollection;

class EntityRouterBuilder extends PathInfoBuilder implements RouteBuilderInterface
{
    /**
     * @param AdminInterface  $admin
     * @param RouteCollection $collection
     */
    public function build(AdminInterface $admin, RouteCollection $collection)
    {
        parent::build($admin, $collection);

        $collection->add('yourSubAction');

        // The create button will disappear, delete functionality will be disabled as well
        // No more changes needed!
        $collection->remove('create');
        $collection->remove('delete');
    }
}