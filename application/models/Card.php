<?PHP

class Card extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
       function cData ($contoller_path='') {
       	//assets
        $data["base_url"] = $this->config->item ("base_url");
        $data["css"]      = $this->config->item ("css");
        $data["js"]       = $this->config->item ("js");
        $data["images"]   = $this->config->item ("images");
        $data["path"]     = $data["base_url"].$contoller_path;
        $data["title"]    = "";
        //card contents
        $this->db->select('*');
        $this->db->from ('card');
        $this->db->where('Cno', 1);
        $query = $this->db->get ();
        if ($query->num_rows() > 0) {
                log_message('info','getting card data');
                foreach ($query->result() as $row){
                  $data['cardh'] = $row -> Cardh;
                  $data['cardp'] = $row -> Cardp;
              }
          }
        return $data;
     }
}
