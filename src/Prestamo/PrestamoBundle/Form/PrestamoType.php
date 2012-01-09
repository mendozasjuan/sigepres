<?php
namespace Prestamo\PrestamoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Description of PrestamoType
 *
 * @author informatica
 */
class PrestamoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('fecha');
        $builder->add('cantidad');
        $builder->add('porcentaje');
        $builder->add('cancelo','choice',array('empty_value' => 'Seleccione',
                                                'choices'    => array(0 => 'si', 1 => 'no')));
        $builder->add('persona', 'entity', array(
            'class'         => 'Prestamo\\PrestamoBundle\\Entity\\Persona',
            'query_builder' => function ($repositorio) {
                return $repositorio->createQueryBuilder('p')->orderBy('p.nombre', 'ASC');
            },
        ));
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Prestamo\PrestamoBundle\Entity\Prestamo',
        );
    }

    public function getName()
    {
        return 'new';
    }
}

