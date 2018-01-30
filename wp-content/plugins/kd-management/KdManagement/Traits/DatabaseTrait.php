<?php

namespace KdManagement\Traits;

trait DatabaseTrait
{
    protected function runInTransaction($pdo, $callback)
    {
        $localTransaction = false;

        if (!$pdo->inTransaction()) {

            $localTransaction = true;
            $attrErrorMode    = $pdo->getAttribute(\PDO::ATTR_ERRMODE);

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();
        }

        try {

            $result = $callback();

        } catch (\PDOException $e) {

            if ($localTransaction) {
                $pdo->rollBack();
                return false;
            }

            throw $e;
        }

        if ($localTransaction) {
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, $attrErrorMode);
            $pdo->commit();
        }

        return $result;
    }
}
