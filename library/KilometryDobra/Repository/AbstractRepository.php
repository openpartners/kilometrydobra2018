<?php
namespace KilometryDobra\Repository;

Class AbstractRepository {

    protected $table = null;

    public function __construct()
    {
        global $queryBuilder;

        $this->queryBuilder = $queryBuilder;

        return $this;
    }

    public function mapper()
    {
        \QB::statement('SET SESSION group_concat_max_len=100000');
        if ($this->table) {
            return $this->queryBuilder
                        ->table($this->table);
        }

        return $this->queryBuilder;
    }

    public function parseMeta($metaKeys, $metaValues)
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
