<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ExtensionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExtensionRepository extends EntityRepository {

    public function findExtensionesByFilter(ExtensionFilter $filter) {
        $em = $this->getEntityManager();

        $dql = "select e from ProyectoExtensionBundle:Extension e";
        
        //si hay areas para filtrar armo la consulta
        if (count($filter->getAreas()) > 0) {
            $dql = $dql . " INNER JOIN e.proyecto p INNER JOIN p.area a WHERE a.id IN (:areas)";
            //guardo los id de las areas en un arreglo para luego filtrar
            $areas = array();
            foreach ($filter->getAreas() as $area) {
                $areas[] = $area->getId();
            }
        }

        $query = $em->createQuery($dql);
        //si hay areas para filtrar seteo el parametro a la consulta con los id de las areas a filtrar
        if (count($filter->getAreas()) > 0) {
            $query->setParameter('areas', $areas);
        }

        $extensiones = $query->getResult();
        return $extensiones;
    }

}
