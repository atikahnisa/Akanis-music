<?php

namespace App;

class playled extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist, tb_album, tb_track, tb_played";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function input()
    {
        $i_artis_id = $_POST['i_artist_id'];
        $i_album_id = $_POST['i_album_id'];
        $i_track_id = $_POST['i_i_track_id'];
        $i_played = $_POST['i_played'];

        $sql = "INSERT INTO tb_album VALUES (NULL, :i_artist_id, :album_id, :i_track_id, :played)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_id", $i_artist_id);
        $stmt->bindParam(":album_id", $i_album_id);
        $stmt->bindParam(":track_id", $i_track_id);
        $stmt->bindParam(":played", $i_played);
        $stmt->execute();
    }

    public function update()
    {
        $i_artist_id = $_POST['i_artist_id'];
        $i_album_id = $_POST['i_album_id'];
        $i_track_id = $_POST['i_track_id'];
        $i_played = $_POST['i_played'];

        $sql = "UPDATE tb_played SET :artist_id=:artist_id, album_id=:album_id WHERE artist_id=:artist_id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_id", $i_id_artis);
        $stmt->bindParam(":album_id", $i_id_album);
        $stmt->bindParam(":track_id", $i_id_track);
        $stmt->bindParam(":played", $i_played);
        $stmt->execute();
    }
}