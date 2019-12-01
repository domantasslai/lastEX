<?php
class Sodra {
  private $db;

  public function __construct(){
			$this->db = new Database;
		}

  public function getCsv($code){
      $this->db->query("SELECT * FROM csv WHERE code = $code");
      $results = $this->db->resultSet();

  		return $results;
    }

    public function getSingle($id){
      $this->db->query("SELECT * FROM csv where id = :id");
      $this->db->bind(':id', $id);
      $row = $this->db->single();

      return $row;
    }


    function exportToCvs($code){
        $this->db->query("SELECT * FROM csv WHERE code = $code");
        $results = $this->db->resultSet();
        $datas = array($results);
        $datas = json_decode( json_encode($datas), true);


        $filename = "sodra_" . date('Y-m-d') . ".csv";
        header('Content-Type: application/csv; charset=utf8_lithuanian_ci');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        $output = fopen("php://output", "rw");
        foreach ($datas as $data) {
          foreach ($data as $d) {
            // $d['code'];
            fputcsv($output, array(
              $d['code'],
              $d['jarCode'],
              $d['name'],
              $d['municipality'],
              $d['ecoActCode'],
              $d['ecoActName'],
              $d['date'],
              $d['numInsured'],
              $d['debt'],
              $d['deferredDebt'])
            );
          }
        }

        fclose($output);
        exit();
      }
}
