<?php
/*
 * This file is part of the sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\ProductBundle\Entity;

use Application\Sonata\ProductBundle\Entity\{{ product }}Repository;
use Application\Sonata\ProductBundle\Product\{{ product }}\{{ product }}AddBasket;
use Application\Sonata\ProductBundle\Product\{{ product }}\{{ product }}AddBasketForm;

/**
 * This file has been generated by the Sonata product generation command ( http://sonata-project.org/ )
 *
 * References :
 *   custom repository : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en#querying:custom-repositories
 *   query builder     : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/query-builder/en
 *   dql               : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/dql-doctrine-query-language/en
 *
 * @author <yourname> <youremail>
 */
class {{ product }}Repository extends \Sonata\ProductBundle\Entity\BaseProductRepository
{

    public function getBasketElementClass()
    {

        return 'Application\\ProductBundle\\Product\\{{ product }}\\{{ product }}BasketElement';
    }

    public function getAddBasketClass()
    {

        return 'Application\\ProductBundle\\Product\\{{ product }}\\{{ product }}AddBasket';
    }

    public function getAddBasketFormClass()
    {

        return 'Application\\ProductBundle\\Product\\{{ product }}\\{{ product }}AddBasketForm';
    }

    /**
     * generate the field group use to render the basket element line in the basket form
     *
     * @param  $field_group
     * @return Symfony\Component\Form\FieldGroup
     */
    public function generateFieldGroupBasketElement(\Symfony\Component\Form\FieldGroup $field_group, $basket_element)
    {
        // required widgets
        $field_group->add(new \Symfony\Component\Form\CheckboxField('delete'));
        $field_group->add(new \Symfony\Component\Form\HiddenField('productId'));
        $field_group->add(new \Symfony\Component\Form\TextField('quantity'));


        // add here your custom widget
        //$field_group->add(new \Symfony\Component\Form\CheckboxField('custom_option1'));


        return $field_group;
    }

    /**
     * return an array of errors if any, you can also manipulate the basket_element if require
     * please not you always work with a clone version of the basket_element.
     *
     * If the basket is valid it will then replace the one in session
     *
     * @param  $basket_element
     * @return array
     */
    public function validateFormBasketElement($basket_element)
    {

        $errors = parent::validateFormBasketElement($basket_element);

        // add here your own validation

        return $errors;
    }
}