<?php

namespace KdManagement\Repository;

abstract class AbstractRepository
{
    /**
     * @var \Pixie\QueryBuilder\QueryBuilderHandler
     */
    protected $queryBuilder;

    /**
     * @var string
     */
    protected $table;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @var \Pimple\Container
     */
    protected $container;

    public function __construct()
    {
        /**
         * query builder jest ładowany jako osobna wtyczka, dlatego jest
         * dostępny przez `global`
         */
        global $queryBuilder;
        global $container;

        $this->queryBuilder = $queryBuilder;
        $this->container = $container;
    }

    protected function mapper()
    {
        $mapper = $this->queryBuilder;
        \QB::statement('SET SESSION group_concat_max_len=100000');

        if ($this->table) {
            $mapper = $mapper->table($this->table);
        }

        if ($this->entityClass) {
            $mapper = $mapper->asObject($this->entityClass);
        }

        return $mapper;
    }

    protected function parseMeta($metaKeys, $metaValues)
    {
        $meta['keys'] = explode('|||||', $metaKeys);
        $meta['values'] = explode('|||||', $metaValues);

        foreach ($meta['keys'] as $key => $value) {
            $result[$value] = $meta['values'][$key];
        }

        return $result;
    }

    protected function parseResult(array $results)
    {
        if (count(array_filter($results,'is_array')) > 0) {
            foreach ($results as &$result) {
                $parsedMeta = $this->parseMeta($result['meta_keys'], $result['meta_values']);
                unset($result['meta_keys']);
                unset($result['meta_values']);
                $result = array_merge($result, $parsedMeta);
            }

            return $results;
        }

        $parsedMeta = $this->parseMeta($results['meta_keys'], $results['meta_values']);
        unset($results['meta_keys']);
        unset($results['meta_values']);
        $results = array_merge($results, $parsedMeta);

        return $results;
    }
}
