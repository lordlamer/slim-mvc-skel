<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Db\TableGateway;

/**
 * TableGateway Interface
 *
 * @author fhabermann
 */
interface TableGatewayInterface
{
    public function getTable();
    public function select($where);
    public function insert(array $set);
    public function update(array $set, array $where);
    public function delete(array $where);
    public function find($id);
    public function fetchAll();
}
