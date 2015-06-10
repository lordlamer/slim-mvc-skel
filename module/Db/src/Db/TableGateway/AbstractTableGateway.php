<?php

/*
 * @license BSD LICENSE
 * @author Frank Habermann <lordlamer@lordlamer.de>
 * @date 20150522
 */

namespace Db\TableGateway;

/**
 * TableGateway Implementation
 *
 * @author fhabermann
 */
abstract class AbstractTableGateway implements TableGatewayInterface
{

    /**
     * name of table
     *
     * @var string $name
     */
    protected $name = null;

    /**
     * name of column for primary
     *
     * @var string $primary
     */
    protected $primary = 'id';

    /**
     * is primary a sequence
     *
     * @var bool $squence
     */
    protected $sequence = false;

    /**
     * database connection
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * constructor
     *
     * @param \Doctrine\DBAL\Connection $connection
     */
    public function __construct(\Doctrine\DBAL\Connection $connection)
    {
        $this->db = $connection;
    }

    /**
     * return table name
     *
     * @return string
     */
    public function getTable()
    {
        return $this->name;
    }

    /**
     * create select and fetch the data
     *
     * @param string|null $where
     * @return array
     */
    public function select($where = null)
    {
        $sql = "select * from " . $this->db->quoteIdentifier($this->name);

        if ($where !== null) {
            $sql .= " WHERE " . $where;
        }

        return $this->db->fetchAll($sql);
    }

    /**
     * insert data into table
     *
     * @param array $set
     * @return string last insert id
     */
    public function insert(array $set)
    {
        $this->db->insert($this->db->quoteIdentifier($this->name), $set);

        return $this->db->lastInsertId($seqName);
    }

    /**
     * update data in table
     *
     * @param array $set
     * @param array $where
     * @return integer The number of affected rows.
     */
    public function update(array $set, array $where)
    {
        return $this->db->update($this->db->quoteIdentifier($this->name), $set, $where);
    }

    /**
     * delete data from table
     *
     * @param array $where
     * @return integer The number of affected rows.
     */
    public function delete(array $where)
    {
        return $this->db->delete($this->db->quoteIdentifier($this->name), $where);
    }

    /**
     * find row by primary id
     *
     * @param string|int $id
     * @return array
     */
    public function find($id)
    {
        $sql = "select * from " . $this->db->quoteIdentifier($this->name);
        $sql .= " WHERE " . $this->db->quoteIdentifier($this->primary) . "=";
        $sql .= $this->db->quote($id);

        return $this->db->fetchAssoc($sql);
    }

    /**
     * fetch all rows from table
     *
     * @return array
     */
    public function fetchAll()
    {
        return $this->select();
    }
}
