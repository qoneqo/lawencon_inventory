<?php

class Inventory_model extends CI_Model
{

    public function add($values)
    {
        $sql = "INSERT INTO produk (Nama_barang, Kode_barang, Jumlah_barang, Tanggal) VALUES (?, ?, ?, ?)";
        $query = $this->db->query($sql, $values);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update($values)
    {
        $sql = "UPDATE produk SET Nama_barang = ?, Kode_barang = ?, Jumlah_barang = ?, Tanggal = ? WHERE Id = ?";
        $query = $this->db->query($sql, $values);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function search($search)
    {
        $search = '%' . $search . '%';
        $sql = "SELECT * FROM produk WHERE Nama_barang LIKE ? OR Kode_barang LIKE ? OR Jumlah_barang LIKE ? OR Tanggal LIKE ?";
        $query = $this->db->query($sql, [$search, $search, $search, $search]);
        return $query->result();
    }

    /**
     * Code below is additional only
     */

    public function select()
    {
        $sql = "SELECT * FROM produk ORDER BY Tanggal DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function select_where($id)
    {
        $sql = "SELECT * FROM produk WHERE id = ?";
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM produk WHERE Id = ?";
        $query = $this->db->query($sql, $id);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
}
